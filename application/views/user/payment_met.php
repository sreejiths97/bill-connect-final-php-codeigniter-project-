<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript">
		$('input[type="checkbox"]').on('click',function(){
var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
});
	</script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec3494….ico">
  <link rel="mask-icon" type href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b….svg" color="#111">
</head>
<body style="background-image: url(http://127.0.0.1/bill_connect-main/assets/indexassets/img/bg_hero_2.svg); background-size:cover;">
<!--
	<?php 
	   		foreach($data1 as $row)
			{
	   ?>
		<input type="checkbox" name="card1"> <?php echo $row->card_no; } ?>
-->
	
  <form method="post" action="card_payment">
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
  </div><!--row end-->
  <center>
     <p style="color:red;"> <?php echo $error; ?></p>
      <label class="form-check-label" for='paypal' style="color:#12c312;">
    Pay &#8377;<?php echo $amt; ?> with credit card
  </label>
</center>
					  
		
	

  <div class="row">

    <div class="col-xs-5">

      <i class="fa fa fa-user"></i>
      <label for="cardholder">Cardholder's Name</label>
      <input type="text" id="cardholder" name="name">
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="text" id="cardnumber" name="crd_no">
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <i class="fa fa-calendar"></i>
      <label for="date">Valid thru</label>
      <input type="text" placeholder="MM/YY" id="date" name="date">
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <i class="fa fa-lock"></i>
      <label for="date">CVV / CVC *</label>
      <input type="text" name="cvv">
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
    <input type="hidden" name="amt" value="<?php echo $amt; ?>">
    <button class="btn">Back</button>
    <button type="submit" class="btn">Pay &#8377;<?php echo $amt; ?></buton>
  </footer>

</div><!--wrapper end-->
</form>
</body>
</html>