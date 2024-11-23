<head>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLGGL2J5');</script>
<!-- End Google Tag Manager -->

<meta name="google-site-verification" content="LOt9ST453jnD_MJnC1Qiz0LZsoWsbsG-We3jp6LnQJs" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php
    $meta_title = "Eclipse Group Africa";
    $meta_description = "Discover Eclipse Group Africa, a leader in hospitality, retail, motor, schools, hospitals, and travel.";
    $meta_keywords = "Eclipse Group Africa, hospitality, retail, motor, schools, hospitals, travel, Tanzania";
    $meta_robots = "index, follow";
    $meta_image = "assets/images/logo.png"; // Default logo image
    $meta_url = "https://www.eclipsegroup.co.tz"; // Default URL

    switch ($on_page) {
        case 'about':
            $meta_title = "About Us | Eclipse Group Africa";
            $meta_description = "Learn about Eclipse Group Africa, our history, vision, and commitment to excellence in multiple industries.";
            $meta_keywords = "Eclipse Group Africa, company history, vision, mission";
            $meta_url = "https://www.eclipsegroup.co.tz/about.php";
            break;

        case 'contact':
            $meta_title = "Contact Us | Eclipse Group Africa";
            $meta_description = "Get in touch with Eclipse Group Africa for inquiries about our services and industries we serve.";
            $meta_keywords = "Eclipse Group Africa contact, inquiry, customer service";
            $meta_url = "https://www.eclipsegroup.co.tz/contact.php";
            break;

        case 'hotels':
            $meta_title = "Hotels | Eclipse Group Africa";
            $meta_description = "Explore our range of luxury and business hotels under Eclipse Group Africa, including Holiday Inn and Best Western Dodoma.";
            $meta_keywords = "Eclipse Group Africa hotels, luxury hotels, business hotels, Tanzania hotels";
            $meta_url = "https://www.eclipsegroup.co.tz/hotels.php";
            break;

        case 'holiday-inn':
            $meta_title = "Holiday Inn Hotel | Eclipse Group Africa";
            $meta_description = "Stay at the Holiday Inn Hotel, part of Eclipse Group Africa, offering comfortable accommodation in Dar es Salaam.";
            $meta_keywords = "Holiday Inn, Dar es Salaam hotel, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/holiday-inn.php";
            break;

        case 'best-western-dodoma':
            $meta_title = "Best Western Dodoma City Hotel | Eclipse Group Africa";
            $meta_description = "Experience the Best Western Dodoma City Hotel, offering modern amenities in the heart of Dodoma.";
            $meta_keywords = "Best Western Dodoma, Dodoma City Hotel, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/best-western-dodoma.php";
            break;

        case 'jangwani-sea-breeze':
            $meta_title = "Jangwani Sea Breeze Resort | Eclipse Group Africa";
            $meta_description = "Relax at Jangwani Sea Breeze Resort, a beachfront property offering a serene environment in Dar es Salaam.";
            $meta_keywords = "Jangwani Sea Breeze, Dar es Salaam resort, beach resort";
            $meta_url = "https://www.eclipsegroup.co.tz/jangwani-sea-breeze.php";
            break;

        case 'retail':
            $meta_title = "Retail | Eclipse Group Africa";
            $meta_description = "Discover Eclipse Group Africa's retail division, offering quality products and excellent service.";
            $meta_keywords = "Eclipse Group Africa retail, quality products, excellent service";
            $meta_url = "https://www.eclipsegroup.co.tz/retail.php";
            break;

        case 'mbm':
            $meta_title = "Mikocheni Builders Merchant | Eclipse Group Africa";
            $meta_description = "Mikocheni Builders Merchant is the exclusive distributor of Daikin and Bruhm Air Conditioners in Tanzania.";
            $meta_keywords = "Mikocheni Builders Merchant, Daikin distributor, Bruhm distributor, air conditioners";
            $meta_url = "https://www.eclipsegroup.co.tz/mbm.php";
            break;

        case 'motor':
            $meta_title = "Motor | Eclipse Group Africa";
            $meta_description = "Explore the motor division of Eclipse Group Africa, offering top-tier vehicle sales and services.";
            $meta_keywords = "Eclipse Group Africa motor, vehicle sales, car service, Tanzania motor";
            $meta_url = "https://www.eclipsegroup.co.tz/motor.php";
            break;

        case 'tfl':
            $meta_title = "TFL Motor Group | Eclipse Group Africa";
            $meta_description = "TFL Motor Group provides exceptional car sales, service, and bodywork under Eclipse Group Africa.";
            $meta_keywords = "TFL Motor Group, car sales, car service, Tanzania motor group";
            $meta_url = "https://www.eclipsegroup.co.tz/tfl.php";
            break;

        
        case 'hospitals':
            $meta_title = "Gulbani Damji Memorial Hospital | Eclipse Group Africa";
            $meta_description = "Gulbani Damji Memorial Hospital offers comprehensive healthcare services under Eclipse Group Africa.";
            $meta_keywords = "Gulbani Damji Hospital, Tanzania healthcare, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/gulbani-damji-hospital.php";
            break;


        case 'schools':
            $meta_title = "Hassanal Damji Memorial Trust Secondary School | Eclipse Group Africa";
            $meta_description = "Hassanal Damji Memorial Trust Secondary School offers quality education under Eclipse Group Africa.";
            $meta_keywords = "Hassanal Damji School, Tanzania education, Eclipse Group Africa schools";
            $meta_url = "https://www.eclipsegroup.co.tz/hassanal-damji-school.php";
            break;

        case 'restaurants':
            $meta_title = "Restaurants | Eclipse Group Africa";
            $meta_description = "Experience the diverse dining options offered by Eclipse Group Africa's restaurants.";
            $meta_keywords = "Eclipse Group Africa restaurants, dining, Tanzania restaurants";
            $meta_url = "https://www.eclipsegroup.co.tz/restaurants.php";
            break;

        case 'lock-and-barrel':
            $meta_title = "Lock & Barrel Restaurant | Eclipse Group Africa";
            $meta_description = "Lock & Barrel is a popular dining spot in Dar es Salaam, offering an eclectic menu under Eclipse Group Africa.";
            $meta_keywords = "Lock & Barrel, Dar es Salaam restaurant, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/lock-and-barrel.php";
            break;

        case 'terminal-3':
            $meta_title = "Terminal 3 Bar & Restaurant | Eclipse Group Africa";
            $meta_description = "Enjoy a vibrant dining experience at Terminal 3 Bar & Restaurant under Eclipse Group Africa.";
            $meta_keywords = "Terminal 3, Dar es Salaam restaurant, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/terminal-3.php";
            break;

        case 'al-gaucho':
            $meta_title = "Al Gaucho Restaurant | Eclipse Group Africa";
            $meta_description = "Al Gaucho Restaurant offers a unique dining experience in Dar es Salaam under Eclipse Group Africa.";
            $meta_keywords = "Al Gaucho, Dar es Salaam restaurant, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/al-gaucho.php";
            break;

        case 'travel':
            $meta_title = "Air Eclipse | Eclipse Group Africa";
            $meta_description = "Air Eclipse provides premier air travel services under Eclipse Group Africa.";
            $meta_keywords = "Air Eclipse, air travel, Eclipse Group Africa";
            $meta_url = "https://www.eclipsegroup.co.tz/air-eclipse.php";
            break;

        case 'eclipse-group-uk':
            $meta_title = "Eclipse Group UK | Eclipse Group Africa";
            $meta_description = "Eclipse Group UK is a leading division of Eclipse Group Africa, offering a range of services.";
            $meta_keywords = "Eclipse Group UK, Eclipse Group Africa, UK services";
            $meta_url = "https://www.eclipsegroup.co.tz/eclipse-group-uk.php";
            break;

          default:
            $meta_title = "Eclipse Group Africa";
            $meta_description = "Discover Eclipse Group Africa, a leader in hospitality, retail, motor, schools, hospitals, and travel.";
            $meta_keywords = "Eclipse Group Africa, hospitality, retail, motor, schools, hospitals, travel, Tanzania";
            break;
    }

    echo "<title>$meta_title</title>";
    echo "<meta name='description' content='$meta_description'>";
    echo "<meta name='keywords' content='$meta_keywords'>";
    echo "<meta name='robots' content='$meta_robots'>";

    // Open Graph / Facebook
    echo "<meta property='og:title' content='$meta_title'>";
    echo "<meta property='og:description' content='$meta_description'>";
    echo "<meta property='og:image' content='$meta_image'>";
    echo "<meta property='og:url' content='$meta_url'>";
    echo "<meta property='og:type' content='website'>";

    // Twitter
    echo "<meta name='twitter:card' content='summary_large_image'>";
    echo "<meta name='twitter:title' content='$meta_title'>";
    echo "<meta name='twitter:description' content='$meta_description'>";
    echo "<meta name='twitter:image' content='$meta_image'>";
    echo "<meta name='twitter:url' content='$meta_url'>";
  ?>

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