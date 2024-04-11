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
            <div class="col-md-6">
              <div class="hero-text">
                <h1><?php echo $Prod_Banner[$id]['title'] ?></h1>
                <h3 style="color:red"><?php echo $Prod_Banner[$id]['subtitle'] ?></h3>
                <p><?php echo $Prod_Banner[$id]['description'] ?></p>
                <a class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Inquire Now</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="additional-content">
                <!-- <img src="path/to/your/image.jpg" class="img-fluid" alt="Additional Content" /> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Features -->
    <div class="container-fluid custom-container add-pad ">
      <div class="row features custom-container-style">
        <div class="col-md-12">
          <h1>SUCCESS IN EVERY HARDNESS</h1>
          <p>Wide range of crushing for soft to very hard materials. For various materials, crushing efficiency is increased by different jaw types.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="images/leftsideproduct/Jaw_Crusher.webp" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 scroll ">
          <?php for ($i = 1; $i <= 10; $i++) { ?>
            <div class="features-text-div">
              <div class="row">
                <!-- <div class="col-md-2"> -->
                <img src="images/Favicon-01.webp" class="icon-n img-fluid" alt="product-banner">
                <!-- </div> -->
                <div class="col-md-10">
                  <h4><?php echo $successInEveryHardness[$id]['h' . $i] ?></h4>
                  <p><?php echo $successInEveryHardness[$id]['d' . $i] ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>


    <!-- Table -->

    <div class="table-data">
      <h1>Technical specification</h1>
      <p><?php echo $table_data[$id]['tablepara'] ?></p>

      <div class="elementor-widget-container">
        <div class="pp-table-container">
          <table class="tablesaw">
            <colgroup>
              <col span="1" class="">
            </colgroup>
            <thead>
              <tr class="tab-heading">
                <th><span>Model</span></th>
                <th><span><?php echo $table_data[$id]['modal1'] ?></span></th>
                <th><span><?php echo $table_data[$id]['modal2'] ?></span></th>
                <th><span><?php echo $table_data[$id]['modal3'] ?></span></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tab-data"><span>Size</span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal1_data_1'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal2_data_1'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal3_data_1'] ?></span></td>
              </tr>
              <tr class="even-col">
                <td class="tab-data"><span>Feeding Size</span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal1_data_2'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal2_data_2'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal3_data_2'] ?></span></td>
              </tr>
              <tr>
                <td class="tab-data"><span>Motor Capacity (kw)</span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal1_data_3'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal2_data_3'] ?></span></td>
                <td class="tab-data"><span><?php echo $table_data[$id]['modal3_data_3'] ?></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


    <!-- Video slider -->
    <div class="image-gallery">
      <h1>Videos</h1>
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
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
          rotate: 10,
          stretch: 0,
          depth: 350,
          // modifier: 1,
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
        spaceBetween: 250, // Adjust this value as needed for the desired space

      });
    </script>

    <!-- footer -->
    <?php include 'footer.php'; ?>
  </div>
</body>

</html>