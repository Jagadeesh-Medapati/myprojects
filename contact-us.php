<?php 
error_reporting(0);
?>

	<?php
	include('connection.php');
	if(isset($_POST['submit'])){
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject1 =$_POST["subject"];

	$message1= mysqli_real_escape_string($link, $_POST['message']);
	$phone= $_POST["phone"];
	
	
	$sql="INSERT INTO contact(name,email,subject,message,phone ) VALUES ('$name','$email','$subject1','$message1','$phone')";
	$qry=mysqli_query($link,$sql);
	if($qry){
	
	$headers .="From:GeminiMatrimony <geminimatri@geminimatrimony.com>\n";
	$headers .= "Organization: Sender Organization\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	//$to="info@triplogistics.com";
	$to="geminimatrimony2018@gmail.com";
	
	$subject="Contact";
	
	$message .="<p style='text-align: left; font-family: &quot;Times New Roman&quot;font-size: 20px ! important;'><p>";
	$message .="<br>";	
	$message .= "<html><body>";
	
	$message .= "<table class='table table-striped' border='1'>";
	$message .= "<thead bgcolor='#00ffff'>";
	
	$message .= "<tr>";
	$message .= "<th style='width: 1% ! important;'> Name</th>";
	$message .= "<th style='width: 1% ! important;'> Email</th>";
	$message .= "<th style='width: 1% ! important;'> Subject</th>";
	$message .= "<th style='width: 1% ! important;'> Message</th>";
	$message .= "<th style='width: 1% ! important;'> Phone</th>";
	
	
	
	$message .= "</tr>";
	
	$message .= "</thead>";
	$message .= "<tr>";
	
	$message .= "<td>$name</td>";
	$message .= "<td>$email</td>";
	$message .= "<td>$subject1</td>";
	$message .= "<td>$message1</td>";
	$message .= "<td>$phone</td>";
	$message .= "</tr>";
	
	
	$message .= "</table>";
	$message .= "</body></html>";
	
	mail($to,$subject,$message,$headers);
	 // $success=1; 
	  
	echo '<script>alert("Thank you for contacting us ..! Our team will get back to you soon")</script>';
	echo "<script> window.location.assign('contact-us') </script>";
	
	}else{
	
	echo '<script>alert("Something is wrong can you please Try once")</script>';
	
	}
	}	
	
	?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Contact us</title>
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

.contact-us-block {
    padding: 40px 50px 37px 50px;
   
}
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/contact-us/1.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Contact Us</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- contact us -->
<?php
						include('connection.php');
						$query1="select * from contactmsg";
						$result1=mysqli_query($link,$query1);
						$row1=mysqli_fetch_array($result1);
						
							$description1=$row1['description1'];
							$description2=$row1['description2'];
							$description3=$row1['description3'];  
						?>
  <section class="main-container">
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">Gemini Matrimony Contact Details</h3>
        <p class="section-sub-heading"></p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-1.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Our Address</h6>
              <div class="contact-sub-heading" nowrap><?php echo $description1; ?></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-2.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Call Us</h6>
              <a href="tel:#"><?php echo $description2; ?></a><br>
              
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="contact-us-block">
            <div class="contact-us-icon"> 
              <img src="images/contact-us/contact-icon-3.png" class="img-responsive" alt="contact-icon">
            </div>
            <div class="contact-us-dtl text-center">
              <h6 class="contact-heading">Mail Us</h6>
              <a class="textc" href="mailto:#"><?php echo $description3; ?></a>
             
            </div>
          </div>
        </div>
      </div>
      <div class="mt100">
        <div class="section text-center">
          <h3 class="section-heading">Feel Free To Contact Us</h3>
         
        </div>
         <?php if(!empty($success))  //echo  "<div style='color:red;'>Thank you for contacting us ..! Our team will get back to you soon.</div>"; ?> 
        <div class="contact-form form-group">
          <form id="" action="#" method="post">
            <div class="row">
              <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="YOUR NAME *" required/>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="YOUR PHONE" required/>
              </div>
              <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="YOUR EMAIL ADDRESS *" required>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="SUBJECT"/>
              </div>
            </div>
            <textarea name="message" id="message" class="form-control" placeholder="YOUR MESSAGE *"></textarea>
            <div class="message-button text-center">
              <button type="submit" name="submit" class="btn btn-pink">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="mt100">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="1150" height="403" id="gmap_canvas" src="https://maps.google.com/maps?q=Plot%20No%3A856%2CRoad%20No%20%3A10%2CVasanthnagar%2C%20Jntu%20Post.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:403px;width:1150px;}.gmap_canvas {overflow:hidden;background:none!important;height:403px;width:1150px;}</style></div></div>
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