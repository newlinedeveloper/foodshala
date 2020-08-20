<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foodshala</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Delicious/assets/img/logo.svg" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Delicious/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Delicious/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="Delicious/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Delicious/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Delicious/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="Delicious/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Delicious/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <!-- <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM -->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#"><span>Foodshala</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#restaurants">Restaurants</a></li>
          <?php if(!isset($_SESSION['user'])) echo '<li><a href="Delicious/register.php">Signup</a></li>'; ?> 

          <?php if(!isset($_SESSION['user'])) echo '<li><a href="Delicious/login.html">Login</a></li><li class="book-a-table text-center"><a href="Delicious/res_register.php">New Restaurant</a></li>'; ?>

          <?php if(isset($_SESSION['user']) && $_SESSION['user'] === "customer") echo '<li><a href="#">'.$_SESSION['username'].'</a></li> <li class="book-a-table text-center" id="logout"><a href="">Logout</a></li>'?>
          
          <?php if(isset($_SESSION['user']) && $_SESSION['user'] === "restaurant") echo '<li><a href="#">'.$_SESSION['res_name'].'</a></li><li class="book-a-table text-center"><a href="Delicious/dashboard.php">Dashboard</a></li> <li class="book-a-table text-center" id="logout"><a href="Delicious/index.php">Logout</a></li>'?>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(Delicious/assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Foods</h2>
                <p class="animate__animated animate__fadeInUp">You don't need a silver fork to eat good food.Food is symbolic of love when words are inadequate.All happiness depends on a leisurely breakfast</p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(Delicious/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Endless Services</h2>
                <p class="animate__animated animate__fadeInUp">People who love to eat are always the best people,If you really want to make a friend, go to someone's house and eat with him… the people who give you their food give you their heart.</p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(Delicious/assets/img/slide/slide-3.jpg);">
            <div class="carousel-background"><img src="Delicious/assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Health is must</h2>
                <p class="animate__animated animate__fadeInUp">The secret of success in life is to eat what you like and let the food fight it out inside, One cannot think well, love well, sleep well, if one has not dined well.</p>
                <!-- <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("Delicious/assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Food Providing Organisation and <strong>Ordering Service</strong></h3>
              <p>
If you really want to make a friend, go to someone's house and eat with him… the people who give you their food give you their heart              </p>
              <p class="font-italic">
                Cooking is like love. It should be entered into with abandon or not at all
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Multiple Restaurants</li>
                <li><i class="bx bx-check-double"></i> Delicious and Hygenic Foods</li>
                <li><i class="bx bx-check-double"></i> Serving and Ordering Services</li>
              </ul>
              <p>
                Food is symbolic of love when words are inadequate
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="restaurants" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Foodshala <span>Restaurants</span></h2>
          <p></p>
        </div>

        <div class="row" id="res_list">

          

        </div>

      </div>
    </section><!-- End Whu Us Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Foodshala</h3>
      <p></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Foodshala</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="#">Newline Developer</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="Delicious/assets/vendor/jquery/jquery.min.js"></script>
  <script src="Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Delicious/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="Delicious/assets/vendor/php-email-form/validate.js"></script>
  <script src="Delicious/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="Delicious/assets/vendor/venobox/venobox.min.js"></script>
  <script src="Delicious/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="Delicious/assets/js/main.js"></script>

<script type="text/javascript">
  
  var form = "home-page";

  $.ajax({

      type: "post",
      url: "http://localhost/foodshala/restaurants/index.php",
      data: {
        form : form,
      },
        success : function(result){
          var obj = JSON.parse(result);
          var card = "";

          obj.forEach( res => {
            console.log(res.res_id);

            card += '<div class="col-lg-4 mt-4 mb-2 mt-lg-0">';
            card += '<a href="inner-page.php?id='+res.res_id+'"><div class="box">';
            card += '<span>'+res.res_name+'</span>';
            card += '<h4>'+res.email_id+'</h4>';
            card += '<p>'+res.description+'</p>';
            card += '</div></a>';
            card += '</div>';
            card +='';


          });

          $("#res_list").html(card);
        }

      });

  $("#logout").click(function(){
    
    var form = "logout";

    console.log("logout");

    $.ajax({

      type: "post",
      url: "http://localhost/foodshala/restaurants/index.php",
      data: {
        form : form,
      },
        success : function(result){
          console.log("logout");
           sweetAlert(
              {
                title: "Login Successfully !!!",
                text: "Enjoy to Explore Something !!!",
                type: "success"
              },
              function () {
                window.location.href = "index.php";
              });
        }

      });
  });

</script>

</body>

</html>