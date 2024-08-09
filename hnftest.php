<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

 
</head>

<?php 
// include 'header.php';
// define("BASEURL", "https://labindiadigital.com/coreCrushing/");
include 'navbar.php'
?>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/Crusher-1.webp" class="d-block w-100 banner-desk" alt="Slider Image 1">
        <img src="images/HomeSlider/mob/Crushermob-1.webp" class="d-block w-100 banner-mob" alt="Slider Image 1">
      </div>
      <div class="carousel-item " data-bs-toggle="modal" data-bs-target="#SandPlant">
        <img src="images/HomeSlider/Sand Plant-web-banner-2.webp" class="d-block w-100 banner-desk" alt="Slider Image 2">
        <img src="images/HomeSlider/mob/SandPlant-Mobileweb-banner-2.webp" class="d-block w-100 banner-mob" alt="Slider Image 2">
      </div>
      <div class="carousel-item " data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/AggregateCrushing-3.webp" class="d-block w-100 banner-desk" alt="Slider Image 3">
        <img src="images/HomeSlider/mob/SuperiorCrushingMobwebanner.webp" class="d-block w-100 banner-mob" alt="Slider Image 3">
      </div>
      <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/coreHFS-web-banner-4.webp" class="d-block w-100 banner-desk" alt="Slider Image 4">
        <img src="images/HomeSlider/mob/coreHFS-Mobileweb-banner-4.webp" class="d-block w-100 banner-mob" alt="Slider Image 4">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- About Us -->
  <div class="container-fluid">
    <div class=" py-5 container-custom-1 text-center row">
      <h1 class="h1-style fw-bold"> Empowering Excellence in Crushing Solutions since 1998</h1>
      <div class="col-md-6">
        <div class="papa-container">
          <h4 class="cust-h4"> Welcome to <span>CORE</span></h4>
          <p class="about-subtitle">Looking to establish a Crushing Plant? You've arrived at your destination!</p>
          <div class="col-md-6 for-mobile">
              <img src="images/5x5.png" alt=""> 
          </div>
          <p class="about-para">Efficient equipment investment is essential. Explore our brand, supported by years of experience and cutting-edge technology. With our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!</p>
        </div>
      </div>
      <div class="col-md-6 for-desktop">

        <div class="image5x5">
          <img src="images/5x5.png" alt="">
          <div class="image3x3">
            <!-- <img src="images/footer_bg.jpg" alt="">   -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Application -->
  <section class="container Applications text-center py-5" id="Our-products">
    <h2 class="fw-bold applications">Applications</h2>
    <div class="owl-carousel">
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item" style="background-color: #d3cfcf;">
          <img src="images/ApplicationIcons/AggregateCrushingAndScreeningPlant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Aggregate Crushing And Screening Plant</h5>
          <p class="card-text">Efficiently process aggregates with our comprehensive crushing and screening plant, maximizing productivity and quality assurance.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>
      <div class="item">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard appcard-sand productcard-item" style="background-color: #eedbdc;">
          <img src="images/ApplicationIcons/Classification-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Sand Plant</h5>
          <p class="card-text">Optimize sand production with our advanced sand plant solutions, delivering superior quality and efficiency for your material processing needs.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#SandPlant">Enquire Now</a>
        </div>

        <!-- </div> -->
      </div>
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item" style="background-color: #d3cfcf;">
          <img src="images/ApplicationIcons/Sand Plant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Classification</h5>
          <p class="card-text">Maximize material separation efficiency with our dry classification solutions, including high-frequency screens, ensuring precise sorting for optimal productivity.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>

    </div>
  </section>

<!-- footer -->
<?php include 'footer.php'; ?>

    
