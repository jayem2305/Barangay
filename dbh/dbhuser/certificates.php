<?php
include '../dbh.inc.php';

if (isset($_POST['submitindigency'])) {

    $currentYear = date('ndY');
    // Construct the final string
    $today = date("Y-m-d");
    $types = $_POST['types'];
    $indigency = $_POST['indigency'];
    $fullname = $_POST['fullname'];
    $votersindigency = $_POST['votersindigency'];
    $age = $_POST['age'];
    $formattedString = "INDIGENCY_".$currentYear."_".$age."";
    $control =  $formattedString;
    $controlnum = $control;
    $address = $_POST['address'];
    $other = $_POST['others'];
    $purpose = $_POST['purpose'];
    $email = $_POST['email'];
    $personid = $_POST['id'];
    $remarks = "Pending";
    if($types == "none"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Empty type of Barangay indigency
        </div>
        </div>
        ';
        exit();
    }
    if($other == "none"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Empty Purpose of Barangay indigency
        </div>
        </div>
        ';
        exit();
    }
    if($other == "Others"){
       if(empty($purpose) || !preg_match('/^[a-zA-Z, .]*$/', $purpose)){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Invalid Purpose of Barangay Indigency
        </div>
        </div>
        ';
        exit();
    }else{
        $other = $purpose;
    }
} else {
    $other = $other;
}  

            // Use prepared statements to prevent SQL injection
$query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`, `Typecertificate`,`certificate`, `purpose`, `remarks`, `PersonID`, `voters`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
echo '<div class="alert alert-success d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>
Your request has been added to the queue.
</div>
</div>';
mysqli_stmt_bind_param($stmt, "ssssssssssss", $controlnum, $email, $fullname, $age, $address, $today, $indigency, $types, $other, $remarks, $personid, $votersindigency);

mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conn);

}

if (isset($_POST['submitbusinesspermit'])) {

    $currentYear = date('ndY');
    // Construct the final string
    $today = date("Y-m-d");
    $email = $_POST['email'];
    $permit = "Business Permit";
    $voterbpermit = $_POST['voterspermit'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $bpermit = $_POST['bpermitcert'];
    $baddress = $_POST['baddress'];
    $bname = $_POST['bname'];
    $personid = $_POST['id'];
    $randomNumber = rand(1, 10);
    $formattedString = "BPERMIT_".$currentYear."_".$age+$randomNumber."";
    $control =  $formattedString;
    $controlnum = $control;
    $remarks = "Pending";

    
    // Validate bname
    if (empty($bname)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Business Name cannot be empty.
        </div>
        </div>';
        exit();
    }else if (!preg_match('/^[a-zA-Z0-9., ]*$/', $bname)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Business Name can only contain letters, numbers, periods, and commas.
        </div>
        </div>';
        exit();
    }else if (empty($baddress)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Business Address cannot be empty.
        </div>
        </div>';
        exit();
    }else if (!preg_match('/^[a-zA-Z0-9., ]*$/', $baddress)) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Business Address can only contain letters, numbers, periods, and commas.
        </div>
        </div>';
        exit();
    }else{
                   // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`, `Typecertificate`, `certificate`, `purpose`, `remarks`, `PersonID`, `voters`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = mysqli_prepare($conn, $query);
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    Your request has been added to the queue.
    </div>
    </div>';
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $controlnum, $email, $fullname, $age, $baddress, $today, $permit,$permit,  $bname, $remarks, $personid, $voterbpermit);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
}


if (isset($_POST['submitbusinessCessationpermit'])) {

    $currentYear = date('ndY');
    // Construct the final string
    $today = date("Y-m-d");
    $email = $_POST['email'];
    $voterspermit = $_POST['voterspermit'];
    $cessationowner = $_POST['cessationowner'];
    $age = $_POST['age'];
    $permit = "Business Cessation Permit";
    $bcaddress = $_POST['bcaddress'];
    $bcname = $_POST['bcname'];
    $bdate = $_POST['bdate'];
    $personid = $_POST['id'];
    $randomNumber = rand(1, 10);
    $formattedString = "BCPERMIT_".$currentYear."_".$age+$randomNumber."";
    $control =  $formattedString;
    $controlnum = $control;
    $remarks = "Pending";

    
    // Validate bname
    if (empty($bcaddress)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Business Cessation Address cannot be empty.
    </div>
    </div>';
    exit();
} else if (!preg_match('/^[a-zA-Z0-9., ]*$/', $bcaddress)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Business Cessation Address can only contain letters, numbers, periods, and commas.
    </div>
    </div>';
    exit();
} else if (empty($bcname)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Business Cessation Name cannot be empty.
    </div>
    </div>';
    exit();
} else if (!preg_match('/^[a-zA-Z0-9., ]*$/', $bcname)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Business Cessation Name can only contain letters, numbers, periods, and commas.
    </div>
    </div>';
    exit();
} else if (empty($bdate)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Business Cessation Date cannot be empty.
    </div>
    </div>';
    exit();
} else{
                   // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`, `Typecertificate`, `certificate`, `purpose`, `remarks`, `PersonID`, `voters`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    Your request has been added to the queue.
    </div>
    </div>';
    mysqli_stmt_bind_param($stmt, "ssssssssssss", $controlnum, $email, $cessationowner, $age, $bcaddress, $today, $permit,$bdate,  $bcname, $remarks, $personid, $voterspermit);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
}
if (isset($_POST['submitftj'])) {
    $currentYear = date('ndY');
    $today = date("Y-m-d");
    $email = $_POST['email'];
    $votersftj = $_POST['votersftj'];
    $ftjname = $_POST['ftjname'];
    $ageftj = $_POST['ageftj'];
    $addressageftj = $_POST['addressageftj'];
    $typescertftj = $_POST['typescertftj'];
    $residentbrgy = $_POST['residentbrgy'];
    $permit = "First Time job Seeker";
    $fullnameageftj = $_POST['fullnameageftj'];
    $parent = $_POST['parent'];
    $agep = $_POST['agep'];
    $paddress = $_POST['paddress'];
    $presidentbrgy = $_POST['presidentbrgy'];
    $personid = $_POST['id'];
    $randomNumber = rand(1, 10);
    $formattedString = "FTJ_".$currentYear."_".$ageftj+$randomNumber."";
    $control =  $formattedString;
    $controlnum = $control;
    $remarks = "Pending";

    if ($ageftj < 18) {
        if (empty($residentbrgy) || empty($parent) || empty($paddress) || empty($agep) || empty($presidentbrgy)) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Please fill in all required fields for age less than 18.
                </div>
            </div>';
            exit();
        }else if (!isValidSpecialCharacters([$parent, $paddress, $presidentbrgy])) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Only letters, numbers, and special characters are allowed for Input Fields.
                </div>
            </div>';
            exit();
        }
    } else {
        if (empty($residentbrgy) || !ctype_digit($residentbrgy)) {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Please provide a valid numeric value for Years of living in the barangay.
                </div>
            </div>';
            exit();
        }
    }

    // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`, `Typecertificate`, `certificate`, `purpose`, `remarks`, `PersonID`, `voters`,`living`, `pname`, `paddress`, `page`, `pliving`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        Your request has been added to the queue.
        </div>
    </div>';
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $controlnum, $email, $fullnameageftj, $ageftj, $addressageftj, $today, $permit,$typescertftj,  $typescertftj, $remarks, $personid, $votersftj, $residentbrgy, $parent, $paddress, $agep, $presidentbrgy);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

function isValidSpecialCharacters($fields) {
    foreach ($fields as $field) {
        if (!preg_match('/^[a-zA-Z0-9., ]*$/', $field)) {
            return false;
        }
    }
    return true;
}

if (isset($_POST['soloparent'])) {
    $currentYear = date('ndY');
    // Construct the final string
    $today = date("Y-m-d");
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $votersparent = $_POST['votersparent'];
    $soloparent = $_POST['soloparent'];
    $age = $_POST['age'];
    $permit = $_POST['soloparent'];
    $purposesoloparent = $_POST['purposesoloparent'];
    $floatingTextareachild = $_POST['floatingTextareachild'];
    $idsolo = $_POST['idsolo'];
    $randomNumber = rand(1, 10);
    $formattedString = "SP_".$currentYear."_".$age+$randomNumber."";
    $control =  $formattedString;
    $controlnum = $control;
    $remarks = "Pending";

    
    // Validate bname
    if (empty($floatingTextareachild)) {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    Empty List of your Child / Children.
    </div>
    </div>';
    exit();
} 
                   // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`, `Typecertificate`, `certificate`, `purpose`, `remarks`, `PersonID`, `voters`, `pname`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = mysqli_prepare($conn, $query);
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    Your request has been added to the queue.
    </div>
    </div>';
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $controlnum, $email, $fullname, $age, $address, $today, $soloparent,$purposesoloparent,  $purposesoloparent, $remarks, $idsolo, $votersparent , $floatingTextareachild);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }


if (isset($_POST['submitcert'])) {

    $currentYear = date('ndY');
    // Construct the final string
    $today = date("Y-m-d");
    $types = $_POST['types'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $barnagaycert = "Barangay Certificate";
    $randomNumber = rand(1, 10);
    $formattedString = "CERTIFICATE_".$currentYear."_".$age+$randomNumber."";
    $control =  $formattedString;
    $controlnum = $control;
    $address = $_POST['address'];
    $other = $_POST['others'];
    $email = $_POST['email'];
    $pic = $_POST['pic'];
    $voterscert = $_POST['voterscert'];
    $idcert = $_POST['idcert'];
    $remarks = "Pending";
$purpose = $_POST['purpose'];
     if($types == "none"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Empty type of Barangay Certificate
        </div>
        </div>
        ';
        exit();
    }
    if($other == "none"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Empty Purpose of Barangay Certificate
        </div>
        </div>
        ';
        exit();
    }
    if($other == "Others"){
       if(empty($purpose) || !preg_match('/^[a-zA-Z ]*$/', $purpose)){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        Invalid Purpose of Barangay Certificate
        </div>
        </div>
        ';
        exit();
    }else{
        $other = $purpose;
    }
}else{
        $other = $other; 
    }

 $query = "INSERT INTO `requested_certs`(`controlnum`, `email`, `name`, `age`, `address`, `date`,`Typecertificate`, `certificate`, `purpose`, `remarks`, `pic`,`voters`, `PersonID`)VALUES('$controlnum','$email','$fullname','$age','$address','$today','$barnagaycert','$types','$other','$remarks','$pic','$voterscert','$idcert' ) ";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    Your request has been added to the queue.
    </div>
    </div>';
    }



if (isset($_POST['cancelbutton'])) {
    $statsres = "Cancelled";
    $setres = $_POST['idscancel']; 
    $queryres = "UPDATE requested_certs SET remarks='$statsres' WHERE req_id ='".$setres."'";
    mysqli_query($conn, $queryres);
}



?>
