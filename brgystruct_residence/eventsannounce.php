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
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>
<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
<path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
</svg>
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/dataTables.min.css" rel="stylesheet">
<!-- Template Stylesheet -->

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
    <div id="spinner"class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
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
               <a href="eventsannounce.php" class="nav-item nav-link active">Events</a>
               <a href="certificate.php" class="nav-item nav-link text-white">My Certificate</a>
               <a href="about.php" class="nav-item nav-link text-white" >About us</a>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Settings
             </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="residentreports.php" class="dropdown-item" >Residents Reports</a></li>
                <li><a href="profile.php" class="dropdown-item" >Profile</a></li>
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
<div class="container-fluid position-relative" data-aos="fade-up" data-aos-delay="500">
 <div class="container-fluid">
    <div class="row">
          <div class="col-lg-4 bg-dark">
            <h1 class="text-light" style="text-align:center;">EVENTS</h1>
        </div>
          <div class="col-lg-8">
             <h1 class="text-dark" style="text-align:center;">ANNOUNCEMENTS</h1>
         </div>
        <div class="col-lg-4 bg-dark overflow-auto" style="max-height:30rem;">
                      <?php
            include '../dbh/dbh.inc.php';
            $sql = "SELECT * FROM announcements WHERE a_status = 'Event' AND a_display= 'display'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
               $fileName = basename($row['a_pic']);
               if (!empty($fileName) && $fileName != 'uploads') {
                $setfilename = $fileName;
            }
            $selected_time = new DateTime($row['a_date'] . ' ' . $row['a_time']);
            $current_time = new DateTime('now');
            $time_difference = $current_time->diff($selected_time);
            if ($time_difference->y > 0) {
                $timestatus =  'Last updated '.$time_difference->y . ' year(s) ago';
            } elseif ($time_difference->m > 0) {
             $timestatus =  'Last updated '.$time_difference->m . ' month(s) ago';
         } elseif ($time_difference->d > 0) {
            if ($time_difference->d == 1) {
             $timestatus =  'Last updated Yesterday at ' . $selected_time->format('h:i A');
         } else {
            $timestatus =  'Last updated '.$time_difference->d . ' day(s) ago';
        }
    } elseif ($time_difference->h > 0) {
        $timestatus =  'Last updated '.$time_difference->h . ' hours ago';
    } elseif ($time_difference->i > 0) {
        $timestatus = 'Last updated '. $time_difference->i . ' minute(s) ago';
    } else {
        $timestatus = 'Just now';
    }
    ?>
    <div class="card mb-3 border-primary" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4 bg-primary ">
                <h1 class="text-light" style="text-align:center;"> <?php echo date(' M. ', strtotime($row['a_date'])); ?><br><?php echo date(' j ', strtotime($row['a_date']));?> <br><?php echo date(' Y ', strtotime($row['a_date'])); ?></h1>
          </div>
          <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['a_title'];?></h5>
                <p class="card-text">Start Date: <?php echo date(' M. j, Y ', strtotime($row['a_startdate']));?></p>
                <p class="card-text">End Date: <?php echo date(' M. j, Y ', strtotime($row['a_enddate']));?></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo  $timestatus;?></small></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>
        </div>
        <div class="col-lg-8 overflow-auto" style="max-height:30rem;">
            <?php
            include '../dbh/dbh.inc.php';
            $sql = "SELECT * FROM announcements WHERE a_status = 'Announcement' AND a_display= 'display'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
               $fileName = basename($row['a_pic']);
               if (!empty($fileName) && $fileName != 'uploads') {
                $setfilename = $fileName;
            }
            $selected_time = new DateTime($row['a_date'] . ' ' . $row['a_time']);
            $current_time = new DateTime('now');
            $time_difference = $current_time->diff($selected_time);
            if ($time_difference->y > 0) {
                $timestatus =  'Last updated '.$time_difference->y . ' year(s) ago';
            } elseif ($time_difference->m > 0) {
             $timestatus =  'Last updated '.$time_difference->m . ' month(s) ago';
         } elseif ($time_difference->d > 0) {
            if ($time_difference->d == 1) {
             $timestatus =  'Last updated Yesterday at ' . $selected_time->format('h:i A');
         } else {
            $timestatus =  'Last updated '.$time_difference->d . ' day(s) ago';
        }
    } elseif ($time_difference->h > 0) {
        $timestatus =  'Last updated '.$time_difference->h . ' hours ago';
    } elseif ($time_difference->i > 0) {
        $timestatus = 'Last updated '. $time_difference->i . ' minute(s) ago';
    } else {
        $timestatus = 'Just now';
    }
    ?>
    <div class="card mb-3 " style="max-width: 740px;">
        <div class="row g-0">
            <div class="col-md-4">
              <img src="../pic/<?php echo $setfilename;?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['a_title'];?></h5>
                <p class="card-text"><?php echo $row['a_content'];?></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo  $timestatus;?></small></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</div>
</div>
</div>
</div>



<!-- Features Start -->

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
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            
            <script src="../js/jquery/dataTables.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
        </body>

        </html>