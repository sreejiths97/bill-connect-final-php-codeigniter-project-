<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Mobster - One page app template</title>

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/indexassets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/indexassets/css/maicons.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/indexassets/vendor/animate/animate.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/indexassets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/indexassets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/indexassets/css/mobster.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="<?php echo base_url(); ?>assets/indexassets/favicon-light.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
		   <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/Bill_connect/about">About</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/Bill_connect/contact">Contact</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/Bill_connect/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(<?php echo base_url(); ?>assets/indexassets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Contact</h3>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                <p class="mb-0">3 East Ridgewood Avenue,varkala pin:695141</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                <p class="mb-1">+91 9496663365</p>
                <p class="mb-0">+91 9020552520</p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                <p class="mb-1">sreejithrajbillpay.com</p>
                <p class="mb-0">support@macodeid.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
          <div class="card-page">
            <h3 class="fw-normal">Get in touch</h3>
            <form method="POST" class="mt-3">
              <div class="form-group">
                <label for="name" class="fw-medium fg-grey">Fullname</label>
                <input type="text" class="form-control" name="name">
              </div>
    
              <div class="form-group">
                <label for="email" class="fw-medium fg-grey">Email</label>
                <input type="text" class="form-control" name="email">
              </div>

              <div class="form-group">
                <label for="phone" class="fw-medium fg-grey">Phone(optional)</label>
                <input type="number" class="form-control" name="phone">
              </div>
    
              <div class="form-group">
                <label for="message" class="fw-medium fg-grey">Message</label>
                <textarea rows="6" class="form-control" name="message"></textarea>
              </div>

              <p>*Your information will never be shared with any third party.</p>
    
              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
				<?php echo validation_errors('<div style="color:red;">','</div>');?>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="maps-container">
              <div id="myMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .bg-light -->


<div class="page-footer-section bg-dark fg-white">
  <div class="container mb-5">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-8">
        <div class="text-center mb-3">
          <img src="<?php echo base_url(); ?>/assets/indexassets/favicon-light.png" alt="" height="80">
        </div>
        <h3 class="mb-3"><span class="fg-primary">Bill</span>Connect</h3>
        <p class="caption"> <br>Bill Connect has features to view and manage <br>
          our Bills, such as All bill payment</p>

      
      </div>
    </div>
  </div>
  
  <hr>
  <!-- Please don't remove or modify the credits below -->
  <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2020 <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All right reserved</p>
</div>

<script src="<?php echo base_url(); ?>assets/indexassets/js/jquery-3.5.1.min.js"></script>

<script src="<?php echo base_url(); ?>assets/indexassets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>assets/indexassets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="<?php echo base_url(); ?>assets/indexassets/vendor/wow/wow.min.js"></script>

<script src="<?php echo base_url(); ?>assets/indexassets/js/mobster.js"></script>

<script src="<?php echo base_url(); ?>assets/indexassets/js/google-maps.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>