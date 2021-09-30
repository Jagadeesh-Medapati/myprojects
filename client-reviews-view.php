<?php include('header.php');
$id=$_SESSION['userid'];

?>

<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">	
			<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">View Happy Couples Review</div>
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
		<!-- start admited patient list -->
		<div class="row">
			<div class="col-md-12 col-sm-12">				
				<div class="card card-topline-red">
					<div class="card-head">
						<div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="btn-group">
                                <a href="client-reviews-add" id="addRow" class="btn btn-primary">
                                    Add Happy Couples Review
                                </a>
                            </div>
                        </div>
					</div>					
					<div class="card-body ">
				
						<div class="table-wrap">
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width" id="dataTables-example">
									<thead>
										<tr>
											<th>S.No:</th>
											<th>Image</th>
<th>Name</th>
											<th>Date</th>
											<th>Description</th>
											<th>Action </th>
										</tr>
									</thead>
<tbody>
									<?php 
$id=$_SESSION['userid'];
									$select_projects= mysqli_query($link,"SELECT * FROM review where userid='$id'") or die(mysql_error());
									$i=1;
									while($result=  mysqli_fetch_array($select_projects)){  
									$id = $result['id']; 
									$img= $result['img']; 
$name= $result['name']; 
$date= $result['date'];
$description= $result['description'];
									?>
										<tr class="odd gradeX">
								        <td><?php echo $i; ?></td>
									<td class="patient-img"><img src="../admin/img-admin/reviewimage/<?php echo $img; ?>" alt=""></td>
<td><?php echo $name; ?></td>
<td><?php echo $date; ?></td>
<td><?php echo $description; ?></td>
										<td>
												<a href="review-edit.php?id=<?php echo $id ; ?>" class="btn btn-primary btn-xs">
													<i class="fa fa-pencil" data-toggle="tooltip" title="Edit!"></i>
												</a>												
												<a href="review-delete.php?id=<?php echo $id;?>" title="" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete this?');" ><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete!"></i></a>
										
											</td>
											
										</tr>
									<?php $i++; } ?>
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
<!-- end page content -->  
<?php include('footer.php');?>