<!DOCTYPE html>
<html lang="en">
<head>
<title> Login/SignUp </title>
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
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/> <!-- datepicker css-->
<link href="css/flaticon.css" rel="stylesheet" type="text/css"/> <!-- flaticon css -->
<link href="css/share-tooltip.css" rel="stylesheet" type="text/css"/><!-- share tooltip css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<link href="css/stucture.css" rel="stylesheet" type="text/css"/> <!-- stucture css -->
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css"/> 
<link href="css/multi.css" rel="stylesheet" type="text/css"/> 
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
  <section id="page-banner" class="page-banner" style="background-image: url('images/newimg/15.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Login / Register</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- real wedding single listing -->

<?php
					include('connection.php');
					include('functions.php');
					if(isset($_POST['submit1']))
					{
						$password=$_POST['password'];
						$email=$_POST['email'];
						$name=$_POST['name'];	
						$phone=$_POST['phone'];
						$profilefor=$_POST['profilefor'];	
						$gender=$_POST['gender'];	
						$dob=$_POST['datepicker'];	
						$religion=$_POST['religion'];
						$referraliduser=$_POST['referraliduser'];	
						$referralid=uniqid();	
						
							$ipaddress = '';
							if (isset($_SERVER['HTTP_CLIENT_IP']))
								$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
							else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
								$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
							else if(isset($_SERVER['HTTP_X_FORWARDED']))
								$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
							else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
								$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
							else if(isset($_SERVER['HTTP_FORWARDED']))
								$ipaddress = $_SERVER['HTTP_FORWARDED'];
							else if(isset($_SERVER['REMOTE_ADDR']))
								$ipaddress = $_SERVER['REMOTE_ADDR'];
							else
								$ipaddress = 'UNKNOWN';
						
						$servier_ip = $ipaddress;	
						if(function_exists('date_default_timezone_set')) {
    					date_default_timezone_set("Asia/Kolkata");
						}
						$date = date("d/m/Y");
						$time=date('h:i A');		
						//echo "INSERT INTO `tbl_users` (`profilefor`,`gender`,`dob`,`religion`,`referralid`,`name`,`phone`,`email`,`password`,`date`,`email_status`) VALUES('".$profilefor."','".$gender."','".$dob."','".$religion."','".$referralid."','".$name."','".$phone."','".$email."','".$password."',now(),'inactive')";
						$sqlstt=mysqli_query($link,"INSERT INTO `tbl_users` (`profilecreatedby`,`time`,`ipAddress`,`referraliduser`,`gender`,`dob`,`religion`,`referralid`,`name`,`phone`,`email`,`password`,`date`,`email_status`) VALUES('".$profilecreatedby."','".$time."','".$servier_ip."','".$referraliduser."','".$gender."','".$dob."','".$religion."','".$referralid."','".$name."','".$phone."','".$email."','".$password."','".$date."','inactive')");
						

						
						//echo mysqli_error($link);exit;	 
						$id =mysqli_insert_id($link);
						//echo "select * from tbl_users where id= '".$id."'";exit;
						$sql=mysqli_query($link,"select * from tbl_users where id= '".$id."'");
						$c=mysqli_num_rows($sql);
						$row=mysqli_fetch_array($sql);
						if($row)
						{
							$_SESSION['id']=$row['id'];
							
						}
						//echo "success";
						//$sqlstt=1;
						if($sqlstt==1){ 
							$to=$_POST['email'];
							$subject = "User Activation Link";
							$headers="From: Gemini Matrimony"; 
							$headers ="From: GeminiMatrimony <geminimatri@geminimatrimony.com>\n";
							//$headers .= "Organization: Sender Organization\r\n";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
							$headers .= "X-Priority: 3\r\n";
							$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
							$encode_id  = ourl_encode($id);
							$act_link = $base_url."account-verification-users?id=".$encode_id;	
							$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
							<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
							<title>Email tempalte</title>
							<style>
							body {
							margin: 0;
							padding: 0;
							}
							img {
							outline: 0;
							}
							</style>
							</head>
							<body>
							<br> Dear "'.$name.'"- <strong>Profile Id:</strong> "'.$id.'"
							
							<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You have successfully registered in Gemini Matrimony. To use your account in Gemini Matrimony you need to activate account. To activate account, please click on below link.<br><br>
							
							<div  style="margin: 0px auto; text-align:center;"> <a style=" width:auto;  text-align:center; color:#fff; padding:10px 15px; background:#027A3D; font-size: 18px; font-weight:600; border-radius:3PX; " href="'.$act_link.' ">Click here for account activation</a> </div>
							
							<br><br>
							
							Thank You,<br>
							Gemini Matrimony Support.
							</body>
							</html>
							';    
							
							if(mail($to, $subject, $message, $headers)){
								
								echo "<script>alert('Thank you for registering! A confirmation email has been sent to $to. Please click on the Activation Link to Activate your account');window.location='index';</script>  ";					
							}
							else 
							{
								$msg = 'mail sending fail';
							}	
							$success=1; 
							
						}	
						else{
							echo "<script>alert('Email Already Exists');window.location='index';</script>  ";
						}
						
						
						
					}
				?>

<?php
								
								include('connection.php');
								if(isset($_POST['submit2']))
								{
									$email=$_POST['email'];
									$password=$_POST['password'];	
									$ipaddress = '';
									if (isset($_SERVER['HTTP_CLIENT_IP']))
										$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
									else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
										$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
									else if(isset($_SERVER['HTTP_X_FORWARDED']))
										$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
									else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
										$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
									else if(isset($_SERVER['HTTP_FORWARDED']))
										$ipaddress = $_SERVER['HTTP_FORWARDED'];
									else if(isset($_SERVER['REMOTE_ADDR']))
										$ipaddress = $_SERVER['REMOTE_ADDR'];
									else
										$ipaddress = 'UNKNOWN';
								
									$servier_ip = $ipaddress;	
									if(function_exists('date_default_timezone_set')) {
									date_default_timezone_set("Asia/Kolkata");
									}
								
									$date = date('y-m-d h:i:s');
									
									
											
									
									$sqlstt1=mysqli_query($link,"select * from tbl_users where email='".$email."' and password='".$password."'");
									$result6=mysqli_num_rows($sqlstt1);
									$reslut10=mysqli_fetch_array($sqlstt1);
									$username=$reslut10['name'];
									$userid=$reslut10['id']; 
									$gender12=$reslut10['gender']; 
									$hold54=$reslut10['hold'];
									$email=$reslut10['email'];
									$email_status10=$reslut10['email_status'];
									if($result6==0)
									{
										$wrong_details10 =1;
									}
									else
									{
										if($email_status10=='active')
										{
											
											$sqlstt1=mysqli_query($link," INSERT INTO `bg_login`(`profile_id`, `time`, `ip_add`) VALUES ('$userid','$date','$servier_ip')");
											
											session_start();
											$_SESSION['cusername']=$username;
											$_SESSION['userid'] = $userid;						  
											$_SESSION['email'] = $email;
											$_SESSION['gender1'] = $gender12;
											$_SESSION['hold'] = $hold54;
												//echo "<script>window.location='index';</script>  ";
											echo "<script>window.location='dashboard/index';</script>  ";
										}
										else
										{
											$email_status10 =1;
										}
									}	
								}
							?>
					

					<?php
								include('connection.php');
								
								if(isset($_POST['submit3']))
								{
									$name=$_POST['name'];
									$phone=$_POST['phone'];
									$email=$_POST['email'];
									$password=$_POST['password'];	
									$businessname=$_POST['businessname'];
									$businessemail=$_POST['businessemail'];	
									$alternateno=$_POST['alternateno'];	
									$businesscontact=$_POST['businesscontact'];	
									$address=$_POST['address'];
									$city=$_POST['city'];			
									$area=$_POST['area'];			
									$catagory=$_POST['catagory'];			
									$referralid=$_POST['referralid'];	
									$otp = rand(100000,10000000);
									/*if(!empty($_POST['date'])){ 
									$date=actualDate($_POST['date']);
									}
									else $date=date("d-m-Y");
										date_default_timezone_set('Asia/kolkata');*/
										
										if(function_exists('date_default_timezone_set')) {
										date_default_timezone_set("Asia/Kolkata");
									}

									$date = date("Y-m-d");
									$time=date('h:i A');
									//echo "INSERT INTO `tbl_vendors` (`name`,`phone`,`email`,`password`,`businessname`,`businessemail`,`alternateno`,`businesscontact`,`address`,`city`,`area`,`catagory`,`date`,`email_status`) VALUES('".$name."','".$phone."','".$email."','".$password."','".$businessname."','".$businessemail."','".$alternateno."','".$businesscontact."','".$address."','".$city."','".$area."','".$catagory."',now(),'inactive')";exit;
									
									$sqlstt=mysqli_query($link,"INSERT INTO `tbl_vendors` (`name`,`time`,`phone`,`email`,`password`,`businessname`,`businessemail`,`alternateno`,`businesscontact`,`address`,`city`,`area`,`catagory`,`date`,`email_status`,`otp`) VALUES('".$name."','".$time."','".$phone."','".$email."','".$password."','".$businessname."','".$businessemail."','".$alternateno."','".$businesscontact."','".$address."','".$city."','".$area."','".$catagory."','".$date."','inactive','".$otp."')");
									$last_id =mysqli_insert_id($link);
									//$lastid =mysqli_insert_id($link);
									//echo "select * from tbl_vendors where id= '".$last_id."'";
									$sql=mysqli_query($link,"select * from tbl_vendors where id= '".$last_id."'");
									
									
									
									
									$c=mysqli_num_rows($sql);
									$row123=mysqli_fetch_array($sql);
									$base_url1=$base_url."verifyotp?id=".$last_id;
									if($row123)
									{
										//echo "<pre>"; print_r($_SESSION); echo "</pre>";
										$_SESSION['vid']=$row123['id'];
										$_SESSION['email']=$row123['email'];
										$_SESSION['mobileno']=$row123['mobileno'];
										$_SESSION['name']=$row123['username'];
										$_SESSION['user_type']=$row123['user_type'];
										$to=$_POST['email'];
										
										$subject = "Vendor Registration OTP For Gemini Matrimony";
										$headers="From: Matrimony"; 
										$headers ="From: Matrimony<geminimatri@geminimatrimony.com>\n";
										//$headers .= "Organization: Sender Organization\r\n";
										$headers .= "MIME-Version: 1.0\r\n";
										$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
										$headers .= "X-Priority: 3\r\n";
										$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
										//$encode_id  = ourl_encode($id);
										//$act_link = $base_url."account-verification-users?id=".$encode_id;  
										$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
										<html xmlns="http://www.w3.org/1999/xhtml">
										<head>
										<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
										<title>Email tempalte</title>
										<style>
										body {
										margin: 0;
										padding: 0;
										}
										img {
										outline: 0;
										}
										</style>
										</head>
										<body>
										<br> Dear "'.$name.'" - <strong>Vendor Id:</strong> "'.$last_id.'"
										
										<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Customer registration OTP  "'.$otp.'" <br><br>
										
										<div  style="margin: 0px auto; text-align:center;"> </div>
										
										<br><br>
										
										Thank You,<br>
										Matrimony Support.
										</body>
										</html>
										'; 
										
										
										
										
										if(mail($to, $subject, $message, $headers)){
											
											echo "<script>alert('Thank you for registering! OTP has been sent to $to.');window.location= '$base_url1';</script>";					
										}
										else 
										{
											$msg = 'mail sending fail';
										}	
										$success=1; 
										
									}	
									else{
										echo "<script>alert('Email Already Exists');window.location='index';</script>  ";
									}
								}
							?>
							

							<?php
								
								include('connection.php');
								if(isset($_POST['submit4']))
								{
									$email=$_POST['email'];
									$password=$_POST['password'];	

									$ipaddress = '';
									if (isset($_SERVER['HTTP_CLIENT_IP']))
										$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
									else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
										$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
									else if(isset($_SERVER['HTTP_X_FORWARDED']))
										$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
									else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
										$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
									else if(isset($_SERVER['HTTP_FORWARDED']))
										$ipaddress = $_SERVER['HTTP_FORWARDED'];
									else if(isset($_SERVER['REMOTE_ADDR']))
										$ipaddress = $_SERVER['REMOTE_ADDR'];
									else
										$ipaddress = 'UNKNOWN';
								
									$servier_ip = $ipaddress;	
									if(function_exists('date_default_timezone_set')) {
									date_default_timezone_set("Asia/Kolkata");
									}
								
									$date = date('y-m-d h:i:s');
									//echo "select * from tbl_vendors where email='".$email."' and password='".$password."'";exit;
									$sqlstt1=mysqli_query($link,"select * from tbl_vendors where email='".$email."' and password='".$password."'");
									$result5=mysqli_num_rows($sqlstt1);
									$reslut1=mysqli_fetch_array($sqlstt1);
									$name=$reslut1['name'];
									$vendorid=$reslut1['id']; 
									$email=$reslut1['email'];
									$email_status2=$reslut1['email_status'];
									if($result5==0)
									{
										$wrong_details3 =1;
									}
									else
									{
										if($email_status2=='active')
										{	
											$sqlstt1=mysqli_query($link," INSERT INTO `v_login`(`profile_id`, `time`, `ip_add`) VALUES ('$vendorid','$date','$servier_ip')");
											session_start();
											$_SESSION['vname']=$name;
											$_SESSION['vid'] = $vendorid;						  
											$_SESSION['email'] = $email;
											
											
											echo "<script>window.location='vendor/index';</script>  ";
										}
										else
										{
											$email_status2 =1;
										}
									}	
								}
							?>
							


	<!-- Search form -->
	<div class="w3ls-list">
		<div class="container">
	<!--	<h2>Search your Match</h2> -->
		<div class="col-md-12 profiles-list-agileits">
		<!--Horizontal Tab-->
			<div id="parentHorizontalTab">
				<ul class="resp-tabs-list hor_1">
					<li>Vendor Register</li>
					<li>Vendor Login</li>
					<li>Bride & Groom Register</li>
				   	<li>Bride & Groom Login</li>
				</ul>
				<div class="resp-tabs-container hor_1">
					<div>	
	
				<!--form one -->  
			            <div class="w3_regular_search">
							<form action="#" method="post">	
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b> Name :</b></div>
									<div class="col-sm-3">
									<input type="text" class="form-control size" name="name" id="name" placeholder="Enter Your  Name" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Email :</b></div>
									<div class="col-sm-3">
									<input type="email" class="form-control size" name="email" placeholder="Enter Your Email" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Password :</b></div>
									<div class="col-sm-3">
									<input type="password" class="form-control size" name="password" id="reg_password" placeholder="Enter Your Password"/ required>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Business Name :</b></div>
									<div class="col-sm-3">
									<input type="text" class="form-control size" name="businessname" id="reg_name" placeholder="Enter Your Business Name" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Business Email :</b></div>
									<div class="col-sm-3">
									<input type="email" class="form-control size" id="reg_name" name="businessemail" placeholder="Enter Your Business Email" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Business Contact :</b></div>
									<div class="col-sm-3">
									<input type="text" class="form-control size" id="reg_name" name="businesscontact" placeholder="Enter Your Business Contact" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Address :</b></div>
									<div class="col-sm-3">
									<input type="text" class="form-control size" id="reg_name" name="address" placeholder="Enter Your Address" required=""/>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Category :</b></div>
									<div class="col-sm-3">
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
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-6"><input type="checkbox" id="c1" name="cc" required><p>I have read & agree to the <a style="color:red" href="terms-and-conditions">Terms and Conditions</a></p></div>
									<div class="col-sm-3"><button type="submit" name="submit3" class="btn btn-default">Register</button>
									</div>
									
									<div class="clearfix"> </div>
							</div>
							</form>
						</div> 
						<!--End form one --> 
					</div>
					<div>
						 <!--form two --> 
						<div class="w3_regular_search">
							<div class="fail_login"><?php if(!empty($wrong_details3)){echo "<script>alert('Invalid Credentials, please enter correct details');window.location='index';</script>  "; } ?></div>
								<div class="fail_login"><?php if(!empty($email_status2)){echo "<script>alert('Email  is not activated, please activate from your mail');window.location='index';</script>  "; } ?></div>
									
									<form id="register-form" action="#" method="post" >
									<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Email :</b></div>
									<div class="col-sm-3">
									<input type="email" class="form-control size" name="email" id="email" placeholder="Enter Your Email"/ required>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
									</div>
									<div class="form_but1">
									
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Password :</b></div>
									<div class="col-sm-3">
									<input type="password" class="form-control size" name="password" id="password" placeholder="Enter Your Password"/ required>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
									</div>
							   
							   <div class="form_but1">
							   <div class="col-sm-4"></div>
							   <div class="col-sm-4">
							   <span><a href="vforgot_password" class="forgot-login" >Forgot Password</a></span></div>
							   <div class="col-sm-4"><button type="submit" name="submit4" class="btn btn-default">Login</button></div>
									<div class="clearfix"> </div>
									</div>
							  
								</form>
								</div>
						
						 <!-- end form two --> 
					</div>
					
					
					<!-- form three--> 
					<div class="w3_regular_search">
							<form action="#" method="post">	
							  <div class="form_but1">
							  <div class="col-sm-3"></div>
								<label class="col-sm-3 ">	Name:</label>
								<div class="col-sm-3 ">
								<input type="text" class="form-control size" name="name" id="reg_name" placeholder="Enter Your Bride or Groom Name"/>

								</div>
								<div class="col-sm-3"></div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
							  <div class="col-sm-3"></div>
								<label class="col-sm-3 ">Gender:</label>
								<div class="col-sm-3 ">
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
								<div class="col-sm-3"></div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
							  <div class="col-sm-3"></div>
								<label class="col-sm-3 ">	Date Of Birth:</label>
								<div class="col-sm-3 ">
								<input type="date"  name="datepicker" id="dob" placeholder="Date Of Birth" required="" />

								</div>
								<div class="col-sm-3"></div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
							  <div class="col-sm-3"></div>
								<label class="col-sm-3 ">religion:</label>
								<div class="col-sm-3 ">
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
								<div class="col-sm-3"></div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
							  <div class="col-sm-3"></div>

								<label class="col-sm-3">	Email:</label>
								<div class="col-sm-3 ">
								<input type="email" class="form-control size" name="email" placeholder="Enter Your Email" required=""/>

								</div>
								<div class="col-sm-3"></div>

								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
									<div class="col-sm-3"></div>
								<label class="col-sm-3">	Password:</label>
								<div class="col-sm-3">
								<input  type="password" class="form-control size"  name="password" id="reg_password" placeholder="Enter Your Password"/>
								</div>
								<div class="col-sm-3"></div>
								<div class="clearfix"> </div>

							  </div>
							  <div class="form_but1">
									<div class="col-sm-3"></div>
								<div class="col-sm-6">	<input type="checkbox" id="c1" name="cc" required><p>I have read & agree to the <a style="color:red" href="terms-and-conditions">Terms and Conditions</a></p>
								</div>
								<div class="col-sm-3">
								<button type="submit" name="submit1" class="btn btn-default">Register</button>

								</div>
								<div class="clearfix"> </div>

								
							  </div>
							  
							
							<!--<center><a href="" name="profile" onClick="wedding_search1()" type="submit" class="btn btn-warning serch">Submit</a></center>-->
							</form>
							<!--end form three--> 
						</div>
						
						
						  
   
	   
	   
						<!-- form fore--> 
						<div class="w3_regular_search">
						<div class="fail_login"><?php if(!empty($wrong_details10)){echo "<script>alert('Invalid Credentials, please enter correct details');window.location='index';</script>  "; } ?></div>
									<div class="fail_login"><?php if(!empty($email_status10)){echo "<script>alert('Email  is not activated, please activate from your mail');window.location='index';</script>  "; } ?></div>
										
									<form id="register-form" action="#" method="post" >
									<div class="form_but1">
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Email :</b></div>
									<div class="col-sm-3">
									<input type="email" class="form-control size" name="email" id="email" placeholder="Enter Your Email"/ required>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
									</div>
									<div class="form_but1">
									
									<div class="col-sm-3"></div>
									<div class="col-sm-3"><b>Password :</b></div>
									<div class="col-sm-3">
									<input type="password" class="form-control size" name="password" id="password" placeholder="Enter Your Password"/ required>
									</div>
									<div class="col-sm-3"></div>
									<div class="clearfix"> </div>
									</div>
							   
							   <div class="form_but1">
							   <div class="col-sm-4"></div>
							   <div class="col-sm-4">
							   <span><a href="forgot_password" class="forgot-login" >Forgot Password</a></span></div>
							   <div class="col-sm-4"><button type="submit" name="submit2" class="btn btn-default">Login</button></div>
									<div class="clearfix"> </div>
									</div>
							  
								</form>
								</div>
						
							<!--end form fore--> 
						
				</div>
			</div>
		</div>

	<div class="clearfix"></div>
	</div>
	</div>
<!-- end real wedding single listing -->
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
<script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript" src="js/multi.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
		
					$name.text($tab.text());
		
					$info.show();
				}
			});
	 
		});
	</script>
	<script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});
</script>
<script type="text/javascript"> 
 function profile()   
 {	 
	 var sup_caste_name= $("#sup_caste_name").val();
	 alert(sup_insurance_name);
	  $.ajax({
		url:"ajax1_search.php",
		type:"post",
		data:{sup_caste_name:sup_caste_name},
		success:function(res){
			$("#search_result1").html(res); 
			}
		}) 
	
 }
 <script>
			$(function fu() {
				$( "#dob" ).datepicker({
					dateFormat : 'dd/mm/yy',
					changeMonth : true,
					changeYear : true,
					yearRange: '-100y:c+nn',
					maxDate: '+1d'
				});
			});
			
		</script>
</script>
	
<!-- end jquery -->
</body>
</html>