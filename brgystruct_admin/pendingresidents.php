<?php include("../dbh/dbh.inc.php");?>
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
                    <a class="navbar-brand" href="certificate.php">
                        <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">

                    </a>
                </div> 
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                 <a href="contentmanager.php" class="nav-item nav-link text-white" >Content Manager</a>
                 <a href="certificate.php" class="nav-item nav-link text-white">Certificates</a>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Residences
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="residence.php">List of Residents</a></li>
                        <li><a class="dropdown-item" href="pendingresidents.php">Pending Account of Residence</a></li>
                        <li><a class="dropdown-item" href="residentreports.php">Residents Reports</a></li>
                    </ul>
                </li>
                <a href="../login/index.php" class="nav-item nav-link text-danger">Log Out</a>
            </div>
        </div>
    </nav>
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
        <h1 style="font-size: 3rem; text-shadow: 2px 2px #000000;">Pending Account of Residence</h1>
    </div>
</section>
</div>
<!-- monitoring start -->
<div class="container-fluid col-lg-12" style="text-transform: capitalize;">
    <div class="card w-100 mb-3">
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h3>List of Pending Account of Residence </h3>
                <div class="overflow-auto row" style="max-height: 40rem;">
                    <table class="table table-hover" id="mytable">
                      <thead>
                        <tr>
                          <th scope="col">Picture</th>
                          <th scope="col">Name</th>
                          <th scope="col">Age</th>
                          <th scope="col">Address</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody id="retrievetable">
                    <?php
                    $sql = "SELECT * FROM user WHERE status = 'pending' ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)){
                        ?>
                        <tr  id=<?php  echo $row['user_id'];?>>
                            <td style="text-align:center;"><?php  echo '<img src="../pic/'.$row['picture_2x2'].'" class="rounded-circle" alt="Cinque Terre" width="45" height="45">'; ?></td>
                            <td><?php echo $row['lastname'].','.$row['firstname'];?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <?php
                            if($row['status'] == "pending"){
                                echo " <td class='text-warning'>".$row['status']."</td>";
                            }else if($row['status'] == "Decline"){
                               echo " <td class='text-danger'>".$row['status']."</td>";
                           }else{
                               echo " <td class='text-white'>".$row['status']."</td>";
                           }
                           ?>
                           <td><input type='hidden' value="<?php echo $row['user_id'];?>" name='ids'>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforproject<?php echo $row['user_id'];?>" value="<?php echo $row['user_id'];?>" name="viewid"><div class="spinner-border text-white" role="status" id="spinunrestrict<?php echo $row['user_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statunrestrict<?php echo $row['user_id'];?>">View</div></button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalarchive<?php echo $row['user_id'];?>" value="<?php  echo $row['user_id'];?>" name="arvhiveid"><div class="spinner-border text-white" role="status" id="spindecline<?php echo $row['user_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statdecline<?php echo $row['user_id'];?>">Decline</div></button></td>
                        </tr>

                        <!-- MOdal for project -->
                        <?php
                        if (isset($_POST['viewid']));
                        $id_queryrows = "SELECT * FROM user WHERE user_id = ".$row['user_id']."";
                        $id_queryrows_viewpageQuery = mysqli_query($conn, $id_queryrows );
                        while ($idrow = mysqli_fetch_assoc($id_queryrows_viewpageQuery)){

                            $uery = "SELECT * FROM user WHERE user_id = '".$idrow['user_id']."'";
                            $results = mysqli_query($conn, $uery);
                            while ($rows = mysqli_fetch_array($results)){
                              ?>              

                              <div class="modal fade " id="staticBackdropforproject<?php  echo $row['user_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Profile Information: <?php echo $row['controlnum'];?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                             <div class="card w-100 mb-3">
                                              <div class="card-body">
                                                <div class="row" style="text-transform: capitalize;">
                                                 <div class="col-lg-6">
                                                     <img src="../pic/<?php echo $row['picture_2x2'];?>" class="img-thumbnail" alt="image">
                                                 </div>
                                                 <div class="col-lg-6">
                                                     <div class="row">
                                                         <div class="col-lg-12" style="text-align:center;">
                                                             <h2><?php echo $row['lastname'].",".$row['firstname']." ".$row['middleinitial'].". ";?></h2>
                                                             <h4 class="text-primary"><?php echo $row['email'];?></h4>
                                                         </div>
                                                         <div class="col-lg-6">
                                                          Birthday:<h6><?php echo $row['bday'];?></h6>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          Age: <h6><?php echo $row['age'];?></h6>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          Gender: <h6><?php echo $row['gender'];?></h6>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          Civil Status: <h6><?php echo $row['civilstats'];?></h6>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          Mobile Number: <h6><?php echo $row['mobilenum'];?></h6>
                                                      </div>
                                                      <div class="col-lg-6">
                                                         Address: <h6><?php echo $row['address'];?></h6>
                                                     </div>
                                                     <div class="col-lg-6">
                                                      Profession: <h6><?php echo $row['profession'];?></h6>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      Educational Attainment: <h6><?php echo $row['educattainment'];?></h6>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      Locality: <h6><?php echo $row['locality'];?></h6>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      Place of Work / School: <h6><?php echo $row['place'];?></h6>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      Religion: <h6><?php echo $row['religion'];?></h6>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      Relation to the head of the Family: <h6><?php echo $row['relation'];?></h6>
                                                  </div>  
                                              </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <br>
                                            <hr>
                                            <h3 class="font-monospace" style="text-align:center;">Inhabitant Information</h3>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="text-primary">Number of people living in the house, Who Are:</p>
                                            <div class="row">
                                              <div class="col-lg-4">
                                                Senior:<h6><?php echo $row['senior'];?></h6>
                                            </div>
                                            <div class="col-lg-4">
                                                Solo Parent:<h6><?php echo $row['soloparent'];?></h6>
                                            </div>
                                            <div class="col-lg-4">
                                                LGBTQIA+:<h6><?php echo $row['lgbt'];?></h6>
                                            </div> 
                                            <div class="col-lg-4">
                                                Voters:<h6><?php echo $row['voter'];?></h6>
                                            </div> 
                                            <div class="col-lg-4">
                                                Breast Feeder:<h6><?php echo $row['breastfeeding'];?></h6>
                                            </div>
                                            <div class="col-lg-4">
                                                Pregnant:<h6><?php echo $row['pregnant'];?></h6>
                                            </div> 
                                            <div class="col-lg-3">
                                                PWD:<h6><?php echo $row['pwd'];?></h6>
                                            </div> 
                                            <div class="col-lg-9">
                                                Type of Disability:<h6><?php echo $row['disability'];?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vl col-lg-1" style="margin-left: 5rem;"></div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                Materials of the House: <h6><?php echo $row['materials'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                                Types of Ownership: <h6><?php echo $row['ownership'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                                Name of Owner: <h6><?php echo $row['namesowner'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                                Does Have Electricity: <h6><?php echo $row['electricity'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                                Does Have Water source: <h6><?php echo $row['water'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                                Waste Mangerment: <h6><?php echo $row['waste'];?></h6>
                                            </div>
                                            <div class="col-lg-6">
                                             Other Waste Management: <h6><?php echo $row['wastemanagement'];?></h6>
                                         </div>
                                         <div class="col-lg-12">
                                          Does have Comfort room: <h6><?php echo $row['cr'];?></h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                               <br>
                               <hr>
                               <h3 class="font-monospace" style="text-align:center;">Valid ID</h3>
                           </div>
                           <div class="col-lg-6">
                               <h3>Valid ID:</h3>
                               <img src="../pic/<?php echo $row['valid_id'];?>" width=400 height=200 class="rounded">
                           </div>
                           <div class="col-lg-6">
                               <h3>Voters:</h3>
                               <img src="../pic/<?php echo $row['voters'];?>" width=400 height=600 class="rounded">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="modal-footer">
     <input type="hidden" name="emailidres" value="<?php  echo $row['email'];?>">
     <input type="hidden" name="idresident" value="<?php  echo $row['user_id'];?>">
     <input type="hidden" name="residentname" value="resident">
     <div style="float:right;">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success approve-btn"
        data-idresident="<?php echo $row['user_id'];?>"
        data-emailidres="<?php echo $row['email'];?>"
        data-residentname="resident"
        data-bs-dismiss="modal">
        Approve
    </button>  
</div>
</div>
</div>
</div>
</div>
</div>

<?php }} 
if (isset($_POST['arvhiveid']));


$id_archivequeryrows = "SELECT * FROM user WHERE user_id = ".$row['user_id']."";
$id_archivequeryrows_viewpageQuery = mysqli_query($conn, $id_archivequeryrows );
while ($archiveid = mysqli_fetch_assoc($id_archivequeryrows_viewpageQuery)){

    $archivequery = "SELECT * FROM user WHERE user_id = '".$archiveid['user_id']."'";
    $results = mysqli_query($conn, $archivequery);
    while ($arcviherow = mysqli_fetch_array($results)){


        ?>

        <!-- Archive residence -->
        <div class="modal fade" id="exampleModalarchive<?php  echo $row['user_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                            <h1>Your sure want to Decline Mr./Ms. <?php echo $arcviherow['lastname'].",".$arcviherow['firstname']." ".$arcviherow['middleinitial']."."?>?</h1>
                        </div>
                        <div class=" d-grid gap-2 col-6 mx-auto" >
                           <input type="hidden" id="emailarchiveset" name="emailarchiveset" value="<?php echo $arcviherow['email'];?>">
                           <input type="hidden" id="idarchiveset" name="idarchiveset" value="<?php echo $arcviherow['user_id'];?>">
                           <input type="hidden" id="archivename" name="archivename" value="Decline">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-danger decline-btn"
                           data-emailarchiveset="<?php echo $arcviherow['email'];?>"
                           data-idarchiveset="<?php echo $arcviherow['user_id'];?>"
                           data-archivename="Decline"
                           data-bs-dismiss="modal">
                           Decline
                       </button>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
<?php 
}
}
}

  /*}
                  $sql_view = "SELECT * FROM user WHERE user_id = '".$row['user_id']."'";
// Execute the query
$resultview = mysqli_query($conn, $sql_view);
while ($row_view = mysqli_fetch_array($resultview)){*/

 ?>

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

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- residents end -->

</div>
</div>  
</div>
<!-- Features End -->

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
                    <a class="btn btn-square btn-light rounded-circle me-2" href="barangay781.2023@gmail.com"><i
                        class="fab fa-google"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100089497350963"><i
                            class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="residentsreports.php">Contact Us</a>
                        <a class="btn btn-link" href="#proj">Our Projects</a>
                        <a class="btn btn-link" href="">Terms & Condition</a><!-- TBF -->
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
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script src="../js/jquery/dataTables.min.js"></script>
            <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
              $(document).ready(function(){
                  $('#mytableforprocess').DataTable();
              });
              $(document).ready(function(){
                  $('#tableidstatistic').DataTable();
              });
              $(document).ready(function(){
    /*decline stats*/
                $(".decline-btn").click(function () {
                    var $namestats = $(this).data('archivename');
                    var $idstats = $(this).data('idarchiveset');
                    var  $emailarchive = $(this).data('emailarchiveset');
                     $('#spindecline'+ $idstats).show();
                            $('#statdecline'+ $idstats).hide();
                    console.log('Sending AJAX request...');
                    $.ajax({
                        url: "../dbh/updatestats.php",
                        type: "POST",
                        data: {
                            archiveset: 'archiveset',
                            idarchiveset: $idstats,
                            emailarchiveset: $emailarchive,
                            archivename: $namestats
                        },
                        success: function (result) {
                            console.log('AJAX request successful:', result);
                            updateTable();
                             $('#spindecline'+ $idstats).hide();
                            $('#statdecline'+ $idstats).show();
                            var toastContainer = document.querySelector('.toast-container');
                            var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for success
                            toastContainer.querySelector('.me-auto').innerText = 'The applicant was declined.';
                            toastContainer.querySelector('.toast').classList.remove('bg-danger');
                            toastContainer.querySelector('.toast').classList.add('bg-primary');
                            toast.show();
                            

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
/*Approve aupdate stats*/
                $(".approve-btn").click(function () {
                    var $nameresidnetstats = $(this).data('residentname');
                    var $idresidentstats = $(this).data('idresident');
                    var $emailresidnetstats = $(this).data('emailidres');
                     $('#spinunrestrict'+ $idresidentstats).show();
                            $('#statunrestrict'+ $idresidentstats).hide();
                    console.log('Sending AJAX request...');
                    $.ajax({
                        url: "../dbh/updatestats.php",
                        type: "POST",
                        data: {
                            approveset: 'approveset',
                            emailidres: $emailresidnetstats,
                            residentname: $nameresidnetstats,
                            idresident: $idresidentstats
                        },
                        success: function (approve) {
                            console.log('AJAX request successful:', approve);
                            updateTable();
                             $('#spinunrestrict'+ $idresidentstats).hide();
                            $('#statunrestrict'+ $idresidentstats).show();
                            var toastContainer = document.querySelector('.toast-container');
                            var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for success
                            toastContainer.querySelector('.me-auto').innerText = 'Your Approve The applicant.';
                            toastContainer.querySelector('.toast').classList.remove('bg-danger');
                            toastContainer.querySelector('.toast').classList.add('bg-primary');
                            toast.show();
                            

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


function updateTable() {
    $.ajax({
      type: "GET",
      url: "../dbh/getstats.php", // Replace with the actual path to your PHP script
      success: function (data) {
        $('#mytable').DataTable().destroy(); 
        $('#retrievetable').html(data);
        $('#mytable').DataTable();
        
        // Reinitialize DataTables

    },
    error: function () {
        alert("Error updating the table.");
    },
});
}



/* $(document).ready(function() {
 // Initialize the modal when the page loads
    var trId = document.querySelector('tr').id;
 $('#exampleModalarchive1').modal();

 // Add a shown event listener to the modal
 $('#exampleModalarchive1').on('shown.bs.modal', function() {
    // Access the button inside the modal once it is shown
    var declineButton = $('#declineidisset');

    // Check if the button exists
    if (declineButton.length > 0) {
      // Add a click event listener to the button
      declineButton.on('click', function() {
        // Handle button click here
        console.log('Decline button clicked');
      });
    } else {
      console.log('Error: Button with id "declineidisset" not found');
    }
 });
});*/

</script>

</body>

</html>

