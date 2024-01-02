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
<!-- Navbar Start -->
<div class="container-fluid bg-dark sticky-top">
    <div class="container bg-transparent">
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
             <a href="registration.php" class="nav-item nav-link text-white">Create an Account</a>
             <a href="login.php" class="nav-item nav-link text-primary">Login</a>
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
        <h1 style="font-size: 5rem;">Change your Password</h1>
    </div>
</section>
</div>


<!-- login Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Change Your Password</h2>
                <div class="row g-3">
                                           <div id="forgotpassuccess">
                            <div class="alert alert-primary d-flex align-items-center" role="alert" >
                                <div class="spinner-border text-primary" role="status" style="display:none;" id="load">
                                  <span class="visually-hidden">Loading...</span>
                              </div>
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill" id="svg"/></svg>
                          <div>
                            Fill up The password Correctly.
                         </div>
                     </div>
                        </div>
                    <input type="hidden" class="form-control form-control-lg" id="username" placeholder="Username" name="username" required>
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="New Password" name="password" required oninput="updatePasswordRequirements()">
                            <span class="input-group-text" id="basic-addon2">
                                <a id="togglePassword" type="button"><i class="bi bi-eye-slash" id="eyeIcon"></i></a>
                            </span>
                            <div id="password-requirements" class="col-lg-12">
              Password must have at least 8 characters, at least 1 uppercase letter, 1 number, and 1 special character.
          </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control form-control-lg" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required>
                            <span class="input-group-text" id="basic-addon2">
                                <a id="togglePassword2" type="button"><i class="bi bi-eye-slash" id="eyeIcon2"></i></a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center" style="float:right;">
                        <div class="row">
                            <div class="col-lg-6">
                                 <a href="login.php" class="btn btn-secondary" >Cancel</a>
                            </div>
                            <div class="col-lg-6">
                                 <button class="btn btn-primary forgotpass-btn" type="button" name="login" data-confirmpassword="#confirmpassword"
                        data-password="password" data-username="username">Confirm</button>
                            </div>
                        </div>
                    </div>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Login Start -->
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
            <script type="text/javascript">
               const passwordInput = document.getElementById('password');
               const passwordInput2 = document.getElementById('confirmpassword');
               const toggleButton = document.getElementById('togglePassword');
               const toggleButton2 = document.getElementById('togglePassword2');
               const eyeIcon = document.getElementById('eyeIcon');
               const eyeIcon2 = document.getElementById('eyeIcon2');
               document.getElementById('password').addEventListener('input', updatePasswordRequirements);

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
       toggleButton2.addEventListener('click', () => {
                if (isPasswordVisible) {
                    passwordInput2.type = 'password';
                    eyeIcon2.classList.remove('bi-eye');
                    eyeIcon2.classList.add('bi-eye-slash');
                } else {
                    passwordInput2.type = 'text';
                    eyeIcon2.classList.remove('bi-eye-slash');
                    eyeIcon2.classList.add('bi-eye');
                }
                isPasswordVisible = !isPasswordVisible;
            });

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
               $(document).ready(function(){
                // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Get the 'username' parameter from the URL
    var urlUsername = getUrlParameter('username');

    // Check if 'username' parameter is not empty
    if (urlUsername !== '') {
        // Set the value of the 'username' input field
        $('#username').val(urlUsername);
    }
                $(document).on('click', '.forgotpass-btn', function () {
                     $('#load').show();
                      $('#svg').hide();
                    var password = $('#password').val();
                    var confirmpassword = $('#confirmpassword').val();
                    var username = $('#username').val();
                    var formData = new FormData();
                    formData.append('fogorpasschange', 'fogorpasschange');
                    formData.append('username', username);
                    formData.append('password', password);
                    formData.append('confirmpassword', confirmpassword);
                    console.log('Sending AJAX request...');
                    $.ajax({
                        url: "send.php",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            console.log('AJAX request successful:', result);
                                 $('#load').hide();
                      $('#svg').show();
                            $('#forgotpassuccess').html(result);
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX request failed:', xhr, status, error);
                            $('#forgotpassuccess').html("AJAX request failed: " + xhr.statusText);
                        }
                    });
                });

            });
        </script>
</body>
</html>