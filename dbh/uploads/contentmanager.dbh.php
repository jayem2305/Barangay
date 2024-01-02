<?php
include("../dbh/dbh.inc.php");

if (isset($_POST['submit'])) {
    $title =  $_POST['titleannouncement'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $date = date("Y-m-d");
    $time = date("H:i:s");


    // Move uploaded file to a specific directory
    $targetDirectory = "uploads/"; // Change this to your desired directory
    $targetFilePath = $targetDirectory . basename($image);

    // Check if file type is allowed
    $allowedFileTypes = array('png', 'jpg', 'jpeg');
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    if (in_array($fileType, $allowedFileTypes)) {
        // Move the file to the specified directory
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

        // Insert data into the database
        $query = "INSERT INTO announcements (a_title, a_content, a_pic, a_date,a_time) 
                  VALUES ('$title', '$content', '$targetFilePath', '$date', '$time')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            // Data inserted successfully
            echo "Data inserted successfully!";
        } else {
            // Error in the query
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Invalid file type
        echo "Invalid file type. Only PNG, JPG, and JPEG files are allowed.";
    }
}
?>
