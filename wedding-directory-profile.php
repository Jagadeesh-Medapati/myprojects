<!DOCTYPE html>
<html lang="en">
	<head>


	<?php
	session_start();
	if($_SESSION['open']!="new")
	{
		header('Location: index.php');
	}


?>












		<title>Wedding Directory Profile</title>
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
		<link href="css/share-tooltip.css" rel="stylesheet" type="text/css"/><!-- share tooltip css -->
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
		<!--  end navigation -->
		<!-- new listing item vendor profile -->
	
		<?php
			$id=$_GET[id];
			include('connection.php');
			$query="select * from tbl_vendors where id='$id'";
			$result=mysqli_query($link,$query);
			$row=mysqli_fetch_array($result);
			$name=$row['name'];  
			$email=$row['email'];   
			$phone=$row['phone'];   
			$description=$row['description'];  
			$address=$row['address'];
			$businessname=$row['businessname'];
			$image=$row['image'];
			$image1=$row['image1'];
			$image2=$row['image2'];
			$image3=$row['image3'];
			$catagory=$row['catagory'];
			$country=$row['country'];
			$countrycode=$row['countrycode'];
			$businessemail=$row['businessemail'];
			$businesscontact=$row['businesscontact'];
			
$state=$row['state'];
$city=$row['city'];
			$id=$row['id'];     
		?>
		<section id="new-listing-vendor-profile" class="new-listing-vendor-profile-main-block wedding">
			<!--<div class="wedding-dresses-block">
				<div class="container">
				<div class="row">
				<div class="col-md-9 col-sm-8">
				<h4 class="wedding-dresses-heading"><?php //echo $catagory; ?></h4>
				</div>
				</div>
				</div>
			</div>-->
			<div class="new-listing-vendor-profile-block">
				<div class="container">  
					<div class="row">
						<div class="col-md-12">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								
								<div class="tab-content">
									
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="new-listing-vendor-block">
											<h6 class="description-heading"><?php echo "Vendor Id  ";echo $id."  -"; echo $businessname;  ?></h6>
											<div class="new-listing-vendor-profile">
												<div class="row"> 
												<div class="col-sm-4 row_4">
													<div class="flexslider">
														<ul class="slides">
															<li data-thumb="vendor/imageone/<?php echo $image; ?>">
															<a href="vendor/imageone/<?php echo $image; ?>" target="_blank" onclick="return ovrly.open(this);">	<img src="vendor/imageone/<?php echo $image; ?>" onerror=this.src="noimage.png"/> </a>
															</li>
															<li data-thumb="vendor/imagetwo/<?php echo $image1; ?>">
															<a href="vendor/imagetwo/<?php echo $image1; ?>" target="_blank" onclick="return ovrly.open(this);"> <img src="vendor/imagetwo/<?php echo $image1; ?>" onerror=this.src="noimage.png"/> </a>
															</li>
															<li data-thumb="vendor/imagethree/<?php echo $image2; ?>">
															<a href="vendor/imagethree/<?php echo $image2; ?>"  target="_blank" onclick="return ovrly.open(this);"> <img src="vendor/imagethree/<?php echo $image2; ?>" onerror=this.src="noimage.png"/> </a>
															</li>
															<li data-thumb="vendor/imagefour/<?php echo $image3; ?>">
															<a href="vendor/imagefour/<?php echo $image3; ?>" target="_blank" onclick="return ovrly.open(this);"> <img src="vendor/imagefour/<?php echo $image3; ?>" onerror=this.src="noimage.png"/> </a>
															</li>
														</ul>
													</div>
												</div>
													<div class="col-md-4">
														<div class="vendor-pro-section">
															<ul>
																<li>
																	<i class="fa fa-user" aria-hidden="true"></i><?php echo $name; ?>
																</li><br>
																
																<li>
																	<i class="fa fa-phone" aria-hidden="true"></i>+<?php echo $countrycode; ?>-<?php echo $phone; ?>
																</li><br>
																<li>
																	<i class="fa fa-phone" aria-hidden="true"></i>+<?php echo $countrycode; ?>-<?php echo $businesscontact; ?>	
																</li><br>
																<li>
																	<i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $email; ?>
																</li><br>
															<li>
																	<i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $businessemail; ?>
																</li><br>
										
																<li>
																	<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $address; ?>
																</li><br>
																<li>
																	<i class="" aria-hidden="true"></i><?php echo $city; ?> , <?php echo $state; ?> , <?php echo $country; ?>
																</li><br>
																
																<!--<li>
																	<i class="fa fa-map-marker" aria-hidden="true"></i>Country 
																	</li><br>
																	<li>
																	<i class="fa fa-map-marker" aria-hidden="true"></i>State 
																	</li><br>
																	<li>
																	<i class="fa fa-map-marker" aria-hidden="true"></i>City
																</li>-->
																
															</ul>
														</div>
														
													</div>
												</div>
											</div>
											<p>
												<?php echo $description; ?>	
											</p>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end new listing item vendor profile -->
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
		<script type="text/javascript" src="js/jquery.flexslider.js"></script>
		<script  type="text/javascript"  src="js/ovrly.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function(){
				
				/* 1. Visualizing things on Hover - See next part for action on click */
				$('#stars li').on('mouseover', function(){
					var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
					
					// Now highlight all the stars that's not after the current hovered star
					$(this).parent().children('li.star').each(function(e){
						if (e < onStar) {
							$(this).addClass('hover');
						}
						else {
							$(this).removeClass('hover');
						}
					});
					
					}).on('mouseout', function(){
					$(this).parent().children('li.star').each(function(e){
						$(this).removeClass('hover');
					});
				});
				
				
				/* 2. Action to perform on click */
				$('#stars li').on('click', function(){
					var onStar = parseInt($(this).data('value'), 10); // The star currently selected
					var stars = $(this).parent().children('li.star');
					
					for (i = 0; i < stars.length; i++) {
						$(stars[i]).removeClass('selected');
					}
					
					for (i = 0; i < onStar; i++) {
						$(stars[i]).addClass('selected');
					}
					
					// JUST RESPONSE (Not needed)
					/* var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
						var msg = "";
						if (ratingValue > 1) {
						msg = "Thanks! You rated this " + ratingValue + " stars.";
						}
						else {
						msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
						}
					responseMessage(msg); */
					
				});
				
				
			});
			
			
			function responseMessage(msg) {
				$('.success-box').fadeIn(200);  
				$('.success-box div.text-message').html("<span>" + msg + "</span>");
			}
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
				});
		</script>
		<!-- end jquery -->
	</body>
</html>