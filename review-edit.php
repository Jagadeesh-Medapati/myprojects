<?php
session_start(); 
error_reporting(0);
//ob_start();
include('connection.php');
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<?php include('header.php');?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Update Happy Couples Review</div>
				</div>
				   <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="client-reviews-add">Add Happy Couples Review</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active"><a class="parent-item" href="client-reviews-view">View Happy Couples Review</a></li>
                </ol>
			</div>
		</div>
		<!-- start widget -->
		<!-- start admited patient list -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card card-topline-red">
					<div class="card-head">
						<div class="card-head">
							<div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group">
                                <a href="client-reviews-view" id="addRow" class="btn btn-primary">
                                    View Happy Couples Review
                                </a>
                            </div>
                        </div>
						</div>
					</div>
					<?php
										$id=$_GET['id'];
										include('connection.php');
										$query="select * from review where id='$id'";
										$result=mysqli_query($link,$query);
										$row=mysqli_fetch_array($result);
										$image= $row['img']; 
$name= $row['name']; 
$date= $row['date'];
$description= $row['description'];								
					?>
							<div class="card-body ">
							<div class="row">
								<div class="col-md-9 col-sm-9 col-xs-9">
									<form action="review-back" method="POST" enctype="multipart/form-data">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Name
												</label>
												<div class="col-md-9">
												<input type="text" name="name"  value="<?php echo $name; ?>" placeholder="Enter Name" class="form-control input-height" /> </div>
											</div>
											 <div class="form-group row">
											<label class="control-label col-md-4">Upload Image
											</label>
											<div class="compose-editor col-md-8">
												<input type="file" name="img" class="default" multiple> <br><br>
												<img src="img-admin/reviewimage/<?php echo $image;?>" height="80" width="80">
												<input type="hidden" name="id" value="<?php echo $id;?>" />
												<input type="hidden" name="pic1" value='<?php echo $image; ?>' />
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Post Date
												</label>
												<div class="col-md-9">
												<input type="text" id="datepicker" name="date"  placeholder="Enter Client Review Post Date" class="form-control input-height" /> </div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Description
												</label>
												<div class="col-md-9">
												<textarea name="description" id="editor1" rows="10" cols="80">
													<?php echo $description; ?>
													</textarea>
												</div>
											</div>

											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<input type="submit"  class="btn btn-warning" name="submit" value="Submit"/>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end admited patient list -->
</div>
</div>
<!-- end page content -->

<!-- end page container -->
<?php include('footer.php');?>
<script>
$(function() {
        $( "#datepicker" ).datepicker({
            dateFormat : 'dd/mm/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: 'd'
        });
    });
   

</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
	error_reporting(0);
		
	include("connection.php");
	if(isset($_POST['submit'])){
		
		$dir="img-admin/reviewimage/";
		$file_path=$dir.basename($_FILES["img"]["name"]);
		$file=$_FILES["img"]["tmp_name"];
		$file1=$_FILES["img"]["name"];
		
		$name=$_POST['name'];
		
		$description=$_POST['description'];
		$date=$_POST['date'];
	
		$query="INSERT INTO review(img,name,description,date,userid) VALUES('$file1','$name','$description','$date','$userid')";
		mysqli_query($link,$query) or die("data not stored");
		$msg="Logo is uploaded sucessfully";
		if (move_uploaded_file($file,$file_path)) {
			echo "<script type='text/javascript'>alert('$msg'); window.location = 'client-reviews-add';</script>";
			} else {
			$msg="Oops..something was wrong";
			echo "<script type='text/javascript'>alert('$msg'); window.location = 'client-reviews-add';</script>";
		}
	}
?>
