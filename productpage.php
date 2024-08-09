<?php
// Include necessary files
// include 'header.php';
include 'navbar.php';
?>

<body>
  <div class="container-fluid custom-container-banner">
    <div class="product-hero">
      <img src="<?php echo BASEURL . $Prod_Banner[$id]['image'] ?>" class="d-block w-100 banne-new banner-desk"
        alt="product-banner" />
      <img src="<?php echo BASEURL . $Prod_Banner[$id]['image-mob'] ?>" class="d-block w-100 banner-mob"
        alt="product-banner" />
      <div class="product-hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
              <div class="hero-text">
                <h1><?php echo $Prod_Banner[$id]['title'] ?></h1>
                <h3 style="color:red"><?php echo $Prod_Banner[$id]['subtitle'] ?></h3>
                <p class="product-banner-para"><?php echo $Prod_Banner[$id]['description'] ?></p>
                <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal ">Enquire Now</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="additional-content">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- type tab -->



    <?php if ($id == 1) { ?>

      <div class="card p-3 card-typediv">

        <!--features- 200 -->
        <div class="container-fluid custom-container add-pad ">
          <div class="row features custom-container-style-2 ">
            <div class="col-md-12">
              <h1 class="section-title-prod_detail">SUCCESS IN EVERY HARDNESS</h1>
              <p class="product-para"><?php echo $successInEveryHardness[$id]['successContent'] ?></p>
            </div>
          </div>
          <div class="row scroll-2">
            <div class="col-md-6 ">
              <!-- <img src="<?php echo $successInEveryHardness[$id]['vimage'] ?>" class="img-fluid" alt=""> -->
              <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="features-text-div">
                  <!-- <div class="row"> -->
                  <div class="feature-image">
                    <img src="<?php echo BASEURL . 'images/Favicon-01.webp'; ?>" class="icon-n img-fluid"
                      alt="product-banner">
                  </div>
                  <div class="feature-content">
                    <h4><?php echo $successInEveryHardness[$id]['h' . $i] ?></h4>
                    <p><?php echo $successInEveryHardness[$id]['d' . $i] ?></p>
                  </div>
                  <!-- </div> -->
                </div>

              <?php } ?>
            </div>
            <?php
            ?>
            <div class="col-md-6 ">
              <?php for ($i = 6; $i <= 8; $i++) { ?>
                <div class="features-text-div">
                  <!-- <div class="row"> -->
                  <div class="feature-image">
                    <img src="<?php echo BASEURL . 'images/Favicon-01.webp'; ?>" class="icon-n img-fluid"
                      alt="product-banner">
                  </div>
                  <div class="feature-content">
                    <h4><?php echo $successInEveryHardness[$id]['h' . $i] ?></h4>
                    <p><?php echo $successInEveryHardness[$id]['d' . $i] ?></p>
                  </div>
                  <!-- </div> -->
                </div>

              <?php } ?>
            </div>
          </div>
        </div>


        <nav>
          <div class="nav nav-tabs mb-3 mt-5 typediv" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
              type="button" role="tab" aria-controls="nav-home" aria-selected="true">SH 200 Cone Crusher</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
              role="tab" aria-controls="nav-profile" aria-selected="false">SH 400 Cone Crusher</button>
          </div>
        </nav>
        <div class="tab-content p-3 border bg-light" id="nav-tabContent">
          <!-- For 200 -->
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <!-- table -->
            <div class="table-data-sh">
              <div class="row">
                <div class="col-md-4 text-center py-4">
                  <img src="<?php echo BASEURL . $successInEveryHardness[$id]['vimage'] ?>" class="img-fluid" alt="">
                  <!-- <img src="https://dummyimage.com/250x300/000/fff" class="img-fluid" alt=""> -->
                </div>
                <div class="col-md-8">
                  <h1>SH 200 Cone</h1>
                  <p>The Core SH 200 Cone boasts cast top and bottom shells for enduring crushing loads, a hydraulically
                    supported forged alloy main shaft assembly with push-button control, and specially designed mantle and
                    concave profiles for consistent feed opening retention. Featuring anti-friction roller bearings, a
                    150kW to 200kw motor. Its all-roller bearing design ensures high load capacity and constant alignment,
                    reducing frictional losses and enabling variable operational speeds. The built-in hydraulic rotary
                    feed distributor optimizes material distribution for increased wear life and enhanced capacity.</p>
                </div>
              </div>
              <div class="elementor-widget-container">
                <div class="pp-table-container table-responsive">
                  <table class="tablesaw">
                    <colgroup>
                      <col span="1" class="">
                    </colgroup>
                    <thead>
                      <tr class="tab-heading">
                        <th>Max Feed Size (mm)</th>
                        <th>Motor Size Kw/HP</th>
                        <th>Crusher Weight (MT)</th>
                        <th colspan="9">Closed Side Setting (mm), Throughput capacity (mtph)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="even-col">
                        <td class=" "> </td>
                        <td class=" "> </td>
                        <td class=" "> </td>
                        <td class=" ">14</td>
                        <td class=" ">16</td>
                        <td class=" ">18</td>
                        <td class=" ">20</td>
                        <td class=" ">22</td>
                        <td class=" ">25</td>
                        <td class=" ">28</td>
                        <td class=" ">30</td>
                        <td class=" ">32</td>
                      </tr>
                      <tr class="even-col">
                        <td>Coarse Concave-165</td>
                        <td rowspan="2"> Up to 150/200</td>
                        <td rowspan="2">13</td>
                        <td class=" "> </td>
                        <td class=" "> </td>
                        <td class=" "> </td>
                        <td class=" ">140-150</td>
                        <td class=" ">150-160</td>
                        <td class=" ">175-185</td>
                        <td class=" ">200-210</td>
                        <td class=" ">210-220</td>
                        <td class=" ">220-230</td>
                      </tr>
                      <tr class="even-col">
                        <td>Medium Concave-115</td>
                        <!-- <td rowspan="2"> Up to 150/200</td>
                            <td rowspan="2">13</td> -->
                        <td class=" ">105-110</td>
                        <td class=" ">110-120</td>
                        <td class=" ">120-130</td>
                        <td class=" ">130-140</td>
                        <td class=" ">140-150</td>
                        <td class=" ">165-175</td>
                        <td class=" "> </td>
                        <td class=" "> </td>
                        <td class=" "> </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <!-- For 400 -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <!-- table -->
            <div class="table-data-sh">

              <div class="row">
                <div class="col-md-4 text-center py-4">
                  <img src="<?php echo BASEURL . $successInEveryHardness[$id]['vimage2'] ?>" class="img-fluid" alt="">
                  <!-- <img src="https://dummyimage.com/250x300/000/fff" class="img-fluid" alt=""> -->
                </div>
                <div class="col-md-8">
                  <h1>SH 400 Cone Crusher </h1>
                  <p>The Core SH 400 Cone Crusher is built to withstand tough quarry and mining conditions. Featuring
                    anti-friction roller bearings, a 37 kW motor, and a cartridge-type design for easy access to
                    components, it offers enhanced crushing power and serviceability. With a compact, balanced design and
                    no speed limitations, it ensures superior productivity and flexibility. Its hydraulically operated
                    rotary feed distributor optimizes material distribution, while optional extras provide added
                    customisation.</p>
                </div>
              </div>

              <div class="elementor-widget-container">
                <div class="pp-table-container table-responsive">
                  <table class="tablesaw">
                    <colgroup>
                      <col span="1" class="">
                    </colgroup>
                    <thead>
                      <tr class="tab-heading">
                        <th>Max Feed Size (mm)</th>
                        <th>Motor Size Kw/HP</th>
                        <th>Crusher Weight (MT)</th>
                        <th colspan="10">Closed Side Setting (mm), Throughput capacity (mtph)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="even-col">
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class="">12</td>
                        <td class="">14</td>
                        <td class="">16</td>
                        <td class="">18</td>
                        <td class="">20</td>
                        <td class="">22</td>
                        <td class="">25</td>
                        <td class="">30</td>
                        <td class="">40</td>
                        <td class="">50</td>
                      </tr>
                      <tr class="even-col">
                        <td>EC Bowl (-) 280mm</td>
                        <td></td>
                        <td rowspan="2">30</td>
                        <!-- <td></td> -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>300-360</td>
                        <td>330-450</td>
                        <td>380-500</td>
                      </tr>
                      <tr class="even-col">
                        <td>Coarse Bowl (-) 200mm</td>
                        <td>Up to 315/400</td>
                        <!-- <td></td> -->
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <!-- <td></td> -->
                        <td>260-330</td>
                        <td>280-350</td>
                        <td>300-400</td>
                        <td></td>
                      </tr>
                      <tr class="even-col">
                        <td>Medium Bowl (-) 120mm</td>
                        <td></td>
                        <td rowspan="2">28.5</td>
                        <td></td>
                        <td></td>
                        <td>200-250</td>
                        <td>220-280</td>
                        <td>240-300</td>
                        <td>260-320</td>
                        <td>260-340</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr class="even-col">
                        <td>Medium Fine Bowl (-) 70mm</td>
                        <td></td>
                        <!-- <td></td> -->
                        <td>160-190</td>
                        <td>175-215</td>
                        <td>190-240</td>
                        <td>205-260</td>
                        <td>220-280</td>
                        <td>230-290</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Video slider -->
      <div class="image-gallery-2">
        <h1 class="section-title-prod_detail_v">Video</h1>
        <div class="container">
          <div class="swiper mySwiper2">
            <div class="swiper-wrapper swiper-wrapper-custom w-50">
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=nr37KBnv0HA" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link1.webp' ?>" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=lS4Sr_myTNU" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link2.webp' ?>" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=kfbngnvjyug" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link3.webp' ?>" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=WMsM4iE-mEk" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link4.webp' ?>" />
                </a>
              </div>

              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=jCqsFQ89a9o" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link6.webp' ?>" />
                </a>
                <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/lS4Sr_myTNU?si=wTndd3UJP4aE-W92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              </div>
              <div class="swiper-slide" YouTube_full-color_icon>
                <a href="https://www.youtube.com/watch?v=szUBUL1mteM" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link7.webp' ?>" />
                </a>
                <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/kfbngnvjyug?si=LSEJ0JpsRRO7dINg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              </div>

              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=iGKjIUo3C-I" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link8.webp' ?>" />
                </a>
              </div>
              <div class="swiper-slide">
                <a href="https://www.youtube.com/watch?v=_729IWWC9zU" data-fancybox data-caption="Single image">
                  <img src="<?php echo BASEURL . 'images/youtube-thumb/link9.webp' ?>" />
                </a>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>

    <?php } else { ?>
      <!-- type tab end-->
      <!-- Features -->
      <div class="container-fluid custom-container add-pad product-desc-id-two">
        <div class="row features custom-container-style">
          <div class="col-md-12">
            <h1 class="section-title-prod_detail">SUCCESS IN EVERY HARDNESS</h1>
            <p class="product-para"><?php echo $successInEveryHardness[$id]['successContent'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="<?php echo BASEURL . $successInEveryHardness[$id]['vimage'] ?>" class="img-fluid" alt="">
          </div>
          <?php
          // foreach ($successInEveryHardness[$id]['200'] as $key => $val) {
          //   // echo '<pre>';
          //   print_r($key);
          // }
          ?>
          <div class="col-md-8  ">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
              <div class="features-text-div">
                <!-- <div class="row"> -->
                <div class="feature-image">
                  <img src="<?php echo BASEURL . 'images/Favicon-01.webp'; ?>" class="icon-n img-fluid"
                    alt="product-banner">
                </div>
                <div class="feature-content">
                  <h4><?php echo $successInEveryHardness[$id]['h' . $i] ?></h4>
                  <p><?php echo $successInEveryHardness[$id]['d' . $i] ?></p>
                </div>
                <!-- </div> -->
              </div>
            <?php } ?>
          </div>
        </div>
      </div>


      <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 10px;
      padding: 10px;
    }
    .grid-item {
      position: relative;
    }
    .grid-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      cursor: pointer;
    }
  </style>
  <!-- LightGallery CSS -->
  <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/css/lightgallery-bundle.min.css" rel="stylesheet">
</head>
<body>
  <div class="grid-container container" id="lightgallery">
    <div class="grid-item">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 1" class="grid-image">
      </a>
    </div>
    <div class="grid-item ">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 2" class="grid-image">
      </a>
    </div>
    <div class="grid-item ">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 2" class="grid-image">
      </a>
    </div>
    <div class="grid-item ">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 2" class="grid-image">
      </a>
    </div>
    <div class="grid-item ">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 2" class="grid-image">
      </a>
    </div>
    <div class="grid-item ">
      <a class="lightgallery" href='<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>'>
        <img src="<?php echo BASEURL . '/images/products/Jaw-Crushers-old.webp'; ?>" alt="Image 2" class="grid-image">
      </a>
    </div>
   
    <!-- Add more grid items as needed -->
  </div>

  <!-- LightGallery JS -->
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/lightgallery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/thumbnail/lg-thumbnail.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/fullscreen/lg-fullscreen.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      lightGallery(document.getElementById('lightgallery'), {
        selector: '.lightgallery', // Ensure this selector matches your anchor tags
        thumbnail: true,
        fullScreen: true
      });
    });
  </script>
      <!-- Table -->
      <?php include 'tables.php'; ?>

      <!-- Video slider -->
      <div class="image-gallery">
        <h1 class="section-title-prod_detail_v">Video</h1>
        <!-- <div class="container"> -->
        <div class="swiper mySwiper2">
          <div class="swiper-wrapper swiper-wrapper-custom w-50">
            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=nr37KBnv0HA" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link1.webp' ?>" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=lS4Sr_myTNU" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link2.webp' ?>" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=kfbngnvjyug" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link3.webp' ?>" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=WMsM4iE-mEk" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link4.webp' ?>" />
              </a>
            </div>

            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=jCqsFQ89a9o" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link6.webp' ?>" />
              </a>
              <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/lS4Sr_myTNU?si=wTndd3UJP4aE-W92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
            <div class="swiper-slide" YouTube_full-color_icon>
              <a href="https://www.youtube.com/watch?v=szUBUL1mteM" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link7.webp' ?>" />
              </a>
              <!-- <iframe data-fancybox width="560" height="315" src="https://www.youtube.com/embed/kfbngnvjyug?si=LSEJ0JpsRRO7dINg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>

            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=iGKjIUo3C-I" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link8.webp' ?>" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="https://www.youtube.com/watch?v=_729IWWC9zU" data-fancybox data-caption="Single image">
                <img src="<?php echo BASEURL . 'images/youtube-thumb/link9.webp' ?>" />
              </a>
            </div>

          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
        <!-- </div> -->
        <div>




        <?php } ?>

        <!-- cta -->
        <?php include 'cta.php'; ?>
        <!-- cta end -->

        <section class="container gallery text-center py-5" id="Our-products">
          <h2 class="fw-bold applications section-title-prod_detail_v">Gallery</h2>
          <div class="owl-carousel">
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/HSF/HSF-1.webp' ?>" class="d-block w-100"
                alt="1" />
            </div>
            <div class="item">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/HSF/HSF-2.webp' ?>" class="d-block w-100"
                alt="2" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Jaw_Crusher/Jaw_Crusher-2.webp' ?>"
                class="d-block w-100" alt="3" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Jaw_Crusher/Jaw_Crusher-3.webp' ?>"
                class="d-block w-100" alt="4" />
            </div>
            <div class="item">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Sander%20Cone/Sander-Cone-2.webp' ?>"
                class="d-block w-100" alt="5" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Sander%20Cone/Sander-Cone-5.webp' ?>"
                class="d-block w-100" alt="6" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Vibrating-screen/Vibrating-screen.webp' ?>"
                class="d-block w-100" alt="7" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Vibrating-screen/Vibrating-screen-2.webp' ?>"
                class="d-block w-100" alt="8" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/Vibrating-screen/Vibrating-screen-2.webp' ?>"
                class="d-block w-100" alt="9" />
            </div>
            <div class="item ">
              <img src="<?php echo BASEURL . 'images/Gallary-Imge-300x300/VSI/VSI-3.webp' ?>" class="d-block w-100"
                alt="10" />
            </div>
          </div>
        </section>
      </div>
      <!-- Footer-->
      <!-- Footer-->
      <!-- <link rel="stylesheet" href="css/footer2.css"> -->
      <?php include 'footer2.php'; ?>

      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".mySwiper2", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 2, // Display 3 slides at a time
          spaceBetween: 0, // Adjust this value as needed for the desired space
          coverflowEffect: {
            rotate: 1,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: true,
          },
          autoplay: {
            delay: 3000, // Delay between slides in milliseconds
            disableOnInteraction: true, // Enable/disable autoplay on slide interaction
          },
          loop: true,
          initialSlide: 1, // Start from the second slide (index 1)
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });

        // Pause Swiper autoplay on hover over video
        document.querySelectorAll('.swiper-slide').forEach(function (slide) {
          slide.addEventListener('mouseenter', function () {
            swiper.autoplay.stop();
          });
          slide.addEventListener('mouseleave', function () {
            swiper.autoplay.start();
          });
        });
      </script>


      <!-- Owl Carousel JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

      <script>
        $(document).ready(function () {
          $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            // dots: true,
            autoplay: true,
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