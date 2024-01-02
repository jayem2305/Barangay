<?php
include("dbh.inc.php");

if (isset($_POST['addannouncement'])) {
    $title = $_POST['titleannouncement'];
    $content = $_POST['content'];
    $status = "Announcement";
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null;
    $date = date("Y-m-d");
    $time = date("H:i");

    if (empty($title)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Title of Announcement.
        </div>';
    } elseif (empty(trim(strip_tags($content)))) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Content of Announcement.
        </div>';
    } else {
        // Check if title already exists
        $checkTitleQuery = "SELECT * FROM announcements WHERE a_title = '$title'";
        $resultCheckTitle = mysqli_query($conn, $checkTitleQuery);

        if (mysqli_num_rows($resultCheckTitle) > 0) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            Title already exists. Please choose a different title.
            </div>';
        } else {
            // Check if an image is uploaded
            if (!empty($_FILES['image']['name'])) {
                $targetDirectory = "../pic/";
                $targetFilePath = $targetDirectory . basename($image);
                $allowedFileTypes = array('png', 'jpg', 'jpeg');
                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

                // Convert allowed file types to lowercase
                $allowedFileTypes = array_map('strtolower', $allowedFileTypes);

                // Check if the file type is allowed
                if (!in_array($fileType, $allowedFileTypes)) {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Invalid file type. Only PNG, JPG, and JPEG files are allowed.
                    </div>';
                } else {
                    move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
                }
            } else {
                // No file uploaded, set $targetFilePath to null or an appropriate default value
                $targetFilePath = "../pic/logosk.jpg";
            }

            if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                $query = "INSERT INTO announcements (a_title, a_content, a_pic, a_date, a_time, a_status,a_display) 
                VALUES ('$title', '$content', '$targetFilePath', '$date', '$time', '$status','display')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    Announcement has been published! 
                    </div>';
                } else {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-1 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Error in query
                    </div>' . mysqli_error($conn);
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                Only accept numbers, letters, and special characters of period and comma.
                </div>';
            }
        }
    }
} 

if (isset($_POST['addevent'])) {
    $title = $_POST['titleevent'];
    $content = $_POST['contentevent'];
    $status = "Event";
    $startdate = $_POST['startdateeven'];
    $enddate = $_POST['enddateeven'];
    $date = date("Y-m-d");
    $time = date("H:i");

    if (empty($title)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Title of event.
        </div>';
    }else if (empty($startdate) || empty($enddate)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Dates of an event.
        </div>';
    }  elseif (empty(trim(strip_tags($content)))) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Content of event.
        </div>';
    } elseif ($startdate > $enddate) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        End date cannot be earlier than the start date.
        </div>';
    } else {
        // Check if title already exists
        $checkTitleQuery = "SELECT * FROM announcements WHERE a_title = '$title'";
        $resultCheckTitle = mysqli_query($conn, $checkTitleQuery);

        if (mysqli_num_rows($resultCheckTitle) > 0) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            Title already exists. Please choose a different title.
            </div>';
        } else {
                // No file uploaded, set $targetFilePath to null or an appropriate default value
                $targetFilePath = "../pic/logosk.jpg";

            if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                $query = "INSERT INTO announcements (a_title, a_content, a_pic, a_date, a_time, a_status,a_startdate,a_enddate,a_display) 
                VALUES ('$title', '$content', '$targetFilePath', '$date', '$time', '$status', '$startdate', '$enddate','display')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    Event has been published! 
                    </div>';
                } else {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-1 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Error in query
                    </div>' . mysqli_error($conn);
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                Only accept numbers, letters, and special characters of period and comma.
                </div>';
            }
        }
    }
} 

if (isset($_POST['addproject'])) {
    $title = $_POST['titleproject'];
    $content = $_POST['floatingTextareaproject'];
    $status = "Project";
     $startdate = $_POST['startdateproject'];
    $enddate = $_POST['enddateproject'];
    $image = isset($_FILES['filetypeproject']['name']) ? $_FILES['filetypeproject']['name'] : null;
    $date = date("Y-m-d");
    $time = date("H:i");

    if (empty($title)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Title of Project.
        </div>';
    } elseif (empty(trim(strip_tags($content)))) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Content of Project.
        </div>';
    }else if (empty($startdate) || empty($enddate)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Dates of an Project.
        </div>';
    }elseif ($startdate > $enddate) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        End date cannot be earlier than the start date.
        </div>';
    }  else {
        // Check if title already exists
        $checkTitleQuery = "SELECT * FROM announcements WHERE a_title = '$title'";
        $resultCheckTitle = mysqli_query($conn, $checkTitleQuery);

        if (mysqli_num_rows($resultCheckTitle) > 0) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            Title already exists. Please choose a different title.
            </div>';
        } else {
            // Check if an image is uploaded
            if (!empty($_FILES['filetypeproject']['name'])) {
                $targetDirectory = "../pic/";
                $targetFilePath = $targetDirectory . basename($image);
                $allowedFileTypes = array('png', 'jpg', 'jpeg');
                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

                // Convert allowed file types to lowercase
                $allowedFileTypes = array_map('strtolower', $allowedFileTypes);

                // Check if the file type is allowed
                if (!in_array($fileType, $allowedFileTypes)) {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Invalid file type. Only PNG, JPG, and JPEG files are allowed.
                    </div>';
                    exit;
                } else {
                    move_uploaded_file($_FILES['filetypeproject']['tmp_name'], $targetFilePath);
                }
            } else {
                echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Empty image of the Project.
                    </div>';
                    exit;
            }

            if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                $query = "INSERT INTO announcements (a_title, a_content, a_pic, a_date, a_time, a_status,a_startdate,a_enddate,a_display) 
                VALUES ('$title', '$content', '$targetFilePath', '$date', '$time', '$status','$startdate','$enddate','display')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    Project has been published! 
                    </div>';
                } else {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-1 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Error in query
                    </div>' . mysqli_error($conn);
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                Only accept numbers, letters, and special characters of period and comma.
                </div>';
            }
        }
    }
} 
?>
