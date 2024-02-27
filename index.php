<!DOCTYPE html>
<html lang="en">

<?php
 include "styles.php"
?>

<body>

<?php
  include "./partials/header.php"
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <!-- <h1>Welcome to Geoscapers</h1> -->
      <h2>Bespoke Modern Landscape & Garden Design, Installation and Maintenance!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>About Us</h3>
          <p> Geoscapers melds years of design experience and horticultural expertise to craft stunning gardens and outdoor spaces. We manage everything from creating your unique landscape design to the actual installation and planting, allowing you to relax and witness your dream garden beautifully unfold.</p>
          <a class="cta-btn" href="#">Learn More</a>
        </div>

      </div>
    </section> -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container"> -->

        <!-- <div class="row">
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
            <a href="https://www.youtube.com/watch?v=TlI3thViuVU" class="venobox play-btn mb-4" target = "_blank" data-vbtype="video" data-autoplay="true"></a>
          </div> -->

          <!-- <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <div class="box-heading" data-aos="fade-up">
              <h4>About us</h4>              
                 <p>Geoscapers melds years of design experience and horticultural expertise to craft stunning gardens and outdoor spaces. <br> We manage everything from creating your unique landscape design to the actual installation and planting, allowing you to relax and witness your dream garden beautifully unfold.</p>
            </div>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="services.php">Design</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="">
              </div> -->
              <!-- <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality, where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.</p> -->
            <!-- </div> -->

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="services.php">Installation</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/installation.jpg" alt="">
                </div> -->
              <!-- <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan; we also expertly manage the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.</p> -->
            <!-- </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="services.php">Maintenance</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/maintenance.jpg" alt="">
                </div> -->
              <!-- <p class="description"> Whether your garden design is low-maintenance or more demanding, we are here to provide the essential ongoing support needed to nurture your garden to its full potential. -->
                <!-- Our tailored maintenance programs are designed to fit seamlessly with your lifestyle and garden's specific needs. Typically, a visit once or twice a month suffices to ensure your garden not only flourishes but also continues to grow and evolve.</p> -->
            <!-- </div>

          </div>
        </div>

      </div>
    </section>  -->
    <!-- ======= About Section ======= -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <div class="box-heading text-center" data-aos="fade-up">
          <h4>About us</h4>
          <p>Geoscapers melds years of design experience and horticultural expertise to craft stunning gardens and outdoor spaces. We manage everything from creating your unique <a href="services.php">landscape design</a>  to the actual <a href="services.php">installation</a> and planting, allowing you to relax and witness your dream garden beautifully unfold.</p>
        </div>
      </div>

      <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="zoom-in">
        <a href="https://www.youtube.com/watch?v=TlI3thViuVU" class="venobox play-btn mb-4" target="_blank" data-vbtype="video" data-autoplay="true"></a>
      </div>

    </div>

    <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="row">

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-fingerprint"></i></div> -->
          <h4 class="title"><a href="services.php">Design</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-gift"></i></div> -->
          <h4 class="title"><a href="services.php">Installation</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <!-- <div class="icon"><i class="bx bx-atom"></i></div> -->
          <h4 class="title"><a href="services.php">Maintenance</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Whether your garden design is low-maintenance or more demanding, we are here to provide  <a href="#" class="read-more" onclick="toggleReadMore('maintenance')">About garden maintenance more</a></p>
          <div class="hidden-content" id="maintenance">
          the essential ongoing support needed to nurture your garden to its full potential. Our tailored maintenance programs are designed to fit seamlessly with your lifestyle and garden's specific needs. Typically, a visit once or twice a month suffices to ensure your garden not only flourishes but also continues to grow and evolve.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>





    <!-- 
    Commented-out sections:
    <div class="row">
      ... (Additional content or sections)
    </div>
    -->

  </div>
</section>


    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Why Us</h2>
          <h3>Why you shoud <span>choose us</span>?</h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Why Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="59" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="76" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Services</h2>
          <h3>Our Awesome <span>Services</span></h3>
         
        </div>

        <div class="row"> -->
          
      <!-- <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="services.php">Design</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>  -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box" data-aos="zoom-in">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="services.php">Landscape Design&Construction</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="landscape desgn and construction" class="icon-img">
              </div>
              <p>Transform your space into a breathtaking landscape with Geoscapers. 
                <!-- Our expert team is dedicated to creating stunning, functional designs that cater to your unique style and needs.  -->
                <!-- We ensure every detail is perfect, from the initial design concept to the final construction. Our services include innovative garden layouts, serene gazebo constructions, and elegant pergola installations.  -->
                <!-- Let us craft an outdoor haven that reflects your personality and enhances your lifestyle. -->
                </p>
            <!-- </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="services.php">Lawn Care & Turf Management</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="lawn care management" class="icon-img">
              </div>
              <p>Keep your lawn lush and vibrant with Geoscapers' professional lawn care services. 
                <!-- We specialize in comprehensive turf management, including regular mowing, expert grass seeding, and specialized carpet grass solutions.  -->
                <!-- Our team is committed to maintaining the health and beauty of your yard, ensuring it remains a welcoming, green oasis throughout the year. -->
                </p>
            <!-- </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="services.php">Gardening & Plant Services</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="garadening, plant services" class="icon-img">
              </div>
              <p>Let the beauty of nature flourish in your space with our gardening and plant services.
                                 </p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="services.php">Irrigation & Drainage Systems</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="drainage system design" class="icon-img">
              </div>
              <p>Geoscapers ensures your landscape remains lush and thriving, regardless of the weather.</p>
               
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="services.php">Soil, Mulching & Composting</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="mulching and composting" class="icon-img">
              </div>
              
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="services.php">Weed, Pest & Outdoor Maintenance</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="weed and pest contrl" class="icon-img">
              </div>
              <p>Protect your garden from unwanted guests with Geoscapers' weed and pest control services.
                </p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="services.php">Hardscape & Specialized Installations</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="specialized installations" class="icon-img">
              </div>
              <p>Geoscapers excels in hardscape and specialized installations that add character and functionality to your landscape.
              </p> 
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">        
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="services.php"> Sector-Specific Landscaping</a></h4>
              <div class="swiper-slide">
                  <img src="assets/img/sec.jpg" alt="specific landscaping" class="icon-img">
              </div>
              
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Services Section -->



  <!-- <section id="about" class="about">
  <div class="container">
      <div class="section-title" data-aos="zoom-in">
          <h2>Services</h2>
          <h3>Our Awesome <span>Services</span></h3>
         
        </div>
    
    <div class="row">

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          
          <h4 class="title"><a href="services.php">Landscape construction</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
        
          <h4 class="title"><a href="services.php">Lawn care</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          
          <h4 class="title"><a href="services.php">Plant services</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Whether your garden design is low-maintenance or more demanding, we are here to provide  <a href="#" class="read-more" onclick="toggleReadMore('maintenance')">About garden maintenance more</a></p>
          <div class="hidden-content" id="maintenance">
          the essential ongoing support needed to nurture your garden to its full potential. Our tailored maintenance programs are designed to fit seamlessly with your lifestyle and garden's specific needs. Typically, a visit once or twice a month suffices to ensure your garden not only flourishes but also continues to grow and evolve.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          
          <h4 class="title"><a href="services.php">Dranage systems</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
         
          <h4 class="title"><a href="services.php">Soil mulching and composting</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          
          <h4 class="title"><a href="services.php">Weed and pest control</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
        
          <h4 class="title"><a href="services.php">Hardscape installations</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="icon-box">
          
          <h4 class="title"><a href="services.php">Sector-specific landscaping</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">At Geoscapers, we view landscape and garden design as an exquisite blend of art and practicality,<a href="#" class="read-more" onclick="toggleReadMore('design')">More on landscape design</a></p>
          <div class="hidden-content" id="design">          
          where we transform your vision into a living masterpiece. Our approach intertwines your aspirations with the unique character of your home, complemented by our deep understanding of local soil and climatic conditions.
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
         
          <h4 class="title"><a href="services.php">Outdoor maintenance</a></h4>
          <div class="swiper-slide">
            <img class="icon-img" src="assets/img/sec.jpg" alt="">
          </div>
          <p class="description">Our comprehensive service extends beyond crafting a personalized garden design plan to also expertly <a href="#" class="read-more" onclick="toggleReadMore('installation')">garden installation</a></p>
          <div class="hidden-content" id="installation">
          managing the entire installation process. Our commitment to excellence means we oversee every detail, ensuring seamless execution from start to finish.
          </div>
        </div>
      </div>

    </div>
  </div>
</section> -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/port1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/port2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/port3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              
              <p>Web</p>
              <a href="assets/img/port4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/port3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/port6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/port2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/port.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/port1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/port2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/port3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/port4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/port1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/port6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/sec.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/port4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/port3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/port1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> -->

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Team</h2>
          <h3>Our Hard Working <span>Team</span></h3>
          <p>We are fortunate to have a dedicated team committed to make your dream outdoor landscape a reality </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/clinton.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Clinton Thomas</h4>
                <span>Founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/cals.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Caleb Were</h4>
                <span>Founder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->
 
            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div> 
            </div> -->
            <!-- End testimonial item  -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Pricing</h2>
          <h3>Check our <span>Pricing</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          
          <h3>Frequently Asked <span>Questions</span></h3>
          
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What services do you provide as a digital landscaping business? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  We offer a range of digital landscaping services, including virtual landscape design, 3D modeling, and rendering. Our expertise extends to creating digital representations of outdoor spaces, providing clients with a visual preview of their landscaping projects before implementation.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How does the digital landscaping process work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Our process typically involves consultation, where we discuss your ideas, preferences, and project requirements. After gathering this information, we utilize advanced software and technology to create a virtual model of your landscape. This allows you to see different design options and make informed decisions before moving forward with the physical implementation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Can you integrate the digital design with the actual landscaping work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes, absolutely. Our goal is to seamlessly transition from the digital design phase to the physical implementation. Once you are satisfied with the virtual design, our team can use it as a blueprint for the actual landscaping project. This ensures that the final result closely aligns with your vision and expectations.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What are the benefits of using digital landscaping services? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Digital landscaping offers several advantages, including the ability to visualize and iterate on designs before construction begins. It helps in making informed decisions, optimizing the use of space, and ensuring that the final landscape aligns with your aesthetic preferences. Additionally, it can save time and resources by minimizing the need for major design revisions during the physical implementation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What software or tools do you use for digital landscaping? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We employ industry-leading software and tools specifically designed for digital landscaping and 3D modeling. Our team utilizes a combination of software such as AutoCAD, SketchUp, Lumion, or similar advanced tools to create detailed and realistic digital representations of your landscaping projects. These tools allow us to generate accurate designs and provide you with immersive visualizations of your future outdoor space.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>  -->
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Contact</h2>
          <h3>Check our <span>Contact</span> Details</h3>
       

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

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
    </section> -->
    <!-- End Contact Section -->
    
    <!-- OUr Story -->
      <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Our Story</h3>
          <p> In the bustling heart of Nairobi, amidst the vibrant rhythm of city life, lies the story of Geoscapers – a tale of vision, innovation, and a deep-rooted connection with nature. It's a story that began with two ambitious minds, Clinton Thomas and Caleb Were, both proud alumni of the Technical University of Kenya, where they honed their skills as Geospatial Engineers. Their journey, however, is not just about academic accolades; it's a narrative of passion, creativity, and an unwavering commitment to bringing nature closer to people.</p>
          <a class="cta-btn" href="our_story.php">Learn More</a>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

       <!-- ======= Recent Blog Posts Section ======= -->
       <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up"">

    
    
  <div class=" section-header">
        <h2 style = "text-align:center";>Recent Blog Posts</h2>
        <!-- <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p> -->
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/garden1.jpg" class="img-fluid" alt="">
              <span class="post-date">January 8</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Is Landscaping the same as Gardeniing?</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Clinton Thomas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Gardening</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div>
        <!-- End post item -->

        <!-- <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog.jpg" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div> -->
        <!-- End post item -->

        <!-- <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/garden.jpg" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.php" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div> -->
        <!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->


  </main><!-- End #main -->

  <?php
   include "./partials/footer.php"
  ?>

  <?php

  include "script.php"

  ?>

</body>

</html>