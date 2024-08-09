<?php

// Get the current URI
$currentUrl = $_SERVER['REQUEST_URI'];

// Parse the URL to get the path
$urlParts = parse_url($currentUrl);

// Get the path from the URL parts
$path = $urlParts['path'];

// Get the last segment of the path using basename
$lastSegment = basename($path);

// Output the last segment
// echo "Last URI segment: " . $lastSegment;

switch ($lastSegment) {
    case 'jaw-crushers':
        $id = 0;
        break;
    case 'cone-crushers':
        $id = 1;
        break;
    case 'sander-cone':
        $id = 2;
        break;
    case 'vertical-shaft-impactor':
        $id = 3;
        break;
    case 'high-frequency-screens':
        $id = 4;
        break;
    case 'grizzly-feeders':
        $id = 5;
        break;
    case 'vibrating-screen':
        $id = 6;
        break;
    default:
        $id = 0;
        break;
}
?>

<div class="container-fluid ">
<div class="row align-items-center cta-container">
  <div class="col-md-6 mobile-custom-space">
    <div style="text-align: center; color: #ffff;">
      <h3 class="">Have a question? Talk to our expert!</h3>
      <p class="card-text-CTA">
        Our team is here to assist you with any inquiries or concerns you may have. Contact us now to get the answers you need and make informed decisions for your project.
      </p>
      <div class="row call-email">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <button class="btn inquire-now" data-bs-toggle="modal" data-bs-target="#contactFormModal">Enquire Now</button></div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <button class="btn inquire-now"><a href="tel:+91 88062 67888">+91 88062 67888</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-6">
    <img src="<?php echo BASEURL.'images/CTAImage.webp'?>" class="d-block w-100 cta-image" alt="Cta Image">
  </div> -->
</div>

  </div>