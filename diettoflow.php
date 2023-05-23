<?php
session_start();
$alcalcoholic = "";
$smoker = "";
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>No Addiction</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <h1 class="logo me-auto"><a href="index.php">No Addiction</a></h1>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto text-capitalize"><?php echo $_SESSION['name']; ?></a></li>
                        <li><a class="nav-link scrollto text-capitalize" href="sign-out.php">Sign-Out</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
                <div class="container">
                    <div class="row ">
                        <div class="offset-lg-4 col-lg-8">

                        </div>
                    </div>
                </div>
            </section><!-- End Why Us Section -->

            <section id="services" class="services">
                <div class="container">
                    <div class="section-title-home text-capitalize">
                        <h2>Diet to follow</h2>
                    </div>
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8">
                            <div class="icon-box-form">
                                <p>Weekly diet chat will be provided on the basis of your consumption.</p>
                                <ul>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                </ul>
                                <p>Weekly diet chat will be provided on the basis of your consumption.</p>
                                <ol>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                    <li>copy this li element</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container py-3">

                <div class=" text-center">
                    <div class="credits">
                        Designed by Bhoomi Panchal
                    </div>
                </div>

            </div>
        </footer><!-- End Footer -->
        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>