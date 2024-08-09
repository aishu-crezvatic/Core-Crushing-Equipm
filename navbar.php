<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // define("BASEURL", "http://192.168.1.35/corecrushing/");
    // define("BASEURL", "https://corecrushing.in/");
    define("BASEURL", "http://localhost/corecrushing/");
    // define("BASEURL", "https://labindiadigital.com/corecrushing/");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corecrushing</title>
    <link rel="icon" type="image/x-icon" href="<?php echo BASEURL . 'images/Favicon-01.webp' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/owl.carousel.min.css' ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo BASEURL . 'style.css' ?>" />
    <link rel="stylesheet" href="<?php echo BASEURL . 'new-style.css' ?>">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo BASEURL . 'slider-style.css' ?>" />
    <!-- <link rel="stylesheet" href="<?php echo BASEURL . 'responsive.css' ?>" /> -->
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/about-us.css' ?>" />
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/contact.css' ?>" />
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/footer2.css' ?>" />
    <!-- navbar css -->
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/navbar.css' ?>">
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/product-category.css' ?>">
    <link rel="stylesheet" href="<?php echo BASEURL . 'responsive.css' ?>">



    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?php echo BASEURL . 'css/owl.transitions.css' ?>" type="text/css" media="all" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <!-- Fancy Box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/css/lightgallery-bundle.min.css" rel="stylesheet">

    <!-- bootstrap pills -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- Google Tag Manager -->

    <!-- recapcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdtqgIqAAAAAJ-of3Kvj9NLgQ7aIWNeVgg4MWyK"></script>

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
include 'data2.php';
include 'data/product-category-data.php';
include 'data/application_data.php';

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


<style>
    #myBtn .fa-solid,
    #myBtn .fas {
        font-weight: 900;
        font-size: 30px;
        /* padding: 8px; */
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 8px 13px;
        border-radius: 50%;
    }

    #myBtn:hover {
        background-color: #555;
    }
</style>
<header>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJLQ34M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container-flude">
        <div class="row">
            <!--@@@@@@@@-->

            <div class="col-md-12">
                <div class="container-fluid phoneNemail" style="background-color: #D2AD77">
                    <div class="row align-items-center header-row">
                        <div class="col-lg-6 col-md-6 col-sm-6">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-lg-flex justify-content-end">
                            <div class="link-custom-main mobile-email-link me-3">
                                <span><i class="fa-solid fa-phone p-2"></i><a href="tel:+91 9594940001">+91 9594940001</a></span>
                            </div>
                            <div class="link-custom-main mobile-email-link">
                                <span><i class="fa fa-envelope p-2" aria-hidden="true"></i><a href="mailto:info@corecrushing.in">info@corecrushing.in</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light hamburger-custom-style">
                    <!-- 
         <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark p-0 "> -->
                    <!-- Nav Toggle Button -->
                    <div class="row toggler_icon_list">
                        <div class="col-xl-2 col-md-2 col-sm-12  logo-hamburger ">
                            <a class="navbar-brand" href="<?php echo BASEURL; ?>">
                                <img class="my-logo" src="<?php echo BASEURL . 'images/logo.webp' ?>" alt="">
                            </a>
                            <button class="navbar-toggler my-2 lh-lg navnar-all-links" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>

                        <!-- Nav Links -->
                        <div class="col-xl-10 col-md-10 collapse navbar-collapse lh-lg navnar-all-links justify-content-end  " id="main_nav">
                            <ul class="navbar-nav p-md-0">
                                <li class="nav-item"> <a class="nav-link active" href="<?php echo BASEURL ?>" onclick="makeActive(this)">Home</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL . 'about-us' ?>">About Us</a> </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <!-- <li><a class="dropdown-item" href="#">Crushers</a></li> -->
                                        <li>
                                            <a class="dropdown-item" href="<?php echo BASEURL . 'Crushers' ?>" onclick="makeActive(this)">Crusher <strong class="float-end"> &raquo;</strong> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Crushers/jaw-crushers' ?>">Jaw Crusher</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Crushers/cone-crushers' ?>">Cone Crusher</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Crushers/sander-cone' ?>"> Sander Cone</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Crushers/vertical-shaft-impactor' ?>">Vertical Shaft Impactor</a></li>
                                                <!-- <li> 
                                        <a class="dropdown-item" href="#">Submenu item 3 <strong class="float-end">»</strong> </a>
                                        //Drop Down 
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                            <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                        </ul>
                                    </li> -->
                                            </ul>
                                        </li>
                                        <!-- Dropdown Megasubmenu -->
                                        <li>
                                            <a class="dropdown-item d-flex" href="<?php echo BASEURL . 'Feeders_and_Screens' ?>" onclick="makeActive(this)">Feeders and Screens <strong class="float-end"> &raquo;</strong> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Feeders_and_Screens/pan-feeders' ?>">Pan Feeders</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Feeders_and_Screens/grizzly-feeders' ?>">Grizzly Feeders</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Feeders_and_Screens/grizzly-screen' ?>">Grizzly Screen</a></li>
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Feeders_and_Screens/vibrating-screen' ?>">Vibrating Screen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo BASEURL . 'Classifiers' ?>" onclick="makeActive(this)">Classifiers<strong class="float-end"> &raquo;</strong> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo BASEURL . 'Classifiers/high-frequency-screens' ?>">High-Frequency Screen</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>


                                <!-- Mega Menu -->
                                <!-- <li class="nav-item dropdown ktm-mega-menu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Mega Menu </a>
                        <div class="dropdown-menu mega-menu p-3">
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </span>
                        </div>
                    </li> -->

                                <!-- Application-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Application </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo BASEURL . 'Aggregate_CrushingAnd_Screening_Plant' ?>"> Aggregate Crushing And Screening Plant </a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASEURL . 'Sand_Plant' ?>"> Sand Plant </a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASEURL . 'Classification' ?>">Classification </a></li>
                                        <!-- <li>
                                <a class="dropdown-item" href="#"> Dropdown item 2 <strong class="float-end">»</strong> </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Submenu item 3 <strong class="float-end">»</strong> </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                            <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                                </ul>
                            </li> -->
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="<?php echo BASEURL . 'contact-us' ?>" onclick="makeActive(this)">Contact Us</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- </div> -->
                    <!-- </nav> -->
                    <!-- </div> -->
                </nav>
            </div>
        </div>
    </div>

    <!-- Application SandPl ant -->
    <div class="modal fade" id="SandPlant" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactFormModalLabel">Enquiry Form Sand Plant </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="display: none;">Contact Form for Sand Plant 3</h2>
                    <div id="footerFormContainer">
                        <form action="sampple-mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="[A-Za-z\s]+" title="Name should contain alphabets only">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email ID:</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="contact_no">Contact No:</label>
                                    <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required pattern="\d{10}" title="Phone number should be exactly 10 digits">
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
                                    <input type="number" id="capacity_from" name="capacity_from" placeholder="From TPH">
                                    <input type="number" id="capacity_to" name="capacity_to" placeholder="To TPH">
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
                                        <input type="number" id="input_size_from" name="input_size_from" placeholder="From">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="input_size_to">Input Size(mm)</label>
                                        <input type="number" id="input_size_to" name="input_size_to" placeholder="To">
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
                                <input type="checkbox" id="agree" name="agree" required>
                                <label for="agree">I agree to terms and conditions</label>
                            </div>
                            <input type="hidden" name="form_type" value="form3">
                            <button type="submit" name="send">Submit</button>
                            <input type="hidden" id="token2" name="token">
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
                        <h2 style="display: none;">Enquiry Form High-Frequency Screen 2</h2>
                        <div id="footerFormContainer">
                            <form action="sampple-mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="[A-Za-z\s]+" title="Name should contain alphabets only">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email ID:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contact_no">Contact No:</label>
                                        <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required pattern="\d{10}" title="Phone number should be exactly 10 digits">
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
                                        <input type="number" class="form-control" name="capacity_from" placeholder="From" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                        <input type="number" class="form-control" name="capacity_to" placeholder="To" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                    </div>

                                </div>
                                <div class="row">
                                    <label for="number_of_decks">Number of Decks:</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="number_of_decks_from" name="number_of_decks_from" placeholder="From">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                        <input type="number" class="form-control" id="number_of_decks_to" name="number_of_decks_to" placeholder="To">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                    </div>
                                </div>
                                <div>
                                    <label for="cut_point">Cut Point:</label>
                                    <input type="number" id="cut_point" name="cut_point">
                                </div>

                                <label for="remark">Remark:</label>
                                <textarea id="remark" name="remark"></textarea>
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree" required>
                                    <label for="agree">I agree to terms and conditions</label>
                                </div> 
                                <input type="hidden" name="form_type" value="form2">
                                <button type="submit" name="send">Submit</button>
                                <input type="hidden" id="token3" name="token">
                            </form>
                        </div>
                    <?php } else { ?>
                        <h2 style="display: block;">Contact Form general 1</h2>
                        <div id="footerFormContainer">
                            <form action="sampple-mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="[A-Za-z\s]+" title="Name should contain alphabets only">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email ID:</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="contact_no">Contact No:</label>
                                        <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required pattern="\d{10}" title="Phone number should be exactly 10 digits">
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
                                            <label for="input_size_from">Input Size(mm)</label>
                                            <input type="number" id="input_size_from" name="input_size_from" placeholder="From">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="input_size_to">Input Size(mm)</label>
                                            <input type="number" id="input_size_to" name="input_size_to" placeholder="To">
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
                                        <input type="number" class="form-control" name="output_size" placeholder="Enter output size" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">mm</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="output_capacity">Output Capacity Required: </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="output_capacity" placeholder="Enter output capacity" aria-describedby="btnGroupAddon">
                                        <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH - Tons per hour </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="remark">Remark:</label>
                                    <textarea id="remark" name="remark" placeholder="Enter your remarks"></textarea>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="agree" name="agree" required>
                                    <label for="agree">I agree to terms and conditions</label>
                                </div>
                                <input type="hidden" name="form_type" value="form1">
                                <button type="submit" name="send">Submit</button>
                                <input type="hidden" id="token" name="token" >

                            </form>
                        </div>
                    <?php }  ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <a id="button"></a>

</header>