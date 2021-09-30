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
 img.abimg {
    width: 100%;
    height: 325px;
}
img.img-responsive.new {
    border-radius: 15px;
    border: 2px solid #f39c12;
    box-shadow: 0px 0px 5px 0px #f39c12;
}	
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/newimg/11.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">About Us</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">About Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- about our weddlist -->
<?php
						include('connection.php');
						$query1="select * from about";
						$result1=mysqli_query($link,$query1);
						$row1=mysqli_fetch_array($result1);
							$image=$row1['image'];
							$image1=$row1['image1'];
							$image2=$row1['image2'];
							$description1=$row1['description1'];
							$description2=$row1['description2'];
							$description3=$row1['description3'];  
						?>
  <section id="about-our-weddlist" class="ptb120 why-choose-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-img">
            <img src="admin/img-admin/aboutone/<?php echo $row1['image']; ?>" class="img-responsive new" alt="why-choose">
          </div>
        </div>
        <div class="col-md-8">
          <div class="section">
            <div class="row">
              <div class="col-sm-5">
                <h3 class="section-heading">About Our Gemini<span>Matrimony</span></h3>
              </div>
              <div class="col-sm-7">
                <p class="section-sub-heading"><?php echo $description1; ?></p>
              </div>
            </div>
          </div>
          <div class="row">
        
        </div>
      </div>
    </div>
  </section>
<!-- end about our weddlist -->
<!-- plan start main block -->
  <section id="plan-start-main-block" class="plan-start-main-block bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 pad-0">
          <div class="plan-discription">
            <h3 class="plan-heading">Your Wedding Directory Start Here</h3>
            <div class="plan-text-block">
             <!-- <p class="plan-sub-heading">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem.</p>-->
              <p class="plan-sub-heading"><?php echo $description2; ?></p>
            </div>

          </div>
        </div>
         <div class="col-sm-7">
         
          <div class="aimg">
            <img class="abimg" src="admin/img-admin/abouttwo/<?php echo $row1['image1']; ?>" class="img-responsive" alt="why-choose">
          </div>
       
        </div>
      </div>
    </div>
  </section>
<!-- end plan start main block -->

<!-- why choose block -->
  <section id="why-choose" class="why-choose-main-block ptb120">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <h3 class="section-heading">Why Choose Gemini Matrimony</h3>
              </div>
              <div class="col-md-8 col-sm-8">
                <p class="section-sub-heading"><?php echo $description3; ?></p>
              </div>
            </div>
          </div>
      
        </div>
     <div class="col-md-4">
          <div class="weddlist-img">
            <img src="admin/img-admin/aboutthree/<?php echo $row1['image2']; ?>" class="img-responsive new" alt="weddlist img">
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end why choose -->

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