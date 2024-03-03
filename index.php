<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="jquery.counterup.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.menu-toggle').click(function() {
        $('ul').toggleClass('show');
      })
    })
  </script>



</head>

<body>
  <header class="header">
    <div class="aside">
      <div class="nav">
        <div class="logo">
      
          <a href="#"><span>AZHAR</span></a>
        </div>
        <div class="menu-toggle" onclick="toggleNav()">
          <i class="fas fa-bars"></i>
        </div>
        <ul>
          <li><a href="#home" class="active     navlink">Home</a></li>
          <li><a href="#about" class="navlink ">About</a></li>
          <li><a href="#services" class="navlink ">Services</a></li>
          <li><a href="#portfolio" class="navlink ">Projects</a></li>
          <li><a href="#contact" class="navlink ">Contact</a></li>
          <li><a href="#contact" class="navlink "> <a href="./include/loginsystem.php">Admin</a> </a></li>

        </ul>
      </div>

    </div>



  </header>

  <main>
    <section class="home section" id="home">
      <div class="leftsection">
        Hi! My Name Is <span class=clr>AZHAR</span>
        <br>
        <span id="element"></span>
        <div class="social-links">
          <a href="" class="twitter"><i class="fa-brands fa-twitter" style="color: #ffbb2c;"></i></a>
          <a href="https://www.youtube.com/watch?v=jynV9PU6kbI&t=220s" class="twitter"><i class="fa-brands fa-youtube" style="color: rgb(217, 81, 18);"></i></a>
          <a href="https://web.facebook.com/profile.php?id=100029991426071" class="facebook"><i class="fa-brands fa-facebook" style="color: #5578ff;"></i></a>
          <a href=""> <i class='bx bxl-instagram-alt' target="_blank" style="color: pink"></i></a>
          <a href="https://github.com/azharbhuiya112" class="github"><i class="fa-brands fa-github" style="color: #e361ff;"></i></a>
        </div>
        <a href="CV.pdf" download><button href="" class="btnn1">Download CV</button>
      </div></a>


      <div class="rightsection">
        <img src="cover.png" alt="html" height="150px" class="roundimg">
        <br>
        <span id="elementt"></span>
      </div>

      <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
      <script>
        var typed = new Typed('#element', {
          strings: ['Student ','CSE', 'Developer'],
          typeSpeed: 70,
        });
      </script>


    </section>

  </main>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
 <script>
  var typed = new Typed('#elementt', {
    strings: ['AZHAR UDDIN', '<?= $data['name'] ?>'],
    typeSpeed: 70,
  });
</script> 



  <!-- ======= About Section ======= -->
  <section id="about" class="about section-show">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title padd-15">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-log-4" data-aos="fade-right">
          <img class="img-fluid" src="durbar.jpg" alt="">
        </div>
        <div class="content about-text">
          <h3></h3>
          <p class="fst-italic"></p>
          <div class="row">
            <div class="col-lg-6">
              <?php

              include './include/config.php';

              $sql = "SELECT * FROM `about`";
              $result = mysqli_query($conn, $sql);

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $bd = $row["birthday"];
                  $website = $row["website"];
                  $phone = $row["phone"];
                  $city = $row["city"];
                  $age = $row["age"];
                  $degree = $row["degree"];
                  $email = $row["email"];
                  $freelance = $row["freelance"];
              ?>
                  <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                      <strong>Birthday:</strong><span><?php echo $bd; ?></span>
                    </li>
                    <li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Website:</strong><span><?php echo $website; ?></span></li>
                    <li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Phone:</strong> <span><?php echo $phone; ?></span></li>
                    <li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>City:</strong> <span><?php echo $city; ?></span></li>
                  </ul>
            </div>
            <div class="col-lg-6">
              <ul>

                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <strong>Age:</strong> <span><?php echo $age; ?></span></li>
                <li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Degree:</strong> <span><?php echo $degree; ?></span></li>
                <li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Email:</strong> <span><?php echo $email; ?></span></li>
                <li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><strong>Freelance:</strong><span><?php echo $freelance; ?></span></li>
              </ul>
            </div>
        <?php
                }
              }
        ?>
          </div>
          <p>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->



    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="far fa-smile"></i>

            <span class="num" data-val="70">000</span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-folder-open"></i>

            <span class="num" data-val="80">000</span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-headphones-alt"></i>

            <span class="num" data-val="75">000</span>
            <p>Hours of support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-award"></i>

            <span class="num" data-val="50">000</span>
            <p>Awards</p>
          </div>
        </div>



      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar html" style="width: 100%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar css" style="width: 90%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar js" style="width: 76%;"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar php" style="width: 80%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar cms" style="width: 90%;"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar photoshop" style="width: 55%;"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="fa-solid fa-fingerprint" style="color: #ffbb2c;"></i>
            <h3>Biometric</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="fa-solid fa-wifi" style="color: #5578ff;"></i>
            <h3>Network</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="fa-solid fa-hat-cowboy" style="color: #e80368;"></i>
            <h3>Hacking</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="fa-solid fa-x-ray" style="color: #e361ff;"></i>
            <h3>Biomedical</h3>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="fa-solid fa-desktop" style="color: #b2904f;"></i>
            <h3>Hardware</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="fa-solid fa-code" style="color: #b20969;"></i>
            <h3>CP</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="fa-solid fa-user" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="fa-solid fa-music" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <!-- <div class="testimonials container">

  <div class="section-title">
    <h2>Testimonials</h2>
  </div>

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div>
      </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>
      </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div>
      </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div>
      </div> -->
    <!-- End testimonial item -->

    <!-- <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div>
      </div> -->
    <!-- End testimonial item -->

    <!-- </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="owl-carousel testimonials-carousel">

  </div>

</div> -->
    <!-- End Testimonials  -->

  </section><!-- End About Section -->

  <section class="services section-show" id="services">

    <div class="section-title">
      <h2>Services</h2>
      <p>My Services</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="services-container">

          <?php

          include './include/config.php';

          $sql = "SELECT * FROM `project`";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $title = $row["title"];
              $details = $row["details"];
              $link = $row["link"];
          ?>
              <div class="service-box">
                <i class='bx bx-code-alt'></i>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $details; ?></p>
                <button class="btn"><a href="<?php echo $link; ?>">Read more</a></button>
                
              </div>
          <?php
            }
          }
          ?>

          <div class="service-box">
            <i class='bx bx-code-alt'></i>
            <h3>Web developer</h3>
            <p>As a web developer, I specialize in crafting responsive,
               user-friendly websites that not only look great but also perform flawlessly
                across different devices and platforms. Whether it's designing elegant user interfaces,
                 implementing complex functionality, or optimizing site performance
                 </p>
           <a   href="https://github.com/azharbhuiya112/Android-project-home-solutions"> <button  class="btn">Read more</button></a>
          </div>

          <div class="service-box">
            <i class='bx bx-paint'></i>
            <h3>Graphics designer</h3>
            <p>As a graphic designer, I specialize in crafting compelling visual identities, engaging marketing collateral, and impactful digital experiences that resonate with audiences and elevate brands. From logos and branding materials to print and digital assets, I bring ideas to life through thoughtful design and strategic thinking.</p>
            <a  href="https://github.com/azharbhuiya112/Vehicle-Bus_Seat_management_system"><button  class="btn">Read more</button></a>

          </div>

          <div class="service-box">
            <i class='bx bx-code'></i>
            <h3>Coding</h3>
            <p>As a coder, I specialize in writing clean, efficient code and developing scalable solutions that solve real-world problems. From web development to software engineering, I thrive on the process of transforming ideas into functional, user-friendly applications that make a difference. My goal is to create code that not only works flawlessly but also inspires and empowers others.</p>
            
            <a  href="https://codeforces.com/profile/amiableamit12"><button  class="btn">Handle</button>  </a>


          </div>

        </div>
      </div>
    </div>



  </section>

  <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Portfolio</p>
        <h1>In this portfolio, you'll discover a curated collection of my work, ranging from small coding experiments to full-scale applications.</h1>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active current">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="pic4.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="pic5.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

       

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="pic11.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="pic12.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="pic10.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="pic14.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="pic14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script>
    $(window).on("load", function() {
      var $container = $('.portfolio-container');
      $container.isotope({
        filter: '*',
        animationOptions: {
          queue: true
        }
      });
      $('#portfolio-flters li').click(function() {
        $('#portfolio-flters .current').removeClass('current');
        $(this).addClass('current');
        var selector = $(this).attr('data-filter');
        $container.isotope({
          filter: selector,
          animationOptions: {
            queue: true
          }
        });
        return false;
      });
      $('.portfolio-item').mixItUp(); // corrected selector
    });
  </script>

  </main>

  <!-- contact with me-->
  <!-- contact section -->
  <section class="contact section" id="contact">
    <div class="">
      <div class="row">
        <div class="section-title padd-15">
          <h2>Contact</h2>
          <p>Contact Me</p>
        </div>
      </div>
      <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
      <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>

      <div class="row">

        <!-- contact info item  -->

        <div class="contact-info-item padd-15">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>
          <h4>Call Me</h4>
          <p>01885375802</p>
        </div>


        <!-- contact info item  -->
        <!-- contact info item  -->
        <div class="contact-info-item padd-15">
          <div class="icon">
            <i class="fa fa-map-marker-alt"></i>
          </div>
          <h4>Office</h4>
          <a href="          https://www.google.com/maps/place/Khulna+University+of+Engineering+%26+Technology/@22.9005711,89.4839024,15z/data=!3m1!4b1!4m6!3m5!1s0x39ff9bda1d0ff6e5:0x123a926908efcd0c!8m2!3d22.9005524!4d89.5023565!16zL20vMGRfMl9x?entry=ttu
"><p>Teligati</p></a>
        </div>


        <!-- contact info item  -->
        <!-- contact info item  -->
        <div class="contact-info-item padd-15">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>
          <h4>Email</h4>
          <a href="https://mail.google.com/mail/u/0/#inbox"><p>azhar112@stud.kuet.ac.bd</p></a>
          
        </div>


        <!-- contact info item  -->

        <!-- contact info item  -->
        <div class="contact-info-item padd-15">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>
          <h4>Website</h4>
          <a href="http://localhost/PORTFOLIO"><p>localhost/PORTFOLIO.com</p></a>
          
        </div>


        <!-- contact info item  -->

      </div>
      <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
      <h4 class="contact-sub-title padd-15">Work inquiries, speaking and teaching engagements, funny jokes, or just-saying-hi’s can be sent</h4>

      <!-- contact form -->
      <div class="row">
        <div class="contact-form padd-15">
          <form action="./index.php" method="post">
            <?php

            include './include/config.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = $_POST["username"];
              $email = $_POST["email"];
              $message = $_POST["message"];

              $errors = [];
              if (empty($name) || empty($email) || empty($message)) {
                $errors[] = "All fields are required";
              }
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
              }

              if (empty($errors)) {
                $sql = "INSERT INTO `message` (`username`, `email`, `message`) VALUES (?,?,?)";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                  mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
                  mysqli_stmt_execute($stmt);
                  mysqli_stmt_close($stmt);
                  echo "<script> alert('Message Sent'); </script>";
                }
              }
            }

            ?>
            <div class="row">
              <div class="form-item col-6 padd-15">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="username">
                </div>
              </div>
              <div class="form-item col-6 padd-15">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-item col-12 padd-15">
                <div class="form-group">
                  <textarea name="message" class="form-control" id="" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-item col-12 padd-15">
                <div class="form-group">
                  <button type="submit" class="btn" name="submit">Send Message</button>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
      <!-- contact form -->

    </div>

  </section>

  <!--footer section-->
  <footer class="footer">
    <div class="footer-text">
      <p>
        all rights reserved by azhar
      </p>
    </div>
    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>

  <!--custom js-->

  <script src="main.js">
  </script>

  <script src="count.js"></script>
  <script src="script.js">
  </script>

</body>

</html>