<?php
     //my sqli
     $servername="localhost";
     $user="root";
     $pass="";
     $database="Ronald";
     $conn= new mysqli($servername,$user,$pass,$database);
    //  if($conn->error){
    //      echo "DB error ".$conn->error."";
    //  }
    //  else{
    //      echo "Connection successful";
    //  }
     ?>
    
<!doctype html>
<html lang="en">
  <head>
    <title>Ronald &mdash; A onepage portfolio </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>
        <!-- END lines -->
      
      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">
        
          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="#home-section" class="nav-link">Home</a>
                </li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="index.html" class="unslate_co--site-logo">Ronald<span>.</span></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#skills-section" class="nav-link">Skills</a></li>
                <li><a href="#testimonial-section" class="nav-link">Testimonial</a></li>
                <!--<li><a href="#journal-section" class="nav-link">Journal</a></li>-->
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('images/map.jpg');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-7 mx-auto text-center">
              <h1 >Ronald</h1>
              <h2 >I’m Ronald Ampeire, A Website Designer Based In Uganda</h2>
            </div>

          </div>
        </div>


        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->


      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          
          
          <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">

            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>

              <!-- <a href="#" class="text-white js-filter d-inline-block d-lg-none">Filter</a>
              
              <div class="filter-wrap">
                <div class="filter ml-auto" id="filters">
                  <a href="#" class="active" data-filter="*">All</a>
                  <a href="#" data-filter=".web">Web</a>
                  <a href="#" data-filter=".branding">Branding</a>
                  <a href="#" data-filter=".illustration">Illustration</a>
                  <a href="#" data-filter=".packaging">Packaging</a>
                </div>
              </div> -->
            </div>


            
            <div id="posts" class="row gutter-isotope-item">
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Graphics design</h3>
                        <p>packaging, branding, logos</p>
                      </div>
                    </div>
                    <img src="images/graphics.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-4.html" class="portfolio-item isotope-item gsap-reveal-img ajax-load-page" data-id="4">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Web development</h3>
                        <p>branding, Design</p>
                      </div>
                    </div>
                    <img src="images/Lawree.png" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/wordpress.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Wordpress">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Wordpress</h3>
                        <p>illustration, web design</p>
                      </div>
                    </div>
                    <img src="images/work_5_md.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-2.html" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="2">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Work</h3>
                        <p>Development process</p>
                      </div>
                    </div>
                    <img src="images/badman.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/service_02.jpg" class="portfolio-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="UI design">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>UI design</h3>
                        <p>software</p>
                      </div>
                    </div>
                    <img src="images/service_02.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="https://youtu.be/6vcBKwnl_Y0" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="CMS">
                    <div class="overlay">
                      <span class="wrap-icon icon-play_circle_filled"></span>
                      <div class="portfolio-item-content">
                        <h3>Content Management Systems</h3>
                        <p>web management</p>
                      </div>
                    </div>
                    <img src="images/tech.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

            </div>
            
          </div>


        </div>
      </div>

<!--
      <div class="unslate_co--section">
        <div class="container">
          <div class="owl-carousel logo-slider">
            <div class="logo-v1 gsap-reveal">
              <img src="images/logo-google.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/ibrand.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/logo-paypal.png" alt="Image" class="img-fluid">
            </div>
            <div class="logo-v1 gsap-reveal">
              <img src="images/logo-adobe.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>-->


      <div class="unslate_co--section" id="about-section">
        <div class="container">
          
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
            <span class="gsap-reveal">
            <img src="images/divider.png" alt="divider" width="76">
            </span>
          </div>
          

          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="images/Rani256.jpeg" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">We can make it together</span></h3>
              <p class="lead gsap-reveal">Hi, I'm Ronald. <a href="">  A Frontend Developer. </a> I specialize in building websites specific to the business needs of my clients . </p>
              <p class="mb-4 gsap-reveal">I am passionate about building excellent websites that improve the lives of those around me. I specialize in creating websites for clients ranging from individuals and small-businesses all the way to large enterprise corporations. </p>
              <p class="gsap-reveal"><a href="images/my CV.pdf" class="btn btn-outline-pill btn-custom-light">Download my CV</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="services-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="70"></span>
          </div>

          <div class="row gutter-v3">
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/001-options.svg" alt="Image" width="45">
                </div>
                <h3>Graphics <br> Design</h3>
                <p>Visual communication and problem-solving through the use of topography, photography, illustration and more. </p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/002-chat.svg" alt="Icon" width="45">
                </div>
                <h3>Web <br> Management</h3>
                <p>Website management is about building on and maintaining your online web presence. </p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/003-contact-book.svg" alt="Image" class="img-fluid" width="45">
                </div>
                <h3>Branding</h3>
                <p>Let my branding design experience help to build your brand. </p>
              </div> 
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="0">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/004-percentage.svg" alt="Image" width="45">
                </div>
                <h3>Web <br> Development</h3>
                <p>Let Us Design and Develop Your Interactive, Vibrant, Functional Website. Stand Out From the Competition. </p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="100">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/006-goal.svg" alt="Image" width="45">
                </div>
                <h3>WordPress <br> Solutions</h3>
                <p> WordPress is the perfect solution for your nonprofit website. </p>
              </div> 
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                <div class="wrap-icon mb-3">
                  <img src="images/svg/005-line-chart.svg" alt="Image" width="45">
                </div>
                <h3>Mobile <br> Applications</h3>
                <p>If you're looking to leverage mobile technology for your business, i have the best app developers are at your service.  </p>
              </div> 
            </div>

          </div>
        </div>
      </div>

      <div class="unslate_co--section section-counter" id="skills-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Skills</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row pt-5">
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="90">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">WordPress</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="99">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">HTML/CSS</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="95">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">jQuery</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="100">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Design</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .counter -->

      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Testimonials</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Highly professional brand development, design and implementation... I highly recommend him as part of a structuring development team of a new business or project. 
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
               <!-- <img src="images/person_man_1.jpg" alt="Image">-->
                <h3>Uwase Nadia</h3>
                <span class="d-block position">Graphics Designer @Ibrand</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                 Your passion and knowledge brought this Portfolio Website to the next level on the web.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                <!--<img src="images/person_man_2.jpg" alt="Image">-->
                <h3>Kinobe Jordan</h3>
                <span class="d-block position">Backend Developer</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  I just wanted to share a quick note and let you know that you do a really good job. I'm glad I decided to work with you. It's really great how easy your websites are to update and manage.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
               <!-- <img src="images/person_woman_1.jpg" alt="Image">-->
                <h3>Emmanuel Jabulon</h3>
                <span class="d-block position">Manager @Eland Technologies</span>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- END testimonial -->
       <!--
      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Journal</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>

          
          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_1.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_2.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_3.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_4.jpg" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_5.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


          </div>

        </div>
      </div>
      <!-- END blog posts -->
      -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">
            
               <div class="col-md-6">
              <form action="index.php" method="POST" class="form-outline-style-v1">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name"></label>
                    <!--<input name="name" type="name" class="form-control" id="name">-->
                    <input type="text" placeholder="Name" name="name"class="contact__input"class="form-control" required>
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email"></label>
                    <!--<input name="email" type="email" class="form-control" id="email">-->
                     <input type="mail" placeholder="Email" name="email"class="contact__input" class="form-control" required>
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message"></label>
                    <textarea name="message" id="message"placeholder="Write you message.." cols="55" rows="7" class="contact__input"class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                    <div class="col-md-12 d-flex align-items-center">
                      <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send" name="send">
                      <span class="submitting"></span>
                    </div>
                  </div>
                  <?php
     if(isset ($_POST['send'])){
         
         echo "<br>";
     
         $uname = $_POST['name'];
         $mail = $_POST['email'];
         $mess = $_POST['message'];
         
         if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $sql = "insert into contact (Name,Email,Message) values ('$uname','$mail','$mess')";
          if($conn->query($sql)){
            echo"Message sent successfully!";
        }
        else{
            echo"Error is here: ".$conn->error;
        } 
      }else{
        echo"Invalid email";
      }
        
         
       
     }
     
     if(isset($_POST['display'])){
     
     
         $sql = "select * from contact";
     
         $myquery = $conn->query($sql);
         
         while($result = $myquery->fetch_assoc()){
             echo "<br>";
             echo $result['Name']." ".$result['Email']." ".$result['Message'];
             echo "<br>";
         }

     }
     ?>
     
              </form>
              <div id="form-message-warning" class="mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">Ronaldrani72@gmail.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="#" class="contact-info-val">+256 756 559 572<br>+256 789 188 029</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val"> Kampala<br> Uganda</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              
              <div class="footer-site-logo"><a href="#">Ronald<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a href="https://twitter.com/Rani_the_1st">Twitter</a></li>
                <li><a href="https://www.instagram.com/r_a_n_i_256/">Instagram</a></li>
                <li><a href="https://www.linkedin.com/in/ronald-ampeire-92380120b/">LinkedIn</a></li>
              </ul>

              <p class="site-copyright">
                
                <!-- Footer. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved |Developed by <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="" target="_blank">Ronald Ampeire</a>
                <!-- Footer -->
              
              </p>

            </div>
          </div>
        </div>
      </footer>

      
    </div>

    
    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="js/scripts-dist.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>