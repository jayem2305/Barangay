<?php
include("dbh.inc.php");
if (isset($_POST['updateannouncement'])) {
    $id = $_POST['idannouncement'];
    $title = $_POST['titlupdateeannouncement'];
    $content = $_POST['contentname'];
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null;

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
        // Check if title already exists excluding the current announcement being updated
        $checkTitleQuery = "SELECT * FROM announcements WHERE a_title = '$title' AND a_id != '".$id."'";
        $resultCheckTitle = mysqli_query($conn, $checkTitleQuery);

        if (mysqli_num_rows($resultCheckTitle) > 0) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            Title already exists. Please choose a different title.
            </div>';
        } else {
            $targetDirectory = "../pic/";
            $targetFilePath = $targetDirectory . basename($image);
            $allowedFileTypes = array('png', 'jpg', 'jpeg', ' ');
            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Convert allowed file types to lowercase
            $allowedFileTypes = array_map('strtolower', $allowedFileTypes);

            // Check if the file type is not empty
            if (!empty($fileType) && in_array($fileType, $allowedFileTypes)) {
                if (isset($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

                    if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                        $query = "UPDATE announcements SET a_title = '$title', a_content = '$content', a_pic = '$targetFilePath' WHERE a_id = '$id'";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Announcement has been updated!
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
                } else {
                    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    Error in validity
                    </div>';
                }
            } else if (empty($fileType)) {
                if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                    $query = "UPDATE announcements SET a_title = '$title', a_content = '$content' WHERE a_id = '$id'";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        Announcement has been updated!
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
            } else {
                echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                Invalid file type. Only PNG, JPG, and JPEG files are allowed.
                </div>';
            }
        }
    }
} 

if (isset($_POST['updateevent'])) {
    $id = $_POST['eventid'];
    $title = $_POST['updatetitleevent'];
    $content = $_POST['updatecontentevent'];
    $status = "Event";
    $startdate = $_POST['updatestartdateeven'];
    $enddate = $_POST['updateenddateeven'];
    $date = date("Y-m-d");
    $time = date("H:i");

    if (empty($title)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Title of Event.
        </div>';
    } elseif (empty($startdate) || empty($enddate)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Dates of an event.
        </div>';
    } elseif (empty(trim(strip_tags($content)))) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Content of Event.
        </div>';
    } else {
        // Check if title already exists excluding the current record
        $checkTitleQuery = "SELECT * FROM announcements WHERE a_title = '$title' AND a_id != $id";
        $resultCheckTitle = mysqli_query($conn, $checkTitleQuery);

        if (mysqli_num_rows($resultCheckTitle) > 0) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            Title already exists. Please choose a different title.
            </div>';
        } elseif ($startdate > $enddate) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        End date cannot be earlier than the start date.
        </div>';
    }  else {
            // Update the record
            if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
                $query = "UPDATE announcements SET 
                            a_title = '$title',
                            a_content = '$content',
                            a_startdate = '$startdate',
                            a_enddate = '$enddate',
                            a_date = '$date',
                            a_time = '$time'
                          WHERE a_id = $id";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    Event has been updated!
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

if (isset($_POST['updateproject'])) {
    $projectId = $_POST['projectid'];
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
    } elseif (empty($startdate) || empty($enddate)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        Empty Dates of an Project.
        </div>';
    } elseif ($startdate > $enddate) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        End date cannot be earlier than the start date.
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
        }

        if (preg_match('/^[a-zA-Z0-9., ]+$/', $title) || preg_match('/^[a-zA-Z0-9., ]+$/', $content)) {
            // Use UPDATE query instead of INSERT
            $query = "UPDATE announcements SET 
                        a_title = '$title',
                        a_content = '$content',
                        a_pic = '$targetFilePath',
                        a_date = '$date',
                        a_time = '$time',
                        a_status = '$status',
                        a_startdate = '$startdate',
                        a_enddate = '$enddate'
                    WHERE a_id = '$projectId'";

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo '<div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                Project has been updated! 
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


?>