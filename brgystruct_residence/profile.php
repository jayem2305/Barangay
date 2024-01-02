<?php session_start();
$id_user = $_SESSION['id_user'];

include('../dbh/dbh.inc.php');
$select_user=" SELECT * FROM user WHERE user_id='$id_user'";
$result_user = mysqli_query($conn, $select_user);
$row_user = mysqli_fetch_array($result_user);
$id=$row_user['user_id'] ;
$email= $row_user['email'] ;
$pass = $row_user['pass']  ;
$lname = $row_user['lastname'];
$fname = $row_user['firstname'];
$mname = $row_user['middleinitial']; 
$address=$row_user['address'] ;
$pnum=$row_user['mobilenum'];
$bday=$row_user['bday'] ;
$age=$row_user['age']  ;
$gender=$row_user['gender'] ;
$civilstats=$row_user['civilstats'] ;
$educattainment=$row_user['educattainment'] ;
$profession=$row_user['profession'] ;
$place=$row_user['place'] ;
$locality=$row_user['locality'] ;
$religion=$row_user['religion'] ;
$relation=$row_user['relation'] ;
$pic = $row_user['picture_2x2'] ;
$voters = $row_user['voters'] ;
$validid = $row_user['valid_id'] ;
$senior = $row_user['senior'] ;
$soloparent = $row_user['soloparent'] ;
$lgbt = $row_user['lgbt'] ;
$voter = $row_user['voter'] ;
$breastfeeding = $row_user['breastfeeding'] ;
$pregnant = $row_user['pregnant'] ;
$pwd = $row_user['pwd'] ;
$disability = $row_user['disability'] ;
$materials = $row_user['materials'] ;
$ownership = $row_user['ownership'] ;
$namesowner = $row_user['namesowner'] ;
$electricity = $row_user['electricity'] ;
$water = $row_user['water'] ;
$waste = $row_user['waste'] ;
$wastemanagement = $row_user['wastemanagement'] ;
$Cr = $row_user['cr'] ;
$electricity = $row_user['electricity'] ;
?>
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

    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">
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
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<style type="text/css">
   #hero {
      background-repeat: no-repeat;
      animation: carousel 1000s linear infinite;
  }

  @keyframes carousel {
      0%, 100% {
        background-position: 0 0;
    }
    25% {
        background-position: 100% 0;
    }
    50% {
        background-position: 200% 0;
    }
    75% {
        background-position: 300% 0;
    }
}

</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
    <!-- <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <h2 class="text-white fw-bold m-0">781 Zone 85</h2>
                </a>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


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
                <div class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 1.5rem;">
                     <a href="eventsannounce.php" class="nav-item nav-link text-white">Events</a>
                   <a href="certificate.php" class="nav-item nav-link text-white">My Certificate</a>
                   <a href="about.php" class="nav-item nav-link text-white" >About us</a>
                   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Settings
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="residentreports.php" class="dropdown-item" >Residents Reports</a></li>
                        <li><a href="profile.php" class="dropdown-item text-primary" >Profile</a></li>
                        <li><a href="../login/index.php" class="dropdown-item text-danger">Log Out</a></li>
                    </ul>
                </li>
               </div>
           </div>
       </nav>
   </div>
   <div class="toast-container position-absolute top-0 end-0 p-3" style="margin-top: 1rem;">
    <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true"> 
        <div class="toast-body">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-md-10">
                    <strong class="me-auto">Archived of resident is successful.</strong>
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
        <h1 style="font-size: 5rem;">Profile</h1>
    </div>
</section>
</div>


<!-- Features Start -->
<!-- profile view start -->
<div class="container-fluid py-5" style="margin-top: -5rem;">
    <div class="container-fluid">
        <div class="row g-0 feature-row">
            <nav aria-label="breadcrumb" style="text-align: center;">
                <h3><ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">Profile</li>
                </ol></h3>
            </nav> 
            <div class="col-lg-12">

                <!-- update start -->
                <div class="card w-100">
                  <div class="card-body">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-12 " data-wow-delay="0.5s">
                                <h2 class="mb-4">Update Profile</h2>
                                <div id="error-message2">
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                                      <div>
                                        Update Your information if only needed.
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 overflow-auto" style="max-height: 26rem;">
                                <div class="col-lg-3">
                                    <img src="<?php echo $pic; ?>" width="450" class="img-thumbnail">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="pic" name="twobytwo" value="<?php echo $pic; ?>">
                                        <label for="pic">Upload Your 2x2 Picture</label>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row g-3">
                                        <div class="col-lg-5">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                                                <label for="lnames " >Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                                                <label for="fname">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="mname" placeholder="M.I" name="mname" maxlength="1" value="<?php echo $mname; ?>">
                                                <label for="mname">M.I</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="address" placeholder="address" name="address"value="<?php echo $address; ?>">
                                                <label for="Address">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group input-group-lg mb-3">
                                                <span class="input-group-text" id="basic-addon1">+639</span>
                                                <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" value="<?php echo $pnum; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="bday" placeholder="Birthday" name="bday" value="<?php echo $bday; ?>" >
                                                <label for="Birthday">Birthday</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control form-control-lg" id="age" placeholder="Age" min="12" name="age"value="<?php echo $age; ?>" >
                                                <label for="mail">Age</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                           <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="gender" id="gender">
                                              <option selected>Gender</option>
                                              <option <?php echo ($gender === 'Male') ? 'selected' : ''; ?> value="Male">Male</option>
                                              <option <?php echo ($gender === 'Female') ? 'selected' : ''; ?> value="Female">Female</option>
                                          </select>
                                      </div>
                                      <div class="col-lg-4">
                                        <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="civil" id="civil">
                                          <option selected>Civil Status</option>
                                          <option <?php echo ($civilstats === 'Single') ? 'selected' : ''; ?> value="Single">Single</option>
                                          <option <?php echo ($civilstats === 'Married') ? 'selected' : ''; ?> value="Married">Married</option>
                                          <option <?php echo ($civilstats === 'Widowed') ? 'selected' : ''; ?> value="Widowed">Widowed</option>
                                      </select>
                                  </div>
                                  <div class="col-lg-4">
                                    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="educ" id="educ">
                                      <option selected>Education Attainment</option>
                                      <option <?php echo ($educattainment === 'Elementary') ? 'selected' : ''; ?> value="Elementary">Elementary</option>
                                      <option <?php echo ($educattainment === 'Junior High School') ? 'selected' : ''; ?> value="Junior High School">Junior High School</option>
                                      <option <?php echo ($educattainment === 'Senior High School') ? 'selected' : ''; ?> value="Senior High School">Senior High School</option>
                                      <option <?php echo ($educattainment === 'College Under Graduate') ? 'selected' : ''; ?> value="College Under Graduate">College Under Graduate</option>
                                      <option <?php echo ($educattainment === 'College Graduate') ? 'selected' : ''; ?> value="College Graduate">College Graduate</option>
                                      <option <?php echo ($educattainment === 'Masteral') ? 'selected' : ''; ?> value="Masteral">Masteral</option>
                                      <option <?php echo ($educattainment === 'Doctorate') ? 'selected' : ''; ?> value="Doctorate">Doctorate</option>
                                  </select>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="profession" placeholder="Profession" name="prof"value="<?php echo $profession; ?>" >
                                    <label for="profession">Profession</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="place" placeholder="Place of Work / School"  name="place" value="<?php echo $place; ?>">
                                    <label for="place">Place of Work / School</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="local"name="local" >
                                  <option selected>Locality</option>
                                  <option <?php echo ($locality === 'private') ? 'selected' : ''; ?> value="private">Private</option>
                                  <option <?php echo ($locality === 'public') ? 'selected' : ''; ?> value="public">Public</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="religion" placeholder="Religion"  name="religion" value="<?php echo $religion; ?>">
                        <label for="Religion">Religion</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="relation" placeholder="Relation to the head of the  Family"  name="relation" value="<?php echo $relation; ?>">
                        <label for="Relation">Relation to the head of the  Family</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Email Address" name="email" value="<?php echo $email; ?>">
                        <label for="email">Email Address</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                      <div class="input-group input-group-lg">
                        <input type="password" class="form-control form-control-lg col-lg-12" id="password" placeholder="Password" name="pass" oninput="updatePasswordRequirements()" value="<?php echo $pass; ?>">
                        <span class="input-group-text" id="basic-addon2">
                          <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
                      </span>
                      <div id="password-requirements" class="col-lg-12">
                          Password must have at least 8 characters, at least 1 uppercase letter, 1 number, and 1 special character.
                      </div>
                  </div>
              </div>
          </div>
          <hr>
          <h2 class="mb-4">Update Inhabitant Information</h2>
          <h5 class="text-primary">Number of people living in the house, Who Are:</h5>
          <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div role="alert" id="opTag2"></div>
                    <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="senior-1">Senior:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="senior" aria-describedby="basic-addon1" name="senior" id="senior" value="<?php echo $senior; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="Solo-1">Solo Parent:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="solo" aria-describedby="basic-addon1" name="solo" id="solo" value="<?php echo $soloparent; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="lgbt-1">LGBTQIA+:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="senior" aria-describedby="basic-addon1" name="lgbt" id="lgbt" value="<?php echo $lgbt; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="voter-1">Voters:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="voter" aria-describedby="basic-addon1" name="voter" id="voter" value="<?php echo $voter; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="feed-1">Breastfeeding:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="feed" aria-describedby="basic-addon1"name="feed" id="feed" value="<?php echo $breastfeeding; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group mb-3">
                          <span class="input-group-text" id="preg-1">Pregnant:</span>
                          <input type="text" class="form-control form-control-lg"  aria-label="preg" aria-describedby="basic-addon1"name="preg" id="preg" value="<?php echo $pregnant; ?>">
                      </div>
                  </div>
                  <div class="col-lg-2">
                      <div class="input-group input-group-lg mb-3">
                          <span class="input-group-text input-group-text-lg" id="pwd-1">PWD:</span>
                          <input type="text" class="form-control form-control-lg "  aria-label="pwd" aria-describedby="basic-addon1"name="pwd" id="pwd" value="<?php echo $pwd; ?>">
                      </div>
                  </div>
                  <div class="col-lg-10">
                    <div class="form-floating">
                        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="kind" id="kind" value="<?php echo $disability; ?>">
                        <label for="disability" >Kind of Disability</label>
                    </div> <br>
                </div>
                <br>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="materials" id="materials">
                      <option selected>Materials of House</option>
                      <option <?php echo ($materials === 'Wood') ? 'selected' : ''; ?> value="Wood">Wood</option>
                      <option <?php echo ($materials === 'Cement') ? 'selected' : ''; ?> value="Cement">Cement</option>
                      <option <?php echo ($materials === 'Wood and Cement&Cement') ? 'selected' : ''; ?> value="Wood and Cement&Cement">Wood and Cement</option>
                  </select>
              </div>
              <div class="col-lg-4">
                <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="owner" id="owner">
                  <option selected>Types of Owner Ship</option>
                  <option <?php echo ($ownership === 'Owner') ? 'selected' : ''; ?> value="Owner">Owner</option>
                  <option <?php echo ($ownership === 'Tenant') ? 'selected' : ''; ?> value="Tenant">Tenant</option>
                  <option <?php echo ($ownership === 'Boarding with the owner') ? 'selected' : ''; ?> value="Boarding with the owner">Boarding with the owner</option>
                  <option <?php echo ($ownership === 'Boarder/Roomer in a rented place') ? 'selected' : ''; ?> value="Boarder/Roomer in a rented place">Boarder/Roomer in a rented place</option>
                  <option <?php echo ($ownership === 'Informal Settler') ? 'selected' : ''; ?> value="Informal Settler">Informal Settler</option>
              </select>
          </div>
          <div class="col-lg-4">
            <div class="form-floating">
                <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="nameowner" id="nameowner" value="<?php echo $namesowner; ?>">
                <label for="ownership">Name of Owner</label>
            </div>
        </div>
        <div class="col-lg-6">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="elect" id="elect">
              <option selected>Do you have Electricity</option>
              <option <?php echo ($electricity === 'Yes') ? 'selected' : ''; ?> value="Yes">Yes</option>
              <option <?php echo ($electricity === 'No') ? 'selected' : ''; ?> value="No">No</option>
          </select>
      </div>
      <div class="col-lg-6">
        <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="water" id="water">
          <option selected>Own source of water ?</option>
          <option <?php echo ($water === 'Yes') ? 'selected' : ''; ?> value="Yes">Yes</option>
          <option <?php echo ($water === 'No') ? 'selected' : ''; ?> value="No">No</option>
      </select>
  </div>
  <div class="col-lg-6">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="waste" id="waste">
      <option selected>Waste Management</option>
      <option <?php echo ($waste === 'Burned') ? 'selected' : ''; ?> value="Burned">Burned</option>
      <option <?php echo ($waste === 'Buried') ? 'selected' : ''; ?> value="Buried">Buried</option>
      <option <?php echo ($waste === 'Recycled') ? 'selected' : ''; ?> value="Recycled">Recycled</option>
      <option <?php echo ($waste === 'Others') ? 'selected' : ''; ?> value="Others">Others</option>
  </select>
</div>
<div class="col-lg-6">
    <div class="form-floating">
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"name="wasteother" id="wasteother"value="<?php echo $wastemanagement; ?>" >
        <label for="disability" >Others</label>
    </div>
</div>
<div class="col-lg-12">
    <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="cr" id="cr">
      <option selected>Comfort Room</option>
      <option <?php echo ($Cr === 'Yes, We have') ? 'selected' : ''; ?> value="Yes, We have">Yes, We have</option>
      <option <?php echo ($Cr === "No, We don't") ? 'selected' : ''; ?> value="No, We don't">No, We don't</option>
  </select>
</div>
</div>
</div>
<hr>
<h2 class="mb-4">Update your Valid ID’s</h2>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-6" >
    <img src="../pic/<?php echo $validid; ?>"width="400">
    <div class="form-floating">
        <input type="file" class="form-control" id="idv"  name="valid">
        <label for="idv">Upload Your Valid I.D</label>
    </div>
</div>
<div class="col-lg-6">
    <img src="../pic/<?php echo $voters; ?>" width="250" class="img-thumbnail" style="margin-left: 4rem;">
    <div class="form-floating">
        <input type="file" class="form-control" id="voterscert" name="votersCertificate" >
        <label for="voterscert">Voters Certificate:</label>
    </div>
</div>
    </div>
</div>
<div style="margin-bottom: 1rem;">
</div>
<hr>
<div>


</div>
</div>
</div>
<br>
 <button class="btn btn-primary update-btn btn-lg" type="submit" id="registerButton" name="start" style="float: right;"
 data-lname="<?php echo $lname; ?>"
 data-fname="<?php echo $fname; ?>"
 data-mname="#mname"
 data-address="<?php echo $address; ?>"
 data-mobile="<?php echo $pnum; ?>"
 data-bday="<?php echo $bday; ?>"
 data-age="<?php echo $age; ?>"
 data-gender="<?php echo $gender; ?>"
 data-civil="<?php echo $civilstats; ?>"
 data-educ="<?php echo $educattainment; ?>"
 data-prof="<?php echo $profession; ?>"
 data-place="<?php echo $place; ?>"
 data-local="<?php echo $locality; ?>"
 data-religion="<?php echo $religion; ?>"
 data-relation="<?php echo $relation; ?>"
 data-email="<?php echo $email; ?>"
 data-password="<?php echo $pass; ?>"
 data-senior="<?php echo $senior; ?>"
 data-solo="<?php echo $soloparent; ?>"
 data-lgbt="<?php echo $lgbt; ?>"
 data-voter="<?php echo $voter; ?>"
 data-feed="<?php echo $breastfeeding; ?>"
 data-preg="<?php echo $pregnant; ?>"
 data-pwd="<?php echo $pwd; ?>"
 data-kind="<?php echo $disability; ?>"
 data-materials="<?php echo $materials; ?>"
 data-owner="<?php echo $ownership; ?>"
 data-nameowner="<?php echo $namesowner; ?>"
 data-elect="<?php echo $electricity; ?>"
 data-water="<?php echo $water; ?>"
 data-waste="<?php echo $waste; ?>"
 data-wasteother="<?php echo $wastemanagement; ?>"
 data-cr="<?php echo $cr; ?>"
 data-valid="<?php echo $validid; ?>"
 data-twobytwo="<?php echo $pic; ?>"
 data-votersCertificate="<?php echo $voters; ?>"
 data-id="<?php echo $id; ?>"
 >Update Account</button>
</div>
</div>
<!-- update end -->
</div>   
</div>
</div>  
</div>
</div>
</div>
</div>
<!-- Features End -->

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
                        &copy; <a class="fw-medium text-light" href="#">J.Rizz&Co.</a>, All Right Reserved.
                    </div>
                </div>
            </div>
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


                $(document).ready(function(){
                  $(document).on('click', '.update-btn', function () {
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
                      var $id = $(this).data('id');
                      var valid = $('#idv')[0].files[0];
                      var twobytwo = $('#pic')[0].files[0];
                      var votersCertificate = $('#voterscert')[0].files[0];

                      var formData = new FormData();
                      formData.append('updateaccount', 'updateaccount');
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
                      formData.append('feed',feed);
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
                      formData.append('id', $id);
                      console.log('Sending AJAX request...');
                      $.ajax({
                        url: "../dbh/update.dbh.php",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (result) { 
                            if (result.includes("Account updated successfully")) {
                                console.log('Last step detected. Toggling modal...');
                                $('#error-message2').html(result);  
                                setTimeout(function () {
                                    location.reload();
                                }, 500);
                            }   
                            $('#error-message2').html(result);                                          
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX request failed:', xhr, status, error);
                            $('#error-message2').html("AJAX request failed: " + xhr.statusText);
                        }
                    });
                  });
});



</script>
</body>

</html>