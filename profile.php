<?php
session_start(); 
error_reporting(0);
//ob_start();
//echo "<pre>"; print_r($_SESSION); echo "</pre>";
include('connection.php');
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$gender1 = $_SESSION['gender1'];
$gender = $_SESSION['gender'];
date_default_timezone_set("Asia/Calcutta");
if (empty($_SESSION['username'])) {
   echo '<script type="text/javascript">' . "\n"; 

          //echo 'window.location="http://www.aoepartner.com/gemini-matrimonynew/index";'; 

           echo '</script>';  
}
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
  <?php $i=0;?>
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/newimg/5.jpg');"> 
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
  <section id="listing-with-topmap" class="listing-with-topmap-main-block newcolor">
      <div class="container">
          <div class="row" >
		    <p style="color:white;text-align:center">To View Full Profile Click On Image.</p>    
		</div>
          </div>
    <div class="container">
        		
	<div class="listing-with-topmap-block" id="search_result1">
		<?php
		include("connection.php");	
	
		?>

		<div class="row">
		<?php
		 include("connection.php");	
            $select_user_type =mysqli_fetch_array(mysqli_query($link,"select * from tbl_users where  id='".$userid."'"));
            $amount = $select_user_type['amount'];
            $hold = $select_user_type['hold'];

             $query = "select * from tbl_users where hold='unhold'";
            if(!empty($_POST['caste_name']) ) {
              $query .= " AND caste like '".trim($_POST['caste_name'])."'";
            }
         
            if(!empty($_POST['highesteducation_name'])) {
            $query .= "AND highesteducation like '".trim($_POST['highesteducation_name'])."'";
            }
	  
            if(!empty($_POST['gender'])) {
             $query .= " AND gender like '".trim($_POST['gender'])."'";
            }
			if(!empty($_POST['age'])) {
          $query .= " AND age BETWEEN '".trim($_POST['age'])."' AND '".trim($_POST['age1'])."' ";
            }
			if(!empty($_POST['height'])) {
             $query .= " AND height BETWEEN '".trim($_POST['height'])."'AND '".trim($_POST['height1'])."' ";
            }
			if(!empty($_POST['maritalstatus'])) {
			    
            $query .= " AND maritalstatus like '".trim($_POST['maritalstatus'])."'";
            }
			if(!empty($_POST['religion'])) {
             $query .= " AND religion like '".trim($_POST['religion'])."'";
            }
			if(!empty($_POST['mothertongue'])) {
             $query .= " AND mothertongue like '".trim($_POST['mothertongue'])."'";
            }
            if(!empty($_POST['profileid'])) {
             $query .= " AND hold='unhold' and id like '".trim($_POST['profileid'])."'";
            }
			
            // and so on
            $search_doc = mysqli_query($link,$query);
		  $count = mysqli_num_rows($search_doc);
		  if($count>=1)
		  {
		while($result=mysqli_fetch_array($search_doc))
		{
		$id=$result['id'];
        $image=$result['image'];
        $gender=$result['gender'];
	?>
	<?php if(!empty($_SESSION['userid'])  && (empty($_SESSION['gender1'])  ) ) { ?>
	<?php if( $hold=='unhold'){ ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
                else { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
              }
              else { ?>

                  <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">
              <?php  }

              ?>
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                         <p>Name <span class="mustallignincenter">:</span> </p>
                         <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				         <p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                          <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
             <?php } else { ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                  <a data-toggle="modal" data-target="#myModal1234"  class="">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
                else { ?>
                  <a data-toggle="modal" data-target="#myModal1234"  class="">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
              }
              else { ?>

                    <a data-toggle="modal" data-target="#myModal1234"  class="">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a> 
              <?php  }

              ?>
              </div>
              <div class="feature-dtl top-map-dtl-pad" >
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row"  >

                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                          <p>Name <span class="mustallignincenter">:</span> </p>
                          <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p bgcolor:blue;><?php echo $result['name'];?> </p>
                         <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
          <?php } 
          else if(empty($_SESSION['gender1'])){ ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");
              
              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
										  <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
                else { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
											<img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
									</a>

              <?php  }
              }
              else { ?>

                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
						  				<img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
									</a> 
            <?php  }
              
              ?>
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                        <p>Name <span class="mustallignincenter">:</span> </p>
                             <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                            <p><?php echo $result['name'];?> </p>
                          <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
						 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }
 ?>          
        <?php
	}
		  }
		  else
		  {
			  $i=1;
		  }
			
	  //}
	 ?>
        </div>
		 <?php if($_SESSION['gender1']=='female'){ ?>
		
        <div class="row">
		<?php
		 include("connection.php");	
		
            $select_user_type =mysqli_fetch_array(mysqli_query($link,"select * from tbl_users where id='".$userid."'"));
            $amount = $select_user_type['amount'];
            $hold = $select_user_type['hold'];

             $query = "select * from tbl_users where hold='unhold'";
            if(!empty($_POST['caste_name']) ) {
              $query .= " AND gender='male' and caste like '".trim($_POST['caste_name'])."'";
            }
         
            if(!empty($_POST['highesteducation_name'])) {
            $query .= "AND gender='male' and highesteducation like '".trim($_POST['highesteducation_name'])."'";
            }
	  
            if(!empty($_POST['gender'])) {
             $query .= " AND gender like '".trim($_POST['gender'])."'";
            }
			if(!empty($_POST['age'])) {
          $query .= " AND age BETWEEN '".trim($_POST['age'])."' AND '".trim($_POST['age1'])."' ";
            }
			if(!empty($_POST['height'])) {
             $query .= " AND height BETWEEN '".trim($_POST['height'])."'AND '".trim($_POST['height1'])."' ";
            }
			if(!empty($_POST['maritalstatus'])) {
			    
            $query .= " AND maritalstatus like '".trim($_POST['maritalstatus'])."'";
            }
			if(!empty($_POST['religion'])) {
             $query .= " AND religion like '".trim($_POST['religion'])."'";
            }
			if(!empty($_POST['mothertongue'])) {
             $query .= " AND mothertongue like '".trim($_POST['mothertongue'])."'";
            }
            if(!empty($_POST['profileid'])) {
             $query .= " AND hold='unhold' and id like '".trim($_POST['profileid'])."'";
            }
			
            // and so on
            $search_doc = mysqli_query($link,$query);
		  $count = mysqli_num_rows($search_doc);
		  if($count>=1)
		  {
		while($result=mysqli_fetch_array($search_doc))
		{
		$id=$result['id'];
$image=$result['image'];
$gender=$result['gender'];
//echo $gender;
//$amount=$result['amount'];
//$hold=$result['hold'];

	?>
	<?php if(!empty($_SESSION['userid'])){ ?>
	<?php if( $hold=='unhold'){ ?>
	

          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
                else { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
              }
              else { ?>

                  <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">
              <?php  }

              ?>
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                          <p>Name <span class="mustallignincenter">:</span> </p>
                             <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                          <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
             <?php } else { ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">


              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                <a data-toggle="modal" data-target="#myModal1234"  class="">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
                else { ?>
                <a data-toggle="modal" data-target="#myModal1234"  class="">  
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
              }
              else { ?>

                <a data-toggle="modal" data-target="#myModal1234"  class="">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a> 
              <?php  }

              ?>
			
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                          <p>Name <span class="mustallignincenter">:</span> </p>
                          <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                         <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
          <?php } else { ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
                else { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
              }
              else { ?>

                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a> 
              <?php  }

              ?>
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                           <p>Name <span class="mustallignincenter">:</span> </p>
                          <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						</div>
                      <div class="col-xs-6 pad-lft-0">
                            <p><?php echo $result['name'];?> </p>
                          <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
						 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }
 ?>          
        <?php
	}
		  }
		  else
		  {
        $i=1;
		  }
			
	  //}
	 ?>
         
        </div>
        
        <?php } ?>
        <?php if($_SESSION['gender1']=='male'){ ?>
         <div class="row">
		<?php
		 include("connection.php");	
		
            $select_user_type =mysqli_fetch_array(mysqli_query($link,"select * from tbl_users where id='".$userid."'"));
            $amount = $select_user_type['amount'];
            $hold = $select_user_type['hold'];

             $query = "select * from tbl_users where hold='unhold'";
            if(!empty($_POST['caste_name']) ) {
              $query .= " AND gender='female' and caste like '".trim($_POST['caste_name'])."'";
            }
         
            if(!empty($_POST['highesteducation_name'])) {
            $query .= "AND gender='female' and highesteducation like '".trim($_POST['highesteducation_name'])."'";
            }
	  
            if(!empty($_POST['gender'])) {
             $query .= " AND gender like '".trim($_POST['gender'])."'";
            }
			if(!empty($_POST['age'])) {
          $query .= " AND age BETWEEN '".trim($_POST['age'])."' AND '".trim($_POST['age1'])."' ";
            }
			if(!empty($_POST['height'])) {
             $query .= " AND height BETWEEN '".trim($_POST['height'])."'AND '".trim($_POST['height1'])."' ";
            }
			if(!empty($_POST['maritalstatus'])) {
			    
            $query .= " AND maritalstatus like '".trim($_POST['maritalstatus'])."'";
            }
			if(!empty($_POST['religion'])) {
             $query .= " AND religion like '".trim($_POST['religion'])."'";
            }
			if(!empty($_POST['mothertongue'])) {
             $query .= " AND mothertongue like '".trim($_POST['mothertongue'])."'";
            }
            if(!empty($_POST['profileid'])) {
             $query .= " AND hold='unhold' and id like '".trim($_POST['profileid'])."'";
            }
			
            // and so on
            $search_doc = mysqli_query($link,$query);
		  $count = mysqli_num_rows($search_doc);
		  if($count>=1)
		  {
		while($result=mysqli_fetch_array($search_doc))
		{
		$id=$result['id'];
$image=$result['image'];
$gender=$result['gender'];
//echo $gender;
//$amount=$result['amount'];
//$hold=$result['hold'];

	?>

	<?php if(!empty($_SESSION['userid'])){ ?>
	
	
	<?php if( $hold=='unhold'){ ?>
	

          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
                else { ?>
                <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">

              <?php  }
              }
              else { ?>

                  <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png" onclick="checkGender('<?php echo $_SESSION['gender1']?>','<?php echo $gender;?>','<?php echo $id;?>','<?php echo $userid;?>')">
              <?php  }

              ?>
                  
                  <?php 
                          /*if( $_SESSION['gender1'] =='Male' ){
                          
                          if($_SESSION['gender1'] !='Male' || $_SESSION['userid']==$id ){ ?>
       
                     <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>">
                    <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img" onerror=this.src="noimage.png"></a>
                        } 
                          else { ?>
                        <a data-toggle="modal" data-target="#myModal1298"  class="btn btn-pink">
                             <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img"  onerror=this.src="noimage.png">

</a>
<?php } 
                          } 
                          
                     else  if( $_SESSION['gender1'] =='Female' ){
                          
                          if($_SESSION['gender1'] !='Female' || $_SESSION['userid']==$id ){ ?>
       
                     <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>">
                    <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img"></a>
                       <?php }
                          else { ?>
                        <a data-toggle="modal" data-target="#myModal129"  class="btn btn-pink"> <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img" onerror=this.src="noimage.png">

</a>
                     <?php } }?>


                  
                  <?php if($_SESSION['gender1']=='Male' || $_SESSION['userid']==$id){ ?>
                  
                  
                     
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>">
                    <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img"></a>
                       <?php } else { ?>
                         <a data-toggle="modal" data-target="#myModal1298"  class="btn btn-pink">
                             <img src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive profile-img" alt="category-img"  onerror=this.src="noimage.png">

</a>
													<?php } */?>
													
													
                 
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                          <p>Name <span class="mustallignincenter">:</span> </p>
                             <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                          <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
             <?php } else { ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">


              <?php

list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

if ($height1>381 || $width1>381) {
  if ($height1>$width1) { ?>
    <a data-toggle="modal" data-target="#myModal1234"  class="">
        <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
    </a>

<?php  }
  else { ?>
    <a data-toggle="modal" data-target="#myModal1234"  class="">
        <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
    </a>

<?php  }
}
else { ?>

      <a data-toggle="modal" data-target="#myModal1234"  class="">
        <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
    </a> 
<?php  }

?>
			
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                          <p>Name <span class="mustallignincenter">:</span> </p>
                          <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                         <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
          <?php } else { ?>
          <div class="col-md-4 col-sm-6">
            <div class="feature-block">
              <div class="feature-img">
              <?php

              list($width1, $height1, $type, $attr) = getimagesize("dashboard/imageone/$image");

              if ($height1>381 || $width1>381) {
                if ($height1>$width1) { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-height profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
                else { ?>
                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive-width profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a>

              <?php  }
              }
              else { ?>

                  <a id="viewbtn" data-toggle="modal" data-target="#myModal"  class="thumbnail">
                      <img src="dashboard/imageone/<?php echo $image ?>" class="img-responsive profile-img"  alt="img" onerror=this.src="noimage.png">
                  </a> 
              <?php  }

              ?>
    
              </div>
              <div class="feature-dtl top-map-dtl-pad">
                <h6 class="feature-heading">Profile ID: <?php echo $result['id'];?></h6>
                <div class="row">
                  <div class="col-xs-10">
                    <div class="row">
                      <div class="col-xs-6 pad-rt-0">
                           <p>Name <span class="mustallignincenter">:</span> </p>
                          <p>Gender <span class="mustallignincenter">:</span> </p>
                         <p>Age / Height <span class="mustallignincenter">:</span> </p>
						 <p>Religion <span class="mustallignincenter">:</span></p>
						 <p>Marital Status </p>
				        	<p>Mother Tongue <span class="mustallignincenter">:</span> </p>
						
						</div>
                      <div class="col-xs-6 pad-lft-0">
                          <p><?php echo $result['name'];?> </p>
                         <p><?php echo $result['gender'];?> </p>
                         <p><?php echo $result['age'];?>/<?php echo $result['height'];?></p>
						 <p><?php echo $result['religion'];?> </p>
						 <p><?php echo $result['maritalstatus'];?> </p>
						 <p><?php echo $result['mothertongue'];?> </p>
						 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }
 ?>          
        <?php
	}
		  }
		  else
		  {
        $i=1;
			  //echo "<h4 style='color:black;'>Sorry, No data is found</h4>";
		  }
			
    
	 ?>

         
        </div>
        
        <?php  } ?>
      <?php  if($i==1) echo "<h4 style='color:black;'>Sorry, No data is found</h4>";?>

       	<div class='modal fade' id='myModal' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">To view the complete profile please login and subscribe.</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Login</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='modal fade' id='myModal1298' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">To view Groom</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Login</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class='modal fade' id='myModal129' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">To view Groom</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Login</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='modal fade' id='myModal1234' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">To view the complete profile please subscribe.</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Login</button></a>
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
<script type="text/javascript"> 
 function profile()   
 {	 
	 var sup_caste_name= $("#sup_caste_name").val();
	 alert(sup_caste_name);
	  $.ajax({
		url:"ajax1_search.php",
		type:"post",
		data:{sup_caste_name:sup_caste_name},
		success:function(res){
			$("#search_result1").html(res); 
			}
		}) 
	
 }
 
 function checkGender(sessionGender,profileGender,id,sessionId)
 {
     if(id == sessionId){
         window.location.href = "profile-details?id="+id+"&gender="+profileGender;
     }
     else if(sessionGender == profileGender)
     {
         alert('Both Genders are Same');
     }
     else
     {
         
         window.location.href = "profile-details?id="+id+"&gender="+profileGender;
     }
     
 }
 
</script>
</body>
</html>


