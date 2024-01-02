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
                     <a href="eventsannounce.php" class="nav-item nav-link text-white">Events</a>
                   <a href="certificate.php" class="nav-item nav-link active">My Certificate</a>
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
<div class="container-fluid px-0 mb-5">
    <section id="hero" class="d-flex align-items-center" style=" max-width: 100%;
    height: auto;
    height: calc(50vh - 50px);
    background: url('../pic/whole.png') top center;
    background-size: cover;
    opacity: .8;
    position: relative;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <h1 style="font-size: 5rem;">Certificate</h1>
    </div>
</div>


<!-- Features Start -->
<!-- certificate request start -->
<div class="container-fluid py-5" style="margin-top: -6rem;">
    <div class="container-fluid">
        <div class="row g-0 feature-row">
            <div class="col-lg-12" >
                <div class="container-fluid">
                    <div class="card w-100 mb-3 ">
                      <div class="card-body">
                        <div class="col-lg-12 text-center">
                            <img src="../pic/process.jpg" class="img-fluid img-thumbnail">
                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-6">
                               <h3>Request a Certificate</h3>
                           </div>
                           <div class="col-md-6">
                            <div class="input-group mb-3">
                               <input type="text" class="form-control form-control-lg" id="Searchbar" placeholder="Search">
                               <span class="input-group-text bg-primary" id="basic-addon2">
                                <a id="search" type="button"><i class="bi bi-search text-light"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto row" style="max-height: 40rem;" id="certificateCards">
                      <div class="col-lg-4 mb-3 mb-sm-0">
                        <div class="card" style="height: 23rem; margin-bottom: 1rem;">
                          <div class="card-body">
                            <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                            <h5 class="card-title"style="text-align:center;" >Barangay Indigency</h5>
                            <hr>
                            <div class="overflow-auto row" style="max-height: 7.5rem;" id="searchResults">
                                <p class="card-text " style="text-align:left;"><b>Types of Barangay Indigency : </b>
                                    <div class="col-md-5">
                                        <dl style="text-align: left;">
                                            <li>4P's</li>
                                            <li>Non-Voters</li>
                                        </dl>
                                    </div>
                                    <div  class="col-md-7">
                                     <dl style="text-align: left;">
                                        <li>Voters for Burial / Financial</li>
                                        <li>Voters</li>
                                    </dl>
                                </div>
                                <b>Requirements: </b>
                                <div class="col-md-12">
                                    <dl style="text-align: left;">
                                        <li>Atleast 1 valid ID</li>
                                        <li>Student ID (for Students Only)</li>
                                    </dl>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer">
                     <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModal">Request <i class="bi bi-chevron-double-right"></i></a>
                 </div>
             </div>
         </div>
         <div class="col-lg-4 mb-3 mb-sm-0">
            <div class="card" style="height: 23rem; margin-bottom: 1rem;">
              <div class="card-body">
                <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
                <h5 class="card-title"style="text-align:center;" >Business Permit</h5>
                <hr>
                <div class="overflow-auto row" style="max-height: 7.5rem;">
                    <p class="card-text " style="text-align:left;">
                       <b>Requirements: </b>
                       <div class="col-md-12">
                        <dl style="text-align: left;">
                            <li>Atleast 1 valid ID</li>
                            <li>Student ID (for Students Only)</li>
                            <li>Barangay Certificate</li>
                        </dl>
                    </div>
                </p>
            </div>
        </div>
        <div class="card-footer">
           <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#modalBpermit">Request <i class="bi bi-chevron-double-right"></i></a>
       </div>
   </div>
</div>
<div class="col-lg-4 mb-3 mb-sm-0">
    <div class="card" style="height: 23rem; margin-bottom: 1rem;">
      <div class="card-body">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title"style="text-align:center;" >Cessation of Business</h5>
        <hr>
        <div class="overflow-auto row" style="max-height: 7.5rem;">
            <p class="card-text " style="text-align:left;">
               <b>Requirements: </b>
               <div class="col-md-12">
                <dl style="text-align: left;">
                    <li>Atleast 1 valid ID</li>
                    <li>Student ID (for Students Only)</li>
                    <li>Business Permit</li>
                </dl>
            </div>
        </p>
    </div>
</div>
<div class="card-footer">
   <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#modalBcessation">Request <i class="bi bi-chevron-double-right"></i></a>
</div>
</div>
</div>
<div class="col-lg-4 mb-3 mb-sm-0">
    <div class="card" style="height: 23rem; margin-bottom: 1rem;">
      <div class="card-body">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title"style="text-align:center;" >First time job seeker</h5>
        <hr>
        <div class="overflow-auto row" style="max-height: 7.5rem;">
            <p class="card-text " style="text-align:left;"><b>Types of First time job seeker: </b>
                <div class="col-md-12">
                    <dl style="text-align: left;">
                        <li>Oath of Undertaking</li>
                        <li>First Time job seeker</li>
                        <li>First Time job seeker for minor</li>
                    </dl>
                </div>
                <b>Requirements: </b>
                <div class="col-md-12">
                    <dl style="text-align: left;">
                        <li>Atleast 1 valid ID</li>
                        <li>Student ID (for Students Only)</li>
                    </dl>
                </div>
            </p>
        </div>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalftjcert">Request <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
<div class="col-lg-4 mb-3 mb-sm-0">
    <div class="card" style="height: 23rem; margin-bottom: 1rem;">
      <div class="card-body">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title"style="text-align:center;" >Application of Solo Parent</h5>
        <hr>
        <div class="overflow-auto row" style="max-height: 7.5rem;">
            <p class="card-text " style="text-align:left;">
               <b>Requirements: </b>
               <div class="col-md-12">
                <dl style="text-align: left;">
                    <li>Atleast 1 valid ID</li>
                    <li>Student ID (for Students Only)</li>
                </dl>
            </div>
        </p>
    </div>
</div>
<div class="card-footer">
    <button type="button" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalsolo">Request <i class="bi bi-chevron-double-right"></i>
</button>
</div>
</div>
</div>
<div class="col-lg-4 mb-3 mb-sm-0">
    <div class="card" style="height: 23rem; margin-bottom: 1rem;">
      <div class="card-body">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title"style="text-align:center;" >Barangay Certificate</h5>
        <hr>
        <div class="overflow-auto row" style="max-height: 7.5rem;">
            <p class="card-text " style="text-align:left;"><b>Types of Barangay Certificate : </b>
                <div class="col-md-5">
                    <dl style="text-align: left;">
                        <li>Bail</li>
                        <li>Non-Voters</li>
                        <li>Probation</li>
                    </dl>
                </div>
                <div  class="col-md-7">
                 <dl style="text-align: left;">
                    <li>Voters</li>
                    <li>Non-Voters Kagawad Signatory</li>
                </dl>
            </div>
            <b>Requirements: </b>
            <div class="col-md-12">
                <dl style="text-align: left;">
                    <li>Atleast 1 valid ID</li>
                    <li>Student ID (for Students Only)</li>
                </dl>
            </div>
        </p>
    </div>
</div>
<div class="card-footer">
 <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#exampleModalCertificate">Request <i class="bi bi-chevron-double-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
<!-- certificate request end -->
<!-- history and monitoring of my request start -->
<div class="col-lg-12" >
    <div class="card w-100 mb-3">
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h3>History and Monitoring of My Certificate</h3>

                <div class="overflow-auto row" style="max-height: 60rem;">
                    <table class="table" id="mytable">
                      <thead>
                        <tr>
                          <th scope="col">Control Number</th>
                          <th scope="col">Date</th>
                          <th scope="col">Certificate</th>
                          <th scope="col">Purpose</th>
                          <th scope="col">Remarks</th>
                      </tr>
                  </thead>

                  <tbody id="retrievetable">
                      <?php  
                      include '../dbh/dbh.inc.php';

                      $sql = "SELECT user_id FROM user WHERE user_id = '".$id."'";
                      $result = mysqli_query($conn, $sql);
                      $rowid = mysqli_fetch_array($result);

                      $sql = "SELECT * FROM requested_certs WHERE PersonID = '".$rowid['user_id']."'";;
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_array($result)) {
                        echo '
                        <tr id= '.$row['req_id'].'>
                        <td>'. $row['controlnum'].'</td>
                        <td>'.$row['date'].'</td>
                        <td>'. $row['Typecertificate'].'</td>
                        <td>'. $row['purpose'].'</td>';

                        if($row['remarks']=="Pending"){
                            ?>
                            <td><input type="hidden" value="<?php echo $row['req_id']; ?>" name="idscancel" id="<?php echo $row['req_id']; ?>">
                                <button type="button" class="btn btn-danger cancel-btn"
                                data-idscancel="<?php echo $row['req_id']; ?>">Cancel Request</button></td>
                            </tr>
                            <?php
                        }else if($row['remarks']=="Generate"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-warning">Processing</p></td>
                            </tr>';
                        }else if($row['remarks']=="Ready To claim"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-success">Ready to claim</p></td>
                            </tr>';
                        }else if($row['remarks']=="Cancelled"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-danger">Cancelled</p></td>
                            </tr>';
                        }else if($row['remarks']=="Declined"){
                             
                            echo'<td> <a href=""data-bs-toggle="modal" data-bs-target="#declined'. $row['req_id'].'" style="text-align:center;"><h5 class="text-danger" ><u>Declined</u></h5></a></td>';
$sqldecline = "SELECT * FROM declinerequest WHERE declinecertID = '".$row['req_id']."'";;
                                $resultdecline = mysqli_query($conn, $sqldecline);
                                while ($rows = mysqli_fetch_array($resultdecline)) {
                            echo'
                            <div class="modal fade" id="declined'.$row['req_id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Reason of Decline Document</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>To:Mr./Ms. '.$lname.', '.$fname.'</h6>
                                            <p>Your request was denied; please see the notice below for additional information. </p>
                                            <h6>'.$rows['message'].'</h6>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </tr>';
                        }
                        }else{
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-success">'.$row['remarks'].'</p></td>
                            </tr>';
                        }
                    }?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- history and monitoring of my request end -->
</div>
</div>  
</div>
<!-- Features End -->

<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container-fluid py-5">
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
            <script src="../js/jquery/dataTables.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                  $('#mytable').DataTable();
              });
          </script>
          <script>
    // JavaScript to handle certificate search
            $(document).ready(function () {
                $('#Searchbar').on('input', function () {
                    var searchValue = $(this).val().toLowerCase();

            // Move matched cards to the top and set the layout class
                    $('#certificateCards .card').each(function () {
                        var certificateName = $(this).find('.card-title').text().toLowerCase();
                        if (certificateName.includes(searchValue)) {
                            $(this).prependTo('#certificateCards');
                    $(this).addClass('col-lg-4 mb-3 mb-sm-0') // Change the layout class as needed
                } else {
                    $(this).addClass('col-lg-4 mb-3 mb-sm-0'); // Reset the layout class
                }
            });

            // Hide non-matching cards
                    $('#certificateCards .card').each(function () {
                        var certificateName = $(this).find('.card-title').text().toLowerCase();
                        if (certificateName.includes(searchValue)) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });

            // Show all cards if search is empty
                    if (searchValue === '') {
                $('#certificateCards .card').show().addClass('col-lg-4 mb-3 mb-sm-0');  // Reset the layout class
            }

            // Handle case when no matching certificates are found
            var visibleCards = $('#certificateCards .card:visible').length;
            if (visibleCards === 0) {
                alert('No matching certificates found.');
                // You can also add logic to display a message or perform other actions.
            }
        });
            });
        </script>
 
        <!-- Ajax POST AND GET -->
        <script type="text/javascript">
         $(document).ready(function () {

            $(".upload-indigency").click(function () {
                var indigency = $("#indigency").val();
                var types = $("#types").val();
                var $fullname = $(this).data('fullname');
                var $votersindigency = $(this).data('votersindigency');
                var $age = $(this).data('age');
                var $address = $(this).data('address');
                var others = $('#otherselect').val();
                var purpose =$('#otherpurpose').val();
                var $email = $(this).data('email');
                var $id = $(this).data('id');
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        submitindigency: 'submitindigency',
                        types: types,
                        indigency: indigency,
                        fullname: $fullname,
                        email: $email,
                        age: $age,
                        address: $address,
                        votersindigency: $votersindigency,
                        purpose: purpose,
                        others: others,
                        id: $id
                    },
                    success: function (result) {
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-message').html(result);   
                            $("#error-message").addClass("alert-success").removeClass("alert-danger");
                            $("#error-message").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-message').html(result);   
                          $("#error-message").addClass("alert-danger").removeClass("alert-success");
                          $("#error-message").show();
                      }
                      

                  },

                  error: function (xhr, status, error) {
                    console.error('AJAX request failed:', xhr, status, error);
                    var toastContainer = document.querySelector('.toast-container');
                    var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                    toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                    toastContainer.querySelector('.toast').classList.remove('bg-success');
                    toastContainer.querySelector('.toast').classList.add('bg-danger');
                    toast.show();
                }
            });
            });

            $(".upload-permit").click(function () {
                var $email = $(this).data('email');
                var $voterspermit = $(this).data('voterspermit');
                var $fullname = $(this).data('fullname');
                var $age = $(this).data('age');
                var bpermitcert = $("#bpermitcert").val();
                var baddress = $("#baddress").val();
                var bname =$('#bname').val();
                var $voterspermit = $(this).data('voterspermit');
                var $id = $(this).data('id');
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        submitbusinesspermit: 'submitbusinesspermit',
                        email: $email,
                        voterspermit: $voterspermit,
                        fullname: $fullname,
                        age: $age,
                        bpermitcert: bpermitcert,
                        baddress: baddress,
                        bname: bname,
                        id: $id
                    },
                    success: function (result) {
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-messagebpermit').html(result);   
                            $("#error-messagebpermit").addClass("alert-success").removeClass("alert-danger");
                            $("#error-messagebpermit").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-messagebpermit').html(result);   
                          $("#error-messagebpermit").addClass("alert-danger").removeClass("alert-success");
                          $("#error-messagebpermit").show();
                      }
                      

                  },

                  error: function (xhr, status, error) {
                    console.error('AJAX request failed:', xhr, status, error);
                    var toastContainer = document.querySelector('.toast-container');
                    var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                    toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                    toastContainer.querySelector('.toast').classList.remove('bg-success');
                    toastContainer.querySelector('.toast').classList.add('bg-danger');
                    toast.show();
                }
            });
            });
             $(".upload-cessation").click(function () {
                var $email = $(this).data('email');
                var $voterspermit = $(this).data('voterspermit');
                var $cessationowner = $(this).data('cessationowner');
                var $age = $(this).data('age');
                var cessationpermit = $("#cessationpermit").val();
                var bcaddress = $("#bcaddress").val();
                var bcname =$('#bcname').val();
                var bdate =$('#bdate').val();
                var $voterspermit = $(this).data('voterspermit');
                var $id = $(this).data('id');
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        submitbusinessCessationpermit: 'submitbusinessCessationpermit',
                        email: $email,
                        voterspermit: $voterspermit,
                        cessationowner: $cessationowner,
                        age: $age,
                        cessationpermit: cessationpermit,
                        bcaddress: bcaddress,
                        bcname: bcname,
                        bdate: bdate,
                        id: $id
                    },
                    success: function (result) {
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-messagebcpermit').html(result);   
                            $("#error-messagebcpermit").addClass("alert-success").removeClass("alert-danger");
                            $("#error-messagebcpermit").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-messagebcpermit').html(result);   
                          $("#error-messagebcpermit").addClass("alert-danger").removeClass("alert-success");
                          $("#error-messagebcpermit").show();
                      }
                     

                  },

                  error: function (xhr, status, error) {
                    console.error('AJAX request failed:', xhr, status, error);
                    var toastContainer = document.querySelector('.toast-container');
                    var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                    toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                    toastContainer.querySelector('.toast').classList.remove('bg-success');
                    toastContainer.querySelector('.toast').classList.add('bg-danger');
                    toast.show();
                }
            });
            });

               $(".upload-ftj").click(function () {
                var $email = $(this).data('email');
                var $votersftj = $(this).data('votersftj');
                var $ftjname = $(this).data('ftjname');
                var $ageftj = $(this).data('ageftj');
                var residentbrgy = $("#residentbrgy").val();
                var addressageftj = $("#addressageftj").val();
                var typescertftj = $("#typescertftj").val();
                var fullnameageftj =$('#fullnameageftj').val();
                var parent =$('#parent').val();
                var agep =$('#agep').val();
                var paddress =$('#paddress').val();
                var presidentbrgy =$('#presidentbrgy').val();
                var $id = $(this).data('id');
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        submitftj: 'submitftj',
                        email: $email,
                        votersftj: $votersftj,
                        ftjname: $ftjname,
                        ageftj: $ageftj,
                        residentbrgy: residentbrgy,
                        addressageftj: addressageftj,
                        fullnameageftj: fullnameageftj,
                        parent: parent,
                        agep: agep,
                        typescertftj:typescertftj,
                        paddress: paddress,
                        presidentbrgy: presidentbrgy,
                        id: $id
                    },
                    success: function (result) {
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-messageftj').html(result);   
                            $("#error-messageftj").addClass("alert-success").removeClass("alert-danger");
                            $("#error-messageftj").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-messageftj').html(result);   
                          $("#error-messageftj").addClass("alert-danger").removeClass("alert-success");
                          $("#error-messageftj").show();
                      }
                      

                  },

                  error: function (xhr, status, error) {
                    console.error('AJAX request failed:', xhr, status, error);
                    var toastContainer = document.querySelector('.toast-container');
                    var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                    toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                    toastContainer.querySelector('.toast').classList.remove('bg-success');
                    toastContainer.querySelector('.toast').classList.add('bg-danger');
                    toast.show();
                }
            });
            });
            $(".upload-cert").click(function () {
                var $voterscert = $(this).data('voterscert');
                var $idcert = $(this).data('idcert');
                var types = $("#typescert").val();
                var $fullname = $(this).data('fullname');
                var $age = $(this).data('age');
                var $pic = $(this).data('pic');
                var $address = $(this).data('address');
                var others = $('#otherselectcert').val();
                var purpose =$('#otherpurposecert').val();
                var $email = $(this).data('email');
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        submitcert: 'submitcert',
                        types: types,
                        fullname: $fullname,
                        email: $email,
                        age: $age,
                         voterscert: $voterscert,
                          idcert: $idcert,
                        pic: $pic,
                        address: $address,
                        purpose: purpose,
                        others: others
                    },
                    success: function (result) {
                        console.log('AJAX request successful:', result);
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-messagecert').html(result);   
                            $("#error-messagecert").addClass("alert-success").removeClass("alert-danger");
                            $("#error-messagecert").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-messagecert').html(result);   
                          $("#error-messagecert").addClass("alert-danger").removeClass("alert-success");
                          $("#error-messagecert").show();
                      }
                     
                    },

                    error: function (xhr, status, error) {
                        console.error('AJAX request failed:', xhr, status, error);
                        var toastContainer = document.querySelector('.toast-container');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                        toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                        toastContainer.querySelector('.toast').classList.remove('bg-success');
                        toastContainer.querySelector('.toast').classList.add('bg-danger');
                        toast.show();
                    }
                });
            });

                $(".upload-parent").click(function () {
                var $email = $(this).data('email');
                var $votersparent = $(this).data('votersparent');
                var $idsolo = $(this).data('idsolo');
                var $age = $(this).data('age');
                var $address = $(this).data('address');
                var $fullname = $(this).data('fullname');
                var soloparent = $('#soloparent').val();
                var purposesoloparent =$('#purposesoloparent').val();
                var floatingTextareachild =$('#floatingTextareachild').val();
                console.log('Sending AJAX Indigency request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        soloparent: 'soloparent',
                        email: $email,
                        votersparent: $votersparent,
                        idsolo: $idsolo,
                        age: $age,
                        address: $address,
                        fullname: $fullname,
                        soloparent: soloparent,
                        purposesoloparent: purposesoloparent,
                        floatingTextareachild: floatingTextareachild
                    },
                    success: function (result) {
                        console.log('AJAX request successful:', result);
                        if (result.includes("Your request has been added to the queue.")) {
                            $('#error-messagesolo').html(result);   
                            $("#error-messagesolo").addClass("alert-success").removeClass("alert-danger");
                            $("#error-messagesolo").show();
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                        }else {
                          $('#error-messagesolo').html(result);   
                          $("#error-messagesolo").addClass("alert-danger").removeClass("alert-success");
                          $("#error-messagesolo").show();
                      }
                      

                    },

                    error: function (xhr, status, error) {
                        console.error('AJAX request failed:', xhr, status, error);
                        var toastContainer = document.querySelector('.toast-container');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                        toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                        toastContainer.querySelector('.toast').classList.remove('bg-success');
                        toastContainer.querySelector('.toast').classList.add('bg-danger');
                        toast.show();
                    }
                });
            });
    /*decline stats*/
            $(".cancel-btn").click(function () {
                var $idstats = $(this).data('idscancel');
                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/dbhuser/certificates.php",
                    type: "POST",
                    data: {
                        cancelbutton: 'cancelbutton',
                        idscancel: $idstats
                    },
                    success: function (result) {
                        console.log('AJAX request successful:', result);
                        updateTable($idstats);
                        var toastContainer = document.querySelector('.toast-container');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for success
                        toastContainer.querySelector('.me-auto').innerText = 'You Cancel your Request';
                        toastContainer.querySelector('.toast').classList.remove('bg-success');
                        toastContainer.querySelector('.toast').classList.add('bg-danger');
                        toast.show();
                        setTimeout(function () {
                                location.reload();
                            }, 500);

                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX request failed:', xhr, status, error);
                        var toastContainer = document.querySelector('.toast-container');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for error
                        toastContainer.querySelector('.me-auto').innerText = 'Error in updating status';
                        toastContainer.querySelector('.toast').classList.remove('bg-success');
                        toastContainer.querySelector('.toast').classList.add('bg-danger');
                        toast.show();
                        console.error('AJAX request failed:', xhr, status, error);
                    }
                });
            });

        });
            function updateTable(userID) {
                $.ajax({
                    type: "GET",
                    url: "../dbh/dbhuser/getcancel.php",
                    data: {
                userID: <?php echo $id;?> // Pass the specific user ID to fetch data
            },
            success: function (data) {
                $('#mytable').DataTable().destroy(); 
                $('#retrievetable').html(data);
                $('#mytable').DataTable();
            },
            error: function () {
                alert("Error updating the table.");
            },
        });
            }
/*function updateTable(email) {
    $.ajax({
        type: "GET",
        url: "../dbh/dbhuser/getstatsuser.php",
        data: { email: email },
        success: function (data) {
            var table = $('#mytable').DataTable();
            
            // Clear the existing data
            table.clear();
            
            // Add the new data
            table.rows.add($(data)).draw();
        },
        error: function () {
            alert("Error updating the table.");
        },
    });
}
*/
    </script>
   
    <!-- indigency -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Request Barangay Indigency</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
             <div id="error-message"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Fill Up the form
                </div>
            </div>
        </div>
        <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="votersindigency" id="votersindigency">
        <input type="hidden" class="form-control" value="Barangay Indigency" name="indigency" id="indigency">
        <select class="form-select form-select-lg mb-3" aria-label="Large select example"name="types" id="types">
          <option selected value="none">Select The type of  Barangay Indigency</option>
          <option value="4P's">4P's</option>
          <option value="Non-Voters">Non-Voters</option>
          <option value="Voters-Burial Financial">Voters-Burial Financial</option>
          <option value="Voters">Voters</option>
      </select>

      <div class="row">
          <div class="col-lg-6">
            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">
            <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
            <input type="hidden" class="form-control" value="<?php echo $lname.",".$fname." ".$mname."."; ?>" name="fullname">
            <h2>Name: <?php echo $lname.",".$fname." ".$mname."."; ?></h2>
        </div>
        <div class="col-lg-6">
            <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="age" >
            <h2>Age: <?php echo $age; ?></h2>
        </div>
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?php echo $address;; ?>" name="address" >
            <h3>Addres: <?php echo $address; ?></h3>
        </div>
        <div class="col-lg-12">
            <label for="floatingInput">The Purpose of  Barangay Indigency</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="otherselect" name="purpose">
              <option selected value="none">Select The Purpose of Barangay Indigency</option>
              <option value="Financial Assistance">Financial Assistance</option>
              <option value="School Requirement">School Requirement</option>
              <option value="Educational Assistance">Educational Assistance</option>
              <option value="Medical Assistance">Medical Assistance</option>
              <option value="Hospital Requirement">Hospital Requirement</option>
              <option value="Scholarship Application">Scholarship Application</option>
              <option value="Social Pension Application For Indigent Senior Citizen">Social Pension Application For Indigent Senior Citizen</option>
              <option value="Others">Others</option>
          </select>
      </div>
      <div class="col-lg-12">
          <input type="hidden" class="form-control others" placeholder="Others" name="others" id="otherpurpose">
      </div>
  </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-indigency"  
    data-indigency="Barangay Indigency"
    data-types="#types"
    data-votersindigency="<?php echo $voters; ?>"
    data-id="<?php echo $id; ?>"
    data-email="<?php echo $email; ?>"
    data-age="<?php echo $age; ?>"
    data-address="<?php echo $address; ?>"
    data-fullname="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-purpose="#otherselect"
    data-others="#otherpurpose"
    >Submit</button>
</div>
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
</div>

<div class="modal fade" id="exampleModalCertificate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Request Barangay Certificate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
             <div id="error-messagecert"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Fill Up the form
                </div>
            </div>
        </div>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="typescert" id="typescert">
              <option selected value="none">Select The type of  Barangay Certificate</option>
              <option value="Bail">Bail</option>
              <option value="Non-Voters">Non-Voters</option>
              <option value="Probation">Probation</option>
              <option value="Non-Voters Kagawad Signatory">Non-Voters Kagawad Signatory</option>
              <option value="Voters">Voters</option>
          </select>

          <div class="row">
              <div class="col-lg-6">
                <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="voterscert" id="voterscert">
            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="idcert">
               <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
               <input type="hidden" class="form-control" value="<?php echo $lname.",".$fname." ".$mname."."; ?>" name="fullname">
               <h2>Name: <?php echo $lname.",".$fname." ".$mname."."; ?></h2>
           </div>
           <div class="col-lg-6">
            <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="age" >
            <input type="hidden" class="form-control" value="<?php echo $pic; ?>" name="pic" >
            <h2>Age: <?php echo $age; ?></h2>
        </div>
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?php echo $address; ?>" name="address" >
            <h3>Addres: <?php echo $address; ?></h3>
        </div>
        <div class="col-lg-12">
            <label for="floatingInput">The Purpose of  Barangay Certificate</label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="otherselectcert" name="others">
              <option selected value="none">Select The Purpose of  Barangay Certificate</option>
              <option value="Proof of Residency">Proof of Residency</option>
              <option value="Local Employment">Local Employment</option>
              <option value="PWD ID Application">PWD ID Application</option>
              <option value="Educational Assistance">Educational Assistance</option>
              <option value="Hospital Requirement">Hospital Requirement</option>
              <option value="School Requirement">School Requirement</option>
              <option value="Senior Citizen Application">Senior Citizen Application</option>
              <option value="Bank Account Opening">Bank Account Opening</option>
              <option value="Bail Requirement">Bail Requirement</option>
              <option value="Probation Requirement">Probation Requirement</option>
              <option value="Others" >Others</option>
          </select>
      </div>
      <div class="col-lg-12">
          <input type="hidden" class="form-control otherscert" placeholder="Other Purpose of Certificate" name="purpose" id="otherpurposecert">
      </div>
  </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-cert" 
    data-typescert="#typescert"
     data-voterscert="<?php echo $voters; ?>"
    data-idcert="<?php echo $id; ?>"
    data-email="<?php echo $email; ?>"
    data-age="<?php echo $age; ?>"
    data-address="<?php echo $address; ?>"
    data-fullname="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-pic="<?php echo $pic; ?>"
    data-purpose="#otherpurposecert"
    data-others="#otherselectcert"
    >Submit</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModalftjcert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Request First time job seeker</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="error-messageftj"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Fill Up the form
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="typescertftj" id="typescertftj">
              <option selected>Select The type of First time job seeker Certificate</option>
              <option value="First time job seeker">First time job seeker</option>
              <option value="First time job seeker minor" class="minor-option">First time job seeker(MINOR)</option>
              <option value="First time job seeker (OATH OF UNDERTAKING)" class="oath-option">First time job seeker (OATH OF UNDERTAKING)</option>
          </select>

          <div class="row">
              <div class="col-lg-6">
                <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="votersftj" id="votersftj">
 <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">
               <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
               <input type="hidden" class="form-control" value="<?php echo $lname.",".$fname." ".$mname."."; ?>" name="fullnameageftj" id="fullnameageftj">
               <h2>Name: <?php echo $lname.",".$fname." ".$mname."."; ?></h2>
           </div>
           <div class="col-lg-6">
            <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="ageftj" id="ageftj" >
            <input type="hidden" class="form-control" value="First-Time job seeker"name="ftjname" id="ftjname" >
            <h2>Age: <?php echo $age; ?></h2>
        </div>
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?php echo $address; ?>" name="addressageftj" id="addressageftj">
            <h3>Addres: <?php echo $address; ?></h3>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="residentbrgy" placeholder="Years of living in the barangay" name="residentbrgy">
          <label for="floatingInput">Years of living in the barangay</label>
      </div>
       <hr>
      <div class="col-lg-12">
         <div class="form-floating mb-3">
          <input type="text" class="form-control" id="parent" placeholder="Name Of the parent" name="parent">
          <label for="floatingInput">Name Of the parent</label>
      </div>
      <div class="form-floating mb-3">
          <input type="text" class="form-control"id="agep" placeholder="Age of parent" name="agep">
          <label for="floatingInput">Age of parent</label>
      </div>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="paddress" placeholder="Current of the Parent Address" name="paddress">
          <label for="floatingInput">Current Address of the Parent </label>
      </div>
      <div class="form-floating mb-3">
          <input type="text" class="form-control" id="presidentbrgy" placeholder="Years of living in the barangay" name="presidentbrgy">
          <label for="floatingInput">Years of living in the barangay</label>
      </div>
  </div>
</div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-ftj" 
    data-votersftj="<?php echo $voters; ?>"
    data-email="<?php echo $email; ?>"
    data-id="<?php echo $id; ?>"
    data-ageftj="<?php echo $age; ?>"
    data-addressageftj="<?php echo $address; ?>"
    data-fullnameageftj="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-residentbrgy="#residentbrgy"
    data-parent="#parent"
    data-agep="#agep"
    data-paddress="#paddress"
    data-presidentbrgy="#presidentbrgy"
    data-ftjname="#ftjname"
    >Submit</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalBpermit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Request Business Permit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
<div id="error-messagebpermit"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    You must Present your Valid Id and barangay Certificate Upon Claiming.
                </div>
            </div>
        </div>
          <div class="row">
            <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="voterspermit" id="voterspermit">
            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">
             <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
             <input type="hidden" class="form-control" value="" name="">
              <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="age" >
              <input type="hidden" class="form-control" value="Business Permit" name="bpermitcert" id="bpermitcert" value="Business Permit">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name of Owner</label>
              <input type="text" class="form-control" id="bowner" placeholder="Owner of the Business" name="fullname" value="<?php echo $lname.", ".$fname." ".$mname."."; ?>" disabled>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control"id="bname" placeholder="Business Name" name="bname">
              <label for="floatingInput">Business Name</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="baddress" placeholder="Business Address" name="baddress">
              <label for="floatingInput">Business Address</label>
          </div>
      </div>
  </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-permit" 
    data-email="<?php echo $email; ?>"
    data-voterspermit="<?php echo $voters; ?>"
    data-id="<?php echo $id; ?>"
    data-email="<?php echo $email; ?>"
    data-fullname="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-age="<?php echo $age; ?>"
    data-bpermitcert="#bpermitcert"
    data-address="#baddress"
    data-bname="#bname"
    >Submit</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalBcessation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Request Cessation of Business</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
<div id="error-messagebcpermit"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    You must Present your Valid Id and barangay Certificate Upon Claiming.
                </div>
            </div>
        </div>
          <div class="row">
            <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="voterspermit" id="voterspermit">
            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">
             <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
              <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="age" >
              <input type="hidden" class="form-control" value="Business Cessation" name="cessationpermit" id="cessationpermit" >
<div class="mb-3">
          <div class="row">
             <div class="form-floating mb-3">
              <input type="text" class="form-control" id="cessationowner" placeholder="Owner of the Business" name="cessationowner" value="<?php echo $lname.", ".$fname." ".$mname."."; ?>" disabled>
              <label for="floatingInput">Owner of the Business</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control"id="bcname" placeholder="Business Name" name="bcname">
              <label for="floatingInput">Business Name</label>
          </div>
          <div class="form-floating mb-3">
              <input type="date" class="form-control" id="bdate" placeholder="Date of Cessation" name="bdate">
              <label for="floatingInput">Date of Cessation</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="bcaddress" placeholder="Business Address" name="bcaddress">
              <label for="floatingInput">Business Address</label>
          </div>
      </div>
  </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-cessation" 
    data-email="<?php echo $email; ?>"
    data-voterspermit="<?php echo $voters; ?>"
    data-id="<?php echo $id; ?>"
    data-cessationowner="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-age="<?php echo $age; ?>"
    data-bcaddress="#bcaddress"
    data-fullname="#owner"
    data-bname="#bname"
    data-bcname="#bcname"
    data-bdate="#bdate"
    data-cessationpermit="#cessationpermit"
    >Submit</button>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="exampleModalsolo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Request Application of Solo Parent</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="container-fluid">
 <div id="error-messagesolo"  >
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Fill Up the form
                </div>
            </div>
        </div>
          <div class="row">
              <div class="col-lg-6">
                 <input type="hidden" class="form-control" value="<?php echo $voters; ?>" name="votersparent" id="votersparent">
            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="idsolo">
               <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
               <input type="hidden" class="form-control" value="<?php echo $lname.",".$fname." ".$mname."."; ?>" name="fullname">
                <input type="hidden" class="form-control" value="Application for Solo Parent" name="soloparent" id="soloparent" >
                <input type="hidden" class="form-control" value="Solo Parent" name="purposesoloparent" id="purposesoloparent" >
               <h2>Name: <?php echo $lname.",".$fname." ".$mname."."; ?></h2>
           </div>
           <div class="col-lg-6 ">
            <input type="hidden" class="form-control" value="<?php echo $age; ?>"name="age" >
            <h2>Age: <?php echo $age; ?></h2>
        </div>
        <div class="col-lg-12">
            <input type="hidden" class="form-control" value="<?php echo $address; ?>" name="address" >
            <h3>Addres: <?php echo $address; ?></h3>
        </div>
        <br>
        <div class="alert alert-primary d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                  <div>
                    Format: Name-Birthday(mm/dd/yyyy) in bullet form<br>
                    Example:<br>
                    <i>• John Doe - May 23, 2001</i>
                </div>
            </div>
        <div class="form-floating mb-5 col-lg-12">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareachild" name="floatingTextareachild" style="height: 100px"></textarea>
          <label for="floatingTextarea">Enter your child's or children's name and birthday.</label>
      </div>
</div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary upload-parent" 
    data-email="<?php echo $email; ?>"
    data-votersparent="<?php echo $voters; ?>"
    data-idsolo="<?php echo $id; ?>"
    data-age="<?php echo $age; ?>"
    data-address="<?php echo $address; ?>"
    data-fullname="<?php echo $lname.",".$fname." ".$mname."."; ?>"
    data-soloparent="#soloparent"
    data-purposesoloparent="#purposesoloparent"
    data-floatingTextareachild="#floatingTextareachild"
   >Submit</button>
</div>
</div>
</div>
</div>


</body>

</html>


<script>
    // Function to update the options of the second select box
   // Function to update the options of the second select box
function updateOptions() {
    var typesSelect = document.getElementById('types');
    var purposeSelect = document.getElementById('otherselect');

    // Reset the options of the purpose select box
    purposeSelect.options.length = 0;

    // Default option
    var defaultOption = document.createElement('option');
    defaultOption.value = 'none';
    defaultOption.text = 'Select The Purpose of Barangay Indigency';
    purposeSelect.add(defaultOption);

    // Check the selected type and update options accordingly
    if (typesSelect.value === "4P's") {
        var option = document.createElement('option');
        option.value = 'For Pantawid Pamilyang Pilipino Program';
        option.text = 'FOR PANTAWID PAMILYANG PILIPINO PROGRAM';
        purposeSelect.add(option);
    } else if (typesSelect.value === 'Voters-Burial Financial') {
        var option = document.createElement('option');
        option.value = 'Burial Assistance';
        option.text = 'Burial Assistance';
        purposeSelect.add(option);
    } else if (typesSelect.value === 'Non-Voters' || typesSelect.value === 'Voters') {
        // Show all options for Non-Voters or Voters
        // Add all your options with their values
        addOption('Financial Assistance');
        addOption('School Requirement');
        addOption('Educational Assistance');
        addOption('Medical Assistance');
        addOption('Hospital Requirement');
        addOption('Scholarship Application');
        addOption('Social Pension Application For Indigent Senior Citizen');
        
        // Create the "Others" option
        var othersoption = document.createElement('option');
        othersoption.value = 'Others';
        othersoption.text = 'Others';
        othersoption.id = 'otherselect'; // Adding an id for the "Others" option

        // Add the "Others" option to the purposeSelect
        purposeSelect.add(othersoption);
    }
}

// Function to add an option to the purpose select box
function addOption(text) {
    var option = document.createElement('option');
    option.value = text;
    option.text = text;
    document.getElementById('otherselect').add(option);
}

// Attach the function to the change event of the first select box
document.getElementById('types').addEventListener('change', updateOptions);

// Call the function initially to set the initial options
updateOptions();

$(document).ready(function () {
    // Assuming your select element has the id 'otherselect'
    // and your input element has the class 'otherscert'
    $('#otherselect').change(function () {
        var selectedValue = $('#otherselect').val();
        var othersInput = $('#otherpurpose'); // Corrected class selector

        // Change input type to text if "Others" is selected
        if (selectedValue === 'Others') {
            othersInput.prop('type', 'text');
        } else {
            // Change input type to hidden for other selections
            othersInput.prop('type', 'hidden');
        }
    });

       $('#otherselectcert').change(function () {
        var selectedValuecert = $('#otherselectcert').val();
        var othersInputcert = $('#otherpurposecert'); // Corrected class selector

        // Change input type to text if "Others" is selected
        if (selectedValuecert === 'Others') {
            othersInputcert.prop('type', 'text');
        } else {
            // Change input type to hidden for other selections
            othersInputcert.prop('type', 'hidden');
        }
    });
});


</script>
<script>
   $(document).ready(function () {
        // Assuming the age input has the name 'ageftj'
        var age = parseInt($('input[name="ageftj"]').val());

        // Show or hide options based on age
        if (age < 18) {
            $('#typescertftj option[value="First time job seekerminor"]').show();
            $('#typescertftj option[value="First time job seeker (OATH OF UNDERTAKING)"]').show();
            
             $('#agep').closest('.form-floating').show();
                $('#parent').closest('.form-floating').show();
                $('#paddress').closest('.form-floating').show();
                $('#presidentbrgy').closest('.form-floating').show();
        } else {
            $('#typescertftj option[value="First time job seekerminor"]').hide();
            $('#typescertftj option[value="First time job seeker (OATH OF UNDERTAKING)"]').show();
            
            // Hide additional form elements if age is 18 or older
             $('#agep').closest('.form-floating').hide();
                $('#parent').closest('.form-floating').hide();
                $('#paddress').closest('.form-floating').hide();
                $('#presidentbrgy').closest('.form-floating').hide();
        }

        // Update options and form elements when age input changes
        $('input[name="ageftj"]').on('input', function () {
            var newAge = parseInt($(this).val());

            if (newAge < 18) {
                $('#typescertftj option[value="First time job seeker"]').hide();
                $('#typescertftj option[value="First time job seeker (OATH OF UNDERTAKING)"]').show();
                
                // Show additional form elements if age is less than 18
                $('#agep').closest('.form-floating').show();
                $('#parent').closest('.form-floating').show();
                $('#paddress').closest('.form-floating').show();
                $('#presidentbrgy').closest('.form-floating').show();
            } else {
                $('#typescertftj option[value="First time job seekerminor"]').hide();
                $('#typescertftj option[value="First time job seeker (OATH OF UNDERTAKING)"]').show();
                
                // Hide additional form elements if age is 18 or older
                $('#agep').closest('.form-floating').hide();
                $('#parent').closest('.form-floating').hide();
                $('#paddress').closest('.form-floating').hide();
                $('#presidentbrgy').closest('.form-floating').hide();
            }
        });
    });
</script>
<script>
  $(document).ready(function () {
    $('#floatingTextareachild').on('input', function () {
      handleBulletPoints();
    });

    $('#floatingTextareachild').on('keydown', function (e) {
      if (e.key === 'Enter') {
        e.preventDefault();
        insertBulletPoint();
      }
    });

    function handleBulletPoints() {
      var textarea = $('#floatingTextareachild');
      var lines = textarea.val().split('\n');
      for (var i = 0; i < lines.length; i++) {
        if (lines[i].trim().startsWith('\u2022 ')) {
          // Line already starts with a bullet point
          continue;
        } else if (lines[i].trim() === '') {
          // Empty line, do nothing
          continue;
        } else {
          // Add a bullet point to lines that don't have it
          lines[i] = '\u2022 ' + lines[i];
        }
      }
      textarea.val(lines.join('\n'));
    }

    function insertBulletPoint() {
      var textarea = $('#floatingTextareachild');
      var cursorPos = textarea.prop('selectionStart');
      var textBefore = textarea.val().substring(0, cursorPos);
      var textAfter = textarea.val().substring(cursorPos);
      var bulletPoint = '\u2022 '; // Unicode character for bullet point

      textarea.val(textBefore + '\n' + bulletPoint + textAfter);
      // Move the cursor after the inserted bullet point and newline character
      textarea.prop('selectionStart', cursorPos + 3);
      textarea.prop('selectionEnd', cursorPos + 3);
    }
  });
</script>