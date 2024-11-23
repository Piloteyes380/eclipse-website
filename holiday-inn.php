<!DOCTYPE html>
<html lang="en">

<?php
$on_page = "holiday-inn";

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
<h2>Holiday Inn Hotel</h2>
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
    <div class="customNumberText">1 / 10</div>
    <img src="assets/images/holidayinn1.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel 1">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">2 / 10</div>
    <img src="assets/images/holidayinn2.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel 2">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">3 / 10</div>
    <img src="assets/images/holidayinn3night.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel 3 Night">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">4 / 10</div>
    <img src="assets/images/holidayinn4night.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel 4 Night">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">5 / 10</div>
    <img src="assets/images/holidayinnhall.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Hall">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">6 / 10</div>
    <img src="assets/images/holidayinngym.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Gym">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">7 / 10</div>
    <img src="assets/images/holidayinnreception.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Reception">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">8 / 10</div>
    <img src="assets/images/holidayinnbedroom.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Bedroom">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">9 / 10</div>
    <img src="assets/images/holidayinnoffice.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Office">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">10 / 10</div>
    <img src="assets/images/holidayinnswimming.jpg" class="customImg" style="width:100%" alt="Holiday Inn Hotel Swimming">
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
  <span class="customDot" onclick="currentCustomSlide(5)"></span>
  <span class="customDot" onclick="currentCustomSlide(6)"></span>
  <span class="customDot" onclick="currentCustomSlide(7)"></span>
  <span class="customDot" onclick="currentCustomSlide(8)"></span>
  <span class="customDot" onclick="currentCustomSlide(9)"></span>
  <span class="customDot" onclick="currentCustomSlide(10)"></span>
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
                    <p>Our Hotels</p>
                    <div class="social">
                      
                    </div>
                  </div>
<h2>Holiday Inn Hotel</h2>

<p>Holiday Inn Hotel offers a harmonious blend of comfort and convenience, making it the perfect destination for travelers seeking both relaxation and connectivity. Situated in a prime location, our hotel is designed to cater to the needs of modern travelers, whether you're here for business or leisure. Just as the iconic Tanzanian sunset brings a sense of calm and beauty, our hotel provides a welcoming atmosphere where you can unwind and recharge. With a commitment to exceptional service and contemporary amenities, every aspect of your stay is carefully curated to ensure a seamless experience.</p>

<div class="blog-details-quote">
  <p>“At Holiday Inn Hotel, we believe that great hospitality is about making every guest feel at home. We invite you to enjoy the perfect balance of comfort and convenience during your stay.”</p>
</div>

<p>Our hotel is designed to elevate your travel experience, much like the vibrant culture of Tanzania enhances your journey. From our strategic location to our modern facilities, Holiday Inn Hotel sets the standard for hospitality, offering a welcoming retreat in the heart of the city.</p>

<br>
<a href="https://www.holidayinn.co.tz/" class="button">Visit Website</a>

                    
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