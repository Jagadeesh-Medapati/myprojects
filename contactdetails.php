<?php 
									session_start();
									include("connection.php");
									$id=$_SESSION['userid'];
									$query=mysqli_query($link,"SELECT * from tbl_users where id='".$id."'");
									$data=mysqli_fetch_assoc($query);
									$height12 =mysqli_real_escape_string($link,$data['height']);
								?>
<?php
error_reporting(0);
include("connection.php");

$id=$_SESSION['userid'];
if(isset($_POST['submitthree']))
{	
$namep=$_POST['namep'];
$phonenump=$_POST['phonenump'];
$emailidp=$_POST['emailidp'];
$aadharp=$_POST['aadharp'];

$fulladdressp=$_POST['fulladdressp'];

$country=$_POST["country"];
$country_code=$_POST["country_code"];
$state=$_POST["state1"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$countrycode=$_POST["countrycode"];

$alternateno=$_POST["alternateno"];

$country=$_POST['country'];
		$state=$_POST['state1'];
		$city=$_POST['city'];


$sqlstt="update `tbl_users` set namep='".$namep."',phonenump='".$phonenump."',country='".$country."',state='".$state."',city='".$city."',countrycode='".$countrycode."',alternateno='".$alternateno."',emailidp='".$emailidp."',aadharp='".$aadharp."' ,fulladdressp='".$fulladdressp."',date=now() where id='".$id."'";;
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
}
?>
<style>
	
	img.dimg {
    border-radius: 60px;
    height: 100px;
    width: 100px;
    margin-left: 10px;
	}
	
	}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php include('header.php');?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
<!-- start admited patient list -->
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="card card-topline-red">
			<div class="card-head">
				<header>Contact Details</header>
				<div class="tools">
					<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
					<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
					<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
				</div>
			</div>
<div class="card-body ">
	<div class="row">
				<form action="" role="form" name="form" id="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12 col-sm-12">
				<div class="form-group row">
					<div class="col-md-6">
				<label class="control-label"> Name
						<span class="required"> * </span>
				</label>
				<input type="text" value="<?php echo $data['namep'] ?>" name="namep" data-required="1" placeholder="Enter full name" class="form-control input-height" / required> </div>
				<div class="col-md-6">
				<label class="control-label">Email
					<span class="required"> * </span>
				</label>
				<input type="text" value="<?php echo $data['emailidp'] ?>" name="emailidp" class="form-control input-height" placeholder="Email"  required>
				</div>
			</div>
			<div class="form-group row">
			   <div class="col-md-6">
				<label class="control-label">Country
					<span class="required"> * </span>
					  </label>
						<select name="country" class="form-control input-height" id="country" required>
							<option value="">Select Country</option>
								<?php
								include("connection.php");
								
								include("connection.php");
								$id = $_SESSION['userid'];
								$query=mysqli_query($link,"SELECT * from tbl_users where id=$id;");
								$data=mysqli_fetch_assoc($query);
								$coun=$data['country'];
									
								
							
								$res=mysqli_query($link,"select * from country");

								while($res1=mysqli_fetch_array($res))
								{
									$country22=$res1['country_name'];
									$country_phone=$res1['country_phone_code'];
								 if($country22 == $coun) 
								{?>
								<option  value="<?php  echo $country22;?>" selected>
								<?php  echo $country22.' (+'.$country_phone.')'; $b=$country_phone;?>
								</option>
									
							<?php	}
								else
								{?>
								<option  value="<?php  echo $res1['country_name'];?>" >
									<?php  echo $country22.' (+'.$country_phone.')';?>
									
									
								</option>
								<?php	}
								
								}
								
							?>
						</select>
							</div>
							
							<div class="col-md-3">
						<label class="control-label">State
							<span class="required"> * </span>
					</label>
						<div id="select_states">
						<select  name="state1" id="state" class="form-control input-height" onchange="city_selection()" required>
						<option value="">State</option>

										
<?php
				include("connection.php");
				$a=$res1['id'];
				$res=mysqli_query($link,"select * from states ");


				

				while($res1=mysqli_fetch_array($res))
				{
					$state2=$res1['name'];
				
				 if($res1['name'] == $data['state']) 
				{?>
				<option  value="<?php  $data['state'];?>" selected>
				<?php  echo $data['state'];;?>
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

												</select>
									</div></div>
									<div class="col-md-3">
									<label class="control-label">City
									<span class="required"> * </span>
									</label>
									<div id="select_citys">
									<select name="city" class="form-control input-height" id="city">
														<option><?php echo $data['city'];?></option>
													</select>
						       </div>
						   </div>
						<div class="col-md-2" id="select_codes">
							<label class="control-label">Country Code
							<span class="required"> * </span>
							</label>
							<input type="text" name="countrycode" id="country_code"  value="<?php  echo '(+'.$b.')';?>" placeholder="Code" class="form-control input-height" >
						</div>
						<div class="col-md-4" id="select_codes">
							<label class="control-label">Phone Number
							<span class="required"> * </span>
							</label>
						<input type="text" name="phonenump" required onkeypress='return isNumberKey(event)' placeholder="Phone Number"    maxlength="14"  id="mobile" placeholder="Enter Phone Number" value="<?php echo $data['phonenump']; ?>" class="form-control input-height">
					</div>
           </div>


<div class="form-group row">
	<div class="col-md-2" id="select_codes1">
		<label class="control-label">Country Code
			<span class="required"> * </span>
		</label>
		<input type="text" name="countrycode" id="country_code"  value="<?php  echo '(+'.$b.')';?>" placeholder="Code" class="form-control input-height" >
   </div>
		   <div class="col-md-4" id="select_codes1">
		   	<label class="control-label">Other Phone Number
		   		<span class="required"> * </span>
		   </label>
			   <input type="text" name="alternateno" required onkeypress='return isNumberKey(event)' placeholder="Mobile Number"   maxlength="14"  id="mobile" class="form-control input-height" value="<?php echo $data['alternateno']; ?>" placeholder="Enter Other Phone Number(Optional)">
			    </div>
					
						</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label class="control-label">Address :  </label>
							<textarea name="fulladdressp" id="editor1" class="form-control-textarea" placeholder="Enter You Description" rows="5">
						<?php echo $data['fulladdressp'] ?>
					       </textarea>
					    </div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<center><button href="#" type="submit" name="submitthree" class="btn btn-warning serch">submit</button></center>

</form>
</div>
</div>
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
<!-- <script>
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

</script> -->
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
function city_selection(){

var selectedValue = this.value;
var selectedValue =document.getElementById("state").value;

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