<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec3494….ico">
  <script type="text/javascript">
    $('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
});
  </script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  
</head>
<body style="background-image: url(http://127.0.0.1/bill_connect-main/assets/indexassets/img/bg_hero_2.svg); background-size:cover;">
  <form method="post" action="upi_payment_process">
  <div id="wrapper">
  <div class="row">
     <a href="payment">
    <div class="col-xs-5">
      <div id="cards">
        <img src="<?php echo base_url(); ?>assets/pic/Visa-icon.png">
        <img src="<?php echo base_url(); ?>assets/pic/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
 
</div>
    </div><!--col-xs-5 end-->
  </a>
    <a href="upi_payment">
    <div class="col-xs-5">
      <div id="cards">
        <img src="<?php echo base_url(); ?>assets/pic/upi.png">
      </div><!--#cards end-->
      <div class="form-check">
  
</div>
    </div><!--col-xs-5 end-->
    </a>
  </div>
  <div class="row">
    <div class="col-xs-5" align="center">
      <p style="color:red;"> <?php echo $error; ?></p>
      <label class="form-check-label" for='paypal' style="color:#12c312;">
    Pay &#8377;<?php echo $amt; ?> with upi
  </label>
    </div><!--col-xs-5-->
    
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa fa-user"></i>
      
      <input type="text" id="cardholder" placeholder="Enter upi id" name="upi">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <br><br><br><br>
  <footer>
    <input type="hidden" name="amt" value="<?php echo $amt; ?>">
    <button class="btn">Back</button>
    <button type="submit" class="btn">Pay &#8377;<?php echo $amt; ?></buton>
  </footer>

</div><!--wrapper end-->
</form>
</body>
</html>