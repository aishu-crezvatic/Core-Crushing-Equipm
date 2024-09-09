<?php
// Include necessary files
include 'navbar.php';
?>

<style>
@media (max-width:600px) {
    .custProdSlider{
        height: auto !important;
    }
    
}
</style>


<body>
    <div class="container-fluid custom-container-banner">
        <!-- Banner -->
        <section class="about-us-banner">
            <div>
                <img class="desktop-banner" src="<?php echo BASEURL . $App_category[$lastSegment]['banner_image_desktop']; ?>" alt="product-cat">
                <img class="mobile-banner" src="<?php echo BASEURL . $App_category[$lastSegment]['banner_image_mob']; ?>" alt="product-cat">
            </div>
        </section>

        <!-- Applications -->
        <section class="category-product-section p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="category-sub-title">
                            <p><?php echo $App_category[$lastSegment]['application-category-description']; ?></p>
                            <h1 class="section-title my-5">OUR APPLICATIONS</h1>
                        </div>
                    </div>
                </div>

                <!-- Swiper Slider Container -->
                <div class="swiper-container swiper2 overflow-hidden position-relative">
                    <div class="swiper-wrapper">
                        <?php
                        if (isset($App_category[$lastSegment]['Application_cat_name'])) {
                            $categoryName = $App_category[$lastSegment]['Application_cat_name'];
                            $slides = [];

                            $maxSlides = ($categoryName === "Aggregate Crushing And Screening Plant") ? 5 : 9;

                            for ($i = 1; $i <= $maxSlides; $i++) {
                                if (isset($App_category[$lastSegment]['application_image_' . $i])) {
                                    $slides[] = [
                                        'image' => $App_category[$lastSegment]['application_image_' . $i],
                                        'title' => $App_category[$lastSegment]['application_title_' . $i],
                                        'description' => $App_category[$lastSegment]['category_description' . $i]
                                    ];
                                }
                            }

                            foreach ($slides as $slide) { ?>
                                <div class="swiper-slide card rounded shadow-lg px-2 custProdSlider" style="height:600px;">
                                    <div class="product-image">
                                        <img src="<?php echo $slide['image']; ?>" class="product-img">
                                    </div>
                                    <div class="product-content">
                                        <h3 class="underline"><?php echo $slide['title']; ?></h3>
                                        <p style="height: 200px; overflow-y: scroll;"><?php echo $slide['description']; ?></p>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>
                            <h1>Invalid Application or category not found.</h1>
                        <?php } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <div class="image-gallery-2 videocont">
            <h1 class="section-title-prod_detail_v m-0">Video</h1>
            <div class="">
                <div class="swiper mySwiper2 bg-none">
                    <div class="swiper-wrapper swiper-wrapper-custom w-50">
                    <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=nr37KBnv0HA" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link1.png' ?>"  class="rounded-3 shadow-lg"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=lS4Sr_myTNU" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link 2-JUNE01.webp' ?>"  class="rounded-3 shadow-lg"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=kfbngnvjyug" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link 3-03.png' ?>" class="rounded-3 shadow-lg" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=WMsM4iE-mEk" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link 4.png' ?>"  class="rounded-3 shadow-lg"/>
                </a>
              </div>

              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=jCqsFQ89a9o" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link6-JUNE.png' ?>"  class="rounded-3 shadow-lg"/>
                </a>
                <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/lS4Sr_myTNU?si=wTndd3UJP4aE-W92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              </div>
              <div class="swiper-slide" YouTube_full-color_icon>
                <a href="https://www.youtube.com/watch?v=szUBUL1mteM" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link7-JUNE.png' ?>"  class="rounded-3 shadow-lg"/>
                </a>
                <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/kfbngnvjyug?si=LSEJ0JpsRRO7dINg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              </div>

              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=iGKjIUo3C-I" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link8-JUNE.png' ?>"  class="rounded-3 shadow-lg"/>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=_729IWWC9zU" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/YoutubeThumnail/link9-10.webp' ?>"  class="rounded-3 shadow-lg"/>
                </a>
              </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- Include Swiper and LightGallery scripts and styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/css/lightgallery-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.6.0/lightgallery.umd.js"></script>

        <script>
            var swiper3 = new Swiper('.swiper3', {
                loop: true,
                centeredSlides: true,
                slidesPerView: 3,
                spaceBetween: 0,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                }
            });

            var swiper = new Swiper('.mySwiper2', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 2,
                spaceBetween: 0,
                coverflowEffect: {
                    rotate: 1,
                    stretch: 0,
                    depth: 100,
                    modifier: 3,
                    slideShadows: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: true,
                },
                loop: true,
                initialSlide: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                }
            });

            lightGallery(document.querySelector('.swiper-wrapper'), {
                selector: 'a',
                download: false
            });

            // Pause Swiper autoplay on hover over video
            document.querySelectorAll('.swiper-slide').forEach(function(slide) {
                slide.addEventListener('mouseenter', function () {
                    swiper.autoplay.stop();
                });
                slide.addEventListener('mouseleave', function() {
                    swiper.autoplay.start();
                });
            });
        </script>

        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer -->
    <?php include 'footer2.php'; ?>
</body>
