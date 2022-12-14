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
  <main id="main">
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors cover-img">
      <div class="container">
        <div class="row">
          <div class="offset-lg-3 col-lg-6">
            <div class="member align-items-start">
              <div class="text-center">
                <h2 class="logo me-auto"><a href="index.php">No-Addiction</a></h2>
                <h4>Welcome</h4>
              </div>
              <?php if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger"><?php echo $_GET['error']; ?></p>
              <?php } ?>
              <form action="sign-up-chack.php" method="post" class="php-email-form">
                <div class="form-group mt-2">
                  <label class="my-1 fw-bold">Name <label class="text-danger">*</label></label>
                  <input type="text" class="form-control" name="name" placeholder="Name" <?php if (isset($_GET['name'])) { echo "value='".$_GET['name']."'"; } ?> >
                </div>
                <div class="row mt-2">
                  <div class="col-md-6 form-group mt-2 mt-md-0">
                    <label class="my-1 fw-bold">Email <label class="text-danger">*</label></label>
                    <input type="email" class="form-control" name="email" placeholder="Email" <?php if (isset($_GET['email'])) { echo "value='".$_GET['email']."'"; } ?>>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="my-1 fw-bold">Contact No.</label>
                    <input type="text" class="form-control" name="contact" placeholder="Contact" <?php if (isset($_GET['contact'])) { echo "value='".$_GET['contact']."'"; } ?>>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-6 form-group mt-2 my-1">
                    <label class="my-1 fw-bold">Gender <label class="text-danger">*</label></label> <br>
                    <input type="radio" class="form-check-input mx-2" name="gender" value="male" <?php if (isset($_GET['gender']) && $_GET['gender'] == 'male') { echo "checked"; } ?>>Male
                    <input type="radio" class="form-check-input mx-2" name="gender" value="female" <?php if (isset($_GET['gender']) && $_GET['gender'] == 'female') { echo "checked"; } ?>>Female
                  </div>
                  <div class="col-md-6 form-group mt-1">
                    <label class="my-1 fw-bold">Age <label class="text-danger">*</label></label>
                    <input type="number" class="form-control" name="age" placeholder="Age" <?php if (isset($_GET['age'])) { echo "value='".$_GET['age']."'"; } ?>>
                  </div>
                </div>
                <div class="form-group mt-2">
                  <label class="my-1 fw-bold">Address</label>
                  <textarea class="form-control" name="address" rows="3" placeholder="Address"> <?php if (isset($_GET['address'])) { echo $_GET['address']; } ?></textarea>
                </div>
                <div class="row mt-2">
                  <div class="col-md-6 form-group mt-2 mt-md-0">
                    <label class="my-1 fw-bold">Password <label class="text-danger">*</label></label>
                    <input type="password" class="form-control" name="password" placeholder="Password" <?php if (isset($_GET['password'])) { echo "value='".$_GET['password']."'"; } ?>>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="my-1 fw-bold">Confirm Password. <label class="text-danger">*</label></label>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" <?php if (isset($_GET['confirmpassword'])) { echo "value='".$_GET['confirmpassword']."'"; } ?>>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary mt-3 mb-2" type="submit">Sign Up</button>
                  <div class="fs-6">Already have account? <a class="mx-1" href="sign-in.php">Sign In</a></div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Doctors Section -->

  </main><!-- End #main -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>