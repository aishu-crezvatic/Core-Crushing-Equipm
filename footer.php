<div class="container contact-us">
    <div class="row">
      <div class="col-md-6 contact-us-one" >
      <h2>CONNECT WITH US</h2> 
       <div style="display: flex;"><p><b>HEAD OFFICE: </b></p> </div> 
       <div> <p>104, Terminal 9, Near Vile Parle Police Station, Nehru Road, Vile Parle (East), Mumbai – 400 057, Maharashtra, India.</p></div> <br>

       <div style="display: flex;"><p><b>For India sales and service:</b></p> </div> 
       <div> <p>Email: bpa@crushersagarwalla.com</p></div>
       <div> <p>Contact : +91-8960375650, +91-8858888865</p></div>

       <div><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d120625.03232534994!2d72.82365768161662!3d19.12816495542504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.190559999999998!2d72.9549033!4m5!1s0x3be7c9b3bdec7b01%3A0xdf289e3f9e855a4c!2s104%2C%20Terminal%209%2C%20Near%20Vile%20Parle%20Police%20Station%2C%20Nehru%20Road%2C%20Vile%20Parle%20(East)%2C%20Mumbai%20%E2%80%93%20400%20057%2C%20India.!3m2!1d19.0961486!2d72.85519!5e0!3m2!1sen!2sin!4v1711626946668!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
      <div class="col-md-6 contact-us-two">
        <h2>Contact Form</h2>
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
<label for="input_size_from">Input Size</label>   <input type="text" id="input_size_from" name="input_size_from" placeholder="From" required></div>

<div class="col-md-6">
<label for="input_size_to">Input Size</label>   <input type="text" id="input_size_to" name="input_size_to" placeholder="To" required></div>
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
        <div class="form-check">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree">I agree to terms and conditions</label>
        </div>
        <button type="submit" name="send">Submit</button>
    </form>

      </div>
    </div>
  </div>

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