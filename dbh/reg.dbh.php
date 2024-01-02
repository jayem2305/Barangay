<?php 
include("dbh.inc.php");

if(isset($_POST["firstsetp"])){
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$bday = $_POST['bday'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$educ = $_POST['educ'];
	$prof = $_POST['prof'];
	$place = $_POST['place'];
	$local = $_POST['local'];
	$religion = $_POST['religion'];
	$relation = $_POST['relation'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$currentDate = date('Y-m-d');
	$currentDate = new DateTime();
	$bday = new DateTime($bday);
	$interval = $currentDate->diff($bday);
	$agecheck = $interval->y;
	$mobile_num = "+639-".$mobile;
	if (!preg_match("/^[a-zA-Z ]+$/", $lname) || !preg_match("/^[a-zA-Z ]+$/", $fname)) {
		if(empty($lname)|| empty($fname)){
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Last name and First name
			</div>";
			$success = false;
			exit();
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters are allowed for Last name and First name
			</div>";
			$success = false;
			exit();
		}
	}

	if (!preg_match("/^[a-zA-Z0-9 ]+$/", $mname) && !empty($mname)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters are allowed for Middle Initial.
		</div>";
		$success = false;
		exit();
	}
		$query = "SELECT * FROM user WHERE lastname = '$lname' AND firstname = '$fname' AND middleinitial = '$mname' AND (status = 'resident' OR status = 'archive' OR status = 'Admin')";
	$res = mysqli_query($conn, $query);
	if(mysqli_num_rows($res)>0) {     
		$row = mysqli_fetch_assoc($res);
		if($lname==isset($row['lastname']) && $fname==isset($row['firstname']) && $mname==isset($row['middleinitial']))
		{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>This Fullname is already Existing!
			</div>";
			$success = false;
			exit();
		}
	}
	
	if (empty($address)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Address ".$address."
		</div>";
		$success = false;
		exit();
	}

	if (!preg_match("/^[a-zA-Z0-9., ]+$/", $address) && !empty($address)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Address can only contain letters, numbers, period, and comma ".$address."
		</div>";
		$success = false;
		exit();


	}
	if (empty($mobile)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Mobile Number
		</div>";
		$success = false;
		exit();
	}
	if (!preg_match("/^\+639-\d{4}-\d{5}$/", $mobile_num) && !empty($mobile)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Mobile number must be in the format +639-xxxxx-xxxx
		</div>";
		$success = false;
		exit();
	}

	if (empty($bday)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Birthday
		</div>";
		$success = false;
		exit();
	}
	if (empty($age)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Age
		</div>";
		$success = false;
		exit();
	}
	if ($age != $agecheck && !empty($age)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Birthday and Age do not match
		</div>";
		$success = false;
		exit();
	}
	if ($gender == "Gender"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Gender
		</div>";
		$success = false;
		exit();
	}
	if ($civil == "Civil Status"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Civil Status
		</div>";
		$success = false;
		exit();
	}
	if ($educ == "Education Attainment"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Education Attainment
		</div>";
		$success = false;
		exit();
	}
	if (empty($prof)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Profession
		</div>";
		$success = false;
		exit();
	}

	if (!preg_match("/^[a-zA-Z ]+$/", $prof)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters is allowed for Profession
		</div>";
		$success = false;
		exit();
	}

	if (empty($place)){
		/*same as address*/
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Address of Work / School
		</div>";
		$success = false;
		exit();
	}
	if (!preg_match("/^[a-zA-Z0-9., ]+$/", $place)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Address of the Work or University can only contain letters, numbers, period, and comma
		</div>";
		$success = false;
		exit();


	}
	if ($local == "Locality"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Locality of your Work / School
		</div>";
		$success = false;
		exit();
	}
	if (empty($religion)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Religion
		</div>";
		
		$success = false;
		exit();
	}

	if (!preg_match("/^[a-zA-Z ]+$/", $religion) && !empty($religion)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters is allowed for Religion
		</div>";
		$success = false;
		exit();
	}

	if (empty($relation)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Relation to the Head of the Family
		</div>";
		$success = false;
		exit();
	}
	if (!preg_match("/^[a-zA-Z ]+$/", $relation) && !empty($relation)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters is allowed to input in Relation to the Head of the Family
		</div>";
		$success = false;
		exit();
	}

	if (empty($email)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Email Address
		</div>";
		$success = false;
		exit();
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid email format
		</div>";
		$success = false;
		exit();
	}
	if (empty($password)){
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Password
			</div>";
			$success = false;
			exit();
	}
	if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,}$/", $password) && !empty($password)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Password must contain at least 8 characters with at least 1 capital letter, 1 number, and 1 special character
			</div>";
			$success = false;
			exit();
		}
	$success = false;
	$query = "SELECT email FROM user WHERE email='$email' AND (status = 'resident' OR status = 'archive' OR status = 'Admin')";
	$res = mysqli_query($conn, $query);
	if(mysqli_num_rows($res)>0) {     
		$row = mysqli_fetch_assoc($res);
		if($email==isset($row['email']))
		{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>This Email Address is already used!
			</div>";
			$success = false;
			exit();
		}else{
			$success = true;
			echo "<p style='display:none'>NEXTSTEP</p>";
		}	
	}else{
		$success = true;
		echo "<p style='display:none'>NEXTSTEP</p>";
	}	
}

if(isset($_POST['secondsetp'])){
	$senior = $_POST['senior'];
	$solo = $_POST['solo'];
	$lgbt = $_POST['lgbt'];
	$voter = $_POST['voter'];
	$feed = $_POST['feed'];
	$preg = $_POST['preg'];
	$pwd = $_POST['pwd'];
	$kind = $_POST['kind'];
	$materials = $_POST['materials'];
	$owner = $_POST['owner'];
	$nameowner = $_POST['nameowner'];
	$elect = $_POST['elect'];
	$water = $_POST['water'];
	$waste = $_POST['waste'];
	$wasteother = $_POST['wasteother'];
	$cr = $_POST['cr'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];

	if ((!is_numeric($senior)&& !empty($senior)) || (!is_numeric($solo)&& !empty($solo))  || (!is_numeric($lgbt)&& !empty($lgbt))  || (!is_numeric($voter)&& !empty($voter))  || (!is_numeric($feed)&& !empty($feed))  || (!is_numeric($preg)&& !empty($preg))  || (!is_numeric($pwd)&& !empty($pwd)) ) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for numeric fields for Number of people living in the house,</div>";
    // Handle the error as needed, for example, redirect or show an error message
		exit();
	}
	 if (!empty($pwd) && empty($kind)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If There are PWD's, you must list or define their disability.</div>";
			exit();
	
	}
	if ((!preg_match("/^[a-zA-Z0-9, ]+$/", $kind))&& !empty($pwd)&& !empty($kind)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for the 'kind of Disability' field</div>";
			exit();
		}
		 if ($materials == "Materials of House") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Choose Your Home's Materials</div>";
		exit();
	}
	 if ($owner == "Types of Owner Ship") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid entry for Ownership of your dwelling</div>";
		exit();
	}
	 if (empty($nameowner) ){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Empty name of the Owner.</div>";
		exit();
	}
		if ((!preg_match("/^[a-zA-Z,. ]+$/", $nameowner))&& !empty($nameowner)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input of Name of Owner</div>";
			exit();
		}
	 if ($elect == "Do you have Electricity") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have electricity, please respond to the inquiry.</div>";
		exit();
	}
	 if ($water == "Own source of water ?") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have Source of water, please respond to the inquiry.</div>";
		exit();
	}
	 if ($waste == "Waste Management") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for Waste management.</div>";
		exit();
	}
	 if ($waste == 'Others' && empty($wasteother)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Please describe your alternative Waste management methods.</div>";
		exit();
	}
	if ((!preg_match("/^[a-zA-Z, ]+$/", $wasteother))&& !empty($wasteother)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Please describe your alternative Waste management methods.</div>";
			exit();
		}

	 if ($cr == "Comfort Room") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have Comfort Room, please respond to the inquiry.</div>";
		exit();
	}

		echo "<p style='display:none'>NEXTSTEP</p>";
	

}

// Check if the form is submitted
if (isset($_POST["createaccount"])) {
	include("dbh.inc.php");
    // Connect to the database (replace with your database credentials)
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$bday = $_POST['bday'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$educ = $_POST['educ'];
	$prof = $_POST['prof'];
	$place = $_POST['place'];
	$local = $_POST['local'];
	$religion = $_POST['religion'];
	$relation = $_POST['relation'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$senior = $_POST['senior'];
	$solo = $_POST['solo'];
	$lgbt = $_POST['lgbt'];
	$voter = $_POST['voter'];
	$feed = $_POST['feed'];
	$preg = $_POST['preg'];
	$pwd = $_POST['pwd'];
	$kind = $_POST['kind'];
	$materials = $_POST['materials'];
	$owner = $_POST['owner'];
	$nameowner = $_POST['nameowner'];
	$elect = $_POST['elect'];
	$water = $_POST['water'];
	$waste = $_POST['waste'];
	$wasteother = $_POST['wasteother'];
	$cr = $_POST['cr'];
	$stats = "pending";
	$valid = isset($_FILES['valid']['name']) ? $_FILES['valid']['name'] : null;
	$twobytwo = isset($_FILES['twobytwo']['name']) ? $_FILES['twobytwo']['name'] : null;
	$votersCertificate = isset($_FILES['votersCertificate']['name']) ? $_FILES['votersCertificate']['name'] : null;
 // Get the current month (abbreviated) and year
	$currentYear = date('MdY');
    // Construct the final string
	$formattedString = "REG_".$currentYear."_".$lname."";
	$control =  $formattedString;
	
	$valid = isset($_FILES['valid']['name']) ? $_FILES['valid']['name'] : null;
	$twobytwo = isset($_FILES['twobytwo']['name']) ? $_FILES['twobytwo']['name'] : null;
	$votersCertificate = isset($_FILES['votersCertificate']['name']) ? $_FILES['votersCertificate']['name'] : null;

    // Get the current month (abbreviated) and year
	$currentYear = date('MdY');
    // Construct the final string
	$formattedString = "REG_" . $currentYear . "_" . $lname . "";
	$control = $formattedString;
	$mobile_num = "+639-".$mobile;

	if (empty($valid)) {
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		<div>Valid id file cannot be empty.</div>
		</div>';
	} else if (empty($twobytwo)) {
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		<div>2 by 2 Picture cannot be empty.</div>
		</div>';
	} else if (empty($votersCertificate)) {
		$targetDirectoryValid = "../pic/";
		$targetDirectoryTwobytwo = "../pic/";
		$votersCertificateFilePath = "../pic/brgy_logo.png";

		$validFilePath = moveUploadedFile('valid', $targetDirectoryValid);
		$twobytwoFilePath = moveUploadedFile('twobytwo', $targetDirectoryTwobytwo);
		$votersCertificateFilePath = "../pic/brgy_logo.png";

		if ($validFilePath !== null && $twobytwoFilePath !== null && $votersCertificateFilePath !== null) {
            // Insert data into the database

			$sql = "INSERT INTO `user`(`lastname`, `firstname`, `middleinitial`, `address`, `mobilenum`, `bday`, `age`, `gender`, `civilstats`, `educattainment`, `profession`, `place`, `locality`, `religion`, `relation`, `senior`, `soloparent`, `lgbt`, `voter`, `breastfeeding`, `pregnant`, `pwd`, `disability`, `materials`, `ownership`, `namesowner`, `electricity`, `water`, `waste`, `wastemanagement`, `cr`, `email`, `pass`, `valid_id`, `picture_2x2`, `voters`, `status`, `controlnum`) VALUES ('$lname', '$fname', '$mname', '$address', '$mobile_num', '$bday', '$age', '$gender', '$civil', '$educ', '$prof', '$place', '$local', '$religion', '$relation', '$senior', '$solo', '$lgbt', '$voter', '$feed', '$preg', '$pwd', '$kind', '$materials', '$owner', '$nameowner', '$elect', '$water', '$waste', '$wasteother', '$cr', '$email', '$password','$validFilePath', '$twobytwoFilePath', '$votersCertificateFilePath','$stats','$control')";
			echo "<p style='display:none'>laststep</p>";
			$result = mysqli_query($conn, $sql);
			mysqli_close($conn);
		}
	} else if ($_FILES['valid']['size'] > 50 * 1024 * 1024 || $_FILES['twobytwo']['size'] > 50 * 1024 * 1024 || $_FILES['votersCertificate']['size'] > 50 * 1024 * 1024) {
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		<div>Maximum file size for valid id, 2 by 2 Picture, or Voters Certificate is 50 MB.</div>
		</div>';
	} else {
        // Move uploaded files
		$targetDirectoryValid = "../pic/";
		$targetDirectoryTwobytwo = "../pic/";
		$targetDirectoryVotersCertificate = "../pic/";

		$validFilePath = moveUploadedFile('valid', $targetDirectoryValid);
		$twobytwoFilePath = moveUploadedFile('twobytwo', $targetDirectoryTwobytwo);
		$votersCertificateFilePath = moveUploadedFile('votersCertificate', $targetDirectoryVotersCertificate);

		if ($validFilePath !== null && $twobytwoFilePath !== null && $votersCertificateFilePath !== null) {
            // Insert data into the database
			$sql = "INSERT INTO `user`(`lastname`, `firstname`, `middleinitial`, `address`, `mobilenum`, `bday`, `age`, `gender`, `civilstats`, `educattainment`, `profession`, `place`, `locality`, `religion`, `relation`, `senior`, `soloparent`, `lgbt`, `voter`, `breastfeeding`, `pregnant`, `pwd`, `disability`, `materials`, `ownership`, `namesowner`, `electricity`, `water`, `waste`, `wastemanagement`, `cr`, `email`, `pass`, `valid_id`, `picture_2x2`, `voters`, `status`, `controlnum`) VALUES ('$lname', '$fname', '$mname', '$address', '$mobile_num', '$bday', '$age', '$gender', '$civil', '$educ', '$prof', '$place', '$local', '$religion', '$relation', '$senior', '$solo', '$lgbt', '$voter', '$feed', '$preg', '$pwd', '$kind', '$materials', '$owner', '$nameowner', '$elect', '$water', '$waste', '$wasteother', '$cr', '$email', '$password','$validFilePath', '$twobytwoFilePath', '$votersCertificateFilePath','$stats','$control')";
			echo "<p style='display:none'>laststep</p>";
			$result = mysqli_query($conn, $sql);
			mysqli_close($conn);
		}
	}
}

// Function to move uploaded files
function moveUploadedFile($fileKey, $targetDirectory)
{
	$targetFilePath = $targetDirectory . basename($_FILES[$fileKey]['name']);

	if ($_FILES[$fileKey]['size'] < 50 * 1024 * 1024) {
		$allowedFileTypes = array('png', 'jpg', 'jpeg');
		$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Convert allowed file types to lowercase
		$allowedFileTypes = array_map('strtolower', $allowedFileTypes);

        // Check if the file type is allowed
		if (in_array($fileType, $allowedFileTypes)) {
            // Move the uploaded file to the target directory
			move_uploaded_file($_FILES[$fileKey]['tmp_name'], $targetFilePath);
			return $targetFilePath;
		} else {
			echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
			<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
			Invalid file type for ' . $fileKey . '. Only PNG, JPG, and JPEG files are allowed.
			</div>';
			return null;
		}
	} else {
		echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
		<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
		Maximum file size for ' . $fileKey . ' is 50 MB.
		</div>';
		return null;
	}

}




?>