<!DOCTYPE html>
<html lang="en">

<?php
$on_page = "terminal-3";

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
  <h2>Terminal 3</h2>
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
  <div class="customNumberText">1 / 4</div>
  <img src="assets/images/terminal3photo1.jpg" class="customImg" style="width:100%" alt="Terminal 3 restaurant">
</div>

<div class="myCustomSlides customFade">
  <div class="customNumberText">2 / 4</div>
  <img src="assets/images/terminal3photo2.jpg" class="customImg" style="width:100%" alt="Terminal 3 restaurant">
</div>

<div class="myCustomSlides customFade">
  <div class="customNumberText">3 / 4</div>
  <img src="assets/images/terminal3photo3.jpg" class="customImg" style="width:100%" alt="Terminal 3 restaurant">
</div>


<div class="myCustomSlides customFade">
  <div class="customNumberText">3 / 4</div>
  <img src="assets/images/terminal3photo4.jpg" class="customImg" style="width:100%" alt="Terminal 3 restaurant">
</div>

<a class="customPrev" onclick="plusCustomSlides(-1)">❮</a>
<a class="customNext" onclick="plusCustomSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
<span class="customDot" onclick="currentCustomSlide(1)"></span> 
<span class="customDot" onclick="currentCustomSlide(2)"></span> 
<span class="customDot" onclick="currentCustomSlide(3)"></span> 
<span class="customDot" onclick="currentCustomSlide(4)"></span> 
</div>

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
    <p>Restaurant</p>
    <div class="social"></div>
  </div>

  <h2>Terminal 3</h2>

  <p>Terminal 3 is the ultimate rooftop destination located in Dodoma, Tanzania. Offering a luxurious experience with a heated swimming pool, Jacuzzi, Gym, and a Restaurant with Bar, Terminal 3 elevates your relaxation to new heights. The ambiance is perfect for unwinding while enjoying live performances, making it a hotspot for both locals and travelers seeking a premium social experience.</p>

  <div class="blog-details-quote">
    <p>“At Terminal 3, we redefine relaxation with a blend of luxury and entertainment. Join us to elevate your leisure time.”</p>
  </div>

  <p>Whether you're looking to enjoy a swim, savor delicious meals, or simply soak in the stunning views, Terminal 3 promises an unforgettable experience. Follow us on Instagram: @terminal3_dodoma to stay updated on our latest events.</p>

  <br>
  <a href="https://www.instagram.com/terminal3_dodoma/" class="button">Visit Instagram</a>
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