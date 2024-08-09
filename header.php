<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corecrushing</title>
    <link rel="icon" type="image/x-icon" href="images/Favicon-01.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="slider-style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- bootstrap pills -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- Google Tag Manager -->
    <!-- navbar css -->
    <link rel="stylesheet" href="css/navbar.css">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KQJLQ34M');
    </script>
    <!-- End Google Tag Manager -->
</head>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;

// define("BASEURL", "http://192.168.1.35/corecrushing");
define("BASEURL", "https://corecrushing.in/");
// define("BASEURL", "https://localhost/corecrushing/");
// define("BASEURL", "https://labindiadigital.com/corecrushing/");
include 'data2.php';

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

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJLQ34M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--@@@@@@@@-->
    <nav class="navbar-landing  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row align-items-center header-row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a class="navbar-brand" href="<?php echo BASEURL; ?>">
                        <img class="my-logo" src="images/logo.webp" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 d-lg-flex justify-content-end">
                    <div class="link-custom me-3">
                        <span><i class="fa-solid fa-phone p-2"></i><a href="tel:+91 9594940001">+91 9594940001</a></span>
                    </div>
                    <div class="link-custom mobile-email-link">
                        <span><i class="fa fa-envelope p-2" aria-hidden="true"></i><a href="mailto:info@corecrushing.in">info@corecrushing.in</a></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Application SandPlant -->
    <div class="modal fade" id="SandPlant" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactFormModalLabel">Enquiry Form Sand Plant </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="display: none;">Contact Form for Sand Plant</h2>
                    <div id="footerFormContainer">
                    <form action="sampple-mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email ID:</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="contact_no">Contact No:</label>
                                    <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="company_name">Company Name:</label>
                                    <input type="text" id="company_name" name="company_name" placeholder="Enter your company name" required>
                                </div>
                            </div>
                            <div>
                                <label for="requirement">Requirement:</label>
                                <div>
                                    <label for="capacity">Output Capacity required:</label>
                                    <input type="text" id="capacity_from" name="capacity_from" placeholder="From TPH">
                                    <input type="text" id="capacity_to" name="capacity_to" placeholder="To TPH">
                                </div>
                                <div>
                                    <label for="stone_type">Stone Type:</label>
                                    <select id="stone_type" name="stone_type">
                                        <option value="">Select Stone Type</option>
                                        <option value="Granite">Granite</option>
                                        <option value="Black Basalt">Black Basalt</option>
                                        <option value="River Pebble">River Pebble</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="input_size_from">Input Size(mm)</label> 
                                        <input type="text" id="input_size_from" name="input_size_from" placeholder="From">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input_size_to">Input Size(mm)</label> <input type="text" id="input_size_to" name="input_size_to" placeholder="To">
                                    </div>
                                </div>
                                <div>
                                    <label for="Output_size_Required">Output size Required: </label>
                                    <select id="Output_size_Required" name="Output_size_Required">
                                        <option value=""> Select Output Size </option>
                                        <option value="0 to 2.36 mm">0 to 2.36 mm </option>
                                        <option value="0 to 2.75 mm">0 to 2.75 mm </option>
                                        <option value="0 to 4.75 mm">0 to 4.75 mm </option>
                                        <option value="0 to 2.36 mm & 0 to 4.75 mm">0 to 2.36 mm & 0 to 4.75 mm </option>
                                        <option value="0 to 2.75 mm & 0 to 4.75 mm">0 to 2.75 mm & 0 to 4.75 mm </option>
                                    </select>
                                </div>
                                <label for="remark">Remark:</label>
                                <textarea id="remark" name="remark" placeholder="Enter your remarks"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" id="agree" name="agree" >
                                <label for="agree">I agree to terms and conditions</label>
                            </div>
                            <input type="hidden" name="form_type" value="form3">
                            <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree" require>
                                    <label for="agree">I agree to terms and conditions</label>
                                </div>
                                <input type="hidden" id="token" name="token"> 
                            <button type="submit" name="send">Submit</button>
                            
                        </form>
                        <!-- Form 2 end -->
                    </div>
                    <!-- You can add a footer section if needed -->
                </div>
            </div>
        </div>
    </div>

    <!-- contactFormModal -->
    <div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactFormModalLabel">Enquiry Form </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    if ($id == 4) { ?>
                        <h2 style="display: none;">Enquiry Form High-Frequency Screen</h2>
                        <div id="footerFormContainer">
                            <form action="sampple-mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email ID:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contact_no">Contact No:</label>
                                        <input type="tel" id="contact_no" name="contact_no" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company_name">Company Name:</label>
                                        <input type="text" id="company_name" name="company_name" required>
                                    </div>
                                </div>
                                <!-- <label for="requirement">Requirement:</label> -->
                                <div class="row">
                                    <label for="capacity">Capacity:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="capacity_from" placeholder="From" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                        <input type="text" class="form-control" name="capacity_to" placeholder="To" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <label for="number_of_decks">Number of Decks:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="number_of_decks_from" name="number_of_decks_from" placeholder="From">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                        <input type="text" class="form-control" id="number_of_decks_to" name="number_of_decks_to" placeholder="To">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                    </div>
                                </div>
                                <div>
                                    <label for="cut_point">Cut Point:</label>
                                    <input type="text" id="cut_point" name="cut_point">
                                </div>

                                <label for="remark">Remark:</label>
                                <textarea id="remark" name="remark"></textarea>
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree" require>
                                    <label for="agree">I agree to terms and conditions</label>
                                </div>
                                <input type="hidden" id="token" name="token">
                                <input type="hidden" name="form_type" value="form2">
                                <button type="submit" name="send">Submit</button>
                            </form>
                        </div>
                    <?php } else { ?>
                        <h2 style="display: none;">Contact Form general</h2>
                        <div id="footerFormContainer">
                            <form action="sampple-mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email ID:</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contact_no">Contact No:</label>
                                        <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company_name">Company Name:</label>
                                        <input type="text" id="company_name" name="company_name" placeholder="Enter your company name" required>
                                    </div>
                                </div>
                                <div>
                                    <label for="stone_type">Requirement - Stone Type:</label>
                                    <select id="stone_type" name="stone_type">
                                        <option value="">Select Stone Type</option>
                                        <option value="Granite">Granite</option>
                                        <option value="Black Basalt">Black Basalt</option>
                                        <option value="River Pebble">River Pebble</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="input_size_from">Input Size(mm)</label> <input type="text" id="input_size_from" name="input_size_from" placeholder="From">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="input_size_to">To Input Size(mm)</label> <input type="text" id="input_size_to" name="input_size_to" placeholder="To">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="plant_stages">Plant Stages: </label>
                                    <select id="plant_stages" name="plant_stages">
                                        <option value="">Select Plant Stages</option>
                                        <option value="2 Stage (Jaw + Cone)">2 Stage (Jaw + Cone)</option>
                                        <option value="3 Stage (Jaw + Cone + VSI)">3 Stage (Jaw + Cone + VSI)</option>
                                        <option value="4 Stage (Jaw + Cone + Cone + VSI)">4 Stage (Jaw + Cone + Cone + VSI)</option>
                                        <option value="Individual product">Individual product</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label for="output_size">Output Size Required: </label>
                                    <div class="input-group">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">0 mm to </div>
                                        <input type="text" class="form-control" name="output_size" placeholder="Enter output size" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">mm</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="output_capacity">Output Capacity Required: </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="output_capacity" placeholder="Enter output capacity" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH - Tons per hour </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="remark">Remark:</label>
                                    <textarea id="remark" name="remark" placeholder="Enter your remarks"></textarea>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree">
                                    <label for="agree">I agree to terms and conditions</label>
                                </div>
                                <input type="hidden" name="form_type" value="form1">
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree" require>
                                    <label for="agree">I agree to terms and conditions</label>
                                </div>
                                <input type="hidden" id="token" name="token">
                                <button type="submit" name="send">Submit</button>
                            </form>
                        </div>
                    <?php }  ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>