<!DOCTYPE html>

<html lang="en">
<head>
<title>Forgot Password</title>
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
<?php
	error_reporting(0);
	include('connection.php');
 if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$query="select * from tbl_users where email='$email'";
	$result   = mysqli_query($link,$query);
	
	$count=mysqli_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysqli_fetch_array($result);
		$pass  =   $rows['password'];
		$name  =   $rows['name'];
		$to = $rows['email'];
		$id = $rows['id'];
		
		
		$subject = "Reset Your Password Vendor GeminiMatrimony";
		$headers1 = "From: ".trim("GeminiMatrimony")." <".trim("geminimatri@geminimatrimony.com").">\r\n";               
		$headers1 .= "Content-type: text/html;charset=UTF-8\r\n";
		$headers1 .= "X-Priority: 1\r\n";
		$headers1 .= "X-MSMail-Priority: High\r\n";
		$headers1 .= "X-Mailer: Just My Server\r\n";
		$headers1 .= "X-Mailer: PHP". phpversion() ."\r\n";
	                      $encode_id  = $id;
	                      
	                      $forgot_link = $base_url."confirm_password?id=".$encode_id;	
$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	
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
						<br> Dear "'.$name.'"
							<br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forgot your password? Lets get you a new one<br><br>
	
						<div  style="margin: 0px auto; text-align:center;"> <a style=" width:auto;  text-align:center; color:#fff; padding:10px 15px; background:#027A3D; font-size: 18px; font-weight:600; border-radius:3PX; " href="'.$forgot_link.' ">Reset Your Password</a> </div>	
						<br><br>	
						Thank You,<br>
						GeminiMatrimony Support Team
						</body>
						</html>
						'; 
						 $sentmail = mail ( $to, $subject, $body, $headers1 );
	} else {
	if ($_POST ['email'] != "") {
	//echo "<div style='color:red'>Not found your email in our database</div>";
	$failure=1;
		}
		}
	//If the message is sent successfully, display sucess message otherwise display an error message.
	if($sentmail==1)
	{
		//echo "<div style='color:green'>Your Password Has Been Sent To Your Email Address.</div>";
		$success=1;
	}
}
?>
<!-- end page banner -->

<!-- contact us -->


  <section class="padding-mail">
  <center><h2 >Forgot Password</h2></center>
  <br>
    <div class="container"> 
        <div class="contact-form form-group change1">
		
          <form id="" action="#" method="post">
           <div class="col-md-8">
    <?php if(!empty($success)) { ?> 
    <div class="alert alert-success browse-file" role="alert" style="width:74%;"> Your Password Has Been Sent To Your Email Address.</strong>.</div>
    <?php } ?>
    <?php if(!empty($failure)) { ?>
    <div class="alert alert-danger browse-file" role="alert" style="width:74%;"> Not found your email in our database </div>
    <?php } ?>

    </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter You Email Id *" required>
              <button type="submit" name="submit" class="btn btn-pink">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- end contact us -->
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