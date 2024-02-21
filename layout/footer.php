<?php
     if(isset($_POST['submit'])){

        $mailto = "info@swoooshindia.com";  //My email address
        //getting customer data
        $fromEmail = $_POST['email']; //getting customer email
        $subject = "New Subscriber added to Swooosh newsletter"; // For customer confirmation
        $subject2  = "Received Your Inquiry For Swooosh Newsletter"; //getting subject line from client
        
        //Email body I will receive
        $message = "Swooosh Newsletter\n
------------------------------------
\n
Client Email: " . $fromEmail .
"\n\n------------------------------------\n
This e-mail was sent from a Swooosh 'Newsletter from'.";
        
        //Message for client confirmation
        $message2 = "Thank you for subscribe us. \n We will keep you updated with latest update.\n - Swooosh india";
        
        //Email headers
        $headers = "From: " . $fromEmail; // Client email, I will receive
        $headers2 = "From: " . $mailto; // This will receive client
        
        //PHP mailer function
        
          $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
          $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
        
          //Checking if Mails sent successfully
          $success = $failed = NULL;
          if ($result1 && $result2) {
            $success = "Your Message was sent Successfully!";
          } else {
            $failed = "Sorry! Message was not sent, Try again Later.";
          }
    }
?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
              </a>
              <p>
                Kshal solutions<br>
                Unit no:01-02,M K Patel estate,<br>
                reepal godown,
                near L & T Nero, ranoli,<br>
                Vadodara - 391350<br><br>
                <strong>Call: </strong> +91 910 447 1466<br>
                <strong>Email: </strong><a href="mailto:info@swoooshindia.com" style="all: unset;">info@swoooshindia.com</a>
                <br>
              </p>
            </div>
          </div>

          <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Shop by</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" class="first after">Toothpaste</a></li>
              <li><a href="#" class="first after">Toothpaste</a></li>
              <li><a href="#" class="first after">Mouthwash</a></li>
              <li><a href="#" class="first after">Protein Bar</a></li>
            </ul>
          </div> -->

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Information</h4>
            <ul>
              <li><a href="about.php" class="first after">About Us</a></li>
              <li><a href="shop.php" class="first after">Shop</a></li>
              <!-- <li><a href="#" class="first after">Science</a></li>
              <li><a href="#" class="first after">Blogs</a></li> -->
              <li><a href="contactus.php" class="first after">Contact Us</a></li>
            </ul>
          </div>
          <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#" class="first after">Shipping Policy</a></li>
              <li><a href="#" class="first after">Privacy Policy</a></li>
              <li><a href="#" class="first after">Terms & Conditions</a></li>
              <li><a href="#" class="first after">FAQs</a></li>
            </ul>
          </div> -->
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <?php
            $qry = mysqli_query($conn,"select * from product ORDER BY position ASC LIMIT 4");

            if($qry)
            {
                if(mysqli_num_rows($qry) != 0)
                {
                    $count=1;
                    while($rw = mysqli_fetch_array($qry))
                    {   
                        ?>
                        <ul>
                          <li><a href="shop.php" class="first after"><?php echo $rw['name'] ?></a></li>
                        </ul>
                        <?php       
                    }
                }
            }
            ?>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <?php
                if (! empty($success)) {
            ?>
              <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
              </div>
            <?php
                }
                if (! empty($failed)) {
                  ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $failed; ?>
              </div>
                  <?php
                }
            ?>
            <h4>Newsletter Sign Up</h4>
            <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
            <form action="" method="post" enctype="multipart/form-data">
              <input type="email" name="email">
              <!-- <input type="submit" name="contactsubmit" id="contactsubmit" class="btn btn-primary footerbtn"> -->
              <button class="btn btn-primary footerbtn" type="submit" name="submit"><i class="fa fa-long-arrow-right fa-2xl" aria-hidden="true"></i></button>
              <!-- <input type="submit" value="Subscribe" > -->
            </form>
            <br>
            <h4>Follow Us</h4>
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter" target="_blank"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook" target="_blank"></i></a>
              <a href="https://instagram.com/swoooshindia?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype" target="_blank"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin" target="_blank"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-youtube" target="_blank"></i></a> -->
              <a href="#" class="linkedin"><i class="bx bxl-linkedin" target="_blank"></i></a>
              <a href="#" class="twitter"><i class="bx bxl-twitter" target="_blank"></i></a>
              <a href="https://facebook.com/swoooshindia" class="facebook"><i class="bx bxl-facebook" target="_blank"></i></a>
              <a href="https://instagram.com/swoooshindia?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2022<strong><span> Swooosh India</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
  <a target="blank" href="https://api.whatsapp.com/send?phone=919104471466" class="whatsappIcon d-flex align-items-center justify-content-center"><i class="bx bxl-whatsapp"></i></a>
  <!--Start of Tawk.to Script-->
  <a href="" class="chatbox">
    <script type="text/javascript">
      if (window.innerWidth > 768) {
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/628c6f8a7b967b117990e5ab/1g3q97e7t';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
    }
    </script>
  </a>
  <!--End of Tawk.to Script-->
