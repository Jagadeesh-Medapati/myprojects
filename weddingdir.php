<?php 
error_reporting(0);
include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Directory</title>
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
.btn-primary {
    color: #fff;
    background-color: #b00403;
    border-color: #b00403;
    float: right;
    margin-top: 10px;
}	
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
<!--  end navigation -->
<!-- how it work -->
  <section id="how-it-work" class="parallax how-it-main-block" style="background-image: url('images/newimg/1.jpg');">
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="section text-center">
        <h3 class="section-heading">How It Works</h3>
        <p class="section-sub-heading">Wedding Directory</p>
      </div>
      <div class="col-sm-4">
        <div class="how-it-block text-center">
          <div class="how-it-icon">
            <i class="flaticon-wedding-location"></i>
          </div>
          <h4 class="how-it-heading">1.Find The Vendor</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="how-it-block text-center">
          <div class="how-it-icon">
            <i class="flaticon-wedding-planning"></i>
          </div>
          <h4 class="how-it-heading">2.Compare The Proposal</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="how-it-block text-center">
          <div class="how-it-icon">
            <i class="flaticon-heart-with-arrow"></i>
          </div>
          <h4 class="how-it-heading">3.Hire The Right Vendor</h4>
        </div>
      </div>
    </div>
  </section>
<!-- end how it work -->
<!-- category listing -->
		<!-- register popup -->
		<div class="modal fade register-model" id="vendor" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h5 class="modal-title text-center"> Vendor</h5>
					</div>
			
					
					<div id="vreg" class="w3-container vendor">
					    <div class="modal-body request-model-body text-center">
							<form id="register-form" action="#">
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" class="form-control size" id="reg_name" placeholder="Enter Your Name"/>
				</div>
		
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
			    <input type="text" class="form-control size" name="phone" placeholder="Enter Your phone number" required=""/>
			
				</div>
				
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" class="form-control size" name="Email" placeholder="Enter Your Email" required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Address</span>
					<input type="text" class="form-control size" id="reg_name" placeholder="Enter Your Address" required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>city</span>
				      <select id="w3_country" onchange="change_country(this.value)" class="frm-field required" required="">
						<option value="null">Select Your city </option>
						<option value="null">city1</option>   
						<option value="null">city2</option>   		
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Area</span>
				      <select id="w3_country" onchange="change_country(this.value)" class="frm-field required" required="">
						<option value="null">Select Your Area </option>
						<option value="null">Area1</option>   
						<option value="null">Area2</option>   		
					</select>
				</div>
					<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Referral id:</span>
					<input type="password" name="Password" placeholder="Enter Your Referral id (optional)"/>
				</div>
				

								<a href="otp" type="submit" class="btn btn-default">Submit</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end register popup -->
		</div>




  <section class="main-container">
    <div class="container">
      
	  
      <div class="category-listing-block" id="search_result">
      
      
        <div class="row">
		<?php
					include('connection.php');
					$query="select * from category";
					$result=mysqli_query($link,$query);
					while($row=mysqli_fetch_array($result)){
					$categoryname=$row['categoryname'];                         			
					$image=$row['img']; 		
					?>
					 <?php
				/*include("connection.php");
				$name= $_POST['name'];	
	
		$catagory = $_POST['catagory'];
		$city_name = $_POST['city_name'];
	
		//$product_policy = $_POST['product_policy'];		
		//echo $product_cat.$city_name;exit;
		if($catagory!="" && $city_name!="")
		{
			$select_products = mysqli_query($link,"select * from tbl_vendors where catagory='".$catagory."' and city='".$city_name."' and city='".$city_name."'") or die(mysql_error());
		}
		else if($catagory!="" && $city_name=="")
		{
		$select_products = mysqli_query($link,"select * from tbl_vendors where catagory='".$catagory."' ") or die(mysql_error());
		}
		else if($catagory=="" && $city_name!="")
		{
		$select_products = mysqli_query($link,"select * from tbl_vendors where  city='".$city_name."'") or die(mysql_error());
		}
		else if($catagory=="" && $city_name=="")
		{
			$select_products = mysqli_query($link,"select * from tbl_vendors ") or die(mysql_error());
		}
		
		$count = mysqli_num_rows($select_products);
		if($count>=1)
		{
		while($result=mysqli_fetch_array($select_products))
		{
		$id=$result['id'];
		$catagory=$result['catagory'];
		$image=$result['image'];*/
		?>
          <div class="col-md-4 col-sm-6">
            <div class="category-listing-section">
              <div class="category-listing-dtl">
                <div class="category-listing-img">
                  <a href="wedding-directory?name=<?php echo $categoryname; ?>"><img src="admin/img-admin/img/<?php echo $image; ?>" class="img-responsive wedding-size" alt="category-img" onerror=this.src="noimage.png"></a>
                </div>
                <div class="category-info">
                  <h6 class="category-dtl-heading"><a href="wedding-directory?name=<?php echo $categoryname; ?>"><?php echo $categoryname; ?></a></h6>
                  </div>
              </div>
             
            </div>
          </div>
          
        
		<?php } ?>
   
    </div>
    
	</div>
  </section>
<!-- end category listing -->
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
	<script>

function openVendor(vendorName) {
    var i;
    var x = document.getElementsByClassName("vendor");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(vendorName).style.display = "block";  
}
function openBride(brideName) {
    var i;
    var x = document.getElementsByClassName("bride");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(brideName).style.display = "block";  
}
</script>
 <script>
function wedding_search() 
{
	var catagory_type = $("#catagory_type").val();
	var catagory_type1 = $("#catagory_type1").val();
	var city_name = $("#city_name").val();
	var area_name = $("#area_name").val();
	
	
	 $.ajax({
		url: 'ajax_searchone.php',
		type: 'POST',
		data: {catagory_type : catagory_type,catagory_type1 : catagory_type1,city_name:city_name,area_name:area_name},
		success: function(data){
		$("#search_result").html(data);
        }
    });
	
}
</script>
<!-- end jquery -->
</body>
</html>
