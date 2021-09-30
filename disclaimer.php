<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Wedding</title>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta name="description" content="Weddlist" />
		<meta name="keywords" content="">
		<meta name="author" content="" />
		<meta name="MobileOptimized" content="320" />
		<link href="images/favicon.png" rel="icon" type="image/x-icon"/> <!-- favicon -->
		<!-- theme style -->
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
		<!-- page banner -->
		<section id="couple-dashboard" class="couple-dashboard-main-block">
			<div class="container">
				<div class="couple-dashboard-block">
					<div class="row">
						<div class="col-md-12 col-sm-6">
							<div class="my-dashboard">
								<div class="background-image">
									<i class="flaticon-wedding-planning"></i>
								</div>
								<div class="dashboard-date">
									<i class="flaticon-wedding-planning"></i>
									<div class="dashboard-date-heading">Disclaimer</div>
								</div>
								<?php
          include('connection.php');
          $query="select * from footerlinks";
          $result=mysqli_query($link,$query);
          $row=mysqli_fetch_array($result);
          $refund=$row['refund'];                                 
        
          ?>
								<div class="facts-block dashboard-dtl">
									<p class="content-color"><?php echo $refund; ?></p>
								</div>
							</div>
						</div>            
					</div>
				</div>
			</div>
		</section>
		<!-- footer -->
		<?php include('footer.php');?>
		<!-- end footer -->
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
		
		<!-- end jquery -->
	</body>
</html>
