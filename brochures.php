<?php
// Include necessary files
include 'navbar.php';
?>
<style>
.grid {
  display: flex;
}

#pricing {
  /* margin-top: 60px; */
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.download-button{
    background-color: #e41e26;
    color:#ffff; 
    margin-bottom: 30px;
    font-weight: 900;
}

.download-button:hover{
    background-color:#d2ad77;
    color:#ffff; 
}

.product {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  width: calc(100% / 3);
  margin: 10px;
  border: 1px solid #000;
  border-radius: 3px;
}

.product > .level {
    background-color: #d2ad77;
    color: #e41e26;
  /* background-color: #ddd;
  color: black; */
  padding: 15px 0;
  width: 100%;
  text-transform: uppercase;
  font-weight: 900;
}

.product > h2 {
  margin-top: 15px;
}

.product > ol {
  margin: 15px 0;
}

.product > ol > li {
  padding: 5px 0;
}

.product > button {
  border: 0;
  margin: 15px 0;
  background-color: #f1c40f;
  font-weight: 400;
}

.product > button:hover {
  background-color: orange;
  transition: background-color 1s;
}

@media (max-width: 800px) {
  #pricing {
    flex-direction: column;
  }
  .product {
    max-width: 300px;
    width: 100%;
    margin: 0 auto;
    margin-bottom: 10px;
  }
}
</style>
<body>
   
    <section class=""> 

      <div class="container">  
        <section id="pricing">
          <div class="product" id="tenor">
            <div class="level">CORE Cone Crusher LH200</div><ol>
              
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-Cone-Crusher-LH200.pdf' ?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
          <div class="product" id="bass">
            <div class="level">CORE Cone Crusher SH200</div>
            <ol>
            
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-Cone-Crusher-SH200.pdf' ?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
          <div class="product" id="valve">
            <div class="level">CORE Cone Crusher SH400</div>
           <ol>
              
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-Cone-Crusher-SH400.pdf'?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
        </section> 

        <section id="pricing">
          <div class="product" id="tenor">
            <div class="level">CORE Grizzly Feeder</div><ol>
              <!-- <li>Lorem ipsum.</li>
              <li>Lorem ipsum.</li>  -->
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-Grizzly-Feeder.pdf'?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
          <div class="product" id="bass">
            <div class="level">CORE Jaw Crusher J60</div>
            <ol>
              <!-- <li>Lorem ipsum.</li>
              <li>Lorem ipsum.</li>  -->
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-Jaw-Crusher-J60.pdf'?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
          <div class="product" id="valve">
            <div class="level">CORE VSI 1300R and 1400R</div>
           <ol>
              <!-- <li>Plays similar to a Trumpet</li>
              <li>Great for Jazz Bands</li> -->
              
            </ol>
            <a class="btn download-button" href="<?php echo BASEURL .'images/PDF/CORE-VSI-1300R-and-1400R.pdf'?>" download>
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
          </div>
        </section> 
    </div>
  

       
    </section>
   


    <!-- CTA -->
    <?php include 'cta.php'; ?>

   
   
    <!-- Footer-->
    <?php include 'footer2.php'; ?>