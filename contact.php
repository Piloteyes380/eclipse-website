<!DOCTYPE html>
<html lang="en">
<?php 
$on_page="contact";
 include 'head.php';?>

<body>

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
                <h2>Contact</h2>
                <span><a class='home' href='index.html'>Home</a> | <a href="#" class="disabled">Contact</a></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero area ends -->

  <!-- contact starts -->
  <section class="contact-page">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="blog-details-wrapper">
                <div class="blog-content-wrapper">
        
                   
                    <div class="comment-form">
                      <h4>Get In Touch</h4>

                      <form action="process_form.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control sm" placeholder="Your Name" required>
        </div>
        <div class="form-group col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" placeholder="Message" rows="6" required></textarea>
    </div>
    <button type="submit" class="button header-cta newsletter-btn">Submit</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
  </section>
  <!-- contact ends -->
  

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