<?php
// Include necessary files
include 'navbar.php';
?>

<body>
    <!-- <?php echo "Last URI segment: " . $lastSegment;
            echo "<pre> ";
            echo $Prod_category[$lastSegment]['category_name'];
            echo BASEURL . 'cone-crushers';
            ?> -->
    <!-- Banner -->
    <section class="about-us-banner">
        <!-- <div class="container"> -->
        <div class="">
            <img class="desktop-banner" src="<?php echo BASEURL . '/images/about-us/About-us-banner-desktop.webp' ?>" alt="contac=-us">
            <img class="mobile-banner" src="<?php echo BASEURL . '/images/about-us/About-us-banner-mobile.webp' ?>" alt="contact-us">
        </div>
        <!-- </div> -->
    </section>
    <!-- Products -->
    <section class="category-product-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 about-content-col">
                    <div class="about-content">
                        <h1>About Us</h1>
                        <p>Established in 1998 and headquartered in Mumbai, India, Core is a leading provider of innovative solutions for Crushing Plants. As Original Equipment Manufacturers (OEMs) under the brand of CORE, our core strength lies in our ability to offer a diverse range of equipment and services tailored to meet the needs of our clients.</p>
                        <p>With a commitment to excellence, we manufacture and assemble plants using cutting-edge technology, ensuring superior quality and performance. To date, we have supplied over 300 plants across India and globally, including in countries like Ethiopia, Tanzania, and Djibouti.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 about-image">
                    <!-- <iframe width="auto" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe> -->
                    <div class="card">
                        <a data-fancybox href="video/Core-Crushing-video.mp4">
                            <img class="card-img-top img-fluid" src="images/about-us/About-us-session-600x300.png" />
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Mission Vision -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="vm-background">
                            <h2 class="section-title-about">VISION</h2>
                        </div>
                        <div class="text">To lead the global Crushing Plants industry by delivering innovative and sustainable solutions, setting new benchmarks for excellence, and driving positive change for our customers and stakeholders.</div>
                        <div class="vm-background">
                            <h2 class="section-title-about">MISSION</h2>
                        </div>
                        <div class="text">
                            Our mission is to deliver high-quality, reliable and cost-effective equipment and services to our clients, leveraging cutting-edge technology and industry expertise. We are committed to exceeding customer expectations, fostering long-term partnerships, and driving continuous improvement in all aspects of our operations.
                        </div>

                    </div>
                </div>

                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <img src="images/about-us/missionVision.png" alt="">
                        <!-- <div class="author-desc">
                            <h2>Vision and Mission</h2>
                        </div>
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="<?php echo BASEURL . '/images/about-us/Vision&Mission2.webp' ?>" alt=""></a></figure> -->

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Start crezvatic why choose us -->
    <!--==================================================--> 
  <section>
    <div class="brand-area pt-80 pb-95">
      <div class="container">
        <div class="row">
          <div class="content-column col-lg-12 col-md-12 col-sm-12 ">
            <div class="inner-column2" >
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
    <!--==================================================-->
    <!-- end crezvatic why choose us-->


    <!--==================================================-->
    <!-- Start crezvatic counter Area -->
    <!--==================================================-->
    <section>
        <div class="counter-area style-two pt-90 pb-100">
            <div class="container">
                <div class="row" onmouseover="animationEffect()">
                    <div class="inner-column">
                        <div class=" ourclients section-title-about_client" style="text-align: center;">
                            <h2>OUR CLIENTS</h2>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="crezvatic-single-counter-box">
                            <div class="">
                                <div class="counter-icon">
                                    <i class="flaticon-electrician-3"></i>
                                </div>
                                <div class="counter-text">
                                    <h1 class="counter" data-target="521">521</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Complete Project</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-counter-box-inner">
                        <div class="crezvatic-single-counter-box">
                            <div class="">
                                <div class="counter-icon">
                                    <i class="flaticon-electric-generator-2"></i>
                                </div>
                                <div class="counter-text">
                                    <h1 class="counter" data-target="46">46</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Complete Project</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-counter-box-inner">
                        <div class="crezvatic-single-counter-box">
                            <div class="">
                                <div class="counter-icon">
                                    <i class="flaticon-car-1"></i>
                                </div>
                                <div class="counter-text">
                                    <h1 class="counter" data-target="65">65</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Complete Award</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 single-counter-box-inner">
                        <div class="crezvatic-single-counter-box">
                            <div class="">
                                <div class="counter-icon">
                                    <i class="flaticon-electrician-5"></i>
                                </div>
                                <div class="counter-text">
                                    <h1 class="counter" data-target="423">423</h1>
                                </div>
                                <div class="counter-title">
                                    <h4>Client Satisfied</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End crezvatic counter Area -->
    <!--==================================================-->


    <!-- CTA -->
    <?php include 'cta.php'; ?>

    <script src="js/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery.counterup.min.js" crossorigin="anonymous"></script> -->

    <script>
        // Initialize the Owl Carousel
        var brandCarousel = $('.brand_list').owlCarousel({
            loop: true,
            autoplay: true,
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
        $('.brand_list').on('mouseenter', function() {
            brandCarousel.trigger('stop.owl.autoplay');
        });

        // Start autoplay when mouse leaves
        $('.brand_list').on('mouseleave', function() {
            brandCarousel.trigger('play.owl.autoplay', [100]);
        });
    </script>


    <!-- Counter -->
    <script>
        function animationEffect() {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                counter.innerText = '0';

                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target')
                    const c = +counter.innerText;

                    const increment = target / 2000;

                    if (c < target) {
                        counter.innerText = `${Math.ceil(c+increment)}`
                        setTimeout(updateCounter, 1)
                    } else {
                        counter.innerText = target
                    }
                }
                updateCounter();
            })
        }
    </script>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>