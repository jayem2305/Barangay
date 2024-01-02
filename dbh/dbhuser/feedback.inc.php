<?php  
include '../dbh.inc.php';

if (isset($_POST['feecback'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $choices = $_POST['choices'];
    $messagechoice = $_POST['messagechoice'];
    $idfeed = $_POST['idfeed'];
    $date= date('d-m-Y');
    $time = date('H:i:s');

    if( $choices == "none"){
    	echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
               		Please Select a Subject.
                </div>
            </div>';
    }else if(empty($messagechoice)){
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
               		Empty Message.
                </div>
            </div>';
    }else{
	$queryinsert = "INSERT INTO `feedbacks`(`name`, `email`, `subject`, `message`, `date`, `time`, `feedbackid`) VALUES ('$name', '$email', '$choices', '$messagechoice','$date','$time', '$idfeed')";
	echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        Your '.$choices.' have been Posted.
        </div>
    </div>';
	mysqli_query($conn, $queryinsert);
    mysqli_close($conn);
     
    }
}

if (isset($_POST['comments'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $idfeed = $_POST['idfeeds'];
    $date= date('d-m-Y');
    $time = date('H:i:s');

 if(empty($comment)){
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
               		Empty Comment.
                </div>
            </div>';
    }else{
	$queryinsert = "INSERT INTO `comments`( `email`, `name`, `comment`, `date`, `time`, `sub_comment_id`) VALUES ('$email','$name', '$comment', '$date','$time', '$idfeed')";
	echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        Your comment have been Posted.
        </div>
    </div>';
	mysqli_query($conn, $queryinsert);
    mysqli_close($conn);
     
    }
}
?>