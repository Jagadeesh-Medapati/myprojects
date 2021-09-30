<?php
	
	error_reporting(0);
	//include('header.php');
	
?>

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
		<style type="text/css"> 
			body {
			font-family: 'Open Sans', sans-serif;
			overflow-x: hidden !important;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
            box-sizing: border-box;
			}	
		</style>
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
		<!-- end theme style -->
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
					<p class="section-sub-heading"></p>
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
		
		<section class="main-container">
			<div class="container">
			    <div class="refine-search">
        <h4 class="refine-search-heading">Refine Your Search</h4>
      <form>
          <div class="form-group">
            <div class="row">
              
             <div class="col-md-3 col-sm-6">
                <div class="select-city-dropdown dropdown">
                 <select class = "form-control" name="catagory_type" id="catagory_type">
         <option value="">Select category</option>
          <?php 
include("connection.php");			  
        $select_location=mysqli_query($link,"select distinct(categoryname) from category order by categoryname asc");
        while($get_location=mysqli_fetch_array($select_location))
        {  
			?>
         <option value="<?php echo $get_location['categoryname'];?>"><?php echo $get_location['categoryname'];?></option>
        <?php
        }  ?>        
      </select>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="select-city-dropdown dropdown">
                 <select class = "form-control" name="catagory_type1" id="catagory_type1">
         <option value="">Select country</option>
          <?php 
include("connection.php");			  
        $select_location=mysqli_query($link,"select distinct(country) from tbl_vendors  order by country asc");
        while($get_location=mysqli_fetch_array($select_location))
        {  
if($get_location['country'] !=''){
			$tt=$get_location['country'];
			
			?>
         <option value="<?php echo $get_location['country'];?>"><?php echo $tt;?></option>
        <?php
        } } ?>        
      </select>
                </div>
              </div>
			   <div class="col-md-3 col-sm-6">
                <div class="select-city-dropdown dropdown">
                 <select class = "form-control" name="area_name" id="area_name">
         <option value="">Select State</option>
          <?php 					
        $select_location=mysqli_query($link,"select distinct(state) from tbl_vendors order by state asc");
        while($get_location=mysqli_fetch_array($select_location))
        {  if($get_location['state'] !=''){?>
         <option value="<?php echo $get_location['state'];?>"><?php echo $get_location['state'];?></option>
        <?php
        }  } ?>        
      </select>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="select-city-dropdown dropdown">
                 <select class = "form-control" name="city_name" id="city_name">
         <option value="">Select City</option>
          <?php 
include("connection.php");			  
        $select_location=mysqli_query($link,"select distinct(city) from tbl_vendors order by city asc");
        while($get_location=mysqli_fetch_array($select_location))
        { if($get_location['city'] !=''){ ?>
         <option value="<?php echo $get_location['city'];?>"><?php echo $get_location['city'];?></option>
        <?php
        }  }?>        
      </select>
                </div>
              </div>
              
                <div class="col-md-12">
      						 <button type="button" name="" class="btn btn-primary btn-right" onClick="wedding_search()">Search</button>
                  </div>
             <!--<div class="col-md-3 col-sm-6">
                <div class="search-btn">
                  <button type="button" name="" class="btn btn-primary btn-right" onClick="wedding_search()">Search</button>
                </div>
              </div>-->
            </div>
          </div>
        </form>
      </div>
				<!--<div class="refine-search">
					<h4 class="refine-search-heading">Refine Your Search</h4>
					<form>
					<div class="form-group">
					<div class="row">
					
					<div class="col-md-5 col-sm-6">
					<div class="select-city-dropdown dropdown">
					<select class = "form-control" name="city_name" id="city_name">
					<option value="">Select City</option>
					<?php 					
						$select_location=mysqli_query($link,"select distinct(city) from tbl_vendors order by city asc");
						while($get_location=mysqli_fetch_array($select_location))
						{  ?>
						<option value="<?php echo $get_location['city'];?>"><?php echo ucwords($get_location['city']);?></option>
						<?php
						}  ?>        
						</select>
						</div>
						</div>
						<div class="col-md-4 col-sm-6">
						<div class="select-city-dropdown dropdown">
						<select class = "form-control" name="area_name" id="area_name">
						<option value="">Select Area</option>
						<?php 					
							$select_location=mysqli_query($link,"select distinct(area) from tbl_vendors order by area asc");
							while($get_location=mysqli_fetch_array($select_location))
							{  ?>
							<option value="<?php echo $get_location['area'];?>"><?php echo ucwords($get_location['area']);?></option>
							<?php
							}  ?>        
							</select>
							</div>
							</div>
							<div class="col-md-3 col-sm-6">
							<div class="search-btn">
							<button type="button" name="" class="btn btn-pink" onClick="wedding_search()">Search</button>
							</div>
							</div>
							</div>
							</div>
							</form>
				</div>-->
				
				<div class="category-listing-block" id="search_result">
					
					<div class="row">
						<?php
							error_reporting(0);
							include("connection.php");
							$name= $_POST['name'];		
						?>
						<?php
							error_reporting(0);
							$name= $_GET['name'];
							include("connection.php");
							$query="select * from tbl_vendors where catagory='$name' and email_status='active' and hold='unhold'";
							$result1=mysqli_query($link,$query);
							$count = mysqli_num_rows($result1);
if($count>=1)
{
							while($result=mysqli_fetch_array($result1)){
								$catagory=$result['catagory'];
								$id=$result['id'];
								
							?>
							<div class="col-md-4 col-sm-6">
								<div class="category-listing-section">
									
									
									<div class="category-listing-dtl">
										<div class="category-listing-img">
											<img src="vendor/imageone/<?php echo $result['image'];?>" class="img-responsive wedding-size" alt="category-img" onerror=this.src="noimage.png">
										</div>
										<div class="category-info">
											<h6 class="category-dtl-heading"><?php echo $result['businessname'];?></h6>
											<!--<div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php //echo $result['address'];?></div>-->
											
										</div>
									</div>
									<div class="category-listing-text">
										<div class="row">
											<div class="col-md-6">
												<div class="category-text-heading">
													<?php echo $result['name'];?>
												</div>
											</div>
											<div class="col-md-6">
											<a href="customerform?id=<?php echo $id; ?>"  class="btn btn-warning btn-right"role="button">Contact</a></a>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
				 <?php
}
  }
  else
  {
	  echo "<h4 style='color:white;'>Sorry, No data is found</h4>";
  }
	

?>
					
				</div>
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
		/*function wedding_search() 
		{
			var catagory_type = $("#catagory_type").val();
			var city_name = $("#city_name").val();
			var area_name = $("#area_name").val();
			
			
			$.ajax({
				url: 'ajax_search.php',
				type: 'POST',
				data: {catagory_type : catagory_type,city_name:city_name,area_name:area_name},
				success: function(data){
					$("#search_result").html(data);
				}
			});
			
		}*/
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