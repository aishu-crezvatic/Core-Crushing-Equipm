<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Get the value of 'id' parameter from the URL
?>
<div class="container contact-us">
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
                <p><b>For India sales and service:</b></p>
            </div>
            <div>
                <p>Email: info@corecrushing.in</p>
            </div>
            <div>
                <p>Contact : +91 88062 67888</p>
            </div>

            <div><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d120625.03232534994!2d72.82365768161662!3d19.12816495542504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.190559999999998!2d72.9549033!4m5!1s0x3be7c9b3bdec7b01%3A0xdf289e3f9e855a4c!2s104%2C%20Terminal%209%2C%20Near%20Vile%20Parle%20Police%20Station%2C%20Nehru%20Road%2C%20Vile%20Parle%20(East)%2C%20Mumbai%20%E2%80%93%20400%20057%2C%20India.!3m2!1d19.0961486!2d72.85519!5e0!3m2!1sen!2sin!4v1711626946668!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
        <div class="col-md-6 contact-us-two">
            <h2>Contact Form</h2>

    <!-- Form 2 -->
    <?php if ($id === 2){?>
    <h2 style="display: none;">Contact Form Sand Plant</h2>
    <div id="footerFormContainer" >
    <form action="sampple-mail.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div>
            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div>
            <label for="contact_no">Contact No:</label>
            <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required>
        </div>
        <div>
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" placeholder="Enter your company name" required>
        </div>
        <div>
            <label for="requirement">Requirement:</label>
            <div>
                <label for="capacity">Capacity:</label>
                <input type="text" id="capacity_from" name="capacity_from" placeholder="From TPH" required>
                <input type="text" id="capacity_to" name="capacity_to" placeholder="To TPH" required>
            </div>
            <div>
                <label for="number_of_decks">Number of Decks:</label>
                <input type="text" id="number_of_decks_from" name="number_of_decks_from" placeholder="From Deck" required>
                <input type="text" id="number_of_decks_to" name="number_of_decks_to" placeholder="To Deck" required>
            </div>
            <div>
                <label for="cut_point">Cut Point:</label>
                <input type="text" id="cut_point" name="cut_point" placeholder="Cut Point" required>
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
        <input type="hidden" name="form_type" value="form2" >
        <button type="submit" name="send">Submit</button>
    </form> 
    <div>
    <!-- Form 2 end -->

    <!-- Form 3 -->
    <?php } elseif ($id === 4){ ?>
    <h2 style="display: none;">Contact Form High-Frequency Screen</h2>
    <div id="footerFormContainer">
    <form action="sampple-mail.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>

            <label for="contact_no">Contact No:</label>
            <input type="tel" id="contact_no" name="contact_no" required>

            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" required>

            <label for="requirement">Requirement:</label>
            <div>
                <label for="capacity">Capacity:</label>
                <input type="text" id="capacity_from" name="capacity_from" placeholder="From TPH" required>
                <input type="text" id="capacity_to" name="capacity_to" placeholder="To TPH" required>
            </div>
            <div>
                <label for="number_of_decks">Number of Decks:</label>
                <input type="text" id="number_of_decks_from" name="number_of_decks_from" placeholder="From Deck" required>
                <input type="text" id="number_of_decks_to" name="number_of_decks_to" placeholder="To Deck" required>
            </div>
            <div>
                <label for="cut_point">Cut Point:</label>
                <input type="text" id="cut_point" name="cut_point" required>
            </div>

            <label for="remark">Remark:</label>
            <textarea id="remark" name="remark"></textarea>

            <button type="submit" name="send">Submit</button>
    </form>
    </div>
    <!-- Form 3 end -->
    <?php } else {?>
    <h2 style="display: none;">Contact Form general</h2>
    <div id="footerFormContainer">
    <form action="sampple-mail.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div>
            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div>
            <label for="contact_no">Contact No:</label>
            <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required>
        </div>
        <div>
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" placeholder="Enter your company name" required>
        </div>
        <div>
            <label for="stone_type">Requirement - Stone Type:</label>
            <select id="stone_type" name="stone_type" required>
                <option value="">Select Stone Type</option>
                <option value="Granite">Granite</option>
                <option value="Black Basalt">Black Basalt</option>
                <option value="River Pebble">River Pebble</option>
            </select>
        </div>
        <div>

            <div class="row">
                <div class="col-md-6">
                    <label for="input_size_from">Input Size</label> <input type="text" id="input_size_from" name="input_size_from" placeholder="From" required>
                </div>

                <div class="col-md-6">
                    <label for="input_size_to">Input Size</label> <input type="text" id="input_size_to" name="input_size_to" placeholder="To" required>
                </div>
            </div>
        </div>
        <div>
            <label for="plant_stages">Plant Stages:</label>
            <select id="plant_stages" name="plant_stages" required>
                <option value="">Select Plant Stages</option>
                <option value="2 Stage (Jaw + Cone)">2 Stage (Jaw + Cone)</option>
                <option value="3 Stage (Jaw + Cone + VSI)">3 Stage (Jaw + Cone + VSI)</option>
                <option value="4 Stage (Jaw + Cone + Cone + VSI)">4 Stage (Jaw + Cone + Cone + VSI)</option>
                <option value="Individual product">Individual product</option>
            </select>
        </div>
        <div>
            <label for="output_size">Output Size Required (0 to __ mm):</label>
            <input type="text" id="output_size" name="output_size" placeholder="Enter output size" required>
        </div>
        <div>
            <label for="output_capacity">Output Capacity Required (__ TPH - Tons per hour):</label>
            <input type="text" id="output_capacity" name="output_capacity" placeholder="Enter output capacity" required>
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
<div class="footerimg">
    <img src="images/navimage/Menu-header.webp" alt="dcv"> 
    </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->