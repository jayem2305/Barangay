<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('../tcpdf/tcpdf.php');
require "phpmailer/src/Exception.php";
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include 'dbh.inc.php';

if (isset($_POST['archiveset'])) {
    $stats = $_POST['archivename'];
    $set = $_POST['idarchiveset'];
    $emailarchive = $_POST['emailarchiveset'];
    $query = "UPDATE user SET status='$stats' WHERE user_id ='".$set."'";
    mysqli_query($conn, $query);


    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($emailarchive);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Account Approval";
    $mail->Body = "Your Account application has been declined. Our decision is based on a thorough review of your profile and information that must be met in order to be granted an account.Please note that this decision was made after careful assessment and consideration of various factors. We encourage you to contact our Barangay support team for further clarification or details regarding the specific reasons behind this outcome. We value all applicants and appreciate your interest in our services; however, please understand that due to Barangay policies and limitations, not all applications can be approved at this time. Thank you for understanding and we hope you find success in your future endeavors. ";

    $mail->send();

}

if (isset($_POST['approveset'])) {
    $statsres = $_POST['residentname']; 
    $setres = $_POST['idresident']; 
    $emailres = $_POST['emailidres'];
    $queryres = "UPDATE user SET status='$statsres' WHERE user_id ='".$setres."'";
    mysqli_query($conn, $queryres);


    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($emailres);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Account Approval";
    $mail->Body = "Your Account had been approve please login <a href='http://localhost/barangay/login/login.php'>here</a>";

    $mail->send();

    "
    <script>
    alert('sended');
    document.location.href = 'login.php';
    </script>
    ";

}

if (isset($_POST['archiveresident'])){
    $stats = $_POST['archivename'];
    $set = $_POST['idarchiveset'];
    $email = $_POST['emailarchiveset'];

    $query = "UPDATE user set status='$stats' Where user_id ='".$set."'";
    mysqli_query($conn, $query);


    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($email);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Account Restriction";
    $mail->Body = "I regret to inform you that your access to this website has been restricted.Please Contact our Barangay Officials to uplift your restriction";

    $mail->send();
}


if (isset($_POST['declinedstats'])) {
    $stats = "Declined";
    $set = $_POST['idemailstats'];
    $emailarchive = $_POST['emailstats'];
    $namedecline = $_POST['namedecline'];
    $messagedecline = $_POST['messagedecline'];
  $iddecline = $_POST['user_id'];
    $date = date("Y-m-d");
    if (empty($messagedecline)) {
       echo "Please explain why it was declined.";
    }else{
    $query = "UPDATE requested_certs SET remarks='$stats' WHERE req_id ='".$set."'";
    echo "The application is declined.";
    mysqli_query($conn, $query);

    $queryinsert = "INSERT INTO `declinerequest`(`name`, `email`, `message`, `date`, `declinepersonID`, `declinecertID`) VALUES ('$namedecline','$emailarchive','$messagedecline','$date','$iddecline','$set')";
    mysqli_query($conn, $queryinsert);
    mysqli_close($conn);

    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($emailarchive);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Status of Certificate";
    $mail->Body = "Your request was denied; please see the notice in the <a href='http://localhost/barangay/login/login.php'>Barangay 781 Zone 85 Website </a>for additional information.";

    $mail->send();
}
}

if (isset($_POST['approvestats'])) {
$stats = "Generate";
$set = $_POST['idemailstats'];
 $emailarchive = $_POST['emailstats'];
$query = "UPDATE requested_certs SET remarks='$stats' WHERE req_id ='".$set."'";
mysqli_query($conn, $query);


    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($emailarchive);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Status of Certificate";
    $mail->Body = "Your request has been Approved.";

    $mail->send();
}
if (isset($_POST['readytoclaimbtn'])) {
    $statsres = "Claim"; 
    $setres = $_POST['idresident']; 
    $email = $_POST['emailidres']; 
    $queryres = "UPDATE requested_certs SET remarks='$statsres' WHERE req_id ='".$setres."'";
    mysqli_query($conn, $queryres);

    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($email);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Status of Certificate";
    $mail->Body = "Your Requested Certificate is Ready to claim.Please ready your Valid ID and Contol Number of The Certificate <br> NOTE: <i>please claim it within 7 days or you may be penalized</i>";

    $mail->send();
}
if (isset($_POST['claimbtn'])) {
    $statsres = "Claimed"; 
    $setres = $_POST['idresident']; 
    $queryres = "UPDATE requested_certs SET remarks='$statsres' WHERE req_id ='".$setres."'";
    mysqli_query($conn, $queryres);
}

if (isset($_POST['restoreuserprofiles'])) {
    $statsres = $_POST['residentrestor']; 
    $setres = $_POST['idrestore']; 
    $emailres = $_POST['emailrestor'];

   $checkUniqueQuery = "SELECT * FROM `user` WHERE  status = 'resident' and email = '".$emailres."'";

            $result = mysqli_query($conn, $checkUniqueQuery);

            if (mysqli_num_rows($result) > 0) {
                echo 'The account is still active.';
            }else{

    $queryres = "UPDATE user SET status='$statsres' WHERE user_id ='".$setres."'";
    mysqli_query($conn, $queryres);
    echo 'The restriction on your account has been lifted.';
    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username ='dagzz23123456789@gmail.com';
    $mail -> Password = 'jicy bsvw wvnn nrmu';
    $mail->SMTPSecure = 'ssl';
    $mail-> Port = 465;

    $mail->setFrom('dagzz23123456789@gmail.com');
    $mail->addAddress($emailres);
    $mail -> isHTML(true);
    $mail->Subject = "barangay 781 Zone 85 Account Restriction";
    $mail->Body = "The restriction on your account has been lifted; please login <a href='http://localhost/barangay/login/login.php'>here.</a>";

    $mail->send();

    "
    <script>
    alert('sended');
    document.location.href = 'login.php';
    </script>
    ";
}
}
?>
