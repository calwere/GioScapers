<!DOCTYPE html>
<html lang="en">

<?php
 include "styles.php"
?>

<body>

<?php
  include "./partials/header.php"
?> 

<section id="about" class="about">
  <div class="container">
      <div class="section-title" data-aos="zoom-in">
          <h2>Services</h2>
          <h3>Our Awesome <span>Services</span></h3>
         
        </div>
    
    <div class="row">

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
          <h4 class="title"><a href="services.php">Landscape construction</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Transform your space into a breathtaking landscape with Geoscapers. 
          Our expert team is dedicated to creating stunning, functional designs that cater to your unique style and needs.<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          We ensure every detail is perfect, from the initial design concept to the final construction. Our services include innovative garden layouts, serene gazebo constructions, and elegant pergola installations. 
          Let us craft an outdoor haven that reflects your personality and enhances your lifestyle.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
          <h4 class="title"><a href="services.php">Lawn care</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Keep your lawn lush and vibrant with Geoscapers' professional lawn care services. <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          We specialize in comprehensive turf management, including regular mowing, expert grass seeding, and specialized carpet grass solutions. 
          Our team is committed to maintaining the health and beauty of your yard, ensuring it remains a welcoming, green oasis throughout the year.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-atom"></i></div> -->
          <h4 class="title"><a href="services.php">Plant services</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Let the beauty of nature flourish in your space with our gardening and plant services.
          Geoscapers provides a wide selection of plants, flower pots, and unique flower baskets to brighten up your garden.<a href="#" class="read-more" onclick="toggleReadMore('maintenance')">About garden maintenance more</a></p>
          <div class="hidden-content" id="maintenance">
          Our gardening experts offer personalized advice and care tips to ensure your plants thrive.
          Whether you are looking for a vibrant floral display or a tranquil green retreat, we have the expertise to bring your vision to life.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
          <h4 class="title"><a href="services.php">Drainage systems</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Geoscapers ensures your landscape remains lush and thriving, regardless of the weather.<a href="#" class="read-more" onclick="toggleReadMore('design')">More on drainage design</a></p>
          <div class="hidden-content" id="design">          
          Our state-of-the-art irrigation and drainage systems are designed to keep your garden hydrated and healthy.
          We offer tailored solutions, from automated irrigation systems to efficient drainage designs, ensuring your outdoor space is both beautiful and sustainable.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
          <h4 class="title"><a href="services.php">Soil mulching and composting</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Enrich your garden's foundation with Geoscapers' soil, mulching, and composting services.<a href="#" class="read-more" onclick="toggleReadMore('installation')">About mulching and composting</a></p>
          <div class="hidden-content" id="installation">
          Our high-quality soil treatments and organic mulch options provide the nutrients and protection your plants need.
                We also offer premium compost and red soil supplies, perfect for enhancing soil fertility and promoting robust plant growth.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
          <h4 class="title"><a href="services.php">Weed and pest control</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Protect your garden from unwanted guests with Geoscapers' weed and pest control services.<a href="#" class="read-more" onclick="toggleReadMore('design')">More on pest control</a></p>
          <div class="hidden-content" id="design">          
          Our team employs eco-friendly methods to keep your outdoor areas free from weeds and pests.
          We also provide comprehensive outdoor maintenance, including landscaping upkeep and fencing, to ensure your space always looks its best.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
          <h4 class="title"><a href="services.php">Hardscape installations</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Geoscapers excels in hardscape and specialized installations that add character and functionality to your landscape<a href="#" class="read-more" onclick="toggleReadMore('installation')">outdoor maintenance</a></p>
          <div class="hidden-content" id="installation">
          From durable Cabro paving to bespoke landscaping services, our team creates stunning, long-lasting outdoor features.
          Trust us to enhance the aesthetic and practical aspects of your property.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
          <h4 class="title"><a href="services.php">Sector-specific landscaping</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Whether it is a residential haven or a commercial masterpiece, Geoscapers tailors its landscaping services to fit your specific sector needs.<a href="#" class="read-more" onclick="toggleReadMore('design')">Learn more on specific landscaping</a></p>
          <div class="hidden-content" id="design">          
          Our residential landscaping solutions create personal retreats for homeowners, while our commercial landscaping services enhance business premises with professional, inviting outdoor spaces.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
          <h4 class="title"><a href="services.php">Outdoor maintenance</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <!-- <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p> -->
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Service Category</h2>
          <h3>Main <span>Categories</span></h3>          
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Design</a></h4>
              <p>We view landscape and garden design as an exquisite blend of art and practicality, where we transform your vision into a living masterpiece. <br> Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions. Leveraging our extensive plant knowledge and a keen focus on functionality, we craft outdoor spaces that are visually stunning, sustainable, and easy to enjoy.
                Our design philosophy is rooted in creating lush, vibrant gardens that are effortless to maintain and tailored to your needs. We place a strong emphasis on conservation, water-efficient gardening, and the use of native plants, ensuring an eco-friendly approach in every project.
                Following a detailed consultation and site assessment, we meticulously develop a garden design plan that encapsulates all the elements necessary to bring your outdoor dream to life. <br> This includes:
                •	Elegant water features, ponds, and bespoke pools
                •	Stylish paving, fencing, and decorative trellis work
                •	Ambient lighting, artistic statues, and garden ornaments
                •	Custom pergolas, comfortable garden furniture, and versatile plant containers
                •	Contemporary timber decking
                •	Eco-conscious and efficient irrigation systems
                </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Installation</a></h4>
              <p>At Geoscapers, our comprehensive service extends beyond crafting a personalized garden design plan; we also expertly manage the entire installation process.<br> Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
                The installation phase encompasses a range of essential tasks:
                •	Transformation of existing spaces or overseeing new construction sites
                •	Soil preparation tailored for optimal plant growth and sustainability
                •	Coordination and supervision of skilled subcontractors for all hardscaping elements, including paving, decking, irrigation, and water features
                •	The final and most magical stage, <strong>planting and softscaping</strong>, where we bring your garden to life, with each plant carefully selected and positioned to create the perfect blend of color, texture, and harmony.
                </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Maintenance</a></h4>
              <p>We understand that the true beauty of a landscaping project unfolds well beyond the installation day. Whether your garden design is low-maintenance or more demanding, we're here to provide the essential ongoing support needed to nurture your garden to its full potential.
                Our tailored maintenance programs are designed to fit seamlessly with your lifestyle and garden's specific needs. <br> Typically, a visit once or twice a month suffices to ensure your garden not only flourishes but also continues to grow and evolve.
                We believe in a flexible approach, adapting our services to meet your requirements while maintaining consistency in garden care for optimal plant health. <br> Our everyday maintenance tasks include:
                •	Expert pruning of trees and hedges
                •	Seasonal pruning for a variety of shrubs, including hydrangeas, roses, grasses, and salvias
                •	Prompt repairs to minor irrigation system issues
                •	Introducing vibrant annual colors and seasonal bulbs for added charm
                •	Soil feeding and enrichment for robust plant growth
                •	Effective weed and pest control strategies
                •	Regular updates to herb and vegetable gardens for continual freshness
                •	Providing on-site training and education in garden maintenance to staff, as needed
                </p>
            </div>
          </div>

         
          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>  -->

        </div>

      </div>
    </section>
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Services</h2>
          <h3>Our Awesome <span>Services</span></h3>
         
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Landscape Design & Construction</a></h4>
              <p>Transform your space into a breathtaking landscape with Geoscapers. 
                Our expert team is dedicated to creating stunning, functional designs that cater to your unique style and needs. 
                We ensure every detail is perfect, from the initial design concept to the final construction. Our services include innovative garden layouts, serene gazebo constructions, and elegant pergola installations. 
                Let us craft an outdoor haven that reflects your personality and enhances your lifestyle.
                </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Lawn Care & Turf Management</a></h4>
              <p>Keep your lawn lush and vibrant with Geoscapers' professional lawn care services. 
                We specialize in comprehensive turf management, including regular mowing, expert grass seeding, and specialized carpet grass solutions. 
                Our team is committed to maintaining the health and beauty of your yard, ensuring it remains a welcoming, green oasis throughout the year.
                </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Gardening & Plant Services</a></h4>
              <p>Let the beauty of nature flourish in your space with our gardening and plant services.
                 Geoscapers provides a wide selection of plants, flower pots, and unique flower baskets to brighten up your garden. 
                 Our gardening experts offer personalized advice and care tips to ensure your plants thrive.
                 Whether you are looking for a vibrant floral display or a tranquil green retreat, we have the expertise to bring your vision to life.
                </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Irrigation & Drainage Systems</a></h4>
              <p>Geoscapers ensures your landscape remains lush and thriving, regardless of the weather.
                Our state-of-the-art irrigation and drainage systems are designed to keep your garden hydrated and healthy.
                We offer tailored solutions, from automated irrigation systems to efficient drainage designs, ensuring your outdoor space is both beautiful and sustainable.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Soil, Mulching & Composting</a></h4>
              <p>Enrich your garden's foundation with Geoscapers' soil, mulching, and composting services.
                Our high-quality soil treatments and organic mulch options provide the nutrients and protection your plants need.
                We also offer premium compost and red soil supplies, perfect for enhancing soil fertility and promoting robust plant growth.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Weed, Pest & Outdoor Maintenance</a></h4>
              <p>Protect your garden from unwanted guests with Geoscapers' weed and pest control services.
                Our team employs eco-friendly methods to keep your outdoor areas free from weeds and pests.
                We also provide comprehensive outdoor maintenance, including landscaping upkeep and fencing, to ensure your space always looks its best.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Hardscape & Specialized Installations</a></h4>
              <p>Geoscapers excels in hardscape and specialized installations that add character and functionality to your landscape.
                From durable Cabro paving to bespoke landscaping services, our team creates stunning, long-lasting outdoor features.
                Trust us to enhance the aesthetic and practical aspects of your property.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <!-- <img src="assets/img/port1.jpg" class="img-fluid" alt=""> -->
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href=""> Sector-Specific Landscaping</a></h4>
              <p>Whether it's a residential haven or a commercial masterpiece, Geoscapers tailors its landscaping services to fit your specific sector needs.
                Our residential landscaping solutions create personal retreats for homeowners, while our commercial landscaping services enhance business premises with professional, inviting outdoor spaces.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->
  <?php
   include "./partials/footer.php"
  ?>

  <?php

  include "script.php"

  ?>


</body>

</html>