<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Responsive and modern agency template built on Bootstrap 4.">
  <meta name="keywords" content="business, marketing, agency">
  <title> Our Brands - Eclipse Group Africa </title>
  <!-- favicon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/gif">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- progress bar -->
  <link rel="stylesheet" href="assets/css/jQuery-plugin-progressbar.css">
  <!-- mean menu -->
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- slick -->
  <link rel="stylesheet" href="assets/css/slick.css">
  <!-- flaticon -->
  <link rel="stylesheet" href="assets/css/font/flaticon.html">
  <!-- nice select -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- style -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <!-- preloader -->
  <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
        </div>
      </div>
    </div>
    <!-- preloader -->
  <?php include 'header.php';?>
  <!-- header ends-->

  <!-- Hero area starts-->
  <section class="hero-area ">
    <div class="hero-banner">
      <div class="inner-hero">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="hero-text">
                <h2>Our Brands</h2>
                <span><a class='home' href='home-1.html'>Home</a> | <a href="#" class="disabled">Brands</a></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero area ends -->

  <!-- Service Details starts -->
  <section class="blog-page">
   <div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="row">
                   <?php
                   require_once 'db.php';
                   // Query to fetch brand details
$sql = "SELECT brand_logo_url, brand_alt, brand_name, brand_website FROM brands";
$result = $conn->query($sql);

            // Check if there are results and iterate through each row
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-lg-4 col-md-4">
                        <div class="blog-wrapper">
                            <div class="blog-img">
                                <img src="assets/images/brands-page/' . $row["brand_logo_url"] . '" alt="' . $row["brand_alt"] . '">
                            </div>
                            <div class="blog-content">
                                <h5>' . $row["brand_name"] . '</h5>
                                <a href="' . $row["brand_website"] . '">Visit Site</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
                
            </div>
        </div>
    </div>
   </div>
  </section>
  <!-- Service details ends -->
  

  <!-- footer -->
   <?php include 'footer.php';?>


  <!-- back to top button -->
  <div class="top-btn ">
    <i class="fas fa-chevron-up "></i>
  </div>

  <!-- jquery -->
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- progress bar -->
  <script src="assets/js/jQuery-plugin-progressbar.js"></script>
  <!-- fontawesome js-->
  <script src="assets/js/all.min.js"></script>
  <!-- mean menu js -->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!-- fontawesome js -->
  <script src="assets/js/fontawesome.min.js"></script>
  <!-- slick js-->
  <script src="assets/js/slick.min.js"></script>
  <!-- nice select js-->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- magnific popup js-->
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <!-- isotope  js-->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!-- iconify -->
  <script src="../code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <!-- main -->
  <script src="assets/js/app.js"></script>
</body>


</html>