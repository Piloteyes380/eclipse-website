<!DOCTYPE html>
<html lang="en">

<?php
$on_page = "hotels.php";

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
                <h2>Our Hotels</h2>
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
    <div class="customNumberText">1 / 3</div>
    <img src="assets/images/holidayinn1.jpg" class="customImg" style="width:100%" alt="Holiday Inn Dar es Salaam">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">2 / 3</div>
    <img src="assets/images/bwd10.jpg" class="customImg" style="width:100%" alt="Best Western Dodoma City Hotel">
  </div>

  <div class="myCustomSlides customFade">
    <div class="customNumberText">3 / 3</div>
    <img src="assets/images/jangwani4.jpg" class="customImg" style="width:100%" alt="Jangwani Sea Breeze Resort">
  </div>


  <a class="customPrev" onclick="plusCustomSlides(-1)">❮</a>
  <a class="customNext" onclick="plusCustomSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="customDot" onclick="currentCustomSlide(1)"></span> 
  <span class="customDot" onclick="currentCustomSlide(2)"></span> 
  <span class="customDot" onclick="currentCustomSlide(3)"></span> 
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
                  <h2>Eclipse Hotels</h2>

                  

                  <p>Eclipse Hotels offers a unique blend of luxury and comfort, making every stay a memorable experience. Each property in our group is thoughtfully designed to cater to the discerning traveler, ensuring a perfect balance between elegance and relaxation. Just as a well-brewed cup of tea brings warmth and satisfaction, our hotels provide the ideal environment for unwinding and rejuvenating after a long day. With attention to detail akin to the precise arrangement of tiles in a minimalistic Tokyo residence, we ensure that every aspect of your stay is meticulously crafted.</p>
<div class="blog-details-quote">
  <p>“At Eclipse Hotels, we believe that the most important part of hospitality is sharing it. We invite you to experience our commitment to excellence in every stay.”</p>
</div>
<p>Our hotels are designed to elevate your travel experience, much like the perfect diffuser enhances the aroma of fine tea. From our serene locations to our exceptional service, Eclipse Hotels sets the standard for hospitality, providing an oasis of comfort and sophistication.</p>

                   

                    <div class="blog-comments">
                      <h4>Hotels Available with Eclipse Group Africa</h4>
                      <div class="single-comment">
                        <img src="assets/images/best-western.jpg" alt="man">

                        <div class="name-meta-info">
                          <div class="name">
                            <h5>Best Western Dodoma City Hotel</h5>
                            <div class="date">
                              <a href="https://bestwesterndodoma.co.tz/"> Visit Website</a>
                            </div>
                            
                          </div>
                          <p>Best Western Dodoma City Hotel offers a blend of comfort and modern amenities, creating an inviting atmosphere for both business and leisure travelers. The hotel features contemporary rooms, top-notch dining options, and excellent service, ensuring a delightful stay in the heart of Tanzania's capital city.</p>
                        </div>
                      </div>

                      <div class="single-comment">
                        <img src="assets/images/holidayinn.jpg" alt="man">

                        <div class="name-meta-info">
                          <div class="name">
                            <h5>Holiday Inn   Dar es Salaam City Center</h5>
                            <div class="date">
                              <a href="https://www.holidayinn.co.tz/"> Visit Website</a>
                            </div>
                          </div>
                          <p>Holiday Inn Dar es Salaam City Center provides a seamless blend of comfort and convenience in the bustling heart of the city. With well-appointed rooms, exceptional dining, and modern amenities, it’s the ideal choice for travelers looking to experience the vibrant culture and business environment of Dar es Salaam.</p>
                        </div>
                      </div>

                      <div class="single-comment">
                        <img src="assets/images/jangwani.jpg" alt="man">

                        <div class="name-meta-info">
                          <div class="name">
                            <h5>Jangwani Sea Breeze Resort</h5>
                            <div class="date">
                              <a href="https://jangwaniseabreezeresort.co.tz/"> Visit Website</a>
                            </div>
                          </div>
                          <p>Holiday Inn Dar es Salaam City Center provides a seamless blend of comfort and convenience in the bustling heart of the city. With well-appointed rooms, exceptional dining, and modern amenities, it’s the ideal choice for travelers looking to experience the vibrant culture and business environment of Dar es Salaam.</p>
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