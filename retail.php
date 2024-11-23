<!DOCTYPE html>
<html lang="en">

<?php
$on_page = "retail";

?>

<?php include 'head.php';?>

<style>
.myCustomSlides {display: none}
.customImg {vertical-align: middle;}

/* Slideshow container */
.customSlideshowContainer {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.customPrev, .customNext {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.customNext {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.customPrev:hover, .customNext:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.customText {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/5 etc) */
.customNumberText {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.customDot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.customActive, .customDot:hover {
  background-color: #717171;
}

/* Fading animation */
.customFade {
  animation-name: customFade;
  animation-duration: 1.5s;
}

@keyframes customFade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .customPrev, .customNext,.customText {font-size: 11px}
}
</style>

<body>

  <?php include 'header.php';?>

  <!-- Hero area starts-->
  <section class="hero-area ">
    <div class="hero-banner">
      <div class="inner-hero">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
              <div class="hero-text">
                <h2>Retail</h2>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero area ends -->

  <!-- Service Details starts -->
  <section class="blog-details-page">
   <div class="container">
    <div class="row">
    
        <div class="col-lg-8">
            <div class="blog-details-wrapper">
                <div class="customSlideshowContainer">

  <div class="myCustomSlides customFade">
    <img src="assets/images/mbm-logo.jpg" class="customImg" style="width:100%" alt="Retail Mikocheni Builders Merchant (MBM) LOGO">
  </div>

</div>
<br>




<script>
let customSlideIndex = 1;
showCustomSlides(customSlideIndex);

function plusCustomSlides(n) {
  showCustomSlides(customSlideIndex += n);
}

function currentCustomSlide(n) {
  showCustomSlides(customSlideIndex = n);
}

function showCustomSlides(n) {
  let i;
  let slides = document.getElementsByClassName("myCustomSlides");
  let dots = document.getElementsByClassName("customDot");
  if (n > slides.length) {customSlideIndex = 1}    
  if (n < 1) {customSlideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" customActive", "");
  }
  slides[customSlideIndex-1].style.display = "block";  
  dots[customSlideIndex-1].className += " customActive";
}
</script>


                <div class="blog-content-wrapper">
                  <div class="top-meta">
                    <p>Retail</p>
                    <div class="social">
                      
                    </div>
                  </div>
                  <h2>Mikocheni Builders Merchant (MBM)</h2>

<p>At Eclipse Group, our retail division showcases our commitment to delivering top-tier products and services. Among our distinguished entities, Mikocheni Builders Merchant (MBM) stands out as a leading distributor of premium air conditioning solutions. MBM is dedicated to bringing excellence in home appliances, with a focus on enhancing comfort and efficiency through our carefully selected brands.</p>

<div class="blog-details-quote">
  <p>“At Eclipse Group, our retail division is driven by a commitment to quality and innovation. Discover how MBM elevates your comfort with our top brands.”</p>
</div>

<p>Our retail offerings include cutting-edge air conditioning solutions from Daikin and Bruhm. MBM ensures that every product we distribute meets the highest standards of performance and reliability, providing our customers with the best in modern home comfort technology.</p>

<div class="blog-comments">
  <h4>Brands Available with Mikocheni Builders Merchant</h4>
  <div class="single-comment">
    <img src="assets/images/bruhm-home.png" alt="Bruhm Air Conditioners">
    <div class="name-meta-info">
      <div class="name">
        <h5>Bruhm Air Conditioners</h5>
        <div class="date">
          <a href="https://bruhm.co.tz/">Visit Website</a>
        </div>
      </div>
      <p>Bruhm offers a range of high-performance air conditioners designed to provide optimal cooling and comfort. Renowned for their reliability and efficiency, Bruhm products are perfect for enhancing your living space.</p>
    </div>
  </div>

  <div class="single-comment">
    <img src="assets/images/daikin-home.png" alt="Daikin Air Conditioners">
    <div class="name-meta-info">
      <div class="name">
        <h5>Daikin Air Conditioners</h5>
        <div class="date">
          <a href="https://mbmdaikin.co.tz/">Visit Website</a>
        </div>
      </div>
      <p>Daikin is a global leader in air conditioning technology, offering advanced solutions that ensure superior performance and energy efficiency. Experience the cutting edge of climate control with Daikin’s innovative products.</p>
    </div>
  </div>
</div>

                    
                </div>
            </div>
        </div>
        <div class="col-lg-1 r-mb-65"></div>

        <?php include 'business-sidebar.php';?>
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