<?php
session_start();
require_once "public/lampp database/connection.php.php";
if(isset($_SESSION['id'])!="") {
    header("Location: ../pages/html/database/main/dashboard/template/index.html");
}
if (isset($_POST['login'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}  
$result = mysqli_query($conn, "SELECT * FROM planBdb WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['id'] = $row['uid'];
$_SESSION['exampleInputIcon3'] = $row['email'];
$_SESSION['exampleInputPassword6'] = $row['pass'];
header("Location: ../pages/html/database/main/dashboard/template/index.html");
} 
}else {
$error_message = "Incorrect Email or Password!!!";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Plan B - Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="">
<meta name="author" content="">

<link rel="canonical" href="" />

<!--  Social tags -->

<meta name="description" content="">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="">
<meta itemprop="description" content=".">
<meta itemprop="image" content="">

<!-- Twitter Card data -->
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:image" content="">

<!-- Open Graph data -->
<meta property="fb:app_id" content="214738555737136">
<meta property="og:title" content="" />
<meta property="og:type" content="article" />
<meta property="og:url" content="" />
<meta property="og:image" content=""/>
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="../../css/neumorphism.css" rel="stylesheet">



</head>

<body>
    <main>
        <!-- Section -->
        <section class="min-vh-100 d-flex bg-primary align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 justify-content-center">
                        <div class="card bg-primary shadow-soft border-light p-4">
                            <div class="card-header text-center pb-0">
                                <h2 class="h4">Plan B -  Sign In</h2>  
                            </div>
                            <div class="card-body">
                                <form action="#" class="mt-4">
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="exampleInputIcon3">Your email</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                            </div>
                                            <input class="form-control" id="exampleInputIcon3" placeholder="opaque@gmail.com" type="text" aria-label="email adress" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-group">
                                        <!-- Form -->
                                        <div class="form-group">
                                            <label for="exampleInputPassword6">Password</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                                </div>
                                                <input class="form-control" id="exampleInputPassword6" placeholder="Password" type="password" aria-label="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-check mb-4">
                                            <p>User Login type</p>
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                            <label class="form-check-label" for="defaultCheck6" required>
                                                Client <a href="#"></a>
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                            <label class="form-check-label" for="defaultCheck3" required>
                                                Free Lancer<a href="#"></a>
                                            </label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                            <label class="form-check-label" for="defaultCheck4" required>
                                                Jua Kali Artisan<a href="#"></a>
                                            </label>
                                        </div>
                                        <!-- End of Form -->
                                        <div class="d-block d-sm-flex justify-content-between align-items-center mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                                <label class="form-check-label" for="defaultCheck5">
                                                  Remember me
                                                </label>
                                            </div>
                                            <div><a href="#" class="small text-right">Lost password?</a></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                                </form>
                                <div class="mt-3 mb-4 text-center">
                                    <span class="font-weight-normal">or login with</span>
                                </div>
                                <div class="btn-wrapper my-4 text-center">
                                    <button class="btn btn-primary btn-icon-only text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                        <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                    </button>
                                    <button class="btn btn-primary btn-icon-only text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                        <span aria-hidden="true" class="fab fa-twitter"></span>
                                    </button>
                                    <button class="btn btn-primary btn-icon-only text-facebook" type="button" aria-label="github button" title="github button">
                                        <span aria-hidden="true" class="fab fa-github"></span>
                                    </button>
                                </div>
                                <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                                    <span class="font-weight-normal">
                                        Not registered?
                                        <a href="sign-up.html" class="font-weight-bold">Create account</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
<script src="../../vendor/jquery/dist/jquery.min.js"></script>
<script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="../../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../../vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../../vendor/jarallax/dist/jarallax.min.js"></script>
<script src="../../vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="../../vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="../../vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="../../assets/js/neumorphism.js"></script>
</body>

</html>