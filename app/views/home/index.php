<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Charity of Humanity - COH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= BASEURL; ?>/img/favicon.png" rel="icon">
    <link href="<?= BASEURL; ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- =======================================================
  * Template Name: Day - v2.2.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
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
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.php">COH</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to COH</h1>
            <h1>Charity of Humanity</h1>
            <h2>We are charity volunteers for those in need.</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="<?= BASEURL; ?>/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h2>Donasi untuk Kemanusiaan</h2> <br>
                        <p style="text-align: justify;">
                            Charity of Humanity merupakan website yang kami buat sebagai sarana untuk mengumpulkan dana amal, yang akan digunakan untuk membantu saudara kita yang membutuhkan. Harapannya dengan adanya website ini akan memberi kemudahan untuk orang orang yang ingin
                            beramal, dan bisa sedikit membantu mereka yang sedang kesusahan.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>Ongoing Charity</span>
                    <h2>Ongoing Charity</h2>
                    <p>Merupakan pengumpulan dana amal yang sedang berlangsung.</p>
                </div>

                <div class="row">

                    <?php foreach($data['cm'] as $cm) : ?>
                        <?php if($cm['id'] < 4) {?>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                                <div class="card">
                                    <img src="<?= BASEURL; ?><?=$cm['img']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href=""><h5 class="card-title"><?=$cm['judul']; ?></h5></a>
                                        <p class="card-text mb-2">
                                            <small class="text-muted"><?=$cm['tanggal']; ?></small>
                                        </p>
                                        <p class="card-text mb-3"><?=$cm['subTittle']; ?></p>
                                        <a class="btn btn-danger" href="#" role="button">Donasi Sekarang</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    <?php endforeach ?>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>Upcoming Charity</span>
                    <h2>Upcoming Charity</h2>
                    <p>Merupakan pengumpulan dana amal yang akan segera kami laksanakan.</p>
                </div>

                <div class="row">

                    <?php foreach($data['cm'] as $cm) : ?>
                        <?php if($cm['id'] > 3) {?>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                                <div class="card">
                                    <img src="<?= BASEURL; ?><?=$cm['img']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href=""><h5 class="card-title"><?=$cm['judul']; ?></h5></a>
                                        <p class="card-text mb-2">
                                            <small class="text-muted"><?=$cm['tanggal']; ?></small>
                                        </p>
                                        <p class="card-text mb-3"><?=$cm['subTittle']; ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    <?php endforeach ?>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Donasi Sekarang</h3>
                    <p> Jika kita masih menganggap kemanusiaan itu berharga, maka bantulah saudara kita yang memmbutuhkan bantuan di luar sana.</p>
                    <a class="cta-btn" href="#">Klik untuk Berdonasi!</a>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Team</span>
                    <h2>Team</h2>
                    <p>The following are our team members</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-8 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="<?= BASEURL; ?>/img/team/team-1.jpg" alt="">
                            <h4>Fathorrosi</h4>
                            <span>College Student</span>
                            <p>
                                Mahasiswa semester 4 prodi Sistem Informasi, Fakultas Ilmu Komputer, Unniversitas Jember
                            </p>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-8 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="<?= BASEURL; ?>/img/team/team-3.jpg" alt="">
                            <h4>Michael David Simon</h4>
                            <span>College Student</span>
                            <p>
                                Mahasiswa semester 4 prodi Sistem Informasi, Fakultas Ilmu Komputer, Unniversitas Jember
                            </p>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="../form/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Coh</h3>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
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
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/php-email-form/validate.js"></script>
    <script src="<?= BASEURL; ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/venobox/venobox.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= BASEURL; ?>/js/main.js"></script>

</body>

</html>