<?php 
@include './User/config.php';

if(isset($_POST['submit'])){

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $name=$fname." ".$lname;
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message=$_POST['message'];


$to_email = $email;
$subject = "RD Bank Contact Form";
$body = "Hi,\n\nThank you for contacting us. Yours request has been submitted.\nWe will reply in a timely manner.\n\nYours sincerely,\nAdmin\nRD BANK ";
$headers = "From: wplrdbank@gmail.com";

mail($to_email, $subject, $body, $headers);

$to_email2 = 'wplrdbank@gmail.com';
$subject2 = $subject;
$body2 = "NEW REQUEST SUBMITTED \n\nName: $name\n\nEmail: $email\n\nMessage: $message";
$headers2 = "From: Admin";

mail($to_email2, $subject2, $body2, $headers2);



     }


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Patil Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./Home/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Home/css/jquery-ui.css">
    <link rel="stylesheet" href="./Home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./Home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./Home/css/owl.theme.default.min.css">
<!-- 
    <link rel="stylesheet" href="css/jquery.fancybox.min.css"> -->
<!-- 
    <link rel="stylesheet" href="css/bootstrap-datepicker.css"> -->

    <!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->

    <!-- <link rel="stylesheet" href="css/aos.css"> -->

    <link rel="stylesheet" href="./Home/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
<!-- 
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
  <!-- The above code is creating a header section for a website with a navigation menu. It includes a
  logo, links to different sections of the website, and social media icons. The navigation menu is
  responsive and can be toggled on smaller screens. -->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Patil Bank<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#calculator" class="nav-link">Calculator</a></li>
                    <!-- <li><a href="#faq-section" class="nav-link">Blogs</a></li> -->
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                   </ul>
                </li>
                
                
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <!-- <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a></li> -->
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     <!-- The above code is creating a section with a background image and two slides for a website's
     home section. The slides contain headings, descriptions, and buttons for the user and admin
     portals. The code also includes some animation effects using AOS library. -->
     
    <div class="site-blocks-cover overlay" style="background-image: url(./Home/images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">User Portal</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">If you wish to open an account in our bank please click below.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="./User/register_form.php" target="_blank" class="btn  btn-primary mr-2 mb-2">User Account</a>
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Admin Portal</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">If you are an admin of the bank please click here</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="./Admin/register_form.php" target="_blank" class="btn  btn-primary mr-2 mb-2">Admin Account</a>
                </div>
              </div>
              </div>
          </div>
          </div>
      </div>

   
    </div>  


   <!-- The above code is creating a section on a website with the ID "about-section" that contains
   information about a bank called Patil Bank. It includes a heading, a paragraph describing the bank's
   objectives and services, and an image with a caption. The section is styled using Bootstrap
   classes and includes animations using AOS library. -->
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">We at Patil Bank try to provide world class online banking services. We have a two-fold objective: first, to be the preferred provider of banking services for target retail and wholesale customer segments. The second objective is to achieve healthy growth in profitability, consistent with the bank’s risk appetite.
        We offer a wide range of banking products and financial services to retail customers.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <!-- <figure class="circle-bg">-->
            <img src="./Home/images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black mb-4">We Solve Your Financial Problem</h3>

            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            
          </div>
        </div>    
        
      </div>  
    </div>

            
          </div>
        </div>
      </div>
    </div>

    
<!-- The above code is displaying a section on a webpage with information about the team behind a
project. It includes the names, positions, and social media links of two team members along with
their pictures. The section is styled using Bootstrap classes and includes animations using AOS
library. -->

    
    <section class="site-section border-bottom" id="team-section" style="padding-top: 0px;padding-bottom: 0px;">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet the Team</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Third year Information Technology Students from KJSCE</p>
          </div>
        </div>
        <div class="row row1" >
          

          
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://www.linkedin.com/in/ritvik-jindal-70746a214/"><span class="icon-linkedin"></span></a></li>
                  <li><a href="https://www.instagram.com/ritvik.jindal/"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="https://wallpapers.com/images/hd/cute-girl-vector-art-profile-picture-jhbu3wt713zj2bti.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Rutuja PatilL</h3>
                <span class="position">CEO</span>
              </div>
            </div>
          </div>
          

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://www.linkedin.com/in/devesh-jain-bb64aa221/"><span class="icon-linkedin"></span></a></li>
                  <li><a href="https://www.instagram.com/binge.reader/"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="https://wallpapers.com/images/high/girl-with-cap-instagram-profile-7mx0n7tdzshfmbxc.webp" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Sharayu Patil</h3>
                <span class="position">Assistant to CEO</span>
              </div>
            </div>
          </div>


          
          
        </div>
      </div>
   

<!--  The above code is displaying a section with information about different calculators available on the
website, including an EMI calculator, SIP calculator, and currency converter. It also includes a
section with customer testimonials. The code uses HTML and CSS to structure and style the content,
and JavaScript and jQuery to create the carousel functionality for the images and text. -->

  
    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Happy Customers</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Patil bank service is excellent i love their website&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="./Home/images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Ameya Yeole</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Patil bank service is excellent their UI is just amazing.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="https://wallpapers.com/images/hd/girl-with-cap-instagram-profile-7mx0n7tdzshfmbxc.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p> Rutuja Patil</p>
              </figure>
              
            </div>
          </div>

          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Patil bank service is excellent their UI is just amazing.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="./Home/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Sharayu Patil</p>
            </figure>
            
          </div>
        </div>


        </div>
    </section>


  

   

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <span> KJ SOMAIYA COLLEGE OF ENGINEERING </span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#">+91 9022256572</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <a href="#">PatilBank@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

          </div>
          
        </div>
      </div>
    </section>



  </div> <!-- .site-wrap -->

  <script src="./Home/js/jquery-3.3.1.min.js"></script>
  <script src="./Home/js/jquery-ui.js"></script>
  <script src="./Home/js/popper.min.js"></script>
  <script src="./Home/js/bootstrap.min.js"></script>
  <script src="./Home/js/owl.carousel.min.js"></script>
  <script src="./Home/js/jquery.countdown.min.js"></script>
  <script src="./Home/js/jquery.easing.1.3.js"></script>
  <script src="./Home/js/aos.js"></script>
  <script src="./Home/js/jquery.fancybox.min.js"></script>
  <script src="./Home/js/jquery.sticky.js"></script>
  <script src="./Home/js/isotope.pkgd.min.js"></script>

  
  <script src="./Home/js/main.js"></script>

  
  </body>
</html>