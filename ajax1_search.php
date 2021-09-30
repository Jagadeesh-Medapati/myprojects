<?php
include("connection.php");	
$caste_name = $_POST['sup_caste_name'];
$select_products = mysqli_query($link,"select * from tbl_users where caste like'%".$caste."%' ") or die(mysql_error());		
$count = mysqli_num_rows($select_products);
if($count>=1)
{
	while($result=mysqli_fetch_array($select_products))
	{
	$id=$result['id'];		
	?>
 <!DOCTYPE html>

<html lang="en">
<head>
<title>Profile</title>
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
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Match Profile</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">Match Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- listing with top map -->
  <section id="listing-with-topmap" class="listing-with-topmap-main-block">
    <div class="container">
      <div class="listing-with-topmap-block">
        <div class="row">	
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
                <a href="profile-details"><img src="images/brides/1.jpg" class="img-responsive profile-img" alt="category-img"></a>
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading"><a href="profile-details">Persion Details</a></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                         <p>Age / Height: </p>
						 <p>Religion: </p>
						 <p>Marital Status: </p>
						 <p>Location11:</p>
						 <p>Education2: </p>
						</div>
                      <div class="col-xs-6 pad-lft-0">
                         <p>5ft 5in 163cm</p>
						 <p><?php echo $result['name'];?> </p>
						 <p>Single1</p>
						 <p>Hyderabad</p>
						 <p>VIP</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
<!-- end listing with top map -->
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
<script type="text/javascript" src="js/jquery.mapit.js"></script> <!-- mapit js-->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  

</body>
</html>
 <?php
}
  }
  else
  {
	  echo "<h4 style='color:#FF0000;'>Sorry, No data is found22</h4>";
  }
	

?>