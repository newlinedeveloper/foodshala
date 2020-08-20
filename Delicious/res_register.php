<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Foodshala</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.svg" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container text-right">
      <!-- <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM -->
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Foodshala</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          

          <li class="book-a-table text-center"><a href="#">New Restaurant</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register Page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Restaurant Register</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container">

        <form action="" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="res-name" class="form-control" id="res_name" placeholder="Restaurant's Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="category" id="category" placeholder="Veg/Non-Veg" data-value="veg/non-veg" data-rule="minlen:4" data-msg="Please enter at least 4 chars" disabled="true" />
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="address" class="form-control" id="address" placeholder="Restaurant's Address" data-rule="minlen:4" data-msg="Please enter the Address" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="Restaurant's City" data-rule="minlen:4" data-msg="Please enter the City" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Zipcode" data-rule="minlen:4" data-msg="Please enter the Zipcode" />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="state" class="form-control" id="state" placeholder="State" data-rule="minlen:4" data-msg="Please enter the State" />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="country" class="form-control" id="country" placeholder="Country" data-rule="minlen:4" data-msg="Please enter the Country" />
              <div class="validate"></div>
            </div>
          </div>
          <hr class="my-4"/>

          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="owner" placeholder="Owner's Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone No" data-rule="minlen:10" data-rule="maxlen:15" data-msg="Please enter Your Phone No" />
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="password" class="form-control" name="password" id="con-password" placeholder="Conform Password" data-rule="minlen:4" data-msg="Password and Conform should be Same" />
              <div class="validate"></div>
            </div>
  
          </div>
          <div class="form-group">
            <textarea class="form-control" name="description" id="description" rows="5" data-rule="required" data-msg="Please write something " placeholder="Description"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Restaurant Registered. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" id="reg_register">Register</button></div>
        </form>

      </div>
    </section> <!-- End Contact Section -->

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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
  
  $('#reg_register').click(function(event){

    event.preventDefault();

    

  var res_name = $('#res_name').val();
  var owner = $('#owner').val();
  var email = $('#email').val();
  var phone = $('#phone').val();
  var password = $('#password').val(); 
  var address = $('#address').val(); 
  var zipcode = $('#zipcode').val(); 
  var city =  $('#city').val();
  var state = $('#state').val();
  var country = $('#country').val();
  var description = $("#description").val();

  var form = "res-register-form";

  console.log("Name : "+res_name+" ,Owner : "+owner);
  $.ajax({
      type: "post",
            url: "http://localhost/foodshala/restaurants/index.php",
            data: {
      
        res_name : res_name,
        owner : owner,
        email : email,
        phone : phone,
        password : password,
        address : address,
        city : city,
        zipcode : zipcode,
        state : state,
        country : country,
        form : form,
        description: description,

        },
        success : function(result){

          sweetAlert(
            {
              title: "Congrats !!!",
              text: "Restaurant Added Successfully",
              type: "success"
            });

        $('#res_name').val("");
        $('#owner').val("");
        $('#email').val("");
        $('#phone').val("");
        $('#password').val(""); 
        $('#address').val(""); 
        $('#zipcode').val(""); 
        $('#city').val("");
        $('#state').val("");
        $('#country').val("");
        $('#description').val("");
        console.log(result);

        window.location.href= "login.html";
      }
        });





  });


</script>

</body>

</html>