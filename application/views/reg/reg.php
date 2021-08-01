<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/regassets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/regassets/css/style.css">
	<style>
		#font{
			font-family:"berkshire-swash";
			color: black;
		}
	</style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title" id="font"  style="font-family:verdana; color: darkcyan" >Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
						 <div class="form-group">
                            <input type="date" class="form-input" name="dob" id="dob" placeholder="Your Date of Birth"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
						 <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Your Phone Number"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                           
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
						<?php echo validation_errors('<div style="color:red;">','</div>');?>
						
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo site_url(); ?>/Bill_connect/login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    
    <script src="<?php echo base_url(); ?>/assets/regassets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/regassets/js/main.js"></script>
	
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	//<script>
		$(document).ready(function (){
			$('.form-submit').click(function (e) {
				e.preventDefault();
				swal({        title: "registration successful",
 							 text: "You clicked the button!",
 							 icon: "success",
 							 button: "ok",							
					}).then(function() {
   					 window.location = "<?php echo site_url(); ?>/Bill_connect/login";
					});					
			});
		});
	</script>  -->