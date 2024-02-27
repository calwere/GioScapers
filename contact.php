<!DOCTYPE html>
<html lang="en">

<?php
 include "styles.php"
?>

<body>

<?php
  include "./partials/header.php"
?> 
 
 
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="zoom-in">
        <h2>Contact</h2>
        <h3>Check our <span>Contact</span> Details</h3>
        <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8946477144336!2d36.87135347363139!3d-1.2329017987553377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15af3d6924ef%3A0xf4fc666e26021afa!2sMountain%20Mall!5e0!3m2!1sen!2ske!4v1703928417172!5m2!1sen!2ske" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4" data-aos="fade-right">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>2nd Floor, Mountain Mall, Clay City, Thika Rd, Nairobi</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@geoscapers.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+254 712 345678</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

          <form action="action/contact_form.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
   include "./partials/footer.php"
  ?>

  <?php

  include "script.php"

  ?>


</body>

</html>