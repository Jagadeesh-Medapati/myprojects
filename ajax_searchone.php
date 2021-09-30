      <div class="category-listing-block">
        <div class="row">
		<?php
error_reporting(0);
include("connection.php");	

$query = "select * from tbl_vendors where 1 ";
if(!empty($_POST['catagory_type']) ) {
$query .= " AND hold='unhold' and catagory like '".trim($_POST['catagory_type'])."'";
}
if(!empty($_POST['catagory_type1']) ) {
$query .= " AND hold='unhold' and country like '".trim($_POST['catagory_type1'])."'";
}
if(!empty($_POST['city_name'])) {
$query .= " AND hold='unhold' and city like '".trim($_POST['city_name'])."'";
}

if(!empty($_POST['area_name'])) {
$query .= " AND hold='unhold' and state like '".trim($_POST['area_name'])."'";
}

// and so on
$search_doctor = mysqli_query($link,$query);

$count = mysqli_num_rows($search_doctor);
if($count>=1)
{
while($result=mysqli_fetch_array($search_doctor))
{
$id=$result['id'];
?>
	<div class="col-md-4 col-sm-6">
								<div class="category-listing-section">
									
									
									<div class="category-listing-dtl">
										<div class="category-listing-img">
											<a href="#"><img src="vendor/imageone/<?php echo $result['image'];?>" class="img-responsive wedding-size" alt="category-img"></a>
										</div>
										<div class="category-info">
											<h6 class="category-dtl-heading"><a href="#"><?php echo $result['businessname'];?></a></h6>
											<!--<div class="category-dtl-address"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php //echo $result['address'];?></div>-->
											
										</div>
									</div>
									<div class="category-listing-text">
										<div class="row">
											<div class="col-md-6">
												<div class="category-text-heading">
													<a href="#"><?php echo $result['name'];?></a>
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
	  echo "<h4 style='color:#FF0000;'>Sorry, No data is found</h4>";
  }
	

?>
