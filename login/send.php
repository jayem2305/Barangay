<?php
include("../dbh/dbh.inc.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "phpmailer/src/Exception.php";
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["forgot"])) {
      // username and password sent from form 

	$myusername = $_POST['emaisl'];
	$tokenExpiration = time() + (3);
	$sql = "SELECT * FROM user WHERE email = '$myusername' AND (status = 'resident' OR status = 'archive' OR status = 'Admin')";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if($count == 1) {
		echo '<div class="alert alert-success d-flex align-items-center" role="alert" id="opTag">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  Check Your Email For The next instruction.
  </div>
  </div>';
$token = md5(uniqid($tokenExpiration, true));

		$mail = new PHPMailer(true);
		$mail -> isSMTP();
		$mail -> Host = 'smtp.gmail.com';
		$mail -> SMTPAuth = true;
		$mail -> Username ='dagzz23123456789@gmail.com';
		$mail -> Password = 'jicy bsvw wvnn nrmu';
		$mail->SMTPSecure = 'ssl';
		$mail-> Port = 465;

		$mail->setFrom('dagzz23123456789@gmail.com');
		$mail->addAddress($_POST["emaisl"]);
		$mail -> isHTML(true);
		$mail->Subject = "barangay 781 Zone 85 Forgot Password";
		$mail->Body = "Click the button to change your pass <a href='http://192.168.1.6/barangay/login/forgotpass.php?username=$myusername'&token=$token'>here</a>. <br><i>Do not reply in this message</i>";
		$mail->send();
	}else{
		echo "<div class='alert alert-danger d-flex align-items-center' role='alert' id='opTag'>
  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
  <div>Email Doesn't Exist</div></div>";
	}
}

if(isset($_POST["fogorpasschange"])) {
      // username and password sent from form 
	$username = $_POST['username']; 
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	if ($password != $confirmpassword) {
		echo '<div class="alert alert-danger" role="alert">Passwords do not match.</div>';
	} else {
    	 // Check password strength
		$password_length = strlen($password);
		if ($password_length < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[!@#$%^&*(),.?":{}|<>_]/', $password)) {
			echo '<div class="alert alert-danger" role="alert">Password must be at least 8 characters long and include at least 1 number, 1 capital letter, and 1 special character.</div>';
		} else {
			$sql = "SELECT * FROM user WHERE pass = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
if($count == 1) {
	echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>You must use a different password from your current one. </div></div>';
}else{
	$queryres = "UPDATE user SET pass='$confirmpassword' WHERE email ='".$username."'";
			mysqli_query($conn, $queryres);
			echo '<div class="alert alert-success d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
			<div>
			You had Changed your Password on your account. Do you Wish To proceed To <a href="login.php">login</a> ?
			</div>
			</div>';

			$mail = new PHPMailer(true);
			$mail -> isSMTP();
			$mail -> Host = 'smtp.gmail.com';
			$mail -> SMTPAuth = true;
			$mail -> Username ='dagzz23123456789@gmail.com';
			$mail -> Password = 'jicy bsvw wvnn nrmu';
			$mail->SMTPSecure = 'ssl';
			$mail-> Port = 465;
			$mail->setFrom('dagzz23123456789@gmail.com');
			$mail->addAddress($_POST['username']);
			$mail -> isHTML(true);
			$mail->Subject = "barangay 781 Zone 85 Forgot Password";
			$mail->Body = "You had Changed your Password on your account
			<br><i>Do not reply in this message</i>";

			$mail->send();
}
			
		}
	}
}

?>

