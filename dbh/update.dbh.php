<?php
include("dbh.inc.php");
if(isset($_POST["updateaccount"])){
	$lname = $_POST['lname'];
	$id = $_POST['id'];
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
	$currentDate = date('Y-m-d');
	$currentDate = new DateTime();
	$bdaydate = $bday;
	$bdaydate = new DateTime($bdaydate);
	$interval = $currentDate->diff($bdaydate);
	$agecheck = $interval->y;
	$mname = trim($mname);
	$valid = isset($_FILES['valid']['name']) ? $_FILES['valid']['name'] : null;
	$twobytwo = isset($_FILES['twobytwo']['name']) ? $_FILES['twobytwo']['name'] : null;
	$votersCertificate = isset($_FILES['votersCertificate']['name']) ? $_FILES['votersCertificate']['name'] : null;
	if (!preg_match("/^[a-zA-Z ]+$/", $lname) || !preg_match("/^[a-zA-Z ]+$/", $fname)) {
		if(empty($lname)|| empty($fname)){
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Last name and First name
			</div>";
			
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters are allowed for Last name and First name
			</div>";
			
		}
	}else if (!preg_match("/^[a-zA-Z]+$/", $mname)) {
    echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters are allowed for Middle Initial.
        </div>";
    
}else if (empty($address)){
		if (!preg_match("/^[a-zA-Z0-9., ]+$/", $address) && !empty($address)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Address can only contain letters, numbers, period, and comma ".$address."
			</div>";
			$success = false;
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Address ".$address."
			</div>";
			$success = false;
		}
	}else if (empty($mobile)){
		if (!preg_match("/^\+639-\d{5}-\d{4}$/", $mobile) && !empty($mobile)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Mobile number must be in the format +639-xxxxx-xxxx
			</div>";
			$success = false;
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Mobile Number
			</div>";
			$success = false;
		}
	}else if (empty($bday)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Birthday
		</div>";
		$success = false;
	}else if (empty($age)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Age
		</div>";
		$success = false;
	}else if ($age != $agecheck && !empty($age)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Birthday and Age do not match
		</div>";
		$success = false;
	}else if ($gender == "Gender"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Gender
		</div>";
		$success = false;
	}else if ($civil == "Civil Status"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Civil Status
		</div>";
		$success = false;
	}else if ($educ == "Education Attainment"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Education Attainment
		</div>";
		$success = false;
	}else if (empty($prof)){
		/*same as address*/
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Profession
		</div>";
		$success = false;
	}else if (empty($place)){
		/*same as address*/
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Place of Work / School
		</div>";
		$success = false;
	}else if ($local == "Locality"){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Locality of your Work / School
		</div>";
		$success = false;
	}else if (empty($religion)){
		if (!preg_match("/^[a-zA-Z ]+$/", $religion) && empty($religion)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters is allowed for Religion
			</div>";
			$success = false;
		}
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Religion
		</div>";
		
		$success = false;
	}else if (empty($relation)){
		if (!preg_match("/^[a-zA-Z ]+$/", $relation) && !empty($relation)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Only letters is allowed to input in Relation to the Head of the Family
			</div>";
			$success = false;
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Relation to the Head of the Family
			</div>";
			$success = false;
		}
	}else if (empty($password)){
		if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]).{8,}$/", $password) && !empty($password)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Password must contain at least 8 characters with at least 1 capital letter, 1 number, and 1 special character
			</div>";
			$success = false;
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Password
			</div>";
			$success = false;
		}
	}else if (empty($email)){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Enter your Email Address
		</div>";
		$success = false;
	}else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid email format
		</div>";
		$success = false;
	}else {
		$success = false;
		$query = "SELECT email FROM user WHERE email='$email' AND (status = 'resident' OR status = 'archive') AND user_id != '$id'";
		$res = mysqli_query($conn, $query);
		if(mysqli_num_rows($res)>0) {     
			$row = mysqli_fetch_assoc($res);
			if($email==isset($row['email']))
			{
				echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
				<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>This Email Address is already used!
				</div>";
				$success = false;
			}
	}
}

if ((!is_numeric($senior)&& !empty($senior)) || (!is_numeric($solo)&& !empty($solo))  || (!is_numeric($lgbt)&& !empty($lgbt))  || (!is_numeric($voter)&& !empty($voter))  || (!is_numeric($feed)&& !empty($feed))  || (!is_numeric($preg)&& !empty($preg))  || (!is_numeric($pwd)&& !empty($pwd)) ) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for numeric fields for Number of people living in the house,</div>";
    // Handle the error as needed, for example, redirect or show an error message
		exit;
	}else if (!empty($pwd) && empty($kind)) {
		if ((!preg_match("/^[a-zA-Z0-9, ]+$/", $kind))&& !empty($pwd)&& !empty($kind)) {
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for the 'kind of Disability' field</div>";
			exit;
		}else{
			echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
			<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If There are PWD's, you must list or define their disability.</div>";
			exit;
		} 
	}else if ($materials == "Materials of House") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Choose Your Home's Materials</div>";
		exit;
	}else if ($owner == "Types of Owner Ship") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid entry for Ownership of your dwelling</div>";
		exit;
	}else if (empty($nameowner) ){
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Empty name of the Owner.</div>";
		exit;
	}else if ($elect == "Do you have Electricity") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have electricity, please respond to the inquiry.</div>";
		exit;
	}else if ($water == "Own source of water ?") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have Source of water, please respond to the inquiry.</div>";
		exit;
	}else if ($waste == "Waste Management") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Invalid input for Waste management.</div>";
		exit;
	}else if ($waste == 'Others' && empty($wasteother)) {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>Please describe your alternative Waste management methods.</div>";
		exit;
	}else if ($cr == "Comfort Room") {
		echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
		<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>If you have Comfort Room, please respond to the inquiry.</div>";
		exit;
	}else 		
        // Check if files are not empty
if (!empty($valid)) {
    // Move the uploaded file to the target directory
    $targetDirectory = "../pic/"; // Update the path to your target directory
    $validFilePath = $targetDirectory . basename($valid);

    if (move_uploaded_file($_FILES['valid']['tmp_name'], $validFilePath)) {
        // Check file extension
        $validExtension = strtolower(pathinfo($validFilePath, PATHINFO_EXTENSION));

        if (in_array($validExtension, ['png', 'jpg', 'jpeg', 'pdf'])) {
            // Valid file format
            // Update the database
            $sql = "UPDATE `user` SET `valid_id`='$validFilePath' WHERE `user_id`='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
               echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
 Account updated successfully
  </div>
</div>';
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            // Invalid file format
            echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
                  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
                  Invalid file format for Valid ID. Allowed formats: png, jpg, jpeg, pdf
                  </div>";
            exit;
        }
    } else {
        // Error moving the file
        echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
              Error moving the uploaded file to the target directory.
              </div>";
        exit;
    }
}

else if (!empty($twobytwo)) {
    // Move the uploaded file to the target directory
    $targetDirectory = "../pic/"; // Update the path to your target directory
    $twobytwoFilePath = $targetDirectory . basename($twobytwo);

    if (move_uploaded_file($_FILES['twobytwo']['tmp_name'], $twobytwoFilePath)) {
        // Check file extension
        $twobytwoExtension = strtolower(pathinfo($twobytwoFilePath, PATHINFO_EXTENSION));

        if (in_array($twobytwoExtension, ['png', 'jpg', 'jpeg', 'pdf'])) {
            // Valid file format
            // Update the database
            $sql = "UPDATE `user` SET `picture_2x2`='$twobytwoFilePath' WHERE `user_id`='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
 Account updated successfully
  </div>
</div>';
            } 

            mysqli_close($conn);
        } else {
            // Invalid file format
            echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
                  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
                  Invalid file format for 2x2 Picture. Allowed formats: png, jpg, jpeg, pdf
                  </div>";
            exit;
        }
    } else {
        // Error moving the file
        echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
              Error moving the uploaded file to the target directory.
              </div>";
        exit;
    }
}



else if (!empty($votersCertificate)) {
    // Move the uploaded file to the target directory
    $targetDirectory = "../pic/"; // Update the path to your target directory
    $votersCertificateFilePath = $targetDirectory . basename($votersCertificate);

    if (move_uploaded_file($_FILES['votersCertificate']['tmp_name'], $votersCertificateFilePath)) {
        // Check file extension
        $votersCertificateExtension = strtolower(pathinfo($votersCertificateFilePath, PATHINFO_EXTENSION));

        if (in_array($votersCertificateExtension, ['png', 'jpg', 'jpeg', 'pdf'])) {
            // Valid file format
            // Update the database
            $sql = "UPDATE `user` SET `voters`='$votersCertificateFilePath' WHERE `user_id`='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                 echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
 Account updated successfully
  </div>
</div>';
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            // Invalid file format
            echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
                  <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
                  Invalid file format for Voters Certificate. Allowed formats: png, jpg, jpeg, pdf
                  </div>";
            exit;
        }
    } else {
        // Error moving the file
        echo "<div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>  
              <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:''><use xlink:href='#exclamation-triangle-fill'/></svg>
              Error moving the uploaded file to the target directory.
              </div>";
        exit;
    }
}
 else{
	// Insert data into the database
			    // Update data in the database
    $sql = "UPDATE `user` SET 
            `lastname`='$lname', 
            `firstname`='$fname', 
            `middleinitial`='$mname', 
            `address`='$address', 
            `mobilenum`='$mobile', 
            `bday`='$bday', 
            `age`='$age', 
            `gender`='$gender', 
            `civilstats`='$civil', 
            `educattainment`='$educ', 
            `profession`='$prof', 
            `place`='$place', 
            `locality`='$local', 
            `religion`='$religion', 
            `relation`='$relation', 
            `senior`='$senior', 
            `soloparent`='$solo', 
            `lgbt`='$lgbt', 
            `voter`='$voter', 
            `breastfeeding`='$feed', 
            `pregnant`='$preg', 
            `pwd`='$pwd', 
            `disability`='$kind', 
            `materials`='$materials', 
            `ownership`='$owner', 
            `namesowner`='$nameowner', 
            `electricity`='$elect', 
            `water`='$water', 
            `waste`='$waste', 
            `wastemanagement`='$wasteother', 
            `cr`='$cr', 
            `email`='$email', 
            `pass`='$password'
            WHERE `user_id`='$id'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
 Account updated successfully
  </div>
</div>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}   
		}
	





?>