<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<!-- header -->
<?php include 'header.php';
define("BASEURL", "https://labindiadigital.com/coreCrushing/");
?>
<!-- </nav> -->

<body>
  <div class="container-fluid">
    <div class="row">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="images/HomeSlider/3rd_Landing_Page_Bannernew.webp" />
          </div>
          <div class="carousel-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="images/HomeSlider/core HFS- web-banner.webp" />
          </div>
          <div class="carousel-item " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="images/HomeSlider/Superior Crushing Solutions- banner.webp" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- About section -->
    <div>
      <div class=" container about-us">
        <h3 class="fw-bold">Empowering Excellence in Crushing Solutions since 1998.</h3> <br>
        <h5><span>Welcome to CORE </span></h5>
        <p>
          Looking to establish a Crushing Plant? You've arrived at your destination.
        </p>
        <p>
          Investing in efficient equipment is crucial. Explore our brand – backed by years of experience and cutting-edge technology. With our long-standing partnership with Speco and our expertise in manufacturing, erecting, and commissioning crushing plants, trust us for unparalleled support and performance. Let our equipment speak for itself!
        </p>
      </div>
    </div>
    <!-- Our Products -->
    <section class="container OurProducts text-center py-3" id="Our-products">
      <h2 class="fw-bold">Our Products </h2>
      <!-- product type 1 -->
      <!-- <h4>Product type-1</h4> -->
      <div class="row">
        <div class="col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Jaw-Crushers.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Jaw Crushers</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <a href="<?php echo BASEURL . 'productpage.php?id=0'; ?>" class="btn readmore ">VIEW MORE +</a>
          </div>
        </div>
        <div class="col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Core-Cone-Crushing-LH-200.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Cone Crushers</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <button href="#" class="btn readmore">VIEW MORE +</button>
          </div>
        </div>
        <div class=" col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Sane-cone.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Sander Cone</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <a href="<?php echo BASEURL . 'productpage.php?id=1'; ?>" class="btn readmore">VIEW MORE +</a>
          </div>
        </div>
        <div class=" col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Vertical-Shaft-Impact-Crusher.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Vertical Shaft Impact Crusher</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <button href="<?php echo BASEURL . 'productpage.php?id=2'; ?>" class="btn readmore">VIEW MORE +</button>
          </div>
        </div>
      </div> <br>
      <div class="row two-products">
        <div class="col-sm-3 ">
          <div class="productcard">
            <img src="images/products/High-Frequency-Screen.webp" class="img-fluid" alt="" />
            <h6 class="card-title">High Frequency Screen(HFS)</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <button href="<?php echo BASEURL . 'productpage.php?id=3'; ?>" class="btn readmore ">VIEW MORE +</button>
          </div>
        </div>
        <div class="col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Grizzly-Feeder.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Grizzly Feeder</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <button href="#" class="btn readmore ">VIEW MORE +</button>
          </div>
        </div>
        <div class="col-sm-3 ">
          <div class="productcard">
            <img src="images/products/Vibrating-screen.webp" class="img-fluid" alt="" />
            <h6 class="card-title">Vibrating Screen</h6>
            <!-- <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p> -->
            <button href="#" class="btn readmore ">VIEW MORE +</button>
          </div>
        </div>
        <!-- <div class="col-sm-3 ">
          <div class="productcard">
            <img src="https://dummyimage.com/200x200/d2ad77/d2ad77" class="img-fluid" alt="" />
            <h6 class="card-title">Pan Feeders</h6> 
            <button href="#" class="btn readmore">VIEW MORE +</button>
          </div>
        </div> -->
      </div>

    </section>
    <!-- Applications -->

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

    <!-- why-us -->
    <section class="text-center bg-why-us" id="why-us">
      <div class="about-us py-5 mx-auto">
        <h2 class="fw-bold">Why Us?</h2>
        <p>
          Choose Core Crushing for your stone-crushing needs and experience the difference. With a wealth of industry experience, cutting-edge technology, and a commitment to tailored solutions and quality, we stand as your premier choice. Our team's expertise ensures seamless project execution, while our dedication to innovation guarantees superior results. Trust Core Crushing for reliability, efficiency, and excellence in every endeavour.
        </p>
        <!-- <div class="row text-center">
          <div class="col-md-3 col-sm-6 col-xs-6 why-us">
            <img src="images/WhyUsIcons/Experience-01-01.webp" class="img-fluid why-us-icon-bg" alt="" />
            <div>
           
            </div>
            <p>Experience</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 why-us">
            <img src="images/WhyUsIcons/Technology-01.webp" class="img-fluid why-us-icon-bg" alt="" />
            <div>
             
            </div>
            <p>Cutting-Edge Technology</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 why-us">
            <img src="images/WhyUsIcons/Customized-01.webp" class="img-fluid why-us-icon-bg" alt="" />
            <div>
              
            </div>
            <p>Customised Solutions</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 why-us">
            <img src="images/WhyUsIcons/Quality-01.webp" class="img-fluid why-us-icon-bg" alt="" />
            <div>
            
            </div>
            <p>Quality</p>
          </div>
        </div> -->

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
    <!-- cta -->

    <!-- <div class="row cta"> -->
    <div class="row ">

      <div class="col-md-6">
        <div style="text-align: center; ">
          <h3 class="">Have a question? Talk to our expert!</h3>
          <p class="card-text-CTA">
            Our team is here to assist you with any inquiries or concerns you may have. Contact us now to get the answers you need and make informed decisions for your project.
          </p>
          <div class="row call-email">
            <button href="#" class="btn inquire-now">Inquire Now</button>
            <button class="btn inquire-now">+91 88062 67888</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img src="images/CTAImage.webp" class="d-block w-100" alt="..." />
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group enq-form">
                <select class="" id="country" aria-label="Country Select" required>
                  <option value="">Select city</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Åland Islands</option>
                  <option value="AL">Albania</option>
                </select>
              </div>
              <div class="form-group enq-form">
                <input type="text" id="name" placeholder="Enter your name" required>
                <input type="tel" id="c_name" placeholder="Enter company name" required>
              </div>
              <div class="form-group enq-form">
                <input type="tel" id="contact_no" placeholder="Enter your Phone" required>
                <input type="email" id="mail" placeholder="Enter your Email" required>
              </div>

              <div class="form-group enq-form">
                <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
              </div>
              <div class="form-group enq-form">
                <textarea class="form-control" id="question" rows="3" placeholder="Write your question here"></textarea>
              </div>
              <div class="form-group enq-form form-check">
                <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                <label class="form-check-label" for="agree">I agree to terms and conditions</label>
              </div>
              <button type="submit" class="btn" disabled>Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary">Send Email</button>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>
  </div>

</body>

<a href="https://api.whatsapp.com/send?phone=8806267888&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
  <i class="fa-brands fa-whatsapp my-float"></i>
</a>

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



</html>