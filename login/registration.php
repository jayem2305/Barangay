
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>781 Zone 85</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../pic/brgy_logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
</svg>
</head>
<style>
    .toast-container {
        z-index: 9999;

    }
    .circle-number-color {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        background-color: #1C2035; /* Dark background color */
        color: #fff; /* Text color */
        margin-right: 10px; /* Adjust spacing */
    }

    .circle-number {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        border: 1px solid #1C2035; /* Set border color */
        color: #1C2035; /* Text color */
        margin-right: 10px; /* Adjust spacing */
    }
</style>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
    <!-- Navbar Start -->
    <div class="container-fluid bg-dark sticky-top">
        <div class="container-fluid bg-transparent">
            <nav class="navbar navbar-expand-lg bg-transparent navbar-light p-lg-0">
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ">
                    <a class="navbar-brand" href="index.php">
                        <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">

                    </a>
                </div> 
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                 <a href="onlineservice.php" class="nav-item nav-link text-white" style="" >Online Services</a>
                 <a href="registration.php" class="nav-item nav-link text-primary">Create an Account</a>
                 <a href="login.php" class="nav-item nav-link text-white">Login</a>
             </div>
         </div>
     </nav>
 </div>
</div>
<!-- Navbar End -->
<div class="toast-container position-absolute top-0 end-0 p-3" style="margin-top: 3rem;">
    <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true"> 
        <div class="toast-body">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-md-10">
                   <strong class="me-auto">You are now Registered.</strong>
               </div>
               <div class="col-lg-2 col-sm-2 col-md-2">
                   <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
           </div>


       </div>
   </div>
</div>
</div>

<!-- Navbar End -->

<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(50vh - 50px);
    background: url('../pic/whole.png') top center;
    background-size: cover;
    opacity: .8;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <h1 style="font-size: 4rem;">Create An <br>Account</h1>
    </div>
</section>
</div>
<!-- Navbar End -->
<!-- register start -->
<div class="card w-100">
    <div class="card-body">
        <div class="container-fluid">
         <div class="container-fluid">
           <h2 class="mb-4" >Create An Account</h2>
           <!-- Step 1: Personal Information -->
           <div class="step" id="step1" style="display: block;"> 
            <div class="row" style="margin-left:5rem;">
                <div class="col-lg-4">
                 <h5>Fill up your Personal Information <span class="circle-number-color">1</span></h5>
             </div>
             <div class="col-lg-3">
                 <h5>Inhabitant Information <span class="circle-number">2</span></h5>
             </div>
             <div class="col-lg-5" >
                 <h5>Upload your Valid ID’s <span class="circle-number">3</span></h5>
             </div>
         </div>
         <div id="error-message" style="display: none;" class="alert alert-danger" role="alert">
          <!-- Error messages will be displayed here -->
      </div>
      <div class="row"  style="margin-top: 3rem;">
          <div class="col-lg-12 ">
            <div class="row g-3">
               <div role="alert" id="opTag"></div>
               <div class="col-lg-5">
                <div class="form-floating">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" >
                    <label for="lnames ">Last Name</label>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-floating">
                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" >
                    <label for="fname">First Name</label>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="mname" placeholder="M.I" name="mname" maxlength="1">
                    <label for="mname">M.I</label>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <input type="text" class="form-control" id="address" placeholder="address" name="address">
                    <label for="Address">Address</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="basic-addon1">+639</span>
                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-floating">
                    <input type="date" class="form-control" id="bday" placeholder="Birthday" name="bday" max="2005-12-31">
                    <label for="Birthday">Birthday</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-floating">
                    <input type="number" class="form-control form-control-lg" id="age" placeholder="Age" min="12" name="age" >
                    <label for="mail">Age</label>
                </div>
            </div>
            <div class="col-lg-4">
             <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="gender" id="gender">
              <option selected>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
      </div>
      <div class="col-lg-4">
        <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="civil" id="civil">
          <option selected>Civil Status</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Widowed">Widowed</option>
      </select>
  </div>
  <div class="col-lg-4">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="educ" id="educ">
      <option selected>Education Attainment</option>
      <option value="Elementary">Elementary</option>
      <option value="Junior High School">Junior High School</option>
      <option value="Senior High School">Senior High School</option>
      <option value="College Under Graduate">College Under Graduate</option>
      <option value="College Graduate">College Graduate</option>
      <option value="Masteral">Masteral</option>
      <option value="Doctorate">Doctorate</option>
  </select>
</div>

</div>
</div>
<div class="col-lg-12 ">
    <div class="row g-3">
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="profession" placeholder="Profession" name="prof" >
                <label for="profession">Profession</label>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="place" placeholder="Place of Work / School"  name="place">
                <label for="place">Address of Work / School</label>
            </div>
        </div>
        <div class="col-lg-4">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="local"name="local">
              <option selected>Locality</option>
              <option value="private">Private</option>
              <option value="public">Public</option>
          </select>
      </div>
      <div class="col-lg-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="religion" placeholder="Religion"  name="religion">
            <label for="Religion">Religion</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="relation" placeholder="Relation to the head of the  Family"  name="relation">
            <label for="Relation">Relation to the head of the  Family</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="email" placeholder="Email Address" name="email">
            <label for="email">Email Address</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
          <div class="input-group input-group-lg">
            <input type="password" class="form-control form-control-lg col-lg-12" id="password" placeholder="Password" name="pass" oninput="updatePasswordRequirements()">
            <span class="input-group-text" id="basic-addon2">
              <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
          </span>
          <div id="password-requirements" class="col-lg-12">
              Password must have at least 8 characters, at least 1 uppercase letter, 1 number, and 1 special character.
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-primary firststep-btn" style="float:right;"
data-lname="lname"
data-fname="fname"
data-mname="mname"
data-address="address"
data-mobile="mobile"
data-bday="bday"
data-age="age"
data-gender="gender"
data-civil="civil"
data-educ="educ"
data-prof="prof"
data-place="place"
data-local="local"
data-religion="religion"
data-relation="relation"
data-email="email"
data-password="pass">Next</button>

</div>

<!-- Step 2: Inhabitant Information -->
<div class="step" id="step2" style="display:none ;">
    <div class="row" style="margin-left:5rem;">
        <div class="col-lg-4">
         <h5>Fill up your Personal Information <span class="circle-number-color">1</span></h5>
     </div>
     <div class="col-lg-3">
         <h5>Inhabitant Information <span class="circle-number-color">2</span></h5>
     </div>
     <div class="col-lg-5" >
         <h5>Upload your Valid ID’s <span class="circle-number">3</span></h5>
     </div>
 </div>
 <div id="error-message2" style="display: none;" class="alert alert-danger" role="alert">
    <!-- Error messages will be displayed here -->
</div>
<h5 class="text-primary">Number of people living in the house, Who Are:</h5>
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div role="alert" id="opTag2"></div>
            <div class="col-lg-2">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="senior-1">Senior:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="senior" aria-describedby="basic-addon1" name="senior" id="senior" value="0" min="0">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="Solo-1">Solo Parent:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="solo" aria-describedby="basic-addon1" name="solo" id="solo" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-2">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="lgbt-1">LGBTQIA+:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="senior" aria-describedby="basic-addon1" name="lgbt" id="lgbt" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-2">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="voter-1">Voters:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="voter" aria-describedby="basic-addon1" name="voter" id="voter" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-3">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="feed-1">Breastfeeding:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="feed" aria-describedby="basic-addon1"name="feed" id="feed" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-2">
              <div class="input-group mb-3">
                  <span class="input-group-text" id="preg-1">Pregnant:</span>
                  <input type="number" class="form-control form-control-lg"  aria-label="preg" aria-describedby="basic-addon1"name="preg" id="preg" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-2">
              <div class="input-group input-group-lg mb-3">
                  <span class="input-group-text input-group-text-lg" id="pwd-1">PWD:</span>
                  <input type="number" class="form-control form-control-lg "  aria-label="pwd" aria-describedby="basic-addon1"name="pwd" id="pwd" value="0"  min="0">
              </div>
          </div>
          <div class="col-lg-8">
            <div class="form-floating">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="kind" id="kind" >
                <label for="disability" >Kind of Disability</label>
            </div> <br>
        </div>
        <hr class="border border-primary border-5">
        <br>
    </div>
</div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-4">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="materials" id="materials">
              <option selected>Materials of House</option>
              <option value="Wood">Wood</option>
              <option value="Cement">Cement</option>
              <option value="Wood and Cement&Cement">Wood and Cement</option>
          </select>
      </div>
      <div class="col-lg-4">
        <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="owner" id="owner">
          <option selected>Types of Owner Ship</option>
          <option value="Owner">Owner</option>
          <option value="Tenant">Tenant</option>
          <option value="Boarding with the owner">Boarding with the owner</option>
          <option value="Boarder/Roomer in a rented place">Boarder/Roomer in a rented place</option>
          <option value="Informal Settler">Informal Settler</option>
      </select>
  </div>
  <div class="col-lg-4">
    <div class="form-floating">
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="nameowner" id="nameowner">
        <label for="ownership">Name of Owner</label>
    </div>
</div>
<div class="col-lg-6">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="elect" id="elect">
      <option selected>Do you have Electricity</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
  </select>
</div>
<div class="col-lg-6">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="water" id="water">
      <option selected>Own source of water ?</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
  </select>
</div>
<div class="col-lg-6">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="waste" id="waste">
      <option selected>Waste Management</option>
      <option value="Burned">Burned</option>
      <option value="Buried">Buried</option>
      <option value="Recycled">Recycled</option>
      <option value="Others">Others</option>
  </select>
</div>
<div class="col-lg-6">
    <div class="form-floating">
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="wasteother" id="wasteother" >
        <label for="disability" >Others</label>
    </div>
</div>
<div class="col-lg-12">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="cr" id="cr">
      <option selected>Comfort Room</option>
      <option value="Yes, We have">Yes, We have</option>
      <option value="No, We don't">No, We don't</option>
</select>
</div>
</div>
</div>
<div style="float:right;">
    <button type="button" class="btn btn-primary"  onclick="prevStep(1)" >Previous</button>
    <button type="button" class="btn btn-primary secondstep-btn"    
    data-senior="senior"
    data-solo="solo"
    data-lgbt="lgbt"
    data-voter="voter"
    data-feed="feed"
    data-preg="preg"
    data-pwd="pwd"
    data-kind="kind"
    data-materials="materials"
    data-owner="owner"
    data-nameowner="nameowner"
    data-elect="elect"
    data-water="water"
    data-waste="waste"
    data-wasteother="wasteother"
    data-cr="cr"
    data-lname="lname"
    data-fname="fname"
    data-mname="mname">Next</button>
</div>
</div>
</div>
</div>
<!-- Step 3: Upload Valid IDs -->
<div class="step" id="step3" style="display: none;">
    <div class="row" style="margin-left:5rem;">
       <div class="col-lg-4">
         <h5>Fill up your Personal Information <span class="circle-number-color">1</span></h5>
     </div>
     <div class="col-lg-3">
         <h5>Inhabitant Information <span class="circle-number-color">2</span></h5>
     </div>
     <div class="col-lg-5" >
         <h5>Upload your Valid ID’s <span class="circle-number-color">3</span></h5>
     </div>
 </div>
 <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="50" height="50" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    <ul>
        <li>Maximum file size: 50 MB, maximum number of files: 1</li>
        <li>Accepted file types:.pdf .png .jpg .jpeg</li>
        <li> Image must be clear and readable</li>
        <li> Follow the Example image Provided below:</li>
        <li>Capture only the front of ID that contains: Your Picture,Name and Address </li>
    </ul>
</div>
</div>
<div role="alert" id="opTag3"></div>

<hr>

<div class="row">
    <div id="error-message3" style="display: none;" class="alert alert-danger" role="alert">
      <!-- Error messages will be displayed here -->
  </div>
  <div class="col-lg-4" style="margin-top:6.5rem">
    <img src="../pic/id.png"width="400">
    <div class="form-floating">
        <input type="file" class="form-control" id="idv"  name="valid">
        <label for="idv">Upload Your Valid I.D</label>
    </div>
</div>
<div class="col-lg-4" style="margin-top:11rem">
    <img src="../pic/2x2.png" width="400" class="img-thumbnail">
    <div class="form-floating">
        <input type="file" class="form-control" id="pic" name="twobytwo">
        <label for="pic">Upload Your 2x2 Picture</label>
    </div>
</div>
<div class="col-lg-4">
    <img src="../pic/votersid.png" width="250" class="img-thumbnail" style="margin-left: 4rem;">
    <div class="form-floating">
        <input type="file" class="form-control" id="voterscert" name="votersCertificate" >
        <label for="voterscert">Voters Certificate:</label>
    </div>
</div>
</div>
<br>
<div style="float:right;">
    <button type="button" class="btn btn-primary"  onclick="prevStep(2)">Previous</button>
    <button class="btn btn-primary laststep-btn" type="submit" id="registerButton" name="start"
    data-lname="lname"
    data-fname="fname"
    data-mname="mname"
    data-address="address"
    data-mobile="mobile"
    data-bday="bday"
    data-age="age"
    data-gender="gender"
    data-civil="civil"
    data-educ="educ"
    data-prof="prof"
    data-place="place"
    data-local="local"
    data-religion="religion"
    data-relation="relation"
    data-email="email"
    data-password="pass"
    data-senior="senior"
    data-solo="solo"
    data-lgbt="lgbt"
    data-voter="voter"
    data-feed="feed"
    data-preg="preg"
    data-pwd="pwd"
    data-kind="kind"
    data-materials="materials"
    data-owner="owner"
    data-nameowner="nameowner"
    data-elect="elect"
    data-water="water"
    data-waste="waste"
    data-wasteother="wasteother"
    data-cr="cr"
    data-valid="valid"
    data-twobytwo="twobytwo"
    data-votersCertificate="votersCertificate"
    >Create Account</button>
</div>
</div>



</div>
</div>
<!-- register end -->
<!-- Modal wait for approval -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lname = $_POST['lname'];
    $result = generateFormattedString($lname);
    "Generated String: $result";
}
function generateFormattedString($surname) {
// Get the current month (abbreviated) and year
    $currentYear = date('MdY');
// Check if a file with the generated name already exists
    while (file_exists("REG_${currentYear}_${surname}")) {
        $initialNumber++;
        $uniqueIdentifier = sprintf('%02d', $initialNumber);
    }

// Construct the final string
    $formattedString = "REG_${currentYear}_${surname}";

    return $formattedString;
}
?>

<div class="modal fade bg-primay" id="exampleModal"data-bs-backdrop="static" data-bs-keyboard="false"tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl alert-success">
        <div class="alert alert-success" role="alert">
         <h3 class="text-success" style="text-align: center;">The account had been successfully handed to the administrator.</h3>
         <h1  class="text-danger" style="text-align: center;">Account Control Number: <i><span id="controlNumber"></span></i></h1>
         <p class="text-success">Your patience is greatly appreciated, as we process your account within 3-5 business days. Will subsequently email it to your provided email address. We regret any cause of inconvenience this might cause to you, but we assure that care will be implemented while under queue. Thank you</p>
         <div class="modal-content bg-transparent" style="border: none;">
           <div style="margin-left:31rem">
            <a href="index.php" class="btn btn-success">Close</a>
        </div>
    </div>
</div>
</div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Barangay 781 Zone 85 Sta. Ana Manila City</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 8856 9560</p>
                <p class="mb-2" style="font-size: 13px;"><i class="fa fa-envelope me-3" style="font-size: 19px;"></i>barangay781.2023@gmail.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://mail.google.com/mail/?view=cm&fs=1&to=barangay781.2023@gmail.com" target="_blank"><i
                        class="fab fa-google"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100089497350963" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                            <div class="col-lg-3 col-md-6">
                                <h4 class="text-white mb-4">Business Hours</h4>
                                <p class="mb-1">Monday - Friday</p>
                                <h6 class="text-light">09:00 am - 07:00 pm</h6>
                                <p class="mb-1">Saturday</p>
                                <h6 class="text-light">09:00 am - 12:00 pm</h6>
                                <p class="mb-1">Sunday</p>
                                <h6 class="text-light">Closed</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Copyright Start -->
                <div class="container-fluid copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="fw-medium text-light" href="#">JRizz&Co.</a>, All Right Reserved.
                            </div>

                            <!-- Copyright End -->


                            <!-- Back to Top -->
                            <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                                class="bi bi-arrow-up"></i></a>


                                <!-- JavaScript Libraries -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                                <script src="lib/wow/wow.min.js"></script>
                                <script src="lib/easing/easing.min.js"></script>
                                <script src="lib/waypoints/waypoints.min.js"></script>
                                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                                <script src="lib/lightbox/js/lightbox.min.js"></script>

                                <!-- Template Javascript -->
                                <script src="js/main.js"></script>
                                <script>
    // Function to update the control number when the last name changes
                                    function updateControlNumber() {
                                        var currentDate = new Date();
                                        var month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
                                        var day = currentDate.getDate().toString().padStart(2, '0');
                                        var year = currentDate.getFullYear().toString();
        var lastName = $('#lname').val() || 'UNKNOWN'; // Use 'UNKNOWN' if last name is not provided
        var controlNumber = 'REG_' + month + day + year + '_' + lastName;
        
        // Display the updated control number
        $('#controlNumber').text(controlNumber);
    }

    // Ensure the script runs after the DOM is ready
    $(document).ready(function() {
        // Initial update when the page loads
        updateControlNumber();

        // Update the control number when the last name changes
        $('#lname').on('input', updateControlNumber);
    });
</script>
<script>
    $('input[name="enrol"]').change(function() {
      if ($('#yesenrol').is(':checked')) {
        $('#School').prop('disabled', false);
        $('#COR').prop('disabled', false);
        $('#Level').prop('disabled', false);
    } else {
        if ($('#noenrol').is(':checked')) {
         $('#School').prop('disabled', true);
         $('#COR').prop('disabled', true);
         $('#Level').prop('disabled', true);
     }
 }
});
    $('input[name="tenant"]').change(function() {
      if ($('#yestenant').is(':checked')) {
        $('#landlord').prop('disabled', false);
    } else {
        if ($('#notenant').is(':checked')) {
         $('#landlord').prop('disabled', true);
     }
 }
});

    $(document).ready(function () {
        toggleKindInput();
        $('#pwd').on('input', function () {
            toggleKindInput();
        });

    });

    function toggleKindInput() {
        var pwd = $('#pwd').val();
        var kindInput = $('#kind');
        if (pwd === '' || parseFloat(pwd) === 0) {
            kindInput.prop('disabled', true);
        } else {
            kindInput.prop('disabled', false);
        }
    }   
    $(document).ready(function () {
        // Attach an event listener to the role select element
        $('#owner').on('change', function () {
            // Check if the selected value is 'owner'
            if ($(this).val() === 'Owner') {
                // If 'owner' is selected, display lname, fname, and mname in nameowner
                displayOwnerInfo();
                // Disable the nameowner input
                $('#nameowner').prop('readonly', true);
            } else {
                // If another role is selected, clear nameowner and enable the input
                clearOwnerInfo();
                $('#nameowner').prop('readonly', false);
            }
        });
    });

    function displayOwnerInfo() {
        var lname = $('#lname').val();
        var fname = $('#fname').val();
        var mname = $('#mname').val();

        // Concatenate lname, fname, and mname and set it as the value of nameowner
        $('#nameowner').val(lname + ' ' + fname + ' ' + mname);
    }

    function clearOwnerInfo() {
        // Clear the value of nameowner
        $('#nameowner').val('');
    }        
    $(document).ready(function () {
        // Attach an event listener to the waste select element
        $('#waste').on('change', function () {
            // Check if the selected value is 'others'
            if ($(this).val() === 'Others') {
                // If 'others' is selected, enable the wasteother input
                $('#wasteother').prop('disabled', false);
            } else {
                // If another option is selected, clear and disable the wasteother input
                $('#wasteother').val('');
                $('#wasteother').prop('disabled', true);
            }
        });
    });        
    var step = 1;
    $(document).ready(function(){
        $(document).on('click', '.firststep-btn', function () {
            var lname = $('#lname').val();
            var fname = $('#fname').val();
            var mname = $('#mname').val();
            var address = $('#address').val();
            var mobile = $('#mobile').val();
            var bday = $('#bday').val();
            var age = $('#age').val();
            var gender = $('#gender').val();
            var civil = $('#civil').val();
            var educ = $('#educ').val();
            var prof = $('#profession').val();
            var local = $('#local').val();
            var place = $('#place').val();
            var religion = $('#religion').val();
            var relation = $('#relation').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var formData = new FormData();
            formData.append('firstsetp', 'firstsetp');
            formData.append('lname', lname);
            formData.append('fname', fname);
            formData.append('mname', mname);
            formData.append('address', address);
            formData.append('mobile', mobile);
            formData.append('bday', bday);
            formData.append('age', age);
            formData.append('gender', gender);
            formData.append('civil', civil);
            formData.append('educ', educ);
            formData.append('prof', prof);
            formData.append('local', local);
            formData.append('place', place);
            formData.append('religion', religion);
            formData.append('relation', relation);
            formData.append('email', email);
            formData.append('pass', password);
            console.log('Sending AJAX request...');
            $.ajax({
                url: "../dbh/reg.dbh.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    if (result.includes("NEXTSTEP")) {
                       nextStep(2);
                   }  
                   $('#opTag').html(result);                                             
               },
               error: function (xhr, status, error) {
                console.error('AJAX request failed:', xhr, status, error);
                $('#opTag').html("AJAX request failed: " + xhr.statusText);
            }
        });

        });
        $(document).on('click', '.secondstep-btn', function () {
            var lname = $('#lname').val();
            var fname = $('#fname').val();
            var mname = $('#mname').val();
            var senior = $('#senior').val();
            var solo = $('#solo').val();
            var lgbt = $('#lgbt').val();
            var voter = $('#voter').val();
            var feed = $('#feed').val();
            var preg = $('#preg').val();
            var pwd = $('#pwd').val();
            var kind = $('#kind').val();
            var materials = $('#materials').val();
            var owner = $('#owner').val();
            var nameowner = $('#nameowner').val();
            var elect = $('#elect').val();
            var water = $('#water').val();
            var waste = $('#waste').val();
            var wasteother = $('#wasteother').val();
            var cr = $('#cr').val();
            var formData = new FormData();
            formData.append('secondsetp', 'secondsetp');
            formData.append('lname', lname);
            formData.append('fname', fname);
            formData.append('mname', mname);
            formData.append('senior', senior);
            formData.append('solo', solo);
            formData.append('lgbt', lgbt);
            formData.append('voter', voter);
            formData.append('feed', feed);
            formData.append('preg', preg);
            formData.append('pwd', pwd);
            formData.append('kind', kind);
            formData.append('materials', materials);
            formData.append('owner', owner);
            formData.append('nameowner', nameowner);
            formData.append('elect', elect);
            formData.append('water', water);
            formData.append('waste', waste);
            formData.append('wasteother', wasteother);
            formData.append('cr', cr);
            console.log('Sending AJAX request...');
            $.ajax({
                url: "../dbh/reg.dbh.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    if (result.includes("NEXTSTEP")) {
                       nextStep(3);
                   }  
                   $('#opTag2').html(result);                                             
               },
               error: function (xhr, status, error) {
                console.error('AJAX request failed:', xhr, status, error);
                $('#opTag2').html("AJAX request failed: " + xhr.statusText);
            }
        });

        });

        $(document).on('click', '.laststep-btn', function () {
            var lname = $('#lname').val();
            var fname = $('#fname').val();
            var mname = $('#mname').val();
            var address = $('#address').val();
            var mobile = $('#mobile').val();
            var bday = $('#bday').val();
            var age = $('#age').val();
            var gender = $('#gender').val();
            var civil = $('#civil').val();
            var educ = $('#educ').val();
            var prof = $('#profession').val();
            var local = $('#local').val();
            var place = $('#place').val();
            var religion = $('#religion').val();
            var relation = $('#relation').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var senior = $('#senior').val();
            var solo = $('#solo').val();
            var lgbt = $('#lgbt').val();
            var voter = $('#voter').val();
            var feed = $('#feed').val();
            var preg = $('#preg').val();
            var pwd = $('#pwd').val();
            var kind = $('#kind').val();
            var materials = $('#materials').val();
            var owner = $('#owner').val();
            var nameowner = $('#nameowner').val();
            var elect = $('#elect').val();
            var water = $('#water').val();
            var waste = $('#waste').val();
            var wasteother = $('#wasteother').val();
            var cr = $('#cr').val();
            var valid = $('#idv')[0].files[0];
            var twobytwo = $('#pic')[0].files[0];
            var votersCertificate = $('#voterscert')[0].files[0];

            var formData = new FormData();
            formData.append('createaccount', 'createaccount');
            formData.append('lname', lname);
            formData.append('fname', fname);
            formData.append('mname', mname);
            formData.append('address', address);
            formData.append('mobile', mobile);
            formData.append('bday', bday);
            formData.append('age', age);
            formData.append('gender', gender);
            formData.append('civil', civil);
            formData.append('educ', educ);
            formData.append('prof', prof);
            formData.append('local', local);
            formData.append('place', place);
            formData.append('religion', religion);
            formData.append('relation', relation);
            formData.append('email', email);
            formData.append('pass', password);
            formData.append('senior', senior);
            formData.append('solo', solo);
            formData.append('lgbt', lgbt);
            formData.append('voter', voter);
            formData.append('feed', feed);
            formData.append('preg', preg);
            formData.append('pwd', pwd);
            formData.append('kind', kind);
            formData.append('materials', materials);
            formData.append('owner', owner);
            formData.append('nameowner', nameowner);
            formData.append('elect', elect);
            formData.append('water', water);
            formData.append('waste', waste);
            formData.append('wasteother', wasteother);
            formData.append('cr', cr);
            formData.append('valid', valid);
            formData.append('twobytwo', twobytwo);
            formData.append('votersCertificate', votersCertificate);
            console.log('Sending AJAX request...');
            $.ajax({
                url: "../dbh/reg.dbh.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) { 
                    if (result.includes("laststep")) {
                        console.log('Last step detected. Toggling modal...');
    $("#exampleModal").modal('show'); // Use modal('show') to display the modal
}

$('#opTag3').html(result);                                             
},
error: function (xhr, status, error) {
    console.error('AJAX request failed:', xhr, status, error);
    $('#opTag3').html("AJAX request failed: " + xhr.statusText);
}
});

        });
});

                             /*
                               */

function nextStep(step) {
    var currentStep = document.getElementById('step' + step);
    currentStep.style.display = 'block';

    var previousStep = document.getElementById('step' + (step - 1));
    previousStep.style.display = 'none';
}

function prevStep(step) {
    var currentStep = document.getElementById('step' + step);
    currentStep.style.display = 'block';

    var nextStep = document.getElementById('step' + (step + 1));
    nextStep.style.display = 'none';
}

function updatePasswordRequirements() {
    var pass = document.getElementById('password').value;
    var passwordRequirements = document.getElementById('password-requirements');
                                // Define the password requirements
    var hasMinLength = pass.length >= 8;
    var hasUppercase = /[A-Z]/.test(pass);
    var hasNumber = /\d/.test(pass);
    var hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(pass);

                                // Update the display based on the requirements
    passwordRequirements.innerHTML = "Password must have at least 8 characters, at least 1 uppercase letter, 1 number, and 1 special character.";
    if (hasMinLength && hasUppercase && hasNumber && hasSpecialChar) {
      passwordRequirements.style.color = 'green';
      passwordRequirements.innerHTML = 'Password meets the requirements.';
  } else {
      passwordRequirements.style.color = 'red';
  }
}
  const passwordInput = document.getElementById('password');
                     const toggleButton = document.getElementById('togglePassword');
                     const eyeIcon = document.getElementById('eyeIcon');
                     let isPasswordVisible = false;

                     toggleButton.addEventListener('click', () => {
                        if (isPasswordVisible) {
                            passwordInput.type = 'password';
                            eyeIcon.classList.remove('bi-eye');
                            eyeIcon.classList.add('bi-eye-slash');
                        } else {
                            passwordInput.type = 'text';
                            eyeIcon.classList.remove('bi-eye-slash');
                            eyeIcon.classList.add('bi-eye');
                        }
                        isPasswordVisible = !isPasswordVisible;
                    });
</script>
<!-- mobile number -->
<script>
    // Get the input element
    const mobileInput = document.getElementById('mobile');

    // Add an event listener to show the format hint
    mobileInput.addEventListener('input', function () {
        // Format the input value
        let formattedValue = this.value.replace(/\D/g, ''); // Remove non-digit characters

        // Check if the input is empty after formatting
        if (formattedValue === '') {
            // Set the input value as empty
            this.value = '';
        } else {
            // Apply formatting
            formattedValue = formattedValue.substring(0, 4) + '-' + formattedValue.substring(4, 9);

            // Update the input value with the formatted value
            this.value = formattedValue;
        }
    });
</script>





</body>

</html>