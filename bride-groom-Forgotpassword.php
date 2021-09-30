<!DOCTYPE html>
<html lang="en">
<head>
<title>Bride Groom Forgotpassword</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Weddlist" />
<meta name="keywords" content="">
<meta name="author" content="" />
<meta name="MobileOptimized" content="320" />
<link href="images/favicon.png" rel="icon" type="image/x-icon"/> <!-- favicon -->
<!-- theme style -->
<link href="css/login.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<!-- revolution -->    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> <!-- google fonts -->
<link href="css/menumaker.css" rel="stylesheet" type="text/css"/> <!-- menu css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<!-- end theme style -->
<style type="text/css"> 
body {
    font-family: 'Open Sans', sans-serif;
	overflow-x: hidden !important;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}	
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
		<div class="container">
			<div class="wrapper">
				<form class="form-signin">
					<h3 class="form-signin-heading">
						
						<img src="images/logo.png" class="logo-size" alt="company logo" />
						<br />
						Re-Set Password
					</h3>
					
					<input type="email" class="form-control move-down" name="email" placeholder="Email id" required="" autofocus="" /><br />
							 <div class="input-group">
          <input type="password" class="form-control pwd moveup" value="iamapassword" placeholder="Password">
          <span class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
          </span>          
        </div>
					 <div class="input-group">
          <input type="password" class="form-control pwd1 movedown" value="iamapassword" placeholder="Re-Enter Password">
          <span class="input-group-btn">
            <button class="btn btn-default reveal1 movedown" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
          </span>          
        </div> <br />

                     <a href="index" class="btn btn-lg btn-primary btn-block movedown" role="button">Submit</a>
					 
				</form>
			</div>
		</div>
	<?php include('footer.php');?>
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>  <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js --> 
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menu js--> 
<script type="text/javascript" src="js/jquery.share-tooltip.js"></script> <!-- share tooltip js--> 
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script> <!-- datepicker js-->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<script type="text/javascript"> 
		$(".reveal").mousedown(function() {
    $(".pwd").replaceWith($('.pwd').clone().attr('type', 'text'));
})
.mouseup(function() {
	$(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
})
.mouseout(function() {
	$(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
});	
 </script>
 
		<script type="text/javascript"> 
		$(".reveal1").mousedown(function() {
    $(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'text'));
})
.mouseup(function() {
	$(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'password'));
})
.mouseout(function() {
	$(".pwd1").replaceWith($('.pwd1').clone().attr('type', 'password'));
});	
	    </script>
<!-- end revolution js files -->
</body>
</html>   