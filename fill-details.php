<?php
	session_start(); 
	error_reporting(0);
	//ob_start();
	
	include('connection.php');
	$username = $_SESSION['username'];
	$userid = $_SESSION['id'];
	?>
<?php
	error_reporting(0);
	include("connection.php");
	$id=$userid;
	
	if(isset($_POST['fillsubmit']))
	{	
		$name=$_POST['name'];
		$lastname=$_POST['lastname'];
		$bodytype=$_POST['bodytype'];
		$maritalstatus=$_POST['maritalstatus'];
		
		
		$height = mysqli_real_escape_string($link,$_POST['height']);
		$physicalstatus=$_POST['physicalstatus'];
		$profilecreatedby=$_POST['profilecreatedby'];

		$drinking=$_POST['drinking'];
		
		$age=$_POST['age'];
		
		$mothertongue=$_POST['mothertongue'];
		$weight =$_POST['weight'];
		
		$bloodgroup=$_POST['bloodgroup'];
		$diet =$_POST['diet'];
		
		$smoke=$_POST['smoke'];
		$timeofbirth=$_POST['timeofbirth'];
		$dob=$_POST['dob'];
		$placeofbirth=$_POST['placeofbirth'];
		$caste=$_POST['caste'];
		$othercaste=$_POST['othercaste'];
		
		$othersubcaste=$_POST['othersubcaste'];
	$otherreligion=$_POST['otherreligion'];
	$othergothram=$_POST['othergothram'];
	
		$subcaste=$_POST['subcaste'];
		$religion=$_POST['religion'];
		$gothram =$_POST['gothram'];
		$dostham=$_POST['dostham'];
		$dosthamradio=$_POST['dosthamradio'];
		$highesteducation=$_POST['highesteducation'];
		$othereducation =$_POST['othereducation'];
		$designation=$_POST['designation'];
		$annualincome=$_POST['annualincome'];
		$aboutyour=$_POST['aboutyour'];
		$complexion=$_POST['complexion'];
		
		$companyname=$_POST['companyname'];
		$workphoneno=$_POST['workphoneno'];
		$countrylivingin=$_POST['countrylivingin'];
		$citizenship =$_POST['citizenship'];
		$nativeplace=$_POST['nativeplace'];
		$settledat=$_POST['settledat'];
		$residingstate=$_POST['residingstate'];
		$languagesknown=$_POST['languagesknown'];
		
		$country1=$_POST['country1'];
		$state1=$_POST['state1'];
		$city1=$_POST['city1'];
		$birthstar =$_POST['birthstar'];
	    $raasi=$_POST['raasi'];
	
	    $paadamu=$_POST['paadamu'];
		
		
		
		if(!empty($_POST['date'])){ 
			$date=actualDate($_POST['date']);
		}
		else $date=date("Y-m-d");
		
		$image=$_FILES['image']['name'];
		
		if(empty($image)){
			$image=$_POST['Old_image'];
		}
		
		if(!empty($image)) 
		{					
			$file = $userid;
			$file_loc = $_FILES['image']['tmp_name'];
			$file_size = $_FILES['image']['size'];
			$file_type = $_FILES['image']['type'];
			$file_ext = explode(".", strtolower($_FILES['image']['name']));
			$n = sizeof($file_ext);
		
			$folder="imageone/";								 
			move_uploaded_file($file_loc,$folder.$file.'.'.$file_ext[$n-1]);
		}   
		else
		{
			//echo "not moved";
		}
		
		$image1=$_FILES['image1']['name'];
		if(empty($image1)){
			$image1=$_POST['Old_image1'];
		}
		if(!empty($image1)) 
		{					
			$file = $userid;
			$file_loc = $_FILES['image1']['tmp_name'];
			$file_size = $_FILES['image1']['size'];
			$file_type = $_FILES['image1']['type'];
			$file_ext = explode(".", strtolower($_FILES['image1']['name']));
			$n = sizeof($file_ext);
			$folder="imagetwo/";								 
			move_uploaded_file($file_loc,$folder.$file.'.'.$file_ext[$n-1]);
		}   
		else
		{
			//echo "not moved";
		}
		
		
		$image2=$_FILES['image2']['name'];
		if(empty($image2)){
			$image2=$_POST['Old_image2'];
		}
		if(!empty($image2)) 
		{					
			$file = $userid;
			$file_loc = $_FILES['image2']['tmp_name'];
			$file_size = $_FILES['image2']['size'];
			$file_type = $_FILES['image2']['type'];
			$file_ext = explode(".", strtolower($_FILES['image2']['name']));
			$n = sizeof($file_ext);
		
			$folder="imagethree/";								 
			move_uploaded_file($file_loc,$folder.$file.'.'.$file_ext[$n-1]);
		}   
		else
		{
			//echo "not moved";
		}
		
		$image3=$_FILES['image3']['name'];
		if(empty($image3)){
			$image3=$_POST['Old_image3'];
		}
		
		if(!empty($image3)) 
		{					
			$file = $userid;
			$file_loc = $_FILES['image3']['tmp_name'];
			$file_size = $_FILES['image3']['size'];
			$file_type = $_FILES['image3']['type'];
			$file_ext = explode(".", strtolower($_FILES['image3']['name']));
			$n = sizeof($file_ext);
			$folder="imagefour/";								 
			move_uploaded_file($file_loc,$folder.$file.'.'.$file_ext[$n-1]);
		}   
		else
		{
			//echo "not moved";
		}
		
		
		
																				
		//echo "update `tbl_users` set image='".$image."',designation='".$designation."',complexion='".$complexion."',image1='".$image1."',image2='".$image2."',image3='".$image3."',name='".$name."',lastname='".$lastname."',bodytype='".$bodytype."',maritalstatus='".$maritalstatus."',height='".$height."',aboutyour='".$aboutyour."',physicalstatus='".$physicalstatus."',profilecreatedby='".$profilecreatedby."',drinking='".$drinking."',age='".$age."',mothertongue='".$mothertongue."',weight='".$weight."',bloodgroup='".$bloodgroup."',diet='".$diet."',smoke='".$smoke."',timeofbirth='".$timeofbirth."',dateofbirth='".$dateofbirth."',placeofbirth='".$placeofbirth."',caste='".$caste."',subcaste='".$subcaste."',religion='".$religion."',gothram='".$gothram."',dostham='".$dostham."',dosthamradio='".$dosthamradio."',highesteducation='".$highesteducation."',othereducation='".$othereducation."',dosthamradio='".$dosthamradio."',annualincome='".$annualincome."',date=now() where id='".$id."'";exit;
$sqlstt=mysqli_query($link,"update `tbl_users` set 
companyname='".$companyname."',workphoneno='".$workphoneno."',countrylivingin='".$countrylivingin."',birthstar='".$birthstar."',raasi='".$raasi."',paadamu='".$paadamu."',country1='".$country1."',state1='".$state1."',city1='".$city1."',residingstate='".$residingstate."',citizenship='".$citizenship."',nativeplace='".$nativeplace."',settledat='".$settledat."',languagesknown='".$languagesknown."',image='".$file.'.'.$file_ext[$n-1]."',designation='".$designation."',complexion='".$complexion."',image1='".$file.'.'.$file_ext[$n-1]."',image2='".$file.'.'.$file_ext[$n-1]."',image3='".$file.'.'.$file_ext[$n-1]."',name='".$name."',lastname='".$lastname."',bodytype='".$bodytype."',maritalstatus='".$maritalstatus."',height='".$height."',aboutyour='".$aboutyour."',physicalstatus='".$physicalstatus."',profilecreatedby='".$profilecreatedby."',drinking='".$drinking."',age='".$age."',mothertongue='".$mothertongue."',weight='".$weight."',bloodgroup='".$bloodgroup."',diet='".$diet."',smoke='".$smoke."',timeofbirth='".$timeofbirth."',dob='".$dob."',placeofbirth='".$placeofbirth."',caste='".$caste."',subcaste='".$subcaste."',religion='".$religion."',gothram='".$gothram."',dostham='".$dostham."',dosthamradio='".$dosthamradio."',highesteducation='".$highesteducation."',othercaste='".$othercaste."',othersubcaste='".$othersubcaste."',otherreligion='".$otherreligion."',othergothram='".$othergothram."',othereducation='".$othereducation."',annualincome='".$annualincome."' where id='".$id."'");
		

		if($sqlstt==1)
		{

			echo '<script>alert("Updated")</script>';
			//echo "<script> window.location.assign('".$_GET['page']."?id=".$_GET['id']."') </script>";
			
			//echo "<script type='text/javascript'>if(confirm('Updated')){document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}else{document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}</script>"; 	
		}
		else
		{
			echo "<script type='text/javascript'>if(confirm('Oops..something went wrong')){document.location.href='index'}else{document.location.href='index'}</script>";
		}
		mysqli_close($link);
	}
?>
<style>
	
	img.dimg {
    border-radius: 60px;
    height: 100px;
    width: 100px;
    margin-left: 10px;
	}
	
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<?php include('header.php');?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
<!-- start admited patient list -->
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>Personal data</header>
				<div class="tools">
					<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
					<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
					<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tabbable-panel">
							<div class="tabbable-line">
								<ul class="nav nav-tabs ">
									<li>
										<a href="#tab_default_1" data-toggle="tab">
										About Myself </a>
									</li>
									<li>
										<a href="#tab_default_2" data-toggle="tab">
										Family Details </a>
									</li>
									<li>
										<a href="#tab_default_3" data-toggle="tab">
										Partner Preference </a>
									</li>
									<!-- <li>
										<a href="#tab_default_4" data-toggle="tab">
										Contact Details</a>
									</li> -->
								</ul>
								<?php 
									include("connection.php");
									$id=$userid;
									$query=mysqli_query($link,"SELECT * from tbl_users where id='".$id."'");
									$data=mysqli_fetch_assoc($query);
									$height12 =mysqli_real_escape_string($link,$data['height']);
								?>
<div class="tab-content">
	<div class="tab-pane active" id="tab_default_1">
		<form action="#" method="post" enctype="multipart/form-data" >
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="container">
							<table class="table table-hover">
								<tbody>
							<h3>Upload Profile Photos</h3>
							<hr />
							<span>upload image1</span>  <img class="dimg" src="<?php echo $base_url;?>imageone/<?php echo $data['image']; ?>" width="100" height="40">
							<?php echo "</br></br>"?>
							<input type="file" name="image" id="image" class="form-control" value="<?php echo $data['image']; ?>">
							<input type="hidden" name="Old_image" value="<?php echo $data['image'];?>">
							<span>upload image2</span>  <img class="dimg" src="<?php echo $base_url;?>imagetwo/<?php echo $data['image1']; ?>" width="100" height="40">
							<?php echo "</br></br>"?>
							<input type="file" name="image1" id="image" class="form-control" value="<?php echo $data['image1']; ?>">
							<input type="hidden" name="Old_image1" value="<?php echo $data['image1'];?>">
							<span>upload image3</span>  <img class="dimg" src="<?php echo $base_url;?>imagethree/<?php echo $data['image2']; ?>" width="100" height="40">
							<?php echo "</br></br>"?>
							<input type="file" name="image2" id="image" class="form-control" value="<?php echo $data['image2']; ?>">
							<input type="hidden" name="Old_image2" value="<?php echo $data['image2'];?>">
							<span>upload image4</span>  <img class="dimg" src="<?php echo $base_url;?>imagefour/<?php echo $data['image3']; ?>" width="100" height="40">
							<?php echo "</br></br>"?>
							<input type="file" name="image3" id="image" class="form-control" value="<?php echo $data['image3']; ?>">
							<input type="hidden" name="Old_image3" value="<?php echo $data['image3'];?>"> <br />
						</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<h3>Basics & Lifestyle</h3>
<div class="card-body ">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="container">
				<table class="table table-hover">
					<tbody>
						<tr class="opened_1">
							<td class="day_label">First Name :</td>
							<td class="day_value change"><input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" placeholder="Enter Your First Name" /></td>
							</tr>
							<tr class="opened_1">
							<td class="day_label">Last Name :</td>
							<td class="day_value change"><input type="text" name="lastname" value="<?php echo $data['lastname'];?>" class="form-control" placeholder="Enter Your Last Name" / ></td>
							</tr>

							<tr class="opened">
							<td class="day_label">Body Type :</td>
							<td class="day_value change"> <select class = "form-control" id="bodytype" name="bodytype">
							<option value="">Select Body Type</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `bodytype`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$bodytypep1=$row12['bodytypename']; 
								?> 
								<option value="<?php echo $bodytypep1;?>"  <?php if($data['bodytype'] ==  $bodytypep1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $bodytypep1;?> </option>
									<?php
									}
							?>	
							</select></td>
							</tr>
							<tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value change">
							<select class = "form-control" id="maritalstatus" name="maritalstatus">
								<option value="">---select----</option>
								<?php
									$sqlstt134=mysqli_query($link,"SELECT * FROM `maritalstatus`");
									while($row12=mysqli_fetch_array($sqlstt134))
									{
										$maritalstatus1=$row12['maritalstatusname']; 
									?> 
									<option value="<?php echo $maritalstatus1;?>"  <?php if($data['maritalstatus'] ==  $maritalstatus1) echo 'selected="selected"';  ?>>                       <?php 
									echo $maritalstatus1;?> </option>
									<?php
									}
								?>	
							</select>
							</td>
							</tr>
							<tr class="opened">
							<td class="day_label">Height :</td>
							<td class="day_value change"><select class = "form-control" id="height" name="height">
							<option value="">Select Height</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `height` order by id asc");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									
									//$heightp1=mysqli_real_escape_string(htmlspecialchars($string))
									$heightp12=$row12['heightname']; 
								?> 
								<option value="<?php echo $heightp12;?>"  <?php if($data['height'] == $heightp12) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $heightp12;?> </option>
									<?php
									}
							?>	
							</select></td>
							</tr>
							<tr class="opened">
							<td class="day_label">Physical Status :</td>
							<td class="day_value change">
							    
							    <select class = "form-control" id="height" name="physicalstatus">
							<option value="">Select Physical Status</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `physicalstatus` order by id asc");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									
									//$heightp1=mysqli_real_escape_string(htmlspecialchars($string))
									$physicalstatus12=$row12['physicalstatusname']; 
								?> 
								<option value="<?php echo $physicalstatus12;?>"  <?php if($data['physicalstatus'] == $physicalstatus12) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $physicalstatus12;?> </option>
									<?php
									}
							?>	
							</select>
							    
							   
							</tr>
							<tr class="opened">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value change">
							    	<select class = "form-control" id="profilecreatedby" name="profilecreatedby">
							<option value="">Select Profile Created </option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `profilecreated`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$profilecreated1=$row12['profilecreatedname']; 
								?> 
								<option value="<?php echo $profilecreated1;?>"  <?php if($data['profilecreatedby'] ==  $profilecreated1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $profilecreated1;?> </option>
									<?php
									}
							?>	
						</select>
						
							
							</td>
							</tr>
							<tr class="opened">
							<td class="day_label">Drinking :</td>
							<td class="day_value change"> <select name="drinking" value="<?php echo $data['drinking']; ?>" class="form-control">


							<option value="">select </option>
							<option value="Yes" <?php if($data['drinking']=="Yes" ) echo 'selected="selected"' ; ?>>Yes </option>
							<option value="No" <?php if($data['drinking']=="No" ) echo 'selected="selected"' ; ?>>No </option>
							<option value="Occasional" <?php if($data['drinking']=="Occasional" ) echo 'selected="selected"' ; ?>>Occasional </option>
							
							</select></td>
							</tr>
				</tbody>
		</table>
	</div>
</div>
												
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="container">
		<table class="table table-hover">
			<tbody>
				<tr class="opened_1">
					<td class="day_label">Age :</td>
					<td class="day_value change">
						
						
						<select class = "form-control" id="age" name="age">
							<option value="">---select----</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `age`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$age1=$row12['agename']; 
								?> 
								<option value="<?php echo $age1;?>"  <?php if($data['age'] ==  $age1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $age1;?> </option>
									<?php
									}
							?>	
						</select>
						
						
					</td>
				</tr>
				<tr class="opened">
					<td class="day_label">Mother Tongue :</td>
					<td class="day_value change">						  
							<select class = "form-control" id="mothertongue" name="mothertongue">
							<option value="">Select Mother Tongue </option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `mothertongue`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$mothertongue1=$row12['mothertonguename']; 
								?> 
								<option value="<?php echo $mothertongue1;?>"  <?php if($data['mothertongue'] ==  $mothertongue1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $mothertongue1;?> </option>
									<?php
									}
							?>	
						</select>
						
					
						
					</td>
				</tr>
				
				<tr class="opened">
					<td class="day_label">Weight in Kgs:</td>
					<td class="day_value change"><input type="text" name="weight" value="<?php echo $data['weight']; ?>" class="form-control" placeholder="Enter Your Weight" /></td>
				</tr>
				<tr class="opened">
					<td class="day_label">Blood Group :</td>
					<td class="day_value change">
						
						
						
						<select class = "form-control" id="bloodgroup" name="bloodgroup">
							<option value="">Select Your Blood Group </option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `bloodgroup`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$bloodgroup1=$row12['bloodgroupname']; 
								?> 
								<option value="<?php echo $bloodgroup1;?>"  <?php if($data['bloodgroup'] ==  $bloodgroup1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $bloodgroup1;?> </option>
									<?php
									}
							?>	
						</select>
						
					</td>
				</tr>
				<tr class="closed">
					<td class="day_label">Diet :</td>
					<td class="day_value change">
						
						<select class = "form-control" id="diet" name="diet">
							<option value="">Select Your Diet plane</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `diet`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$diet1=$row12['dietname']; 
								?> 
								<option value="<?php echo $diet1;?>"  <?php if($data['diet'] ==  $diet1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $diet1;?> </option>
									<?php
									}
							?>	
						</select>
						
					</td>
				</tr>
				<tr class="closed">
					<td class="day_label">Complexion  :</td>
					<td class="day_value change">
						
						<select class = "form-control" id="complexion " name="complexion">
							<option value="">Select Complexion</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `complexion`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$complexion1=$row12['complexionname']; 
								?> 
								<option value="<?php echo $complexion1;?>"  <?php if($data['complexion'] ==  $complexion1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $complexion1;?> </option>
									<?php
									}
							?>	
						</select>
						
					</td>
				</tr>
				<tr class="closed">
					<td class="day_label">Smoke :</td>
					<td class="day_value change">						  
						
						<select name="smoke" value="<?php echo $data['smoke']; ?>" class="form-control">
							
							
							<option value="">select </option>
							<option value="Yes" <?php if($data['smoke']=="Yes" ) echo 'selected="selected"' ; ?>>Yes </option>
							<option value="No" <?php if($data['smoke']=="No" ) echo 'selected="selected"' ; ?>>No </option>
						<option value="Occasional" <?php if($data['smoke']=="Occasional" ) echo 'selected="selected"' ; ?>>Occasional </option>
						</select>
					</td>
				  </tr>
			  </tbody>
		  </table>
	   </div>
    </div>
   </div>
</div>
<h3>Religious / Social & Astro Background</h3>
<div class="card-body ">
	<div class="row">
		
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="container">
				<table class="table table-hover">
					<tbody>
						<tr class="opened">
							<td class="day_label">Time of Birth :</td>
							<td class="day_value change"><input type="text" name="timeofbirth" value="<?php echo $data['timeofbirth']; ?>" class="form-control" placeholder="Hr:Min:Sec AM or PM" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Date of Birth :</td>
							<td class="day_value change"><span><input type="text"  id="datepicker" name="dob" value="<?php echo $data['dob']; ?>" class="form-control" placeholder="Date of Birth" /></td>
							</tr>
														<tr class="opened">
										<td class="day_label">Country of Birth</td>
										<td class="day_value change">	<select name="country1" class="form-control input-height" id="country" >
							<option value="">Select Country</option>
								<?php
								include("connection.php");
								$res=mysqli_query($link,"select * from country");
								while($res1=mysqli_fetch_array($res))
								{
								$country22=$res1['country_name'];
								$country_phone=$res1['country_phone_code'];
								?>
								<option value="<?php  echo $res1['country_name'];?>" selected>
								<?php  echo $country22.' (+'.$country_phone.')';?>


								</option>
								<?php
								}
								?>
							</select></td>
									</tr>
										<tr class="opened">
										<td class="day_label">State of Birth</td>
										<td class="day_value change" id="select_states">
											<select  name="state1" id="state1" class="form-control input-height" onChange="city_selection()">
									<option value="">State</option>

										
									<?php
													include("connection.php");
													$a=$res1['id'];
													$res=mysqli_query($link,"select * from states ");


													

													while($res1=mysqli_fetch_array($res))
													{
														$state2=$res1['name'];
													
													 if($res1['name'] == $data['state1']) 
													{?>
													<option  value="<?php  $data['state1'];?>" selected>
													<?php  echo $state2;?>
													</option>
														
												<?php	}
													else
													{?>
													<option  value="<?php  echo $res1['name'];?>" >
														<?php  echo $state2;?>
														
														
													</option>
													<?php	}
													
													}
													
												?>

									</select>
											
										</td>
									</tr>
									
						
							<tr class="opened">
								<td class="day_label">Place of Birth :</td>
								<td class="day_value change"><input type="text" name="placeofbirth" value="<?php echo $data['placeofbirth']; ?>" class="form-control" placeholder="Enter Place,Country,State,City" /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Birth Star :</td>
								<td class="day_value change"><input type="text" name="birthstar" value="<?php echo $data['birthstar']; ?>" class="form-control" placeholder="Enter Birthstar" /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Raasi :</td>
								<td class="day_value change"><input type="text" name="raasi" value="<?php echo $data['raasi']; ?>" class="form-control" placeholder="Enter Raasi" /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Paadamu :</td>
								<td class="day_value change"><input type="text" name="paadamu" value="<?php echo $data['paadamu']; ?>" class="form-control" placeholder="Enter Paadamu" /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Caste :</td>
								<td class="day_value change">							  
									
									<select class = "form-control" id="caste" name="caste">
										<option value="">Select any one</option>
										<?php
											$sqlstt134=mysqli_query($link,"SELECT * FROM `caste`");
											while($row12=mysqli_fetch_array($sqlstt134))
											{
												$caste1=$row12['castename']; 
											?> 
											<option value="<?php echo $caste1;?>"  <?php if($data['caste'] ==  $caste1) echo 'selected="selected"';  ?>>                      
												<?php 
												echo $caste1;?> </option>
												<?php
												}
										?>	
									</select>
									
									
									
								</td>
							</tr>
							<tr class="opened">
								<td class="day_label">Other Caste :</td>
								<td class="day_value change"><input type="text" class="form-control" value="<?php echo $data['othercaste']; ?>" name="othercaste" placeholder="Enter Other Caste"/></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
						
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="container">
		<table class="table table-hover">
			<tbody>
				<tr class="opened">
					<td class="day_label">Sub Caste :</td>
					<td class="day_value change">                          
						
						
						
						<select class = "form-control" id="subcaste" name="subcaste">
							<option value="">Select Your Sub Caste</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `subcaste`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$subcaste1=$row12['subcastename']; 
								?> 
								<option value="<?php echo $subcaste1;?>"  <?php if($data['subcaste'] ==  $subcaste1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $subcaste1;?> </option>
									<?php
									}
							?>	
						</select>
						
					</td>
				</tr>
				
				
	
				<tr class="opened">
					<td class="day_label">Other Subcaste:</td>
					<td class="day_value change"><input type="text" value="<?php echo $data['othersubcaste']; ?>" name="othersubcaste" class="form-control" placeholder="Enter other SubCaste"/></td>
				</tr>
				<tr class="opened_1">
					<td class="day_label">Religion :</td>
					<td class="day_value change">
						
						<select class = "form-control" id="religion" name="religion">
							<option value="">Select Religion</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `religion`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$religion1=$row12['religionname']; 
								?> 
								<option value="<?php echo $religion1;?>"  <?php if($data['religion'] ==  $religion1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $religion1;?> </option>
									<?php
									}
							?>	
						</select>
					</td>
				</tr>
				<tr class="opened">
					<td class="day_label">Other Religion :</td>
					<td class="day_value change"><input type="text" value="<?php echo $data['otherreligion']; ?>" name="otherreligion" class="form-control" placeholder="Enter Other Religion"/></td>
				</tr>
				
				<tr class="opened">
					<td class="day_label">Gothram :</td>
					<td class="day_value change">
                    
                    
                    
                    <select class = "form-control" id="gothram" name="gothram">
							<option value="">Select Gothram</option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `gothram`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$gothram1=$row12['gothramname']; 
								?> 
	<option value="<?php echo $gothram1;?>"  <?php if($data['gothram'] ==  $gothram1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $gothram1;?> </option>
									<?php
									}
							?>	
						</select>
                   </td>
					<tr class="opened">
						<td class="day_label">Other Gothram :</td>
						<td class="day_value change"><input type="text" value="<?php echo $data['othergothram']; ?>" name="othergothram" class="form-control" placeholder="Enter Other Gothram"/></td>
					</tr>
				</tr>
				<tr class="opened">
					<td class="day_label">Kuja Dosham/Manglik:</td>
					<td class="day_value change">
						
						<select name="dostham" value="<?php echo $data['dostham']; ?>" class="form-control">
							
							
							<option value="">select </option>
							<option value="Yes" <?php if($data['dostham']=="Yes" ) echo 'selected="selected"' ; ?>>Yes</option>
							<option value="No" <?php if($data['dostham']=="No" ) echo 'selected="selected"' ; ?>>No</option>
						</select>
						
						
						
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
<h3>Education & Career</h3>
<div class="card-body ">
	<div class="row">
		
		<div class="col-md-12 col-sm-6 col-xs-12">
			<div class="container">
				<table class="table table-hover">
					
					<tbody>
						<tr class="opened">
							<td class="day_label">Highest Education :</td>
							<td class="day_value change">
								
								
								
								<select class = "form-control" id="highesteducation" name="highesteducation">
									<option value="">Select Your Highest Education</option>
									<?php
										$sqlstt134=mysqli_query($link,"SELECT * FROM `highesteducation`");
										while($row12=mysqli_fetch_array($sqlstt134))
										{
											$highesteducation1=$row12['highesteducationname']; 
										?> 
										<option value="<?php echo $highesteducation1;?>"  <?php if($data['highesteducation'] ==  $highesteducation1) echo 'selected="selected"';  ?>>                      
											<?php 
											echo $highesteducation1;?> </option>
											<?php
											}
									?>	
								</select>
								
							</td>
						</tr>
						<tr class="opened">
							<td class="day_label">Other Education :</td>
							<td class="day_value change"><input type="text" name="othereducation" value="<?php echo $data['othereducation']; ?>" class="form-control" placeholder="Enter Your Other Education" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Designation:</td>
							<td class="day_value change">                                
								
								<select class = "form-control" id="designation" name="designation">
									<option value="">Select Your Designation</option>
									<?php
										$sqlstt134=mysqli_query($link,"SELECT * FROM `designation`");
										while($row12=mysqli_fetch_array($sqlstt134))
										{
											$designation1=$row12['designationname']; 
										?> 
										<option value="<?php echo $designation1;?>"  <?php if($data['designation'] ==  $designation1) echo 'selected="selected"';  ?>>                      
											<?php 
											echo $designation1;?> </option>
											<?php
											}
									?>	
								</select>
								
							</td>
						</tr>
						
						<tr class="opened">
							<td class="day_label">Annual Income In Lakhs:</td>
							<td class="day_value change">
								
								
								<select class = "form-control" id="annualincome" name="annualincome">
									<option value="">In Lakhs</option>
									<?php
										$sqlstt134=mysqli_query($link,"SELECT * FROM `annualincomeinlakhs`");
										while($row12=mysqli_fetch_array($sqlstt134))
										{
											$annualincome1=$row12['annualincomeinlakhsname']; 
										?> 
										<option value="<?php echo $annualincome1;?>"  <?php if($data['annualincome'] ==  $annualincome1) echo 'selected="selected"';  ?>>                      
											<?php 
											echo $annualincome1;?> </option>
											<?php
											}
									?>	
								</select>                            
								
								
								
								
							</td>
							
						</tr>
						<tr class="opened">
							<td class="day_label">Company Name :</td>
							<td class="day_value change"><input type="text" name="companyname" value="<?php echo $data['companyname']; ?>" class="form-control" placeholder="Enter Companyname with Address" /></td>
						</tr>
						
						<tr class="opened">
							<td class="day_label">Work Phone No :</td>
							<td class="day_value change"><input type="text" name="workphoneno" value="<?php echo $data['workphoneno']; ?>" class="form-control" placeholder="Enter Work Phone No" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Country Living In :</td>
							<td class="day_value change"><input type="text" name="countrylivingin" value="<?php echo $data['countrylivingin']; ?>" class="form-control" placeholder="Enter Country Living In" /></td>
						</tr>
						
					
						<tr class="opened">
							<td class="day_label">Residing State:</td>
							<td class="day_value change"><input type="text" name="residingstate" value="<?php echo $data['residingstate']; ?>" class="form-control" placeholder="Enter Village,City,State,Country" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Citizenship</td>
							<td class="day_value change"><input type="text" name="citizenship" value="<?php echo $data['citizenship']; ?>" class="form-control" placeholder="Enter Citizenship" /></td>
						</tr>
						
						<tr class="opened">
							<td class="day_label">Native Place </td>
							<td class="day_value change"><input type="text" name="nativeplace" value="<?php echo $data['nativeplace']; ?>" class="form-control" placeholder="Enter Place,Country,State,City" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Settled At</td>
							<td class="day_value change"><input type="text" name="settledat" value="<?php echo $data['settledat']; ?>" class="form-control" placeholder="Enter Place,Country,State,City" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">Languages Known</td>
							<td class="day_value change"><input type="text" name="languagesknown" value="<?php echo $data['languagesknown']; ?>" class="form-control" placeholder="Enter Languages Known" /></td>
						</tr>
						<tr class="opened">
							<td class="day_label">About MYself</td>
							<td class="day_value change">
								<textarea rows="10" cols="47" name="aboutyour" class="ckeditor"  placeholder="About MYself"><?php echo $data['aboutyour'] ?></textarea>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</div>
<center><button href="#" type="submit" name="fillsubmit" class="btn btn-warning serch">submit</button></center>
</div>

</form>
<?php
error_reporting(0);
include("connection.php");
$id=$userid;
if(isset($_POST['submitone']))
{	
	$foccupation=$_POST['foccupation'];
	$fathername=$_POST['fathername'];
	$mothername=$_POST['mothername'];
	$moccupation=$_POST['moccupation'];
	$noofbrothers=$_POST['noofbrothers'];
	$noofsisters=$_POST['noofsisters'];
	
	$sqlstt="update `tbl_users` set foccupation='".$foccupation."',fathername='".$fathername."',moccupation='".$moccupation."',mothername='".$mothername."',noofbrothers='".$noofbrothers."',noofsisters='".$noofsisters."',date=now() where id='".$userid."'";;
	if($result1=mysqli_query($link,$sqlstt))
	{

		echo '<script>alert("Updated")</script>';
		echo "<script> window.location.assign('".$_GET['page']."?id=".$id."') </script>";
		//echo "<script type='text/javascript'>if(confirm('Updated')){document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}else{document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}</script>"; 	
	}
	else
	{
		echo "<script type='text/javascript'>if(confirm('Oops..something went wrong')){document.location.href='index'}else{document.location.href='index'}</script>";
	}
}
?>

<div class="tab-pane" id="tab_default_2">
<div class="card-body ">
	<form action="#" method="post">
		<div class="row">
			
			<div class="col-md-12 col-sm-6 col-xs-12">
				<div class="container">
					<table class="table table-hover">
						<tbody>
							<tr class="opened">
								<td class="day_label">Father Name :</td>
								<td class="day_value change"><input type="text" name="fathername" value="<?php echo $data['fathername'] ?>" class="form-control" placeholder="Father Name "/></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Father's Occupation :</td>
								<td class="day_value change"><input type="text" name="foccupation" value="<?php echo $data['foccupation'] ?>" class="form-control" placeholder="Enter Your Father's Occupation" /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Mother Name :</td>
								<td class="day_value change"><input type="text" name="mothername" value="<?php echo $data['mothername'] ?>" class="form-control" placeholder="Mother Name "/></td>
							</tr>
							<tr class="opened">
								<td class="day_label">Mother's Occupation :</td>
								<td class="day_value change"><input type="text" name="moccupation" value="<?php echo $data['moccupation'] ?>" class="form-control" placeholder="Enter Your Mother's Occupation  " /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">No. of Brothers :</td>
								<td class="day_value change"><input type="number" name="noofbrothers" value="<?php echo $data['noofbrothers'] ?>" class="form-control" placeholder="Enter Your No. of Brothers " /></td>
							</tr>
							<tr class="opened">
								<td class="day_label">No. of Sisters :</td>
								<td class="day_value change"><input type="number" name="noofsisters" value="<?php echo $data['noofsisters'] ?>" class="form-control" placeholder="Enter Your No. of Sisters" /></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			
		</div>
	</div>
	<center><button href="#" type="submit" name="submitone" class="btn btn-warning serch">submit</button></center>
</form>

</div>
									

<?php
error_reporting(0);
include("connection.php");
$id=$userid;
if(isset($_POST['submittwo']))
{	
$agep=$_POST['agep'];
$maritalstatusp=$_POST['maritalstatusp'];
$bodytypep=$_POST['bodytypep'];
$complexionp=$_POST['complexionp'];



$heightp = mysqli_real_escape_string($link,$_POST['heightp']);
$heightpd = mysqli_real_escape_string($link,$_POST['heightpd']);
$dietp =$_POST['dietp'];
$kujadoshamp=$_POST['kujadoshamp'];
$religionp=$_POST['religionp'];
$castep=$_POST['castep'];
$subcastep=$_POST['subcastep'];

$mtonguep=$_POST['mtonguep'];
$educationp=$_POST['educationp'];

$cofresidencep=$_POST['cofresidencep'];
$aboutyour1=$_POST['aboutyour1'];
$agepd=$_POST['agepd'];
$age1=$_POST['age1'];

$statep =$_POST['statep'];
$rstatusp=$_POST['rstatusp'];

$sqlstt="update `tbl_users` set age1='".$age1."', heightpd='".$heightpd."',agepd='".$agepd."',agep='".$agep."',subcastep='".$subcastep."',maritalstatusp='".$maritalstatusp."',aboutyour1='".$aboutyour1."',bodytypep='".$bodytypep."',complexionp='".$complexionp."',heightp='".$heightp."',dietp='".$dietp."',kujadoshamp='".$kujadoshamp."',religionp='".$religionp."',castep='".$castep."',mtonguep='".$mtonguep."',educationp='".$educationp."',cofresidencep='".$cofresidencep."',statep='".$statep."',rstatusp='".$rstatusp."',date=now() where id='".$id."'";
if($result1=mysqli_query($link,$sqlstt))
{
echo '<script>alert("Updated")</script>';
echo "<script> window.location.assign('".$_GET['page']."?id=".$_GET['id']."') </script>";
//echo "<script type='text/javascript'>if(confirm('Updated')){document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}else{document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}</script>"; 	
}
else
{
echo "<script type='text/javascript'>if(confirm('Oops..something went wrong')){document.location.href='index'}else{document.location.href='index'}</script>";
}
}
?>


<div class="tab-pane" id="tab_default_3">
	<div class="card-body ">
		<form action="#" method="post">
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="container">
						<table class="table table-hover">
							<tbody>
								<tr class="opened">
								<td class="day_label">Age Range :</td>
								<td class="day_value change" align-left>

								<select class = "form-control" id="age1" name="age1">
								<option value="">Age</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `age`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
								$agep12=$row12['agename']; 
								?> 
								<option value="<?php echo $agep12;?>"  <?php if($data['age1'] ==  $agep12) echo 'selected="selected"';  ?>>                      
								<?php 
								echo $agep12;?> </option>
								<?php
								}
								?>	
								</select>
								</td>
								<td>
								To
								</td>
									<td class="day_value change">

								<select class = "form-control" id="agepd" name="agepd">
								<option value="">Age</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `age`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
								$agep12=$row12['agename']; 
								?> 
								<option value="<?php echo $agep12;?>"  <?php if($data['agepd'] ==  $agep12) echo 'selected="selected"';  ?>>                      
								<?php 
								echo $agep12;?> </option>
								<?php
								}
								?>	
								</select>
								</td>
								




								
								</tr>
								<tr class="opened">
								<td class="day_label">Marital Status :</td>
								<td class="day_value change">

								<select class = "form-control" id="maritalstatusp" name="maritalstatusp">
								<option value="">Select Your Marital Status</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `maritalstatus`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
								$maritalstatusp1=$row12['maritalstatusname']; 
								?> 
								<option value="<?php echo $maritalstatusp1;?>"  <?php if($data['maritalstatusp'] ==  $maritalstatusp1) echo 'selected="selected"';  ?>>                      
								<?php 
								echo $maritalstatusp1;?> </option>
								<?php
								}
								?>	
								</select>


								</td>
								</tr>
								<tr class="opened">
								<td class="day_label">Body Type :</td>
								<td class="day_value change">

								<select class = "form-control" id="bodytypep" name="bodytypep">
								<option value="">Select Your Body Type</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `bodytype`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
								$bodytypep1=$row12['bodytypename']; 
								?> 
								<option value="<?php echo $bodytypep1;?>"  <?php if($data['bodytypep'] ==  $bodytypep1) echo 'selected="selected"';  ?>>                      
								<?php 
								echo $bodytypep1;?> </option>
								<?php
								}
								?>	
								</select>
								</tr>
								<tr class="opened">
								<td class="day_label">Complexion :</td>
								<td class="day_value change">

								<select class = "form-control" id="complexionp" name="complexionp">
								<option value="">Select Complexion</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `complexion`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$complexion1=$row12['complexionname']; 
								?> 
								<option value="<?php echo $complexion1;?>"  <?php if($data['complexionp'] ==  $complexion1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $complexion1;?> </option>
									<?php
									}
								?>	
								</select>

								</td>
								</tr>

								<tr class="opened">
								<td class="day_label">Height :</td>
								<td class="day_value change">

								<select class = "form-control" id="height" name="heightp">
								<option value="">Select Height</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `height` order by id asc");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									
									//$heightp1=mysqli_real_escape_string(htmlspecialchars($string))
									$heightp1=$row12['heightname']; 
								?> 
								<option value="<?php echo $heightp1;?>"  <?php if($data['heightp'] ==  $heightp1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $heightp1;?> </option>
									<?php
									}
								?>	
								

								</td>
								</tr>
								




								<tr class="opened">
								<td class="day_label">Diet :</td>
								<td class="day_value change">

								<select class = "form-control" id="dietp" name="dietp">
								<option value="">Select Your Diet</option>
								<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `diet`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$dietp1=$row12['dietname']; 
								?> 
								<option value="<?php echo $dietp1;?>"  <?php if($data['dietp'] ==  $dietp1) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $dietp1;?> </option>
									<?php
									}
								?>	
								</select>

								</td></tr>
								
								
								<tr class="opened">
					<td class="day_label">Kuja Dosham/Manglik:</td>
					<td class="day_value change">
						
						<select name="kujadoshamp" value="<?php echo $data['kujadoshamp']; ?>" class="form-control">
							
							
							<option value="">select </option>
							<option value="Yes" <?php if($data['kujadoshamp']=="Yes" ) echo 'selected="selected"' ; ?>>Yes</option>
							<option value="No" <?php if($data['kujadoshamp']=="No" ) echo 'selected="selected"' ; ?>>No</option>
						</select>
						
						
						
					</td>
				</tr>
								<tr class="opened">
								<td class="day_label">Religion :</td>
								<td class="day_value change">


								<select class = "form-control" id="religion" name="religionp">
								<option value="">Select Religion</option>
								<?php
									$sqlstt134=mysqli_query($link,"SELECT * FROM `religion`");
									while($row12=mysqli_fetch_array($sqlstt134))
									{
										$religion1=$row12['religionname']; 
									?> 
									<option value="<?php echo $religion1;?>"  <?php if($data['religionp'] ==  $religion1) echo 'selected="selected"';  ?>>                      
										<?php 
										echo $religion1;?> </option>
										<?php
										}
								?>	
								</select>



								</td>
								</tr>
								<tr class="opened">
								<td class="day_label">Caste :</td>
								<td class="day_value change">


								<select class = "form-control" id="castep" name="castep">
								<option value="">Select Your Caste</option>
								<?php
									$sqlstt134=mysqli_query($link,"SELECT * FROM `caste`");
									while($row12=mysqli_fetch_array($sqlstt134))
									{
										$castep1=$row12['castename']; 
									?> 
									<option value="<?php echo $castep1;?>"  <?php if($data['castep'] ==  $castep1) echo 'selected="selected"';  ?>>                      
										<?php 
										echo $castep1;?> </option>
										<?php
										}
								?>	
								</select>

								</td>
								</tr>

								<tr class="opened">
								<td class="day_label">Sub Caste :</td>
								<td class="day_value change">

								<select class = "form-control" id="subcastep" name="subcastep">
								<option value="">Select Your Sub Caste</option>
								<?php
									$sqlstt134=mysqli_query($link,"SELECT * FROM `subcaste`");
									while($row12=mysqli_fetch_array($sqlstt134))
									{
										$subcaste1=$row12['subcastename']; 
									?> 
									<option value="<?php echo $subcaste1;?>"  <?php if($data['subcastep'] ==  $subcaste1) echo 'selected="selected"';  ?>>                      
										<?php 
										echo $subcaste1;?> </option>
										<?php
										}
								?>	
								</select>

								</td>
								</tr>
								<tr class="opened">
								<td class="day_label">Mother Tongue :</td>
								<td class="day_value change">

						<select class = "form-control" id="mothertongue" name="mtonguep">
							<option value="">Select Mother Tongue </option>
							<?php
								$sqlstt134=mysqli_query($link,"SELECT * FROM `mothertongue`");
								while($row12=mysqli_fetch_array($sqlstt134))
								{
									$mothertongue12=$row12['mothertonguename']; 
								?> 
								<option value="<?php echo $mothertongue12;?>"  <?php if($data['mtonguep'] ==  $mothertongue12) echo 'selected="selected"';  ?>>                      
									<?php 
									echo $mothertongue12;?> </option>
									<?php
									}
							?>	
						</select>
						

								</td>
								</tr>
								<tr class="opened">
								<td class="day_label">Education :</td>
								<td class="day_value change">

								<select class = "form-control" id="educationp" name="educationp">
								<option value="">Select Your Highest Education</option>
								<?php
									$sqlstt134=mysqli_query($link,"SELECT * FROM `highesteducation`");
									while($row12=mysqli_fetch_array($sqlstt134))
									{
										$highesteducation1=$row12['highesteducationname']; 
									?> 
									<option value="<?php echo $highesteducation1;?>"  <?php if($data['educationp'] ==  $highesteducation1) echo 'selected="selected"';  ?>>                      
										<?php 
										echo $highesteducation1;?> </option>
										<?php
										}
								?>	
								</select>
								</td>
								</tr>


								<tr class="opened">
								<td class="day_label">Location Preference :</td>
								<td class="day_value change"><input type="text" value="<?php echo $data['statep'] ?>" name="statep" class="form-control" placeholder="Enter Your Village,City,State,Country" /></td>
								</tr>

								<tr class="opened">
								<td class="day_label">About</td>
								<td class="day_value change">
								<textarea rows="10" cols="47" name="aboutyour1" class="ckeditor"  placeholder="About"><?php echo $data['aboutyour1'] ?></textarea>

								</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
						</div>
                   <center><button href="#" type="submit" name="submittwo" class="btn btn-warning serch">submit</button></center>
                    </form>
               </div>
         </div>



<?php
/*error_reporting(0);
include("connection.php");
$id=$_GET['id'];
if(isset($_POST['submitthree']))
{	
$namep=$_POST['namep'];
$phonenump=$_POST['phonenump'];
$emailidp=$_POST['emailidp'];
$aadharp=$_POST['aadharp'];

$fulladdressp=$_POST['fulladdressp'];

$country=$_POST["country"];
$country_code=$_POST["country_code"];
$state=$_POST["state"];
$city=$_POST["city"];
$phoneno=$_POST["phoneno"];
$countrycode=$_POST["countrycode"];

$sqlstt="update `tbl_users` set namep='".$namep."',phonenump='".$phonenump."',emailidp='".$emailidp."',aadharp='".$aadharp."' ,fulladdressp='".$fulladdressp."',date=now() where id='".$id."'";;
if($result1=mysqli_query($link,$sqlstt))
{
echo '<script>alert("Updated")</script>';
echo "<script> window.location.assign('".$_GET['page']."?id=".$_GET['id']."') </script>";
//echo "<script type='text/javascript'>if(confirm('Updated')){document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}else{document.location.href=''".$_GET['page']."?id=".$_GET['id']."'}</script>"; 
//echo "<script> window.location.assign('index') </script>";	
}
else
{
echo "<script type='text/javascript'>if(confirm('Oops..something went wrong')){document.location.href='index'}else{document.location.href='index'}</script>";
}
}*/
?>

	<div class="tab-pane" id="tab_default_4">
		<div class="card-body ">
			<form action="#" method="post">
				<div class="row">
					
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="container">
							<table class="table table-hover">
								
								<tbody>
									<tr class="opened">
										<td class="day_label">Name :</td>
										<td class="day_value change"><input type="text" value="<?php //echo $data['namep'] ?>" name="namep" data-="1" placeholder="Enter full name" class="form-control input-height" / >  </td>
									</tr>
									<tr class="opened">
										<td class="day_label">Email :</td>
										<td class="day_value change"><input type="text" value="<?php //echo $data['emailidp'] ?>" name="emailidp" class="form-control input-height" placeholder="Email"  ></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Country</td>
										<td class="day_value change">	<select name="country" class="form-control input-height" id="country" >
							<option value="">Select Country</option>
							<?php
								include("connection.php");
								$res=mysqli_query($link,"select * from country");
								while($res1=mysqli_fetch_array($res))
								{
								$country22=$res1['country_name'];
								$country_phone=$res1['country_phone_code'];
								?>
								<option value="<?php  echo $res1['country_name'];?>">
								<?php  echo $country22.' (+'.$country_phone.')';?>


								</option>
								<?php
								}
								?>
							</select></td>
									</tr>
									<tr class="opened">
										<td class="day_label">Country Code</td>
										<td class="day_value change"><input type="text" name="country_code" id="countrycode" placeholder="Code" class="form-control input-height" > </td>
									</tr>
									<tr class="opened">
										<td class="day_label">Phone Number</td>
										<td class="day_value change">
											<input type="text" name="phonenump" onkeypress='return isNumberKey(event)' placeholder="Phone Number"    maxlength="14"  id="mobile" placeholder="Enter Phone Number" value="<?php echo $data['phonenump']; ?>" class="form-control input-height">
											
										</td>
									</tr>
									<tr class="opened">
										<td class="day_label">Country Code</td>
										<td class="day_value change">
											<input type="text" name="countrycode" id="countrycode" placeholder="Code" class="form-control input-height" >

										</td>
									</tr>
									<tr class="opened">
										<td class="day_label">Other Phone Number</td>
										<td class="day_value change">
											   <input type="text" name="alternateno" onkeypress='return isNumberKey(event)' placeholder="Mobile Number"   maxlength="14"  id="mobile" class="form-control input-height" value="<?php echo $data['alternateno']; ?>" placeholder="Enter Other Phone Number(Optional)">
											
										</td>
									</tr>
									<tr class="opened">
										<td class="day_label">State</td>
										<td class="day_value change" id="select_states">
											<select  name="state1" id="state" class="form-control input-height" onChange="city_selection()">
									<option value="">State</option>
									</select>
											
										</td>
									</tr>
									<tr class="opened">
										<td class="day_label">City</td>
										<td class="day_value change" id="select_citys">
											<select name="city1" class="form-control input-height" id="city">
									<option value="">City</option>
									</select>
										</td>
									</tr>
									<tr class="opened">
										<td class="day_label"> Address</td>
										<td class="day_value change" >
												<textarea name="fulladdressp" id="editor1" class="form-control-textarea" placeholder="Enter You Description" rows="5">
						<?php //echo $data['fulladdressp'] ?>
					       </textarea>
											
										</td>
									</tr>
									
								
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
				<button href="#" type="submit" name="submitthree" class="btn btn-warning serch">submit</button>
		</form>
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
</div>
</div>
</div>

<!-- end page content -->
<?php include('footer.php');?>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<!--include jQuery Validation Plugin--> 
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script> 
<!--Optional: include only if you are using the extra rules in additional-methods.js --> 
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js" type="text/javascript"></script> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
function isNumberKey(evt){
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}

</script>


<script>
$( document ).ready(function() {
$("#country").change(function() {
//get the selected value
var selectedValue = this.value;

$.ajax({
url: 'get_state.php',

type: 'POST',
data: {option : selectedValue},
success: function(data){

$("#select_states").html(data);
}
});


});

});

</script>












<script>
$( document ).ready(function() {
$("#country").change(function() {
//get the selected value
var selectedValue = this.value;

$.ajax({
url: 'get_state12.php',

type: 'POST',
data: {option : selectedValue},
success: function(data){

$("#select_states").html(data);
}
});


});

});

</script>
<script>
$( document ).ready(function() {
$("#country").change(function() {
//get the selected value
var selectedValue = this.value;

$.ajax({
url: 'get_code.php',
type: 'POST',
data: {option : selectedValue},
success: function(data){
//alert(data);
$("#select_codes").html(data);
}
});


});

});

</script>

<script>
$( document ).ready(function() {
$("#country").change(function() {
//get the selected value
var selectedValue = this.value;

$.ajax({
url: 'get_code1.php',
type: 'POST',
data: {option : selectedValue},
success: function(data){
//alert(data);
$("#select_codes1").html(data);
}
});


});

});

</script>
<script>
function city_selection(val){

var selectedValue = val;
$.ajax({
url: 'get_city.php',
type: 'POST',
data: {option : selectedValue},
success: function(data){
//alert(data);
$("#select_citys").html(data);
}
});
}
</script>


<script>
$(function() {
        $( "#datepicker" ).datepicker({
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
   

</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>