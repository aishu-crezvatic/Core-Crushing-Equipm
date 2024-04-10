      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
          <link rel="stylesheet" href="style.css" />
          <link rel="stylesheet" href="slider-style.css" />
          <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
          <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

          <!-- <title>Document</title> -->
      </head>

      <?php  
$id = isset($_GET['id']) ? $_GET['id'] : null; 
define("BASEURL", "https://labindiadigital.com/coreCrushing/");
?>
      <body>
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <!-- Logo -->
                      <div class="col-lg-4 col-md-6 col-sm-12"> 
                          <a class="navbar-brand" href="<?php echo BASEURL; ?>">
                              <img class="my-logo" src="images/logo.webp" alt="">
                          </a>
                      </div>
                      <!-- Links -->
                      <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-end">
                          <!-- Link 1 -->
                          <div class="link-custom me-3">
                              <span><i class="fa-solid fa-phone p-2"></i></span><span>+91 88062 67888</span>
                          </div>
                          <!-- Link 2 -->
                          <div class="link-custom">
                              <span><i class="fa fa-envelope p-2" aria-hidden="true"></i></span><span>info@corecrushing.com</span>
                          </div>
                      </div>
                  </div>
              </div>
          </nav>


 <!-- Modal -->
 <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>Custam form</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Send Email</button>
        </div>
      </div>
    </div>
  </div> -->


  <!-- Modal -->
<div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactFormModalLabel">Contact Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Your form goes here -->
        
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
        <div class="form-check">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree">I agree to terms and conditions</label>
        </div>
        <input type="hidden" name="form_type" value="form2">
        <button type="submit" name="send">Submit</button>
    </form> 
    <div>
    <!-- Form 2 end -->

    <!-- Form 3 -->
    <?php } elseif ($id === 4){ ?>
    <h2 style="display: none;">Contact Form High-Frequency Screen</h2>
    <div id="footerFormContainer" >
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
        <div class="form-check">
            <input type="checkbox" id="agree" name="agree" required>
            <label for="agree">I agree to terms and conditions</label>
        </div>
        <input type="hidden" name="form_type" value="form1">
        <button type="submit" name="send">Submit</button>
    </form>
    </div>
    <?php }  ?>
    
      </div>
      <!-- You can add a footer section if needed -->
    </div>
  </div>
</div>

      </body>

      </html>