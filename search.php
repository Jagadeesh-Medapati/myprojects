<!DOCTYPE html>
<html lang="en">
<head>
<title> Search </title>
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
        <h2 class="banner-heading">Search your Match</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">Search your Match</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- real wedding single listing -->
	<!-- Search form -->
	<div class="w3ls-list">
		<div class="container">
	<!--	<h2>Search your Match</h2> -->
		<div class="col-md-12 profiles-list-agileits">
		<!--Horizontal Tab-->
			<div id="parentHorizontalTab">
				<ul class="resp-tabs-list hor_1">
					<li>Regular Search</li>
					<li>Search By Profile id</li>
					<li>Search By Caste</li>
				   	<li>Search By Education</li>
				</ul>
				<div class="resp-tabs-container hor_1">
					<div>	
				<!--form one -->  
			            <div class="w3_regular_search">
							<form action="profile" method="post">	
							   <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Gender : </label>
								<div class="col-sm-7 form_radios">
								    	<select id="w3_country" required onchange="change_country(this.value)" name="gender" class="frm-field required custome_idth">
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
								<div class="clearfix"> </div>
							</div>
							<div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Age In Years : </label>
								<div class="w3agile__text col-sm-7 w3agile_banner_btom_login_left1">
									<select id="" onchange="change_country(this.value)" name="age" required class="frm-field required" >
										 <option value="">Select age</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(agename) from age order by agename asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['agename'];?>"><?php echo ucwords($get_location['agename']);?></option>
					<?php
					}  ?>     				
									</select>
									<span>To </span>
									<select id="" onchange="change_country(this.value)" required name="age1" class="frm-field required" >
										 <option value="">Select Age</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(agename) from age order by agename asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['agename'];?>"><?php echo ucwords($get_location['agename']);?></option>
					<?php
					}  ?>   					
									</select>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Height : </label>
								<div class="w3agile__text col-sm-7 w3agile_banner_btom_login_left1">
									<select id="" name="height" onchange="change_country(this.value)" required class="frm-field required" >
										 <option value="">Select Height</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(heightname) from height order by id asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['heightname'];?>"><?php echo ucwords($get_location['heightname']);?></option>
					<?php
					}  ?>  				
									</select>
									<span>To </span>
									<select id="" name="height1" onchange="change_country(this.value)" required class="frm-field required" >
										 <option value="">Select Height</option>
					  <?php  
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(heightname) from height order by id asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['heightname'];?>"><?php echo ucwords($get_location['heightname']);?></option>
					<?php
					}  ?>  					
									</select>
								</div>
								<div class="clearfix"></div>
							</div>				
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="rolename">Marital Status : </label>
								<div class="col-sm-7 form_radios">
									  <select id="dates-field2" class="form-control" required name="maritalstatus">
											 <option value="">Select  Maritalstatus</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(maritalstatusname) from maritalstatus order by maritalstatusname asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['maritalstatusname'];?>"><?php echo ucwords($get_location['maritalstatusname']);?></option>
					<?php
					}  ?>  
										</select>
									
								</div>
								<div class="clearfix"> </div>
							  </div>
							 
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Select  Religion : </label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
									<select class = "form-control" required name="religion">
					 <option value="">Select Religion</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(religionname) from religion order by religionname asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['religionname'];?>"><?php echo ucwords($get_location['religionname']);?></option>
					<?php
					}  ?>     
				  </select>
						
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
							  <div class="form_but1">
								<label class="col-sm-5 control-label1"  for="sex">Mother Tongue : </label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
									<select name="mothertongue" required>
												<option value="">Select  Mother Tongue</option>
												<?php 					
													$select_location=mysqli_query($link,"select distinct(mothertonguename) from mothertongue order by mothertonguename asc");
													while($get_location=mysqli_fetch_array($select_location))
													{  ?>
													<option value="<?php echo $get_location['mothertonguename'];?>"><?php echo ucwords($get_location['mothertonguename']);?></option>
													<?php
													}  ?>        
											</select>
											
													
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
						
						  	<center><button name="profile" type="submit" class="btn btn-warning serch">submit</button></center>
							</form>
						</div> 
						<!--End form one --> 
					</div>
					<div>
						 <!--form two --> 
						<div class="w3_regular_search">
							<form action="profile" method="post">	
							  <div class="agileits_advanced_Search">
							  <div class="form-group">
								<label class="col-sm-5 control-label1" >Profile ID:</label>
								<div class="col-sm-7">
								<input type="text" class="form-control" id="profileid"  required name="profileid" placeholder="Enter Profile Id">
								</div>
							  </div>
							  </div> <br /><br /><br />
							  
					      <center><button name="profile" type="submit" class="btn btn-warning serch">submit</button></center>
							</form>
						</div>
						 <!-- end form two --> 
					</div>
					
					
					<!-- form three--> 
					<div class="w3_regular_search">
							<form action="profile" method="post">	
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Select Your Caste </label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
					<select class = "form-control" required name="caste_name">
					 <option value="">Select Caste</option>
					  <?php 
					include("connection.php");			  
					$select_location=mysqli_query($link,"select distinct(castename) from caste order by castename asc");
					while($get_location=mysqli_fetch_array($select_location))
					{  ?>
					 <option value="<?php echo $get_location['castename'];?>"><?php echo ucwords($get_location['castename']);?></option>
					<?php
					}  ?>        
				  </select>
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
							
							   	<center><button name="profile" type="submit" class="btn btn-warning serch">submit</button></center>
							<!--<center><a href="" name="profile" onClick="wedding_search1()" type="submit" class="btn btn-warning serch">Submit</a></center>-->
							</form>
							<!--end form three--> 
						</div>
						
						  
   
	   
	   
						<!-- form fore--> 
						<div class="w3_regular_search">
								<form action="profile" method="post">	
							  <div class="form_but1">
								<label class="col-sm-5 control-label1" for="sex">Highest Education</label>
								<div class="col-sm-7 form_radios">
								  <div class="select-block1">
			<select class = "form-control" required name="highesteducation_name" id="highesteducation_name">
         <option value="">Select Highest Education</option>
          <?php 
include("connection.php");			  
        $select_location=mysqli_query($link,"select distinct(highesteducationname) from highesteducation order by highesteducationname asc");
        while($get_location=mysqli_fetch_array($select_location))
        {  ?>
         <option value="<?php echo $get_location['highesteducationname'];?>"><?php echo ucwords($get_location['highesteducationname']);?></option>
        <?php
        }  ?>        
      </select>
								  </div>
								</div>
								<div class="clearfix"> </div>
							  </div>
						<center>	<center><button name="profile1" type="submit" class="btn btn-warning serch">submit</button></center></center>
							</form>
							<!--end form fore--> 
						</div>
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
</script>
<!-- end jquery -->
</body>
</html>