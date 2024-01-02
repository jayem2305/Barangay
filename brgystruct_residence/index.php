<?php session_start();
$id_user = $_SESSION['id_user'];

include('../dbh/dbh.inc.php');
 $select_user=" SELECT * FROM user WHERE user_id='$id_user'";
                  $result_user = mysqli_query($conn, $select_user);
                  $row_user = mysqli_fetch_array($result_user);

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

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
</div>
<!-- Navbar End -->

<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(110vh - 110px);
    background: url('../pic/whole.png') top center;
    background-size: cover;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500" >
        <img src="../pic/brgy_logo.png" class="img-thumbnail rounded-circle mx-auto d-block" alt="logo" width="200" height="200" style="opacity: .8;">
        <h1 style="font-size: 3rem;">Welcome to Brgy. 781 Zone 85 </h1>
        <div class="text-center">
            <a href="certificate.php" class="btn-get-started scrollto btn-lg" style="font-size: 1rem;">Apply Certificate</a>
        </div>
    </div>
</div>

<!-- Announcement and Events  -->
<!-- Project Start -->
<div class="container-fluid pt-5 " id="proj" style="margin-top:-2rem;">
    <div class="container-fluid">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
        style="max-width: 500px;">
        <p class="fs-5 fw-medium text-primary">Our Projects</p>
        <h1 class="display-12 mb-5 ">We've Done Lot's of Awesome Projects</h1>
    </div>
    <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
        <?php
     include '../dbh/dbh.inc.php';
                                $sql = "SELECT * FROM announcements WHERE a_status = 'Project' AND a_display = 'display'";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)){
                                    $fileName = basename($row['a_pic']);
                                     if (!empty($fileName) && $fileName != 'uploads') {
        $setfilename = $fileName;
    }
?>
        <div class="project-item mb-5">
            <div class="position-relative">
                <div class="project-overlay">
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="img/project-1.jpg"
                    data-lightbox="project"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                        class="fa fa-link"></i></a>
                                        </div>
                                         </div>

              <img class="img-fluid img-thumbnail" src="../pic/<?php echo $setfilename; ?>" alt="" style="max-width: 400px; max-height: 250px;">

                <div class="p-4" >
                    <h4><?php echo $row['a_title'];?></h4>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                </div>
            </div>

<?php } ?>
                    </div>
                </div>
            </div>
            <!-- Project End -->
             <!-- Team Start -->

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
  <div class="modal fade" tabindex="-1" role="dialog" id="autoShowModal" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" style="background-image: url('../pic/popup.png'); background-size: cover; height: 70vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <button type="button" class="btn-close custom-close-button" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 48rem; margin-bottom: 23rem; z-index: 1;"></button>

                <!-- Background Image -->
                <div >
                    <a href="certificate.php" class="btn btn-primary btn-lg" role="button" style="margin-left: -22rem;margin-top: -6rem; z-index: 1; position: absolute;">CLICK HERE TO APPLY</a>
                </div>
                <!-- End Background Image -->
            </div>
        </div>
    </div>
</div>


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
    // JavaScript to show the modal on page load
                        $(document).ready(function(){
                          $('#autoShowModal').modal('show');
                      });
                  </script>
                        </body>

                        </html>