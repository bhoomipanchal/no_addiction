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
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="alert alert-danger"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="alert alert-success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <?php if (!isset($_GET['success'])) { ?>
                        <div class="section-title-home text-capitalize">
                            <h2>Welcome</h2>
                        </div>
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="icon-box-form">
                                    <p class="text-center text-capitalize fw-bolder text-muted">please, give us following details.</p>
                                    <form action="user_add.php" method="post">
                                        <div class="row my-2">
                                            <!-- <div class="offset-md-3 col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="my-1 fw-bold">Services <label class="text-danger">*</label></label>
                                                    <select class="form-control" name="services">
                                                        <option value="">Select Services</option>
                                                        <option <?php if (isset($_GET['services']) && $_GET['services'] == 'diet') {
                                                                    echo "selected";
                                                                } ?> value="diet">Diet to follow</option>
                                                        <option <?php if (isset($_GET['services']) && $_GET['services'] == 'chart') {
                                                                    echo "selected";
                                                                } ?> value="chart">Medication Chart</option>
                                                        <option <?php if (isset($_GET['services']) && $_GET['services'] == 'home') {
                                                                    echo "selected";
                                                                } ?> value="home">Activities to do at home</option>
                                                        <option <?php if (isset($_GET['services']) && $_GET['services'] == 'video') {
                                                                    echo "selected";
                                                                } ?> value="video">Exercise Videos</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group mt-1 text-center">
                                                    <input class="form-check-input mx-2" type="checkbox" name="addictiontype[]" id="alcoholic" value="alcoholic" <?php if (isset($_GET['alcoholic']) && $_GET['alcoholic'] == 'alcoholic') {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?> onclick="isChecked('alcoholic','alcoholicform')">
                                                    <label class="fw-bold">Are you alcoholic? <label class="text-danger">*</label></label>
                                                </div>
                                                <div id="alcoholicform" <?php if (isset($_GET['alcoholic']) && $_GET['alcoholic'] == 'alcoholic') {
                                                                            echo 'style="display:block"';
                                                                        } else {
                                                                            echo 'style="display:none"';
                                                                        } ?>>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">Which alcohol you drink? <label class="text-danger">*</label></label>
                                                        <input type="text" class="form-control" name="aq1" placeholder="enter name" <?php if (isset($_GET['aq1'])) {
                                                                                                                                        echo "value='" . $_GET['aq1'] . "'";
                                                                                                                                    } ?>>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">How much (ml) you consume a day? <label class="text-danger">*</label></label>
                                                        <input type="number" class="form-control" name="aq2" placeholder="enter number" <?php if (isset($_GET['aq2'])) {
                                                                                                                                            echo "value='" . $_GET['aq2'] . "'";
                                                                                                                                        } ?>>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">How long can you stay without alcohol? <label class="text-danger">*</label></label>
                                                        <input type="text" class="form-control" name="aq3" placeholder="" <?php if (isset($_GET['aq3'])) {
                                                                                                                                echo "value='" . $_GET['aq3'] . "'";
                                                                                                                            } ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-1 text-center">
                                                    <input class="form-check-input mx-2" type="checkbox" name="addictiontype[]" id="smoker" value="smoker" <?php if (isset($_GET['smoker']) && $_GET['smoker'] == 'smoker') {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?> onclick="isChecked('smoker','smokerform')">
                                                    <label class="fw-bold">Are you smoker? <label class="text-danger">*</label></label>
                                                </div>
                                                <div id="smokerform" <?php if (isset($_GET['smoker']) && $_GET['smoker'] == 'smoker') {
                                                                            echo 'style="display:block"';
                                                                        } else {
                                                                            echo 'style="display:none"';
                                                                        } ?>>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">What do you smoke? <label class="text-danger">*</label></label>
                                                        <input type="text" class="form-control" name="sq1" placeholder="enter name" <?php if (isset($_GET['sq1'])) {
                                                                                                                                        echo "value='" . $_GET['sq1'] . "'";
                                                                                                                                    } ?>>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">How much (packets) a day? <label class="text-danger">*</label></label>
                                                        <input type="number" class="form-control" name="sq2" placeholder="enter number" <?php if (isset($_GET['sq2'])) {
                                                                                                                                            echo "value='" . $_GET['sq2'] . "'";
                                                                                                                                        } ?>>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label class="my-1">How long can you stay without alcohol? <label class="text-danger">*</label></label>
                                                        <input type="text" class="form-control" name="sq3" placeholder="" <?php if (isset($_GET['sq3'])) {
                                                                                                                                echo "value='" . $_GET['sq3'] . "'";
                                                                                                                            } ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                                                <button class="btn btn-primary">Submit</button>
                                                <!-- <button class="btn btn-primary" id="btnform" style="display:none">Submit</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            
            <?php if (isset($_GET['success'])) { ?>
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2>Services</h2>
                        <p>To contorl and overcome your addiction we provies following services that you must follow if you want to improve.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-cutlery"></i></div>
                                <h4><a href="./diettoflow.php">Diet to follow</a></h4>
                                <p>Weekly diet chat will be provided on the basis of your consumption.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-eyedropper"></i></div>
                                <h4><a href="./medicationchart.php">Medication Chart</a></h4>
                                <p>Medication chart will be prescribed to you by the Doctor on the basic of your daily consumption.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-home"></i></div>
                                <h4><a href="./homeactivities.php">Activities to do at home</a></h4>
                                <p>List of activities will be suggedted to you to divert your mind form consuming.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-video-camera"></i></div>
                                <h4><a href="./exercisevideo.php">Exercise Videos</a></h4>
                                <p>Exercise and meditation videos will be provided.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Services Section -->
            <?php } ?>
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
        <script>
            var btnform = document.getElementById("btnform");
            var alcohol = "";
            var smoker = "";

            function isChecked(val1, val2) {
                // Get the checkbox
                alcohol = document.getElementById(val1);
                // Get the output text
                var text = document.getElementById(val2);

                // If the checkbox is checked, display the output text
                if (alcohol.checked == true) {
                    text.style.display = "block";
                } else {
                    text.style.display = "none";
                }
            }
        </script>
    </body>

    </html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>