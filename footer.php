<!-- <?php
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Get the value of 'id' parameter from the URL
        ?> -->

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
<div class="footer_bg">
    <div class="container contact-us footer-cont">
        <div class="row">
            <div class="col-md-6 contact-us-one">
                <h2>CONNECT WITH US</h2>
                <div style="display: flex;">
                    <p><b>HEAD OFFICE: </b></p>
                </div>
                <div>
                    <p>104, Terminal 9, Near Vile Parle Police Station, Nehru Road, Vile Parle (East), Mumbai – 400 057, Maharashtra, India.</p>
                </div> <br>

                <div style="display: flex;">
                    <p><b>BRANCH OFFICE: </b></p>
                </div>
                <div>
                    <p>7-1-58, 304 B, The Concourse, 3rd Floor, Beside Amrutha Business Complex, Greenlands, Ameerpet, Hyderabad – 500016, Telangana, India.</p>
                </div> <br>

                <div style="display: flex;">
                    <p><b>For India sales and service:</b></p>
                </div>
                <div>
                    <p><a class="footer-contact-details" href="info@corecrushing.in">Email: info@corecrushing.in</a></p>
                </div>
                <div>
                    <p><a class="footer-contact-details" href="tel:+91 9594940001">Contact : +91 9594940001</a></p>
                </div>

                <div><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d120625.03232534994!2d72.82365768161662!3d19.12816495542504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.190559999999998!2d72.9549033!4m5!1s0x3be7c9b3bdec7b01%3A0xdf289e3f9e855a4c!2s104%2C%20Terminal%209%2C%20Near%20Vile%20Parle%20Police%20Station%2C%20Nehru%20Road%2C%20Vile%20Parle%20(East)%2C%20Mumbai%20%E2%80%93%20400%20057%2C%20India.!3m2!1d19.0961486!2d72.85519!5e0!3m2!1sen!2sin!4v1711626946668!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
            <div class="col-md-6 contact-us-two">
                <h2 class="contact-form-heading">Enquiry Form </h2>
                <?php if ($id === 4) { ?>
                            <h2 style="display: none;">Enquiry Form High-Frequency Screen</h2>
                            <div id="footerFormContainer hfs">
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
                                            <input type="text" class="form-control" name="capacity_from" placeholder="From" aria-describedby="btnGroupAddon" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                            <input type="text" class="form-control" name="capacity_to" placeholder="To" aria-describedby="btnGroupAddon" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <label for="number_of_decks">Number of Decks:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="number_of_decks_from" name="number_of_decks_from" placeholder="From" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                            <input type="text" class="form-control" id="number_of_decks_to" name="number_of_decks_to" placeholder="To" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="cut_point">Cut Point:</label>
                                        <input type="text" id="cut_point" name="cut_point" required>
                                    </div>

                                    <label for="remark">Remark:</label>
                                    <textarea id="remark" name="remark"></textarea>

                                    <input type="hidden" name="form_type" value="form2">
                                    <button type="submit" name="send">Submit</button>
                                </form>
                            </div>
                        <?php } else { ?>
                            <h2 style="display: none;">Enquiry Form general</h2>
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
                                        <select id="stone_type" name="stone_type" required>
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
                                                <input type="text" id="input_size_from" name="input_size_from" placeholder="From" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="input_size_to">Input Size(mm)</label> 
                                                <input type="text" id="input_size_to" name="input_size_to" placeholder="To" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="plant_stages">Plant Stages: </label>
                                        <select id="plant_stages" name="plant_stages" required>
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
                                            <input type="text" class="form-control" id="output_size" name="output_size" placeholder="Enter output size" aria-describedby="btnGroupAddon" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">mm</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label for="output_capacity">Output Capacity Required: </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="output_capacity" name="output_capacity" placeholder="Enter output capacity" aria-describedby="btnGroupAddon" required>
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
                                </form>
                            </div>
                        <?php }  ?>

                        </div>
                    </div>
            </div>
        </div>

        <!-- Whatsapp -->
        <a href="https://api.whatsapp.com/send?phone=8806267888&text=Hi Core Crushing Team, I would like to know more about your products." class="float" target="_blank">
            <i class="fa-brands fa-whatsapp my-float"></i>
        </a>
        <div class="footerimg">
            <p style="font-size: 10px; margin: auto;"> © Copyright 2024 corecrushing.in All rights reserved</p>

            <!-- <img src="images/navimage/button-bg-2.webp" alt="dcv">  -->
        </div>

        <!-- Fancy box -->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        

        <script>
            var Slider = (function() {
                var initSlider = function() {
                    var dir = $("html").attr("dir");
                    var swipeHandler = new Hammer(document.getElementById("slider"));
                    swipeHandler.on('swipeleft', function(e) {
                        if (dir == "rtl")
                            $(".arrow-left").trigger("click");
                        else
                            $(".arrow-right").trigger("click");
                    });

                    swipeHandler.on('swiperight', function(e) {
                        if (dir == "rtl")
                            $(".arrow-right").trigger("click");
                        else
                            $(".arrow-left").trigger("click");
                    });

                    $(".arrow-right , .arrow-left").click(function(event) {
                        var nextActiveSlide = $(".slide.active").next();

                        if ($(this).hasClass("arrow-left"))
                            nextActiveSlide = $(".slide.active").prev();

                        if (nextActiveSlide.length === 0) {
                            // Handle loop for next slide
                            nextActiveSlide = $(this).hasClass("arrow-left") ? $(".slide").last() : $(".slide").first();

                        }

                        var nextActiveIndex = nextActiveSlide.index();
                        $(".dots span").removeClass("active");
                        $($(".dots").children()[nextActiveIndex]).addClass("active");

                        updateSlides(nextActiveSlide);
                    });

                    $(".dots span").click(function(event) {
                        var slideIndex = $(this).index();
                        var nextActiveSlide = $($(".slider").children()[slideIndex]);
                        $(".dots span").removeClass("active");
                        $(this).addClass("active");

                        updateSlides(nextActiveSlide);
                    });

                    var updateSlides = function(nextActiveSlide) {
                        var nextActiveSlideIndex = $(nextActiveSlide).index();

                        $(".slide").removeClass("prev-1");
                        $(".slide").removeClass("next-1");
                        $(".slide").removeClass("active");
                        $(".slide").removeClass("prev-2");
                        $(".slide").removeClass("next-2");

                        nextActiveSlide.addClass("active");

                        nextActiveSlide.prev().addClass("prev-1");
                        nextActiveSlide.prev().prev().addClass("prev-2");
                        nextActiveSlide.addClass("active");
                        nextActiveSlide.next().addClass("next-1");
                        nextActiveSlide.next().next().addClass("next-2");
                    }
                }
                return {
                    init: function() {
                        initSlider();
                    }
                }
            })();

            $(function() {
                Slider.init();
            });
        </script>

        <!-- Fancy box -->
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->


        <!-- Navbar javascript Start-->
        <script>
            window.addEventListener("resize", function() {
            "use strict"; window.location.reload(); 
          });
         document.addEventListener("DOMContentLoaded", function()
         {
         /////// Prevent closing from click inside dropdown
         document.querySelectorAll('.dropdown-menu').forEach(function(element)
         {
                 element.addEventListener('click', function(e)
                 {
                         e.stopPropagation();
                 });
         })
         // make it as accordion for smaller screens
         if (window.innerWidth < 992)
         {
                 // close all inner dropdowns when parent is closed
                 document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown)
                 {
                         everydropdown.addEventListener('hidden.bs.dropdown', function()
                         {
                                 // after dropdown is hidden, then find all submenus
                                 this.querySelectorAll('.submenu')
                                         .forEach(function(everysubmenu)
                                         {
                                                 // hide every submenu as well
                                                 everysubmenu
                                                         .style
                                                         .display =
                                                         'none';
                                         });
                         })
                 });
                 document.querySelectorAll('.dropdown-menu a').forEach(function(element)
                 {
                         element.addEventListener('click', function(e)
                         {
                                 let nextEl = this.nextElementSibling;
                                 if (nextEl && nextEl.classList
                                         .contains('submenu'))
                                 {
                                         // prevent opening link if link needs to open dropdown
                                         e.preventDefault();
                                         console.log(nextEl);
                                         if (nextEl.style.display ==
                                                 'block')
                                         {
                                                 nextEl.style.display =
                                                         'none';
                                         }
                                         else
                                         {
                                                 nextEl.style.display =
                                                         'block';
                                         }
                                 }
                         });
                 })
         }
         // end if innerWidth
         });
         // DOMContentLoaded  end
        </script>
        <!-- Navbar javascript End-->
        </body>

        </html>