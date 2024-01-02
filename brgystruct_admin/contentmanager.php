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
    <link href="../css/dataTables.min.css" rel="stylesheet">

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

<script src="../js/jquery/jquery.com_jquery-3.7.1.js"></script>
<script
src="https://cdn.tiny.cloud/1/iwypvek68ei1w45ek02jpgq2dfshvgthpa71tql2mhyanvfl/tinymce/6/tinymce.min.js"
referrerpolicy="origin"
></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
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
                    <a class="navbar-brand" href="certificate.php">
                        <img src="../pic/nav.png" alt="Logo" width="400" height="70" class="d-inline-block align-text-top">

                    </a>
                </div> 
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                 <a href="contentmanager.php" class="nav-item nav-link text-primary" >Content Manager</a>
                 <a href="certificate.php" class="nav-item nav-link text-white">Certificates</a>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1 style="font-size: 5rem;">CONTENT MANAGER</h1>
    </div>
</div>
<!-- create a announcement -->

<div class="container-fluid">
    <div class="row ">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body" style="text-align:center;">
            <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
            <h5 class="card-title" >Barangay Announcement</h5>
            <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
        </div>
        <div class="card-footer">
           <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create <i class="bi bi-chevron-double-right"></i></a>
       </div>
   </div>
</div>
<div class="col-lg-4 ">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title" >Barangay Events</h5>
        <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdropforevents">Create <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
<div class="col-lg-4">
    <div class="card">
      <div class="card-body" style="text-align:center;">
        <h1 class="text-primary" style="text-align:center; font-size:5rem;"><i class="bi bi-file-earmark-richtext"></i></h1>
        <h5 class="card-title" >Barangay Projects</h5>
        <p class="card-text">formal or informal communication from the local government unit at the barangay level. It is used primarily to keep residents informed about </p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary col-lg-12" data-bs-toggle="modal" data-bs-target="#staticBackdropforproject">Create <i class="bi bi-chevron-double-right"></i></a>
   </div>
</div>
</div>
</div>
</div>


<!-- Announcement and Events  -->
<!-- Announcement -->
<div class="container-fluid "style="margin-top: 1rem;">
    <div class="row" >
        <div class="col-lg-12">
          <h1 class="display-12 mb-5 text-primary"><i>Barangay Events</i></h1>
          <div class="toast-container position-absolute top-0 end-0 p-3 container-toast" >
            <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true"> 
                <div class="toast-body">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 col-md-10">
                         <strong class="me-auto meto">Archived of resident is successful.</strong>
                     </div>
                     <div class="col-lg-2 col-sm-2 col-md-2">
                         <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="overflow-auto row"style="max-height: 20rem;margin-top: -2rem;" id="display_announcement">
         <table class="table table-hover" id="myevents">
          <thead>
            <tr>
              <th scope="col">Type</th>
              <th scope="col">image</th>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody id="tableevents">
        <?php
        include("../dbh/dbh.inc.php");
        $sql = "SELECT * FROM announcements";
        $sqlresult = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($sqlresult)) { 
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
    $fileName = basename($row['a_pic']);
    if (!empty($fileName) && $fileName != 'uploads') {
        $setfilename = $fileName;
    }
    if($row['a_display']=="archived"){
        ?>
        <tr class="bg-danger text-white">
        <?php }else{ ?>
            <tr>
            <?php } ?>
            <td><?php echo $row['a_status'];?></td>
            <td style="text-align:center;"><?php  echo '<img src="../pic/'. $setfilename.'" class="rounded-circle" alt="Cinque Terre" width="45" height="45">'; ?></td>
            <td><?php echo $row['a_title'];?></td>
            <td><?php echo $row['a_date'];?></td>
            <td><?php echo $timestatus;?></td>
            <td>        <?php
            if($row['a_display']!="archived"){
                ?>
                <input type="hidden" name="idannouncementcall" id="id<?php echo $row['a_id'];?>"  value="<?php echo $row['a_id'];?>"> 
                <?php
                if ($row['a_status'] == "Event") {?>
                 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforeventsupdate<?php echo $row['a_id'];?>">Edit</button>
                    <?php
                }else if($row['a_status'] == "Project"){
                ?>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforprojectupdate<?php echo $row['a_id'];?>" data-idannouncementcall="id<?php echo $row['a_id'];?>">Edit</button>
            <?php } else{ ?>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#aanouncementedit<?php echo $row['a_id'];?>" >Edit</button>
                <?php }?>
                <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#Archiveannouncement<?php echo $row['a_id'];?>">Archive</a></li>
                <?php } else{?>
                   <input type="hidden" name="idrestore" id="<?php echo $row['a_id'];?>" value="<?php echo $row['a_id'];?>"> 
                   <button type="button" class="btn btn-warning restore-btn"
                   data-idrestore="<?php echo $row['a_id'];?>"
                   >restore</button>
               <?php } ?>
           </td>
       </tr>

       <?php
       $sqlupdate = "SELECT * FROM announcements WHERE a_id = '". $row['a_id']."'";
       $sqlresultupdate = mysqli_query($conn, $sqlupdate);
       while ($rowupdate = mysqli_fetch_assoc($sqlresultupdate)) {
         $fileNamesetupdate = basename($row['a_pic']);
         ?>
         <!-- Announcement modals -->
         <div class="modal fade" id="aanouncementedit<?php echo $rowupdate['a_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update the Barangay Announcement</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="showmessageupdate<?php echo $rowupdate['a_id'];?>">
                           <div class="alert alert-primary d-flex align-items-center" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                              <div>
                               Fill up the form
                           </div>
                       </div>
                   </div>
                   <div class="row overflow-auto" style="max-height:20rem; ">
                    <div class="col-lg-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="titleupdate<?php echo $rowupdate['a_id'];?>" placeholder="Place your Title here" name="titlupdateeannouncement" value="<?php echo $rowupdate['a_title'];?>">
                            <label for="title">Write your Title Here...</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-floating">
                            <input type="file" class="form-control" id="filetypeupdate<?php echo $rowupdate['a_id'];?>" placeholder="Upload Picture" name="image" >
                            <label for="filetype">Upload Picture</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
                        Accepted file types: .png .jpg .jpeg</p>
                    </div>
                    <div class="col-lg-12" style="text-align:center;">
                     <img src="../pic/<?php echo $fileName; ?>" alt="Preview" style="max-width: 100px; max-height: 100px;">
                     <p class="font-monospace">Current Image: <?php echo $fileNamesetupdate?></p>
                     <p class="font-monospace bg-warning">If you wish to change The image, upload a photo.</p>
                 </div>
             
             <div class="col-lg-12">
                <div class="form-floating">
                   <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaupdate<?php echo $rowupdate['a_id'];?>" name="contentname"><?php echo $rowupdate['a_content'];?></textarea>
                   <label for="floatingTextareaupdate">Content of an Announcement</label>
               </div>
           </div>
           <script>
                               // Initialize TinyMCE for the specific textarea with a unique ID
            tinymce.init({
                selector: '#floatingTextareaupdate' + <?php echo $rowupdate['a_id'];?>,
               plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                    ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });
        </script>
        <input type="hidden" name="idannouncement" id="<?php echo $rowupdate['a_id'];?>" class="idannouncement" value="<?php echo $rowupdate['a_id'];?>">
        </div> 
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success announceupdate-btn" name="submit"
        data-idannouncement="<?php echo $rowupdate['a_id'];?>"
        data-titlupdateeannouncement="#titleupdate"
        data-image="#filetype"
        data-content="#floatingTextareaupdate"
        >Update </button>

    </div>
</div>
</div>
</div>

<div class="modal Archive " id="Archiveannouncement<?php echo $rowupdate['a_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <h1>Your sure want to Archive this <?php echo  $rowupdate['a_status']." ".$rowupdate['a_title'];?> ?</h1>
                    </div>
                    <div class=" d-grid gap-2 col-6 mx-auto" >
                        <input type="hidden" name="idarchiveannouncement" id="<?php echo $rowupdate['a_id'];?>" value="<?php echo $rowupdate['a_id'];?>">
                        <button type="button" class="btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger  archiveannounce-btn "
                        data-idarchiveannouncement="<?php echo $rowupdate['a_id'];?>"
                        data-bs-dismiss="modal">ARCHIVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- update event -->
<div class="modal fade " id="staticBackdropforeventsupdate<?php echo $rowupdate['a_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Barangay Events</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="showmessageeventupdate<?php echo $rowupdate['a_id'];?>">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="updatetitleevent<?php echo $rowupdate['a_id'];?>" placeholder="Place your Title here" name="updatetitleevent" value="<?php echo $rowupdate['a_title'];?>">
                  <label for="title">Title of Event</label>
              </div>
          </div>
    <div class="col-lg-6">
        <div class="form-floating">
          <input type="date" class="form-control" id="updatestartdateeven<?php echo $rowupdate['a_id'];?>" name="updatestartdateeven" value="<?php echo $rowupdate['a_startdate'];?>" min="<?php echo date('Y-m-d'); ?>">
          <label for="filetype">Start date</label>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="updateenddateeven<?php echo $rowupdate['a_id'];?>" name="updateenddateeven" value="<?php echo $rowupdate['a_enddate'];?>" min="<?php echo date('Y-m-d'); ?>">
      <label for="filetype">End date</label>
  </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="form-floating">
     <textarea class="form-control" placeholder="Leave a comment here" id="updatefloatingTextareaevent<?php echo $rowupdate['a_id'];?>" name="updatecontentevent"><?php echo $rowupdate['a_content'];?></textarea>
     <label for="floatingTextarea"></label>
     <script>
                               // Initialize TinyMCE for the specific textarea with a unique ID
            tinymce.init({
                selector: '#updatefloatingTextareaevent' + <?php echo $rowupdate['a_id'];?>,
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                    ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });
        </script>
 </div>
</div>
</div>
<div class="modal-footer">
    <input type="hidden" name="eventid" value="<?php echo $rowupdate['a_id'];?>" id="<?php echo $rowupdate['a_id'];?>">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary updateevent-btn"
    data-updatetitleevent="#updatetitleevent"
    data-eventid="<?php echo $rowupdate['a_id'];?>"
    data-updatestartdateeven="#updatestartdateeven"
    data-updateenddateeven="#updateenddateeven"
    data-updatecontentevent="#updatecontentevent"
    >Submit</button>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade " id="staticBackdropforprojectupdate<?php echo $rowupdate['a_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
         <div id="showmessageproject<?php echo $rowupdate['a_id'];?>">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="titleproject<?php echo $rowupdate['a_id'];?>" placeholder="Place your Title here" name="titleproject" value="<?php echo $rowupdate['a_title'];?>">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
          <div class="col-lg-12">
            <div class="form-floating">
              <input type="file" class="form-control" id="filetypeproject<?php echo $rowupdate['a_id'];?>" placeholder="Upload Picture" name="filetypeproject" >
              <label for="filetype">Upload Picture</label>
          </div>
      </div>
      <div class="col-lg-12">
        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
        Accepted file types: .png .jpg .jpeg</p>
    </div> 
    <div class="col-lg-12" style="text-align:center;">
                     <img src="../pic/<?php echo $fileName; ?>" alt="Preview" style="max-width: 100px; max-height: 100px;">
                     <p class="font-monospace">Current Image: <?php echo $fileNamesetupdate?></p>
                     <p class="font-monospace bg-warning">If you wish to change The image, upload a photo.</p>
                 </div>
    <div class="col-lg-6">
        <div class="form-floating">
          <input type="date" class="form-control" id="startdateproject<?php echo $rowupdate['a_id'];?>" placeholder="Upload Picture" name="startdateproject"value="<?php echo $rowupdate['a_startdate'];?>">
          <label for="filetype">Start date</label>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="enddateproject<?php echo $rowupdate['a_id'];?>" placeholder="Upload Picture" name="enddateproject" value="<?php echo $rowupdate['a_enddate'];?>">
      <label for="filetype">End date</label>
  </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="form-floating">
     <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaproject<?php echo $rowupdate['a_id'];?>" name="floatingTextareaproject"><?php echo $rowupdate['a_content'];?>"</textarea>
     <label for="floatingTextarea">Content of a project</label>
     <script>
                               // Initialize TinyMCE for the specific textarea with a unique ID
            tinymce.init({
                selector: '#floatingTextareaproject' + <?php echo $rowupdate['a_id'];?>,
               plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                    ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });
        </script>
 </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="hidden" name="projectid" value="<?php echo $rowupdate['a_id'];?>" id="<?php echo $rowupdate['a_id'];?>">
    <button type="button" class="btn btn-primary projectupdate-btn" 
    data-titleproject="#titleproject"
    data-projectid="<?php echo $rowupdate['a_id'];?>"
    data-filetypeproject="#filetypeproject"
    data-startdateproject="#startdateproject"
    data-enddateproject="#enddateproject"
    data-floatingTextareaproject="#floatingTextareaproject"
    >Submit</button>
</div>
</div>
</div>
</div>
</div>
<?php  }}?>

</tbody>
</table>
</div>
</div>

<!-- Team Start -->

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


            <script src="../js/jquery/popper.min.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="../js/jquery/dataTables.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>
            <!-- Template Javascript -->
            <script src="js/main.js"></script>


            <script type="text/javascript">

             $(document).ready(function(){
              $('#myevents').DataTable();
          });
             tinymce.init({
                selector: '#floatingTextarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });

             tinymce.init({
                selector: '#floatingTextareaevent',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });
             tinymce.init({
                selector: '#floatingTextareaproject',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                content_style: 'body { font-family: Arial, sans-serif; font-size: 14px; }',
                menubar: false
            });

        </script>
        <script type="text/javascript">

            $(document).ready(function(){
               $(document).on('click', '.announce-btn', function () {
                var titleannouncement = $('#title').val();
                var content = tinymce.activeEditor.getContent();
                var image = $('#filetypeannounce')[0].files[0];
                var formData = new FormData();
                formData.append('addannouncement', 'addannouncement');
                formData.append('titleannouncement', titleannouncement);
                formData.append('content', content);
                formData.append('image', image);

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/contentmanager.dbh.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log(image);
                        console.log('AJAX request successful:', result);
                        // Check if the result contains the success message
            if (result.includes("Announcement has been published!")) {
                // Refresh the table or the entire page 
                setTimeout(function () {
                    location.reload();
                }, 250);
               // Alternatively, you can update a specific part of the page $('#myevents tbody').load('contentmanager.php #tableevents');using jQuery 
                // Example:  // This reloads the entire page
            }

            getannouncement(); // Call getannouncement after successful update
            $('#showmessage').html(result);
         
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessage').html("AJAX request failed: " + xhr.statusText);
        }
    });
            });

               $(document).on('click', '.announceupdate-btn', function () {
                var $idstats = $(this).data('idannouncement');
                var titlupdateeannouncement = $('#titleupdate' + $idstats).val();
                var content = tinymce.get('floatingTextareaupdate' + $idstats).getContent();
                var image = $('#filetypeupdate' + $idstats)[0].files[0];
                var formData = new FormData();
                formData.append('updateannouncement', 'updateannouncement');
                formData.append('titlupdateeannouncement', titlupdateeannouncement);
                formData.append('idannouncement', $idstats);
                formData.append('contentname', content);
                formData.append('image', image);

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/updatecontent.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request successful:', result);
            getannouncement(); // Call the getannouncement function after successful update
            $('#showmessageupdate' + $idstats).html(result);
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessageupdate' + $idstats).html("AJAX request failed: " + xhr.statusText);
        }
    });
            });

               $(document).on('click', '.archiveannounce-btn', function () {
                var idarchiveannouncement = $(this).data('idarchiveannouncement');
                console.log('Sending AJAX request for update...');
                var formData = new FormData();
                formData.append('archiveannouncement', 'archiveannouncement');
                formData.append('idarchiveannouncement', idarchiveannouncement);
                $.ajax({
                    url: "../dbh/archive.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request for update successful:', result);
                        getannouncement();
                        var toastContainer = document.querySelector('.container-toast');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                // Update the content of the toast for success
                        toastContainer.querySelector('.meto').innerText = 'The Announcement had been Archived.';
                        toastContainer.querySelector('.toast').classList.remove('bg-danger');
                        toastContainer.querySelector('.toast').classList.add('bg-primary');
                        toast.show();
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX request for update failed:', xhr, status, error);
                        $('#alertstatus_update' + officialIdHidden).html("AJAX request failed: " + xhr.statusText);
                    }
                });
            });
               $(document).on('click', '.restore-btn', function () {
                var idrestore = $(this).data('idrestore');
                console.log('Sending AJAX request for update...');
                var formData = new FormData();
                formData.append('resotreannouncement', 'resotreannouncement');
                formData.append('idrestore', idrestore);
                $.ajax({
                    url: "../dbh/archive.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request for update successful:', result);
                        getannouncement();
                        var toastContainer = document.querySelector('.container-toast');
                        var toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
            // Update the content of the toast for success
                        toastContainer.querySelector('.meto').innerText = 'The Announcement had been Restored.';
                        toastContainer.querySelector('.toast').classList.remove('bg-danger');
                        toastContainer.querySelector('.toast').classList.add('bg-primary');
                        toast.show();
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX request for update failed:', xhr, status, error);
                        $('#alertstatus_update' + officialIdHidden).html("AJAX request failed: " + xhr.statusText);
                    }
                });
            });


               $(document).on('click', '.event-btn', function () {
                var titleevent = $('#titleevent').val();
                var startdateeven = $('#startdateeven').val();
                var enddateeven = $('#enddateeven').val();
                var content = tinymce.activeEditor.getContent();
                var formData = new FormData();
                formData.append('addevent', 'addevent');
                formData.append('titleevent', titleevent);
                formData.append('contentevent', content);
                formData.append('startdateeven', startdateeven);
                formData.append('enddateeven', enddateeven);

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/contentmanager.dbh.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request successful:', result);
                           if (result.includes("Event has been published!")) {
                // Refresh the table or the entire page 
                setTimeout(function () {
                    location.reload();
                }, 250);
               // Alternatively, you can update a specific part of the page $('#myevents tbody').load('contentmanager.php #tableevents');using jQuery 
                // Example:  // This reloads the entire page
            }
            getannouncement(); // Call getannouncement after successful update          
            $('#showmessageevent').html(result);
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessageevent').html("AJAX request failed: " + xhr.statusText);
        }
    });
            });
                $(document).on('click', '.updateevent-btn', function () {
                var $idstats = $(this).data('eventid');
                var updatetitleevent = $('#updatetitleevent' + $idstats).val();
                var updatestartdateeven = $('#updatestartdateeven' + $idstats).val();
                var updateenddateeven = $('#updateenddateeven' + $idstats).val();
                var content = tinymce.get('updatefloatingTextareaevent' + $idstats).getContent();
                var formData = new FormData();
                formData.append('updateevent', 'updateevent');
                formData.append('eventid', $idstats);
                formData.append('updatetitleevent', updatetitleevent);
                formData.append('updatestartdateeven', updatestartdateeven);
                formData.append('updateenddateeven', updateenddateeven);
                formData.append('updatecontentevent', content);

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/updatecontent.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request successful:', result);
            getannouncement(); // Call the getannouncement function after successful update
            $('#showmessageeventupdate' + $idstats).html(result);
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessageeventupdate' + $idstats).html("AJAX request failed: " + xhr.statusText);
        }
    });
            }); 

               $(document).on('click', '.project-btn', function () {
                var titleproject = $('#titleproject').val();
                var startdateproject = $('#startdateproject').val();
                var enddateproject = $('#enddateproject').val();
                var floatingTextareaproject = tinymce.activeEditor.getContent();
                  var filetypeproject = $('#filetypeproject')[0].files[0];
                var formData = new FormData();
                formData.append('addproject', 'addproject');
                formData.append('titleproject', titleproject);
                formData.append('startdateproject', startdateproject);
                formData.append('enddateproject', enddateproject);
                formData.append('floatingTextareaproject', floatingTextareaproject);
                formData.append('filetypeproject', filetypeproject);

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/contentmanager.dbh.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request successful:', result);
                           if (result.includes("Project has been published!")) {
                // Refresh the table or the entire page 
                setTimeout(function () {
                    location.reload();
                }, 250);
               // Alternatively, you can update a specific part of the page $('#myevents tbody').load('contentmanager.php #tableevents');using jQuery 
                // Example:  // This reloads the entire page
            }
            getannouncement(); // Call getannouncement after successful update
               $('#showmessageproject').html(result);
                       
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessageproject').html("AJAX request failed: " + xhr.statusText);
        }
    });
            });
     $(document).on('click', '.projectupdate-btn', function () {
                var $idstats = $(this).data('projectid');
                var titleproject = $('#titleproject' + $idstats).val();
                var startdateproject = $('#startdateproject' + $idstats).val();
                var enddateproject = $('#enddateproject' + $idstats).val();
                var floatingTextareaproject = tinymce.get('floatingTextareaproject' + $idstats).getContent();
                var filetypeproject = $('#filetypeproject' + $idstats)[0].files[0];
                var formData = new FormData();
                formData.append('updateproject', 'updateproject');
                formData.append('projectid', $idstats);
                formData.append('titleproject', titleproject);
                formData.append('startdateproject', startdateproject);
                formData.append('enddateproject', enddateproject);
                formData.append('floatingTextareaproject', floatingTextareaproject);
                formData.append('filetypeproject', filetypeproject);;

                console.log('Sending AJAX request...');
                $.ajax({
                    url: "../dbh/updatecontent.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        console.log('AJAX request successful:', result);
            getannouncement(); // Call the getannouncement function after successful update
            $('#showmessageproject' + $idstats).html(result);
        },
        error: function (xhr, status, error) {
            console.error('AJAX request failed:', xhr, status, error);
            $('#showmessageproject' + $idstats).html("AJAX request failed: " + xhr.statusText);
        }
    });
            }); 
           });
function getannouncement() {
    $.ajax({
        type: "GET", // Change to GET request
        url: "../dbh/getannouncement.php",
        success: function (data) {
         if ($.fn.DataTable.isDataTable('#myevents')) {
            $('#myevents').DataTable().destroy();
        }
        $('#tableevents').html(data);

        $('#myevents').DataTable({
                // DataTable options go here
        });
    },
    error: function () {
        alert("Error updating the table.");
    },
});
}



</script>
<!-- Announcement modals -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div id="showmessage">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
           <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" placeholder="Place your Title here" name="titleannouncement">
                    <label for="title">Write your Title Here...</label>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <input type="file" class="form-control" id="filetypeannounce" placeholder="Upload Picture" name="image">
                    <label for="filetype">Upload Picture</label>
                </div>
            </div>
            <div class="col-lg-12">
                <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
                Accepted file types: .png .jpg .jpeg</p>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="content"></textarea>
                    <label for="floatingTextarea">Content of an Announcement</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary announce-btn" name="submit"
        data-titleannouncement="#title"
        data-image="#filetype"
        data-content="#floatingTextarea">Submit</button>

    </div>
</div>
</div>
</div>

<!-- MOdal for Events -->
<div class="modal fade " id="staticBackdropforevents" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Events</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="showmessageevent">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="titleevent" placeholder="Place your Title here" name="titleevent">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="startdateeven" name="startdateeven" min="<?php echo date('Y-m-d'); ?>">
        <label for="startdateeven">Start date</label>
    </div>
</div>
<div class="col-lg-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="enddateeven" name="enddateeven" min="<?php echo date('Y-m-d'); ?>">
        <label for="enddateeven">End date</label>
    </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="form-floating">
     <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaevent" name="contentevent"></textarea>
     <label for="floatingTextarea">Content of a Events</label>
 </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary event-btn"
    data-titleevent="#titleevent"
    data-filetypeevent="#filetypeevent"
    data-startdateeven="#startdateeven"
    data-enddateeven="#enddateeven"
    data-contentevent="#floatingTextareaevent"
    >Submit</button>
</div>
</div>
</div>
</div>
</div>

<!-- MOdal for project -->
<div class="modal fade " id="staticBackdropforproject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Barangay Project</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
         <div id="showmessageproject">
                   <div class="alert alert-primary d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                      <div>
                       Fill up the form
                   </div>
               </div>
           </div>
        <div class="row overflow-auto" style="max-height:20rem; ">
            <div class="col-lg-12">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="titleproject" placeholder="Place your Title here" name="titleproject">
                  <label for="title">Write your Title Here...</label>
              </div>
          </div>
          <div class="col-lg-12">
            <div class="form-floating">
              <input type="file" class="form-control" id="filetypeproject" placeholder="Upload Picture" name="filetypeproject">
              <label for="filetype">Upload Picture</label>
          </div>
      </div>
      <div class="col-lg-12">
        <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
        Accepted file types: .png .jpg .jpeg</p>
    </div>
    <div class="col-lg-6">
        <div class="form-floating">
          <input type="date" class="form-control" id="startdateproject" placeholder="Upload Picture" name="startdateproject">
          <label for="filetype">Start date</label>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="enddateproject" placeholder="Upload Picture" name="enddateproject">
      <label for="filetype">End date</label>
  </div>
</div>
<div class="col-lg-12">
    <br>
    <div class="form-floating">
     <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaproject" name="floatingTextareaproject"></textarea>
     <label for="floatingTextarea">Content of a project</label>
 </div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary project-btn" 
    data-titleproject="#titleproject"
    data-filetypeproject="#filetypeproject"
    data-startdateproject="#startdateproject"
    data-enddateproject="#enddateproject"
    data-floatingTextareaproject="#floatingTextareaproject"
    >Submit</button>
</div>
</div>
</div>
</div>
</div>


<!-- MOdal for archive -->
<div class="modal Archive " id="staticBackdroparchive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <h1>Your sure want to Archive this Project ?</h1>
                    </div>
                    <div class=" d-grid gap-2 col-6 mx-auto" >
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-danger"
                        >ARCHIVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






</body>

</html>