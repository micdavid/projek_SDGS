<?php

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "donatur";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

if (isset($_POST['submit'])) {

    $validasi_nomer = filter_input(INPUT_POST, 'nomerHP', FILTER_VALIDATE_INT);
    $validasi_nominal = filter_input(INPUT_POST, 'nominal', FILTER_VALIDATE_INT);

    $location = "uploads/";
    $nama = $_POST['namaLengkap'];
    $kode = $_POST['kodeDonasi'];
    $nomer = $_POST['nomerHP'];
    $nominal = $_POST['nominal'];
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"];
    $file_name = $_FILES["file"]["name"];
    $file_temp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];


    if ($file_size > 10485760) {
        echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
    } else {
        $sql = "INSERT INTO contributor (namaLengkap, kodeDonasi, nomerHP, nominal, bukti)
				VALUES ('$nama', '$kode', '$nomer', '$nominal', '$file_name')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            move_uploaded_file($file_temp, $location . $file_new_name);
            echo "<script>alert('Wow! File uploaded successfully.')</script>";
        } else {
            echo "<script>alert('Woops! Something wong went.')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Donasi Sekarang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= BASEURL; ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= BASEURL; ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= BASEURL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/upload.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day - v2.2.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top header-inner-pages">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                <i class="icofont-phone"></i> +1 5589 55488 55
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="<?= BASEURL; ?>">Coh</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?= BASEURL; ?>">Home</a></li>
                    <li>Donasi Sekarang</li>
                </ol>
                <h2>Donasi Sekarang</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">

                <form action="form/index.php" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kodeDonasi" class="col-sm-2 col-form-label">Kode Donasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kodeDonasi" name="kodeDonasi">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nomerHP" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomerHP" name="nomerHP">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nominal" name="nominal">
                        </div>
                    </div>
                    <br>
                    <h4 style="text-align: center;">Silahkan transfer amal anda ke no rekening berikut : </h4>
                    <h4 style="text-align: center;">0827476571 a.n FATHORROSI</h4>
                    <div class="file__upload">
                        <div class="body">

                            <div class="header">
                                <h3>Silahkan Upload Bukti Pembayaran Anda</h3>
                            </div>
                            <input type="file" name="file" id="upload" required>
                            <label for="upload">
                                <i class="fa fa-file-text-o fa-3x"></i>
                                <p>
                                    <strong>Drag and drop</strong> files here<br>
                                    or <span>browse</span> to begin the upload
                                </p>
                            </label>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                </form>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Coh</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?= BASEURL; ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/venobox/venobox.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/aos/aos.js"></script>
    <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= BASEURL; ?>/js/main.js"></script>

</body>

</html>