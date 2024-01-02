<?php
include 'dbh.inc.php';

if (isset($_POST["addofficial"])) {
    $name = $_POST['officialsname'];
    $position = $_POST['officialposition'];
    // Validate input for name and position
    function isValidInput($input) {
        return !empty($input) && preg_match('/^[a-zA-Z ]+$/', $input);
    }
   if (!isValidInput($name) || !isValidInput($position)) {
        echo '<div class="alert alert-danger" role="alert" id="alertstatus">Invalid input. Please make sure the Name and Position are not empty and contain only letters and numbers.</div>';
    } else {
    // Check if the file is uploaded and there is no error
    if (isset($_FILES['officialspicture']) && $_FILES['officialspicture']['error'] == UPLOAD_ERR_OK) {
        $pic = $_FILES['officialspicture'];

        // Function to validate image file format
        function isValidImageFormat($file) {
            $allowedFormats = ['png', 'jpg', 'jpeg'];
            $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
            return in_array(strtolower($fileExtension), $allowedFormats);
        }

        // Function to validate image file size (in megabytes)
        function isValidImageSize($file, $maxSizeMB = 50) {
            $maxSizeBytes = $maxSizeMB * 1024 * 1024; // Convert MB to bytes
            return $file['size'] <= $maxSizeBytes;
        }

        // Validate image format and size
        if (!isValidImageFormat($pic)) {
            echo '<div class="alert alert-danger" role="alert" id="alertstatus">Invalid image format. Please upload a PNG, JPG, or JPEG file.</div>';
        } elseif (!isValidImageSize($pic, 50)) {
            echo '<div class="alert alert-danger" role="alert" id="alertstatus">File size exceeds the maximum limit of 50MB.</div>';
        } else {
            // Move the uploaded file to a known directory
            $uploadDir = 'uploads/';
            $uploadedFile = $uploadDir . basename($pic['name']);
            move_uploaded_file($pic['tmp_name'], $uploadedFile);

            // Sanitize input to prevent SQL injection
            $name = mysqli_real_escape_string($conn, $name);
            $position = mysqli_real_escape_string($conn, $position);

            // Check if the combination of name and position is unique
            $checkUniqueQuery = "SELECT * FROM `barangay_officials` WHERE (`bo_name` = '$name' AND `officialstatus` = 'official') OR (`bo_position` = '$position' AND `officialstatus` = 'official') OR (`bo_name` = '$name' AND `officialstatus` = 'archive')";
            $result = mysqli_query($conn, $checkUniqueQuery);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="alert alert-warning" role="alert" id="alertstatus">A record with the same Name and Position already exists.</div>';
            } else {
                // Insert data into the database using prepared statement
                $sql = "INSERT INTO `barangay_officials`(`bo_name`, `bo_position`, `bo_pic`,`officialstatus`) VALUES (?, ?, ?,'official')";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, 'sss', $name, $position, $uploadedFile);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo '<div class="alert alert-success" role="alert" id="alertstatus">Data inserted successfully.</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert" id="alertstatus">Error: ' . mysqli_error($conn) . '</div>';
                }

                mysqli_stmt_close($stmt);
            }
        }
    } else {
        echo '<div class="alert alert-danger" role="alert" id="alertstatus">Please select a file for upload.</div>';
    }
}
}


if (isset($_POST['archiveofficialsbtn'])) {
    $archiveofficials = "archive"; 
    $queryres = "UPDATE barangay_officials SET officialstatus='$archiveofficials'";
    mysqli_query($conn, $queryres);
}

if (isset($_POST["updateofficial"])) {
    $name = $_POST['nameofficialsupdate'];
    $position = $_POST['positionofficialsupdate'];
    $officialID = $_POST['hiddeniupdate']; // Assuming you have a hidden input for the official ID

    // Validate input for name and position
    function isValidInput($input) {
        return !empty($input) && preg_match('/^[a-zA-Z ]+$/', $input);
    }

    if (!isValidInput($name) || !isValidInput($position)) {
        echo '<div class="alert alert-danger" role="alert" id="alertstatus">Invalid input. Please make sure the Name and Position are not empty and contain only letters and numbers.</div>';
    } else {
        // Check if the file is uploaded and there is no error
        if (isset($_FILES['picofficialsupdate']) && $_FILES['picofficialsupdate']['error'] == UPLOAD_ERR_OK) {
            $pic = $_FILES['picofficialsupdate'];

            // Function to validate image file format
            function isValidImageFormat($file) {
                $allowedFormats = ['png', 'jpg', 'jpeg'];
                $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
                return in_array(strtolower($fileExtension), $allowedFormats);
            }

            // Function to validate image file size (in megabytes)
            function isValidImageSize($file, $maxSizeMB = 50) {
                $maxSizeBytes = $maxSizeMB * 1024 * 1024; // Convert MB to bytes
                return $file['size'] <= $maxSizeBytes;
            }

            // Validate image format and size
            if (!isValidImageFormat($pic)) {
                echo '<div class="alert alert-danger" role="alert" id="alertstatus">Invalid image format. Please upload a PNG, JPG, or JPEG file.</div>';
            } elseif (!isValidImageSize($pic, 50)) {
                echo '<div class="alert alert-danger" role="alert" id="alertstatus">File size exceeds the maximum limit of 50MB.</div>';
            } else {
                // Move the uploaded file to a known directory
                $uploadDir = 'uploads/';
                $uploadedFile = $uploadDir . basename($pic['name']);
                move_uploaded_file($pic['tmp_name'], $uploadedFile);

                // Sanitize input to prevent SQL injection
                $name = mysqli_real_escape_string($conn, $name);
                $position = mysqli_real_escape_string($conn, $position);
                            // Check if the combination of name, position, and picture is unique
$checkUniqueQuery = "SELECT * FROM `barangay_officials` WHERE 
    (`bo_name` = '$name' AND `officialstatus` = 'official' AND bo_id != '$officialID') OR 
    (`bo_position` = '$position' AND `officialstatus` = 'official' AND bo_id != '$officialID') OR 
    (`bo_name` = '$name' AND `officialstatus` = 'archive' AND bo_id != '$officialID') OR 
    (`bo_pic` = '$uploadedFile' AND `officialstatus` = 'archive' AND bo_id != '$officialID')";

            $result = mysqli_query($conn, $checkUniqueQuery);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="alert alert-warning" role="alert" id="alertstatus">A record with the same Name and Position already exists.</div>';
            } else {
                // Update data in the database using prepared statement
                $sql = "UPDATE `barangay_officials` SET `bo_name`=?, `bo_position`=?, `bo_pic`=? WHERE `bo_id`=?";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, 'sssi', $name, $position, $uploadedFile, $officialID);
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo '<div class="alert alert-success" role="alert" id="alertstatus">Data updated successfully.</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert" id="alertstatus">Error: ' . mysqli_error($conn) . '</div>';
                }

                mysqli_stmt_close($stmt);
            }
            }
        } else {
            // No new image uploaded, update other fields
            // Sanitize input to prevent SQL injection
            $name = mysqli_real_escape_string($conn, $name);
            $position = mysqli_real_escape_string($conn, $position);

            // Update data in the database using prepared statement
            $sql = "UPDATE `barangay_officials` SET `bo_name`=?, `bo_position`=? WHERE `bo_id`=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 'ssi', $name, $position, $officialID);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo '<div class="alert alert-success" role="alert" id="alertstatus">Data updated successfully.</div>';
            } else {
                echo '<div class="alert alert-warning" role="alert" id="alertstatus">Error: ' . mysqli_error($conn) . '</div>';
            }

            mysqli_stmt_close($stmt);
        }
    }
}

if (isset($_POST['archivesingleofficialsbtn'])) {
    $archiveofficials = "archive"; 
    $archiveofficialsid = $_POST['idofficials']; 
    $queryres = "UPDATE barangay_officials SET officialstatus='$archiveofficials' Where bo_id = '".$archiveofficialsid."'";
    mysqli_query($conn, $queryres);
}

if (isset($_POST['restoreofficials'])) {
    $archiveofficials = "official"; 
    $archiveofficialsid = $_POST['idrestore']; 
    $position = $_POST['position']; 

    $checkUniqueQuery = "SELECT * FROM `barangay_officials` WHERE 
    (`bo_position` = '$position' AND `officialstatus` = 'official' AND bo_id != '$archiveofficialsid')";
            $result = mysqli_query($conn, $checkUniqueQuery);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="alert alert-warning" role="alert" id="alertstatus">A record with the same Name and Position already exists.</div>';
            } else {
    $queryres = "UPDATE barangay_officials SET officialstatus='$archiveofficials' Where bo_id = '".$archiveofficialsid."'";
    mysqli_query($conn, $queryres);
     echo '<div class="alert alert-success" role="alert" id="alertstatus">Official had been Restored.</div>';
}
}
?>

