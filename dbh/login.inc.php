<?php session_start();
include("../dbh/dbh.inc.php");

if(isset($_POST["login"])) {
      // username and password sent from form 

    $myusername = $_POST['email'];
    $mypassword =$_POST['password']; 

    $sql = "SELECT * FROM user WHERE email = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

    if(($count == 1)) {
        $_SESSION['login_user'] = $myusername;
        $_SESSION['pass'] = $mypassword;
        $_SESSION['id_user'] = $row['user_id'];
        $_SESSION['lname'] = $row['lastname'];
        $_SESSION['fname'] = $row['firstname'];
        $_SESSION['mname'] = $row['middleinitial'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['mobilenum'] = $row['mobilenum'];
        $_SESSION['bday'] = $row['bday'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['civilstats'] = $row['civilstats'];
        $_SESSION['educattainment'] = $row['educattainment'];
        $_SESSION['profession'] = $row['profession'];
        $_SESSION['place'] = $row['place'];
        $_SESSION['locality'] = $row['locality'];
        $_SESSION['religion'] = $row['religion'];
        $_SESSION['relation'] = $row['relation'];  
        $_SESSION['stats'] = $row['status']; 
        $logout= false;
        if($row['status'] == "resident" && ($count == 1)){
           echo "resident";

       }else if($row['status'] == "Admin" && ($count == 1)){
        echo "admin";
    }else if($row['status'] == "pending"){
        echo '<div class="alert alert-warning d-flex align-items-center" role="alert" id="opTag">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Your Account Are still in process.
        </div>
        </div>';
    }else if($row['status'] == "Decline"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert" id="opTag">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        The email address and password you entered did not match our records. Please double-check and try again.
        </div>
        </div>';
    }

}else if(empty($mypassword)||empty($myusername)){
   echo '<div class="alert alert-danger d-flex align-items-center" role="alert" id="opTag">
   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
   <div>
   The email address or password are Empty.
   </div>
   </div>';
}else{
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert" id="opTag">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    The email address and password you entered did not match our records. Please double-check and try again.
    </div>
    </div>';


}


}?>