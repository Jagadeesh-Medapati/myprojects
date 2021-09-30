<!DOCTYPE html>

<html lang="en">
<head>
<title>Latest Events</title>
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
    /* font-family: 'Open Sans', sans-serif;
  overflow-x: hidden !important;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
         */
} 
</style>
</head>
<!-- end head -->
<!--body start-->
<body>

  <?php include('header.php');?><!--  end navigation -->
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Latest News</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Blog</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- blog single -->

  <section class="pt120 pb80">
    <div class="container">
      <div class="blog-single-block">
        <div class="row">
            <?php
            $id=$_GET['id'];
            include('connection.php');
            $query1="select * from latestnews where id='$id'";
            $result1=mysqli_query($link,$query1);
            $row1=mysqli_fetch_array($result1);
            $image=$row1['img']; 
            $name=$row1['name'];   
            $date=$row1['date'];   
            $description=$row1['description'];  
            $id=$row1['id'];    
            ?>
            <div class="col-md-12">
               <div class="col-sm-8 col-md-8 ">   
                  <div class="single-block">
                    <div class="blog-img">
                        <img src="admin/img-admin/latestnewsimage/<?php echo $image; ?>" class="img-responsive blogdata" alt="blog-img">
                        <div class="meta-tag"><?php echo $date; ?></div>
                     </div>
                   <div class="blog-dtl">
                    <h4 class="blog-heading"><?php echo $name; ?></h4>
                    <p style="color:blue;" class="blog-dis"><?php echo $description; ?></p>
                
                  </div>
                </div>
              
            </div>
       
     <div class="col-md-4 profile_right">
        <div class="view_profile">
          <h3>Old News</h3>
         
          <ul class="profile_item">
              <?php
	include("connection.php");
									$select_projects= mysqli_query($link,"SELECT * FROM latestnews LIMIT 4") or die(mysql_error());
									$i=1;
									while($result=  mysqli_fetch_array($select_projects)){  
										$id1 = $result['id']; 
										$image12 = $result['img']; 
										$age = $result['age']; 
										$height = $result['height']; 
										$description = $result['description']; 
										$name12 = $result['name'];
										$gender15 = $result['gender']; 
									$base_url23="/latest-news?id=".$id1;

									?>
		   <?php

         // include('connection.php');
          //$query12="select * from latestnews";
        
          /*while($result12=mysqli_query($link,$query12)){
          $row12=mysqli_fetch_array($result12);
          $image=$row12['img']; 
        $name12=$row12['name'];   $date=$row12['date'];   $description=$row12['description'];  
          $id1=$row12['id'];
		   $base_url23=$base_url."latest-news?id=".$id1;*/
          ?>
            <a href="#">
             <li class="profile_item-img">
                <img src="admin/img-admin/latestnewsimage/<?php echo $image12; ?>"  class="img-responsive profiledetails" alt=""/>
             </li>
             <li class="profile_item-desc">
                <h4 class="blogcolor"><?php echo $name12; ?></h4>
                <p class="blogdecolor" style:='color:="black"'> <?php  echo substr($result['description'],0,10).'...'; ?></p>
              <a class="blogreadmorea" href="<?php echo $base_url23; ?>">Read more</a>
             </li>
             <div class="clearfix"> </div>
            </a>
            <?php } ?>
           </ul>
           
          </div>
        </div>
       <div class="clearfix"> </div>



        </div>
        </div
       </div>      
    </div>
  </section>
<!-- end blog single -->
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
<!-- end jquery -->
</body>
</html>/