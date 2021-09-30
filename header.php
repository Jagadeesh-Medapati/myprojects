<?php
session_start();
error_reporting(0);
			include('connection.php');
			$username = $_SESSION['cusername'];
			$userid = $_SESSION['userid'];
			$gender12= $_SESSION['gender1'];
			$email = $_SESSION['email'];
			$hold54 = $_SESSION['hold'];
			$id=$_GET['id'];
			//echo "<pre>"; print_r($_SESSION); echo "</pre>";
			
			
			
?>
<!DOCTYPE html>
<html lang="en">
	<!-- BEGIN HEAD -->
	
	<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link href="assets-2/css/datepickerheader.css" rel="stylesheet" type="text/css"/> <!-- datepicker css -->
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script> 
	</head>
	<!-- END HEAD -->

		<body>
		<!-- end sidebar menu -->
<style type="text/css">
			ul{
			padding: 0;
			list-style: none;
			}
			ul li{
			display: inline-block;
			position: relative;
			line-height: 21px;
			text-align: left;
			}
			ul li a{
			display: block;
			
			text-decoration: none;
			}
			
		ul li ul.dropdown {
    min-width: 100%;
    background: #f39c12;
    display: none;
    position: absolute;
    z-index: 999;
    left: 0;
}
			ul li:hover ul.dropdown{
			display: block;	/* Display the dropdown */
			}
			ul li ul.dropdown li{
			display: block;
			}
			
		</style>
		
	
		
		<!-- preloader --> 
		<!--<div class="preloader">
				<div class="status">
					<div class="status-message">
					</div>
				</div>
			</div> -->
		<!-- end preloader --> 
		<!--  top bar -->
		<section class="top-nav-info">
			<div class="container">
				

				
				<?php 
				
				if( !isset($_SESSION['userid']))
				{
				
				?>
				<!-- <div class="row">
					<div class="col-sm-6">
						<div class="top-text"> <a href="#" style="color:#b00403 ! important;" class="onhover" data-toggle="modal" data-target="#register-model1">Are you a vendor Please Register/Login</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="top-detail text-right">
							<div class="top-text"><a href="#" data-toggle="modal" style="color:#b00403 ! important;" data-target="#register-model">Bride & Groom Register/Login here</a>
							</div>	
						</div>
					</div>
				</div> -->
				<?php
					
					}
					else{
					
				?>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="top-detail text-right">
						<ul>
						<li>
						<a href="#"> <?php echo $_SESSION['cusername']; ?>&#9662;</a>
						<ul class="dropdown">
						<li> <a href="dashboard/index"><b>Dashboard</b></a></li>
						<br>
							<li> <a href="logout"><b>logout</b></a></li>
						</ul>
						</li>
						
						</ul>
					</div>
				</div>
				<?php
					}
				?>
				
				
				
				<!-- search -->
				<div class="search">
					<div class="container">
						<input type="search" class="search-box" placeholder="Search"/>
						<a href="#" class="fa fa-times search-close"></a>
					</div>
				</div>
				<!-- end search -->
				<!-- login popup -->
				<!-- <div class="modal fade login-model" id="login-model" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h5 class="modal-title text-center">Login</h5>
							</div>
							<div class="modal-body login-model-body text-center">
								<form id="login-form" action="#" method="post">
									<div class="form-group">
										<input type="email" class="form-control" id="login_email" placeholder="Enter Your Email"/>
										<input type="password" class="form-control" id="login_password" placeholder="Enter Your Password"/>
									</div>
									<button type="submit" class="btn btn-default">Login</button>
								</form>
							</div>            
						</div>
					</div>
				</div> -->
				<!-- register popup -->
				<div class="modal fade register-model" id="register-model" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h5 class="modal-title text-center">Bride And Groom</h5>
							</div> -->
							<!-- <div class="w3-bar w3-black">
								<button class="btn btn-warning btn-width" onclick="openBride('breg')">Register here</button>
								<button class="btn btn-danger btn-width" onclick="openBride('blog')">Login here</button>
								
							</div> -->
							
							<!-- <div id="breg" class="w3-container bride">
								<h4 class="text-color">Bride And Groom Registeration</h4> <hr />
								<div class="modal-body request-model-body text-center">
									<form id="register-form" action="#" method="post">
										<div class="w3_modal_body_grid">
											<span>Profile Created by:</span>
											<select id="w3_country" name="profilefor" onchange="change_country(this.value)" class="frm-field required">
												<option value="">Select</option>
												<?php 					
													$select_location=mysqli_query($link,"select distinct(profilecreatedname) from profilecreated order by profilecreatedname asc");
													while($get_location=mysqli_fetch_array($select_location))
													{  ?>
													<option value="<?php echo $get_location['profilecreatedname'];?>"><?php echo ucwords($get_location['profilecreatedname']);?></option>
													<?php
													}  ?>        
											</select>
											
										
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Name:</span>
											<input type="text" class="form-control size" name="name" id="reg_name" placeholder="Enter Your Bride or Groom Name"/>
										</div>
										<div class="w3_modal_body_grid">
										<span>Gender:</span>
							
							<select id="w3_country1" name="gender" class="frm-field required">
												<option value="">Select Gender</option>
												<?php 					
													$select_location=mysqli_query($link,"select distinct(gendername) from gender order by gendername desc");
													while($get_location=mysqli_fetch_array($select_location))
													{  ?>
													<option value="<?php echo $get_location['gendername'];?>"><?php echo ucwords($get_location['gendername']);?></option>
													<?php
													}  ?>        
											</select>
						
										</div>
										<div class="w3_modal_body_grid">
											<span>Date Of Birth:</span>
									<input type="text" id="dob"  name="dob"  placeholder="Date Of Birth" class="form-control" required="" />
										<input type="text" id="datepicker" name="datepicker" class="date change" onblur="fu()" placeholder="Date Of Birth" required="" />
										</div>
										
										
										<div class="w3_modal_body_grid">
											<span>religion:</span>
											<select id="w3_country1" name="religion" class="frm-field required">
												<option value="">Select Religion</option>
												<?php 					
													$select_location=mysqli_query($link,"select distinct(religionname) from religion order by religionname asc");
													while($get_location=mysqli_fetch_array($select_location))
													{  ?>
													<option value="<?php echo $get_location['religionname'];?>"><?php echo ucwords($get_location['religionname']);?></option>
													<?php
													}  ?>        
											</select>
											
											
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Phone No:</span>
											<input type="text" class="form-control size" name="phone" placeholder="Enter Your Phone Number" required=""/>
											
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Email:</span>
											<input type="email" class="form-control size" name="email" placeholder="Enter Your Email" required=""/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Password:</span>
											<input type="password" class="form-control size"  name="password" id="reg_password" placeholder="Enter Your Password"/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Referral id:</span>
											<input type="text" name="referraliduser" placeholder="Enter Your Referral id (optional)"/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span><input type="checkbox" id="c1" name="cc" required></span>
											<p style="color:yellow">I have read & agree to the <a style="color:red" href="terms-and-conditions">Terms and Conditions</a></p>
										</div>
									
										<button type="submit" name="submit1" class="btn btn-default">Register</button>
									</form>
								</div>
							</div> -->
							
				</div>
			
				<!-- end register popup -->
				<!-- register popup -->
				
							
							
							
							<!-- <div id="vreg" class="w3-container vendor">
								<h4 class="text-color">Vendor Registration</h4> <hr />
								<div class="modal-body request-model-body text-center">
									<form id="register-form" action="#" method="post" >
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Name:</span>
											<input type="text" class="form-control size" name="name" id="reg_name" placeholder="Enter Your Name"/ required>
										</div>
										
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Phone No:</span>
											<input type="text" class="form-control size" name="phone" placeholder="Enter Your phone number" required=""/>
											
										</div>
										<div class="w3_modal_body_grid">
											<span>Email:</span>
											<input type="email" class="form-control size" name="email" placeholder="Enter Your Email" required=""/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Password:</span>
											<input type="password" class="form-control size" name="password" id="reg_password" placeholder="Enter Your Password"/ required>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Business Name:</span>
											<input type="text" class="form-control size" name="businessname" id="reg_name" placeholder="Enter Your Business Name" required=""/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Business Email:</span>
											<input type="email" class="form-control size" id="reg_name" name="businessemail" placeholder="Enter Your Business Email" required=""/>
										</div>
										
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Alternate No:</span>
											<input type="text" class="form-control size" id="reg_name" name="alternateno" placeholder="Enter Your Alternate No" required=""/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Business Contact:</span>
											<input type="text" class="form-control size" id="reg_name" name="businesscontact" placeholder="Enter Your Business Contact" required=""/>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Address</span>
											<input type="text" class="form-control size" id="reg_name" name="address" placeholder="Enter Your Address" required=""/>
										</div>
										
										
										
										
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span>Category</span>
											<select id="w3_country" class="frm-field required" name="catagory" id="categoryname">
												<option value="">Select Category</option>
												<?php 					
													$select_location=mysqli_query($link,"select distinct(categoryname) from category order by categoryname asc");
													while($get_location=mysqli_fetch_array($select_location))
													{  ?>
													<option value="<?php echo $get_location['categoryname'];?>"><?php echo ucwords($get_location['categoryname']);?></option>
													<?php
													}  ?>        
											</select>
										</div>
										<div class="w3_modal_body_grid w3_modal_body_grid1">
											<span><input type="checkbox" id="c1" name="cc" required></span>
											<p style="color:yellow">I have read & agree to the <a style="color:red" href="terms-and-conditions">Terms and Conditions</a></p>
										</div>
										
										
										<button type="submit" name="submit3" class="btn btn-default">Register</button>
									</form>
								</div>
							</div> -->
						<!-- <div id="vlog" class="w3-container vendor" style="display:none">
								<h4 class="text-color">Vendor Login</h4><hr />
								<div class="fail_login"><?php if(!empty($wrong_details3)){echo "<script>alert('Invalid Credentials, please enter correct details');window.location='index';</script>  "; } ?></div>
									<div class="fail_login"><?php if(!empty($email_status2)){echo "<script>alert('Email  is not activated, please activate from your mail');window.location='index';</script>  "; } ?></div>
									<div class="modal-body request-model-body text-center">
									<form id="register-form" action="header.php" method="post" >
										<div class="form-group">
											<input type="email" class="form-control size" name="email" id="email" placeholder="Enter Your Email"/ required>
											<input type="password" class="form-control size" name="password" id="password" placeholder="Enter Your Password"/ required>
										</div>
										<div class="w3ls-loginr"> 
											
										</div>
										<a href="vforgot_password" class="forgot-login" >Forgot Password</a>
										<button type="submit" name="submit4" class="btn btn-default">Login</button>
									</form>
								</div>
							</div>
						</div> -->
					</div>
					<!-- end register popup -->
				</div>
			</section>
			<!--  end top bar -->
			<!--  navigation -->
			<header id="nav-bar" class="nav-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-3">
							<div class="wedding-logo">
								<?php   
									include('connection.php');        
									$select_location=mysqli_query($link,"select * from logo");
									while($get_location=mysqli_fetch_array($select_location))
									{
										$logo=$get_location['logo'];
										
									?>
									<a href="index"><img src="admin/img-admin/logo/<?php echo $logo; ?>"  class="img-responsive logo-changes" alt="logo"></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-md-10 col-sm-9">
							<div class="navigation">
								<div id="cssmenu">
									<ul class="css-menu">
										<li><a href="index">Home</a></li>  
										<li> <a href="about-us">About</a> </li>
										<li> <a href="weddingdir">Wedding Directory</a> </li>
										<li> <a href="search">Search</a> </li>
										<li> <a href="profile">Profile</a> </li>
										<li> <a href="contact-us">Contact</a> </li>
										<li>
										<?php if(!isset($_SESSION['cusermame']))
												{ 	?>
	
										 <a href="login_register">Login/register</a> </li>
												<?php }?>
			
									</ul>
								</div>
							</div>
						</div>        
					</div>
				</div>
			</header> 
			<!--  end navigation -->
			
			
			<script>
			function fi()
			{

				window.location.href = "vendor/login";
			}
				function openWindo(windoName) {
					var i;
					var x = document.getElementsByClassName("windo");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					document.getElementById(windoName).style.display = "block";  
				}
				function openVendor(vendorName) {
					var i;
					var x = document.getElementsByClassName("vendor");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					document.getElementById(vendorName).style.display = "block";  
				}
				function openBride(brideName) {
					var i;
					var x = document.getElementsByClassName("bride");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					document.getElementById(brideName).style.display = "block";  
				}
			</script>	
			
		
			<script>
			$(function fu() {
				$( "#datepicker" ).datepicker({
					dateFormat : 'dd/mm/yy',
					changeMonth : true,
					changeYear : true,
					yearRange: '-100y:c+nn',
					maxDate: '-1d'
				});
			});
			
		</script>
			
	</body>			
</html>