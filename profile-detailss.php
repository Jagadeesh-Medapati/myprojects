<?php
	session_start(); 
	error_reporting(0);
	//ob_start();
	include('connection.php');
$gender123=$_GET['gender'];
$gender = $_SESSION['gender1'];
//$userid=$_GET['id'];
	$userid = $_SESSION['userid'];
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
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/banner.jpg');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Profile</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">Profile</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- vendor profile -->
	<div class="fail_login"><?php if(!empty($date_exceed)){echo "<script>alert('Your account validity is Expired,Kindly Subscribe');window.location='index';</script>  "; } ?></div>
	<div class="fail_login"><?php if(!empty($exceed_files)){echo "<script>alert('Your hits are completed,Kindly Subscribe');window.location='index';</script>  "; } ?></div>
  <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href=""><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
<?php 
					
					error_reporting(0);					include("connection.php");
					$id=$_GET['id'];
					$query=mysqli_query($link,"SELECT * from tbl_users where id='".$id."'");
					$data=mysqli_fetch_assoc($query);
					$name=$data['name'];
					$lastname=$data['lastname'];
					$bodytype=$data['bodytype'];
					$maritalstatus=$data['maritalstatus'];
					
					$height=$data['height'];
					$physicalstatus=$data['physicalstatus'];
					$profilefor=$data['profilefor'];
					$drinking=$data['drinking'];
					
					$age=$data['age'];
					
					$mothertongue=$data['mothertongue'];
					$weight =$data['weight'];
					
					$bloodgroup=$data['bloodgroup'];
					$diet =$data['diet'];
					
					$smoke=$data['smoke'];
					$timeofbirth=$data['timeofbirth'];
					$dob=$data['dob'];
					$placeofbirth=$data['placeofbirth'];
					$caste=$data['caste'];
					$subcaste=$data['subcaste'];
					$religion=$data['religion'];
					$gothram =$data['gothram'];
					$dostham=$data['dostham'];
					$dosthamradio=$data['dosthamradio'];
					$highesteducation=$data['highesteducation'];
					$othereducation =$data['othereducation'];
					$designation=$data['designation'];
					$annualincome=$data['annualincome'];
					
					$foccupation=$data['foccupation'];
					$moccupation=$data['moccupation'];
					$noofbrothers=$data['noofbrothers'];
					$noofsisters=$data['noofsisters'];
					
					$agep=$data['agep'];
					$maritalstatusp=$data['maritalstatusp'];
					$bodytypep=$data['bodytypep'];
					$complexionp=$data['complexionp'];
					
					$heightp=$data['heightp'];
					$dietp =$data['dietp'];
					$kujadoshamp=$data['kujadoshamp'];
					$religionp=$data['religionp'];
					$castep=$data['castep'];
					$mtonguep=$data['mtonguep'];
					$educationp=$data['educationp'];
					
					$cofresidencep=$data['cofresidencep'];
					
					
					$statep =$data['statep'];
					$rstatusp=$data['rstatusp'];
					
					$namep=$data['namep'];
					$phonenump=$data['phonenump'];
					$emailidp=$data['emailidp'];
					$aadharp=$data['aadharp'];
					
					$fulladdressp=$data['fulladdressp'];
					$aboutyour=$data['aboutyour'];
					
					$image=$data['image'];
					$image1=$data['image1'];
					
					$image2=$data['image2'];
					$image3=$data['image3'];
					$othercaste=$data['othercaste'];
					$othersubcaste=$data['othersubcaste'];
					$otherreligion=$data['otherreligion'];
					$othergothram=$data['othergothram'];
					
					$companyname=$data['companyname'];
					$workphoneno=$data['workphoneno'];
					$countrylivingin=$data['countrylivingin'];
					$citizenship =$data['citizenship'];
					$nativeplace=$data['nativeplace'];
					$settledat=$data['settledat'];
					$residingstate=$data['residingstate'];
					$languagesknown=$data['languagesknown'];
					$aboutyour1=$data['aboutyour1'];
					$fathername=$data['fathername'];
					$mothername=$data['mothername'];
					$country=$data["country"];
					$country1=$data["country1"];
					$state1=$data["state1"];
					$country_code=$data["country_code"];
					$state=$data["state"];
					$city=$data["city"];
					$phoneno=$data["phoneno"];
					$countrycode=$data["countrycode"];
					$alternateno=$data["alternateno"];
					$complexion=$data["complexion"];
					$subcastep=$data["subcastep"];
					$agepd=$data["agepd"];
					$gender=$data["gender"];
					$heightpd=$data['heightpd'];
					$birthstar =$data['birthstar'];
	                $raasi=$data['raasi'];
	                $paadamu=$data['paadamu'];
					
				?>
   <div class="profile">
   	 <div class="col-md-8 profile_left">
   	 	<h2>Profile Id : <?php echo $id; ?></h2>
   	 	<div class="col_3">
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="dashboard/imageone/<?php echo $image; ?>">
						<a href="dashboard/imageone/<?php echo $image; ?>" target="_blank" onclick="return ovrly.open(this);">	<img src="dashboard/imageone/<?php echo $image; ?>"/> </a>
						</li>
						<li data-thumb="dashboard/imagetwo/<?php echo $image1; ?>">
							<a href="dashboard/imagetwo/<?php echo $image1; ?>" target="_blank" onclick="return ovrly.open(this);"> <img src="dashboard/imagetwo/<?php echo $image1; ?>" /> </a>
						</li>
						<li data-thumb="dashboard/imagethree/<?php echo $image2; ?>">
						<a href="dashboard/imagethree/<?php echo $image2; ?>"  target="_blank" onclick="return ovrly.open(this);"> <img src="dashboard/imagethree/<?php echo $image2; ?>" /> </a>
						</li>
						<li data-thumb="dashboard/imagefour/<?php echo $image3; ?>">
						<a href="dashboard/imagefour/<?php echo $image3; ?>" target="_blank" onclick="return ovrly.open(this);"> <img src="dashboard/imagefour/<?php echo $image3; ?>"/> </a>
						</li>
					 </ul>
				  </div>
			</div>
			<!---728x90--->
			 
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
		        	    <tr class="opened_1">
							<td class="day_label">Gender :</td>
							<td class="day_value"><?php echo $gender; ?></td>
						</tr>
		        		<tr class="opened_1">
							<td class="day_label">Age / Height :</td>
							<td class="day_value"><?php echo $age; ?>, <?php echo $height; ?></td>
						</tr>
					    
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value"><?php echo $religion; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $maritalstatus; ?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Location :</td>
							<td class="day_value"><?php echo $country; ?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $profilefor; ?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $highesteducation; ?></span></td>
						</tr>
				    </tbody>
				</table>
				<ul class="login_details">
			  
			    </ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!---728x90--->

		<div class="col_4">
		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
			   	  <li role="presentation"><a href="#profile2" role="tab" id="profile-tab2" data-toggle="tab" aria-controls="profile2">Contact Details</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    
				    <div class="basic_1">
				    	<h3>Basics & Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">First Name :</td>
									<td class="day_value"><?php echo $name; ?></td>
								</tr>
								<tr class="opened_1">
									<td class="day_label">Last Name :</td>
									<td class="day_value"><?php echo $lastname; ?></td>
								</tr>

							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $bodytype; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $maritalstatus; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value"><?php echo $height; ?></td>
								</tr>
								   <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $complexion; ?></td>
								</tr>
								
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $physicalstatus; ?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span><?php echo $profilefor; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Drinking :</td>
									<td class="day_value closed"><span><?php echo $drinking; ?></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $age; ?> Yrs</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value"><?php echo $mothertongue; ?></td>
								</tr>
							
							    <tr class="opened">
									<td class="day_label">Weight in Kgs :</td>
									<td class="day_value"><?php echo $weight; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $bloodgroup; ?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Diet :</td>
									<td class="day_value closed"><span><?php echo $diet; ?></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">Smoke :</td>
									<td class="day_value closed"><span><?php echo $smoke; ?></span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>

				        		<tr class="opened">
									<td class="day_label">Time of Birth :</td>
									<td class="day_value"><?php echo $timeofbirth; ?></td>
								</tr>
				        	
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><?php echo date('d/m/Y',strtotime($data['dob']));?></span></td>
									 </tr>
<tr class="opened">
									<td class="day_label">Country of Birth :</td>
									<td class="day_value"><?php echo $country1; ?></td>
								</tr>
<tr class="opened">
									<td class="day_label">State of Birth :</td>
									<td class="day_value"><?php echo $state1; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Place of Birth :</td>
									<td class="day_value closed"><span><?php echo $placeofbirth; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Birth Star :</td>
									<td class="day_value closed"><span><?php echo $birthstar; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Raasi :</td>
									<td class="day_value closed"><span><?php echo $raasi; ?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Paadamu :</td>
									<td class="day_value closed"><span><?php echo $paadamu; ?></span></td>
								</tr>
									<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value"><?php echo $caste; ?></td>
								</tr>
<tr class="opened">
									<td class="day_label">Other Caste :</td>
									<td class="day_value"><?php echo $othercaste; ?></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
							    <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<td class="day_value"><?php echo $subcaste; ?></td>
								</tr>
<tr class="opened">
									<td class="day_label">Other Sub Caste :</td>
									<td class="day_value"><?php echo $othersubcaste; ?></td>
								</tr>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value"><?php echo $religion; ?></td>
								</tr>
<tr class="opened_1">
									<td class="day_label">Other Religion :</td>
									<td class="day_value"><?php echo $otherreligion; ?></td>
								</tr>
							
							    <tr class="opened">
									<td class="day_label">Gothram :</td>
									<td class="day_value"><?php echo $gothram; ?></td>
								</tr>
 <tr class="opened">
									<td class="day_label">Other Gothram :</td>
									<td class="day_value"><?php echo $othergothram; ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Kuja Dosham/Manglik :</td>
									<td class="day_value"><?php echo $dostham; ?></td>
								</tr>
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Highest Education   :</td>
									<td class="day_value"><?php echo $highesteducation; ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Other Education   :</td>
									<td class="day_value"><?php echo $othereducation; ?></td>
								</tr>

<tr class="opened">
															<td class="day_label">Designation :</td>
															<td class="day_value"><?php echo $designation; ?></td>
														</tr>

				        		<tr class="opened">
															<td class="day_label">Annual Income In Lakhs :</td>
															<td class="day_value closed"><?php echo $annualincome; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Company Name :</td>
															<td class="day_value closed"><?php echo $companyname; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Work Phone No :</td>
															<td class="day_value closed"><?php echo $workphoneno; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Country Living In :</td>
															<td class="day_value closed"><?php echo $countrylivingin; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Residing State :</td>
															<td class="day_value closed"><?php echo $residingstate; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Citizenship :</td>
															<td class="day_value closed"><?php echo $citizenship; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Native Place:</td>
															<td class="day_value closed"><?php echo $nativeplace; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Settled At:</td>
															<td class="day_value closed"><?php echo $settledat; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Languages Known :</td>
															<td class="day_value closed"><?php echo $languagesknown; ?></td>
														</tr>
														
							 </tbody>
				          </table>
				          <div class="tab_box">
				    	<h1>About<?php echo $aboutyour; ?></p>
						</div>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	<h3>Basics</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        	    	<tr class="opened">
																<td class="day_label">Father Name :</td>
																<td class="day_value"><?php echo $fathername; ?></td>
															</tr>
				        		<tr class="opened">
																<td class="day_label">Father's Occupation :</td>
																<td class="day_value"><?php echo $foccupation; ?></td>
															</tr>
														
															<tr class="opened">
																<td class="day_label">Mother's Occupation :</td>
																<td class="day_value"><?php echo $moccupation; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">Mother Name:</td>
																<td class="day_value"><?php echo $mothername; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">No. of Brothers :</td>
																<td class="day_value closed"><?php echo $noofbrothers; ?></td>
															</tr>
															
															<tr class="opened">
																<td class="day_label">No. of Sisters :</td>
																<td class="day_value closed"><?php echo $noofsisters; ?></td>
															</tr>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
															<td class="day_label">Age   :</td>
															<td class="day_value"><?php echo $agep; ?> To <?php echo $agepd; ?> </td>
														</tr>
														<tr class="opened">
															<td class="day_label">Marital Status :</td>
															<td class="day_value"><?php echo $maritalstatusp; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Body Type :</td>
															<td class="day_value closed"><?php echo $bodytypep; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Complexion :</td>
															<td class="day_value closed"><?php echo $complexionp; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Height :</td>
															<td class="day_value closed"><?php echo $heightp; ?> To <?php echo $heightpd; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Diet :</td>
															<td class="day_value closed"><?php echo $dietp; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Kujadosham / Manglik:</td>
															<td class="day_value closed"><?php echo $kujadoshamp; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Religion :</td>
															<td class="day_value closed"><?php echo $religionp; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Caste :</td>
															<td class="day_value closed"><?php echo $castep; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Sub Caste :</td>
															<td class="day_value closed"><?php echo $subcastep; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Mother Tongue :</td>
															<td class="day_value closed"><?php echo $mtonguep; ?></td>
														</tr>
														<tr class="opened">
															<td class="day_label">Education :</td>
															<td class="day_value closed"><?php echo $educationp; ?></td>
														</tr>
														
														
														<tr class="opened">
															<td class="day_label">Location Preference :</td>
															<td class="day_value closed"><?php echo $statep; ?></td>
														</tr>
													<!--	<tr class="opened">
															<td class="day_label">About:</td>
															<td class="day_value closed"><?php echo $aboutyour1; ?></td>
														</tr>-->
							 </tbody>
				          </table>
				            <div class="tab_box">
				    	<h1>About<?php echo $aboutyour; ?></p>
						</div>
				        </div>
				     </div>
				 </div>
				 <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab2">
	          <div class="basic_3">
				    	<h4>Contact Details</h4>
				    	<div class="basic_1 basic_2">
				    	<div class="col-md-12 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
																<td class="day_label">Name :</td>
																<td class="day_value"><?php echo $namep; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">Phone Number :</td>
																<td class="day_value"><?php echo $phonenump; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">Other Phone Number :</td>
																<td class="day_value"><?php echo $alternateno; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">Email id :</td>
																<td class="day_value"><?php echo $emailidp; ?></td>
															</tr>
															
															<tr class="opened">
																<td class="day_label">Full Address :</td>
																<td class="day_value"><?php echo $fulladdressp; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">Country :</td>
																<td class="day_value"><?php echo $country; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">State :</td>
																<td class="day_value"><?php echo $state; ?></td>
															</tr>
															<tr class="opened">
																<td class="day_label">City</td>
																<td class="day_value"><?php echo $city; ?></td>
															</tr>
						
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				 </div>
		     </div>
		  </div>
	   </div>
   	 </div>
     <div class="col-md-4 profile_right">
     	<div class="newsletter">
<?php
$id=$_GET['id'];
//$base_url23=$base_url."profile-details?id=".$id."&gender=".$gender123;
?>
		  
        </div>
        <div class="view_profile">
        	<h3>View Similar Profiles</h3>
        	<ul class="profile_item">
<?php
	include("connection.php");
									$select_projects= mysqli_query($link,"SELECT * FROM tbl_users where gender='$gender123' LIMIT 12") or die(mysql_error());
									$i=1;
									while($result=  mysqli_fetch_array($select_projects)){  
										$id = $result['id']; 
										$image = $result['image']; 
										$age = $result['age']; 
										$height = $result['height']; 
										$caste = $result['caste']; 
										$name = $result['name'];
										$gender15 = $result['gender']; 
										$base_url2=$base_url."profile-details?id=".$id."&gender=".$gender15 ;

									?>
        	  
        	   <li class="profile_item-img">
        	   	  <img src="dashboard/imageone/<?php echo $image; ?>"  class="img-responsive profiledetails" alt=""/>
        	   </li>
        	   <li class="profile_item-desc">
        	       <h4>Profile Id: <?php echo $id; ?></h4>
        	       
        	   	  <p><?php echo $name; ?> (<?php echo $gender15; ?>)</p>
        	   	   
        	   	  <p><?php echo $age; ?> Yrs, <?php echo $height; ?></p>
        	   	  <h5><a href="<?php echo $base_url2; ?>">View Full Profile</a></h5>
        	   </li>
        	   <div class="clearfix"> </div>
        	  
<?php } ?>
           </ul>
           
       </div>
       
        </div>
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- end vendor profile -->
<!-- footer -->
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
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
 <script  type="text/javascript"  src="js/ovrly.js"></script>
<script>
// Can also be used with $(document).ready()
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