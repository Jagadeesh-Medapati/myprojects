<!DOCTYPE html>

<html lang="en">
<head>
<title>Confirm Password</title>
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

<!-- end page banner -->
<!-- contact us -->
  <section class="padding-mail">
    <div class="container"> 
        <div class="contact-form form-group" style="position: relative;bottom: 150px;left: 300px;" >
		<?php 
			error_reporting(0);
session_start();    
include('connection.php');

$id  = $_GET['id'];
//echo $id;
if($_POST['submit'])
                {
			
			
                  if($_POST['new_password'] === $_POST['confirm_password']){
			
                        $enc_password = $_POST['new_password'];
						//echo "UPDATE tbl_users  SET password = '$enc_password' where id = '$id' ";
                        $update_password = mysqli_query($link,"UPDATE tbl_vendors SET password = '$enc_password' where id = '$id' ") or die(mysql_error());
                        $success = mysqli_affected_rows($link);
                        }
                 if($success>=1){                
                  echo "<script>alert('Password Changed');</script>";
                 }
                 else {
                  echo "<script>alert('Please Mismatched');</script>";        
                 }
                 }				 
?>
<h2>Confirm Password</h2>
         <form class="cforms" action="" method="post" id="form">
							
                     <div class="form-group">
					 <label for="username">New Password</label>
                        <input style="width:50%;" type="password" class="form-control" name="new_password" id="new_password" placeholder="Password" required>
                     </div>
					  <div class="form-group ">
					  <label for="username" >Confirm Password</label>
                        <input style="width:50%;" type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                     </div>
			
					  <button  class="btn btn-default incresew" type="submit" style=" width: 111px;color: black;" name="submit" id="password_submit" value="password_submit" onClick="return form_validate_pswd();">Submit</button> 
                   
                  <div class="btn btn-default incresew">
							<a href="/index" style="color:black;"class="">Return to Login</a>
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