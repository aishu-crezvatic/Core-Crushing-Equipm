<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
// include 'header.php';
include 'navbar.php';
// define("BASEURL", "https://labindiadigital.com/coreCrushing/");
?>

<body>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/Crusher-1.webp" class="d-block w-100 banner-desk" alt="Slider Image 1">
        <img src="images/HomeSlider/mob/Crushermob-1.png" class="d-block w-100 banner-mob" alt="Slider Image 1">
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
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6 about-home-image ">
          <img src="images/about-us/home_about.png" alt="">
        </div>
        <div class="col-md-6">
          <div class="">
            <div>
              <h6 class="cust-h4"> Welcome to CORE</h6>
            </div>
            <div class="papa-container">
              <h1>Empowering Excellence in Crushing Solutions since 1998</h1>
              <h5 class="about-subtitle">Looking to establish a Crushing Plant? You've arrived at your destination!</h5>
              <p class="about-para">Efficient equipment investment is essential. Explore our brand, supported by years of experience and cutting-edge technology. With our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Application -->
  <section class="container Applications text-center py-5" id="Our-products">
    <h2 class="fw-bold applications section-title">Applications</h2>
    <div class="owl-carousel">
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item">
          <img src="images/ApplicationIcons/1.svg" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title_appcard">Aggregate Crushing And Screening Plant</h5>
          <p class="card-text-1">Efficiently process aggregates with our comprehensive crushing and screening plant, maximizing productivity and quality assurance.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>
      <div class="item">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard appcard-sand productcard-item">
          <img src="images/ApplicationIcons/2.svg" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title_appcard2">Sand Plant</h5>
          <p class="card-text-2">Optimize sand production with our advanced sand plant solutions, delivering superior quality and efficiency for your material processing needs.</p>
          <a class="btn inquire-now-2" data-bs-toggle="modal" data-bs-target="#SandPlant">Enquire Now</a>
        </div>

        <!-- </div> -->
      </div>
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="appcard productcard-item">
          <img src="images/ApplicationIcons/3.png" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title_appcard">Classification</h5>
          <p class="card-text-1">Maximize material separation efficiency with our dry classification solutions, including high-frequency screens, ensuring precise sorting for optimal productivity.</p>
          <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</a>
        </div>
        <!-- </div> -->
      </div>

    </div>
  </section>

  <section>
    <div class="container">
      <h2 class="fw-bold text-center my-5 section-title">Our Products</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="images/products/Jaw-Crushers.png" alt="Jaw Crushers">
          <h2>Jaw Crushers</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Crushers/jaw-crushers' ?>'">Know More</button>
          
        </div>
        <div class="product-card">
          <img src="images/products/Core-Cone-Crushing-LH-200.png" alt="Cone Crushers">
          <h2>Cone Crushers</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Crushers/cone-crushers' ?>'">Know More</button>
        </div>
        <div class="product-card">
          <img src="images/products/Sander-cone.png" alt="Sander Cone">
          <h2>Sander Cone</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Crushers/sander-cone' ?>'">Know More</button>
        </div>
        <div class="product-card">
          <img src="images/products/High-Frequency-Screen.png" alt="HFS">
          <h2>HFS</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Classifiers/high-frequency-screens' ?>'">Know More</button>
        </div>
      </div>
      <div class="product-grid">
        <div class="product-card">
          <img src="images/products/Grizzly-Feeder.png" alt="HFS">
          <h2>Grizzly Feeder</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Feeders_and_Screens/grizzly-feeders' ?>'">Know More</button>
        </div>
        <div class="product-card">
          <img src="images/products/Vibrating-screen.png" alt="HFS">
          <h2>Vibrating Screen</h2>
          <button onclick="window.location.href='<?php echo BASEURL . 'Feeders_and_Screens/vibrating-screen' ?>'">Know More</button>
        </div>
        <div class="product-card">
          <img src="images/products/Vertical-Shaft-Impact-Crusher.png" alt="HFS">
          <h2 onclick="window.location.href='<?php echo BASEURL . 'Crushers/vertical-shaft-impactor' ?>'">VSI Crusher</h2>
          <button>Know More</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Us? -->
  <section>
    <div class="brand-area pt-80 pb-95">
      <div class="container">
        <div class="row">
          <div class="content-column col-lg-12 col-md-12 col-sm-12 ">
            <div class="inner-column2">
              <div class=" whychooseus" style="text-align: center;">
                <h2>WHY CHOOSE US</h2>
                <p>Choose Core Crushing for your stone-crushing needs and experience the difference. With a wealth of industry experience, cutting-edge technology, and a commitment to tailored solutions and quality, we stand as your premier choice. Our team's expertise ensures seamless project execution, while our dedication to innovation guarantees superior results. Trust Core Crushing for reliability, efficiency, and excellence in every endeavour.</p>
              </div>
            </div>
          </div>
          <div class="for-desktop">
            <div class="container whychooseus_images">
              <div class="row">
                <div class="text-center col-md-3"><img style=" padding: 10px 40px" src="images/why-us/Customised-Solutions-1.png" alt=""></div>
                <div class="text-center col-md-3"><img style=" padding: 10px 40px" src="images/why-us/Experience-1.png" alt=""></div>
                <div class="text-center col-md-3"><img style=" padding: 10px 40px" src="images/why-us/Quality-1.png" alt=""></div>
                <div class="text-center col-md-3"><img style=" padding: 10px 40px" src="images/why-us/Techology-1.png" alt=""></div>
              </div>
            </div>
          </div>
          <!-- why us icons mobile -->
          <div class="brand_list owl-carousel for-mobile">
            <div class="col-lg-12">
              <div class="crezvatic-single-brand ">
                <div class="brand-thumb">
                  <img src="images/why-us/Customised-Solutions-1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="crezvatic-single-brand ">
                <div class="brand-thumb">
                  <img src="images/why-us/Experience-1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="crezvatic-single-brand ">
                <div class="brand-thumb">
                  <img src="images/why-us/Quality-1.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="crezvatic-single-brand ">
                <div class="brand-thumb">
                  <img src="images/why-us/Techology-1.png" alt="">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <?php include 'cta.php'; ?>

  <!-- Footer-->
  <?php include 'footer2.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: false,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      });
    });
  </script>

  <!-- why choose us -->
  <script>
    // Initialize the Owl Carousel
    var brandCarousel = $('.brand_list').owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 3000, // Adjust autoplay timeout to 3 seconds
      dots: false,
      nav: false,
      responsive: {
        0: {
          items: 2
        },
        768: {
          items: 3
        },
        992: {
          items: 4
        },
        1000: {
          items: 4
        },
        1920: {
          items: 4
        }
      }
    });

    // Pause autoplay on hover
    // $('.brand_list').on('mouseenter', function() {
    //     brandCarousel.trigger('stop.owl.autoplay');
    // });

    // Start autoplay when mouse leaves
    // $('.brand_list').on('mouseleave', function() {
    //     brandCarousel.trigger('play.owl.autoplay', [100]);
    // });
  </script>