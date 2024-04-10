<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
 
</head>

<?php include 'header.php';
// define("BASEURL", "https://labindiadigital.com/coreCrushing/");
?>

<body>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/3rd_Landing_Page_Bannernew.webp" class="d-block w-100" alt="Slider Image 1">
      </div>
      <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/core HFS- web-banner.webp" class="d-block w-100" alt="Slider Image 2">
      </div>
      <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#contactFormModal">
        <img src="images/HomeSlider/Superior Crushing Solutions- banner.webp" class="d-block w-100" alt="Slider Image 3">
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


  <div class="container-custom-1 text-center ">
    <h1 class="h1-style"> Empowering Excellence in Crushing Solutions since 1998. </h1>

    <div class="papa-container">
      <h4 class="cust-h4"> Welcome to CORE </h4>
      <p>Looking to establish a Crushing Plant? You've arrived at your destination.</p>
      <p>Investing in efficient equipment is crucial. Explore our brand – backed by years of experience and cutting-edge technology. With our long-standing partnership with Speco and our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!</p>
    </div>
  </div>


  <section class="container OurProducts text-center py-3" id="Our-products">
    <h2 class="fw-bold">Our Products</h2>

      <div class="row">
        <!-- Product type 1 -->
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Jaw-Crushers.webp" class="img-fluid" alt="Jaw Crushers">
            <h6 class="card-title">Jaw Crushers</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=0'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <!-- Repeat similar structure for other product cards -->
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Core-Cone-Crushing-LH-200.webp" class="img-fluid" alt="Cone Crushers">
            <h6 class="card-title">Cone Crushers</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=1'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Sane-cone.webp" class="img-fluid" alt="Sander Cone">
            <h6 class="card-title">Sander Cone</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=2'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Vertical-Shaft-Impact-Crusher.webp" class="img-fluid" alt="Vertical Shaft Impact Crusher">
            <h6 class="card-title">Vertical Shaft Impact Crusher</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=3'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
      </div>

    <br>

      <div class="row two-products">
        <!-- Add more product cards here -->
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/High-Frequency-Screen.webp" class="img-fluid" alt="High Frequency Screen(HFS)">
            <h6 class="card-title">High Frequency Screen(HFS)</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=4'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Grizzly-Feeder.webp" class="img-fluid" alt="Grizzly Feeder">
            <h6 class="card-title">Grizzly Feeder</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=5'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="productcard">
            <img src="images/products/Vibrating-screen.webp" class="img-fluid" alt="Vibrating Screen">
            <h6 class="card-title">Vibrating Screen</h6>
            <a href="<?php echo BASEURL . 'productpage.php?id=6'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <!-- <div class="col-sm-3">
            <div class="productcard">
                <img src="https://dummyimage.com/200x200/d2ad77/d2ad77" class="img-fluid" alt="Pan Feeders">
                <h6 class="card-title">Pan Feeders</h6>
                <a href="#" class="btn readmore">VIEW MORE +</a>
            </div>
        </div> -->
    </div>
  </section>

  <section class="container Applications text-center py-5" id="Our-products">
    <h2 class="fw-bold applications">Applications </h2>
    <div class="owl-carousel">
      <div class="item ">
        <!-- <div class="col-sm-4"> -->
        <div class="productcard">
          <img src="images/ApplicationIcons/AggregateCrushingAndScreeningPlant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Aggregate Crushing And Screening Plant</h5>
          <p class="card-text">Efficiently process aggregates with our comprehensive crushing and screening plant, maximizing productivity and quality assurance.</p>
        </div>
        <!-- </div> -->
      </div>
      <div class="item">
        <!-- <div class="col-sm-4"> -->
        <div class="productcard">
          <img src="images/ApplicationIcons/Classification-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Sand Plant</h5>
          <p class="card-text">Optimize sand production with our advanced sand plant solutions, delivering superior quality and efficiency for your material processing needs.</p>
        </div>
        <!-- </div> -->
      </div>
      <div class="item">
        <!-- <div class="col-sm-4"> -->
        <div class="productcard">
          <img src="images/ApplicationIcons/Sand Plant-01.webp" class="img-fluid productcard-img" alt="" />
          <h5 class="card-title">Classification</h5>
          <p class="card-text">Maximize material separation efficiency with our dry classification solutions, including high-frequency screens, ensuring precise sorting for optimal productivity.</p>
        </div>
        <!-- </div> -->
      </div>

    </div>
  </section>


  <section class="text-center bg-why-us" id="why-us">
    <div class="about-us py-5 mx-auto">
      <h2 class="fw-bold">Why Us?</h2>
      <p>
        Choose Core Crushing for your stone-crushing needs and experience the difference. With a wealth of industry experience, cutting-edge technology, and a commitment to tailored solutions and quality, we stand as your premier choice. Our team's expertise ensures seamless project execution, while our dedication to innovation guarantees superior results. Trust Core Crushing for reliability, efficiency, and excellence in every endeavour.
      </p>

      <div class="row text-center">
        <div class="why-us">
          <img src="images/WhyUsIcons/Experience-01-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Experience</p>
        </div>
        <div class="why-us">
          <img src="images/WhyUsIcons/Technology-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Cutting-Edge Technology</p>
        </div>
        <div class="why-us">
          <img src="images/WhyUsIcons/Customized-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Customised Solutions </p>
        </div>
        <div class="why-us">
          <img src="images/WhyUsIcons/Quality-01.webp" class="img-fluid why-us-icon-bg" alt="" />
          <div>
            <!-- <img src="https://dummyimage.com/100x100/000000/d2ad77" class="img-fluid" alt="" /> -->
          </div>
          <p>Quality</p>
        </div>
      </div>
    </div>
  </section>

    <?php include 'cta.php'; ?>

 <!-- modal -->

  <!-- footer -->
  <?php include 'footer.php'; ?>

  <!-- Owl Carousel JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
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

</body>

</html>