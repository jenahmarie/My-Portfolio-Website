<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jenah's Portfolio</title>

  <!-- Swiper.js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Lightbox2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>


	<style>
  .swiper-slide {
    opacity: 0.6;
    transform: scale(0.85);
    transition: all 0.3s ease;
  }

  .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
    z-index: 2;
  }
</style>

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    h2 {
      text-align: center;
      color: #ff69b4;
      margin-bottom: 40px;
    }

    .portfolio-section {
      padding: 60px 20px;
      max-width: 1100px;
      margin: auto;
    }

    .swiper-slide img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
    }

    .swiper {
      margin-bottom: 20px;
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #ff69b4;
    }

    h3 {
      color: #ff69b4;
    }

    .description {
      margin-bottom: 50px;
    }

    .swiper-pagination-bullet-active {
      background: #ff69b4 !important;
    }
  </style>
</head>
<body>

  <section id="portfolio" class="portfolio-section">

    <!-- Website Projects -->
    <h2>Website Projects</h2>
    <div class="description">
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=Clinic+System" data-lightbox="web" data-title="Clinic Booking System">
			<img src="<?php echo base_url('application/assets/AFMAMS IMAGES/Landing page 1.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/Login Page.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/ADMIN COMMUNITY.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/ADMIN SUMMARY OF FINES PAGE.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/ADMIN ATTENDANCE PAGE.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/STUDENT HOMEPAGE 2 WITH NOTIFICATIONS.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/STUDENT ATTENDANCE HISTORY PAGE.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>

		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=E-Commerce+Site" data-lightbox="web" data-title="E-Commerce Site">
            <img src="<?php echo base_url('application/assets/AFMAMS IMAGES/STUDENT SUMMARY OF FINES PAGE .png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />

            </a>
          </div>


        </div>
        <div class="swiper-button-next swiper1-next"></div>
        <div class="swiper-button-prev swiper1-prev"></div>
        <div class="swiper-pagination swiper1-pagination"></div>
      </div>
      <h3>Title: Attendance and Fines Monitoring with Activity Management</h3>
<p><strong>Type of Project:</strong> Capstone Project</p>
<p><strong>Development Type:</strong> Co-Developed</p>
<p>This web-based system helps student organizations and administrators track attendance, monitor fines, and manage activities efficiently. It supports role-based access for students, officers, and admins, and includes automated status tracking and fine computation.</p>


    <!-- VA Projects -->
    <!-- <h2>Virtual Assistance Projects</h2>
    <div class="description">
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=Email+Management" data-lightbox="va" data-title="Email Management">
              <img src="https://via.placeholder.com/800x500/111/fff?text=Email+Management" alt="Email Management"/>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/111/fff?text=Data+Entry" data-lightbox="va" data-title="Data Entry">
              <img src="https://via.placeholder.com/800x500/111/fff?text=Data+Entry" alt="Data Entry"/>
            </a>
          </div>
        </div>
        <div class="swiper-button-next swiper2-next"></div>
        <div class="swiper-button-prev swiper2-prev"></div>
        <div class="swiper-pagination swiper2-pagination"></div>
      </div>
      <h3>Email & Data Management</h3>
      <p><strong>Tools:</strong> Gmail, Google Sheets, Trello</p>
      <p>Provided remote admin support like inbox cleanup, responding to clients, organizing spreadsheets, and scheduling tasks.</p>
    </div> -->


		<br>
    <!-- Arts & Canva Designs -->
    <h2>Arts & Canva Designs</h2>
    <div class="description">
      <div class="swiper mySwiper3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/ff69b4/000?text=Poster+Design" data-lightbox="arts" data-title="Poster Design">
			<img src="<?php echo base_url('application/assets/designs/Jenah.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/ff69b4/000?text=Social+Media+Post" data-lightbox="arts" data-title="Social Media Post">
            <img src="<?php echo base_url('application/assets/designs/jen(2).png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />
            </a>
          </div>
		  <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/ff69b4/000?text=Poster+Design" data-lightbox="arts" data-title="Poster Design">
			<img src="<?php echo base_url('application/assets/designs/EDT.png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://via.placeholder.com/800x500/ff69b4/000?text=Social+Media+Post" data-lightbox="arts" data-title="Social Media Post">
			<img src="<?php echo base_url('application/assets/designs/Jenah(2).png'); ?>" alt="Clinic Booking System" style="width:100%; max-width:800px;" />
            </a>
          </div>
        </div>
        <div class="swiper-button-next swiper3-next"></div>
        <div class="swiper-button-prev swiper3-prev"></div>
        <div class="swiper-pagination swiper3-pagination"></div>
      </div>
      <h3>Title: Creative Social Media Posts for Erudithe and Learn at Fligno</h3>
<p><strong>Type of Project:</strong> Internship / OJT Creative Design Output</p>
<p><strong>Tools Used:</strong> Canva</p>
<p>Designed visually engaging social media content such as posters, announcements, and infographics for the Host Training Establishment. These materials were used to support branding, promotions, and online presence during the internship period.</p>


  </section>

  <style>
  /* Optional style to emphasize the center (active) slide */
  .swiper-slide {
    opacity: 0.6;
    transform: scale(0.85);
    transition: all 0.3s ease;
  }

  .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
    z-index: 2;
  }
</style>

<script>
  // Swiper 1: carousel style
  new Swiper(".mySwiper1", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper1-next",
      prevEl: ".swiper1-prev"
    },
    pagination: {
      el: ".swiper1-pagination",
      clickable: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false
      },
      768: {
        slidesPerView: 3,
        centeredSlides: true
      }
    }
  });

  // Swiper 2: carousel style
  new Swiper(".mySwiper2", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper2-next",
      prevEl: ".swiper2-prev"
    },
    pagination: {
      el: ".swiper2-pagination",
      clickable: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false
      },
      768: {
        slidesPerView: 3,
        centeredSlides: true
      }
    }
  });

  // Swiper 3: carousel style
  new Swiper(".mySwiper3", {
    loop: true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper3-next",
      prevEl: ".swiper3-prev"
    },
    pagination: {
      el: ".swiper3-pagination",
      clickable: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        centeredSlides: false
      },
      768: {
        slidesPerView: 3,
        centeredSlides: true
      }
    }
  });
</script>


</body>
</html>
