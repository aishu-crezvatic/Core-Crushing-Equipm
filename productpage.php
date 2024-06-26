<?php
// Include necessary files
include 'header.php';
include 'data2.php';

// Get the id parameter from the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Define empty values if $id is not set or not valid
if (!isset($Prod_Banner[$id])) {
  $Prod_Banner[$id] = [
    'image' => '',
    'title' => '',
    'subtitle' => '',
    'description' => ''
  ];
}

if (!isset($successInEveryHardness[$id])) {
  $successInEveryHardness[$id] = [
    'h1' => '',
    'd1' => '',
    // Repeat for other elements...
  ];
}

if (!isset($table_data[$id])) {
  $table_data[$id] = [
    'modal1' => '',
    'modal2' => '',
    'modal3' => '',
    'modal1_data_1' => '',
    'modal2_data_1' => '',
    'modal3_data_1' => '',
    'modal1_data_2' => '',
    'modal2_data_2' => '',
    'modal3_data_2' => '',
    'modal1_data_3' => '',
    'modal2_data_3' => '',
    'modal3_data_3' => '',
  ];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product page</title>
</head>

<body>
  <div class="container-fluid custom-container-banner">
    <div class="product-hero">
      <img src="<?php echo $Prod_Banner[$id]['image'] ?>" class="d-block w-100 banne-new" alt="product-banner" />
      <div class="product-hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 col-sm-12">
              <div class="hero-text">
                <h1><?php echo $Prod_Banner[$id]['title'] ?></h1>
                <h3 style="color:red"><?php echo $Prod_Banner[$id]['subtitle'] ?></h3>
                <p><?php echo $Prod_Banner[$id]['description'] ?></p>
                <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Inquire Now</a>
              </div>
            </div>
            <!-- <div class="col-md-6 col-sm-12">
              <div class="additional-content">
               
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- type tab -->

    <?php if ($id == 1) { ?>

      <div class="card p-3 card-typediv">
        <nav>
          <div class="nav nav-tabs mb-3 mt-5 typediv" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">SH 200 Cone Crusher</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">SH 400 Cone Crusher</button>
          </div>
        </nav>
        <div class="tab-content p-3 border bg-light" id="nav-tabContent">
          <!-- For 200 -->
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <!--features-  -->
            <div class="container-fluid custom-container add-pad ">
              <div class="row features custom-container-style">
                <div class="col-md-12">
                  <h1>SUCCESS IN EVERY HARDNESS</h1>
                  <p class="product-para">Wide range of crushing for soft to very hard materials. For various materials, crushing efficiency is increased by different jaw types.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src="<?php echo $successInEveryHardness[$id]['vimage'] ?>" class="img-fluid" alt="">
                </div>
                <?php
                // foreach ($successInEveryHardness[$id]['200'] as $key => $val) {
                //   // echo '<pre>';
                //   print_r($key);
                // }
                ?>
                <div class="col-md-8 scroll">
                  <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="features-text-div">
                        <!-- <div class="row"> -->
                          <div class="feature-image">
                            <img src="images/Favicon-01.webp" class="icon-n img-fluid" alt="product-banner">
                          </div>
                          <div class="feature-content">
                            <h4><?php echo $successInEveryHardness[$id]['h'. $i] ?></h4>
                            <p><?php echo $successInEveryHardness[$id]['d'. $i] ?></p>
                          </div>
                        <!-- </div> -->
                    </div>

                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- table -->
            <div class="table-data">
        <h1>Technical specification SH 200 Cone</h1>
        <p>The Core SH 200 Cone boasts cast top and bottom shells for enduring crushing loads, a hydraulically supported forged alloy main shaft assembly with push-button control, and specially designed mantle and concave profiles for consistent feed opening retention. Its all-roller bearing design ensures high load capacity and constant alignment, reducing frictional losses and enabling variable operational speeds. The built-in hydraulic rotary feed distributor optimizes material distribution for increased wear life and enhanced capacity.</p>

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
                            <td style="color: red;">Coarse Concave-165</td>
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
             <!--features-  -->
             <div class="container-fluid custom-container add-pad ">
              <div class="row features custom-container-style">
                <div class="col-md-12">
                  <h1>SUCCESS IN EVERY HARDNESS</h1>
                  <p class="product-para">Wide range of crushing for soft to very hard materials. For various materials, crushing efficiency is increased by different jaw types.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src="<?php echo $successInEveryHardness[$id]['vimage2'] ?>" class="img-fluid" alt="">
                </div>
                <?php
                // foreach ($successInEveryHardness[$id]['200'] as $key => $val) {
                //   // echo '<pre>';
                //   print_r($key);
                // }
                ?>
                <div class="col-md-8 scroll">
                  <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="features-text-div">
                     <!--  <div class="row"> -->
                        <div class="feature-image">
                          <img src="images/Favicon-01.webp" class="icon-n img-fluid" alt="product-banner">
                        </div> 
                        <div class="feature-content">
                          <h4><?php echo $successInEveryHardness[$id]['h'.$i] ?></h4>
                          <p><?php echo $successInEveryHardness[$id]['d'.$i] ?></p>
                        </div>
                      <!-- </div> -->
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- table -->
            <div class="table-data">
        <h1>SH 400 Cone Crusher </h1>
        <p>The Core SH 400 Cone Crusher is built to withstand tough quarry and mining conditions. Featuring anti-friction roller bearings, a 37 kW motor, and a cartridge-type design for easy access to components, it offers enhanced crushing power and serviceability. With a compact, balanced design and no speed limitations, it ensures superior productivity and flexibility. Its hydraulically operated rotary feed distributor optimizes material distribution, while optional extras provide added customisation.</p>

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

    <?php } else { ?>
      <!-- type tab end-->
      <!-- Features -->
      <div class="container-fluid custom-container add-pad ">
        <div class="row features custom-container-style">
          <div class="col-md-12">
            <h1>SUCCESS IN EVERY HARDNESS</h1>
            <p class="product-para">Wide range of crushing for soft to very hard materials. For various materials, crushing efficiency is increased by different jaw types.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="<?php echo $successInEveryHardness[$id]['vimage'] ?>" class="img-fluid" alt="">
          </div>
          <?php
          // foreach ($successInEveryHardness[$id]['200'] as $key => $val) {
          //   // echo '<pre>';
          //   print_r($key);
          // }
          ?>
          <div class="col-md-8 scroll ">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
              <div class="features-text-div">
                <!-- <div class="row"> -->
                  <div class="feature-image">
                       <img src="images/Favicon-01.webp" class="icon-n img-fluid" alt="product-banner">
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
      <!-- Table -->
      <?php include 'tables.php'; ?>
    <?php } ?>
    <!-- Video slider -->
    <div class="image-gallery">
      <h1>Videos</h1>
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper w-50">
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nr37KBnv0HA?si=LziSbCp13HuJ6_T-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lS4Sr_myTNU?si=wTndd3UJP4aE-W92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kfbngnvjyug?si=LSEJ0JpsRRO7dINg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WMsM4iE-mEk?si=bG355OZuh2KtgdtG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WMsM4iE-mEk?si=JxDUnTuC__abHJUe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jCqsFQ89a9o?si=HQxp7LNN4Evr0wHT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/szUBUL1mteM?si=W-PSSMMnq0r62b0C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/59VYRkmK29A?si=ylXvHy_qqsSB_kuB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/iGKjIUo3C-I?si=7nEHDA1aHb4O4xMs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="swiper-slide">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_729IWWC9zU?si=lYGKk31jVgG3b38m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>


    <!-- Galary slider -->
    <div class="image-gallery">
      <h1>Gallery</h1>
      <div class="swiper mySwiper ">
        <div class="swiper-wrapper w-25">
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/HSF/HSF-1.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/HSF/HSF-2.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Jaw_Crusher/Jaw_Crusher-2.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Jaw_Crusher/Jaw_Crusher-3.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Sander%20Cone/Sander-Cone-2.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Sander%20Cone/Sander-Cone-5.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Vibrating-screen/Vibrating-screen.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/Vibrating-screen/Vibrating-screen-2.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/VSI/VSI-2.webp" class="d-block w-100" alt="1" />
          </div>
          <div class="swiper-slide">
            <img src="images/Gallary-Imge-300x300/VSI/VSI-3.webp" class="d-block w-100" alt="1" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- cta -->
    <?php include 'cta.php'; ?>

    <a href="https://api.whatsapp.com/send?phone=8806267888&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
      <i class="fa-brands fa-whatsapp my-float"></i>
    </a>
    <!-- cta end -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <!-- Image slider style -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 3000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Enable/disable autoplay on slide interaction
        },
        loop: {
          loop: true
        },
        initialSlide: 3, // Start from the third slide (index 2)
      });
    </script>
    <!-- Video slider style -->
    <script>
      var swiper = new Swiper(".mySwiper2", {
         effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 5000, // Delay between slides in milliseconds
          disableOnInteraction: false, // Enable/disable autoplay on slide interaction
        },
        loop: {
          loop: true
        },
        initialSlide: 3, // Start from the third slide (index 2)
        spaceBetween: 150, // Adjust this value as needed for the desired space

      });
      // Pause Swiper autoplay on hover over video
    document.querySelectorAll('.swiper-slide video').forEach(function(video) {
        video.addEventListener('mouseenter', function() {
            swiper.autoplay.stop();
        });
        video.addEventListener('mouseleave', function() {
            swiper.autoplay.start();
        });
    });
    </script>

    <!-- footer -->
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>