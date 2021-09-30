<?php   
error_reporting(0);
  session_start();
  if($_SESSION['username']=='') 
{
 header("location:login.php");
}
include("connection.php");
 ?>
<?php include('header.php');?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		
		<!-- start admited patient list -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				
				<div class="card card-topline-red">
					<div class="card-head">
						<header>Bride & groom   login details</header>
						<div class="tools">
							<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
							<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
							<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
						</div>
					</div>
					<center> <input type="button"  class="btn btn-success" onclick="tableToExcel('dataTables-example', 'W3C Example Table')" value="Download All data in Excel"></center>
   <a href="javascript:window.print()" id="addRow" class="btn btn-info">
                                                Print<i class="fa fa-plus"></i>
                                            </a>
					<div class="card-body ">
						<div class="row">
							
							
						</div>
						<div class="table-wrap responsive">
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width" id="dataTables-example">
									<thead>
										<tr>
											<th>S.No:</th>																						
										   
										    <th>Profile Id</th>
										
											<th>Profile Name</th>
											<th>Login Date & time</th>

											<th>Ip Address</th>
								         	
										</tr>
									</thead>
									<tbody>
									<?php 
									$select_projects= mysqli_query($link,"SELECT * FROM bg_login") or die(mysql_error());
									$i=1;
									while($result=  mysqli_fetch_array($select_projects)){  
										$id = $result['profile_id']; 
										$s= mysqli_query($link,"SELECT * FROM tbl_users where id=$id") or die(mysql_error());
										$r=mysqli_fetch_array($s);
						
						 
							
									?>
										<tr class="odd gradeX">
											<td><?php echo $i; ?></td>
										
											
											<td><?php echo $result['profile_id'];?></td>
											<td><?php echo $r['name'];?></td>
											<td><?php	echo date('d/m/Y',strtotime($result['time']));?></td>
											<td><?php echo $result['ip_add'];?></td>
										
											
											
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
<script type="text/javascript"> 
		var tableToExcel = (function() {
			var uri = 'data:application/vnd.ms-excel;base64,'
			, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
			, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
			, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
			return function(table, name) {
				if (!table.nodeType) table = document.getElementById(table)
				var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
				window.location.href = uri + base64(format(template, ctx))
			}
		})()	
	</script>
<!-- end page content -->  
<?php include('footer.php');?>
