      <div class="category-listing-block">
        <div class="row">
		<?php
error_reporting(0);
include("connection.php");	

echo $query = "select * from years where 1 ";
if(!empty($_POST['catagory_type']) ) {
$query .= " AND year like '".trim($_POST['catagory_type'])."'";
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
	<div class="row">
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-blue">
						            <span class="info-box-icon push-bottom"><i class="fa fa-rupee" style="font-size:38px;"></i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Monthly</span>
						              <span class="info-box-number"><?php echo $sum1; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 45%"></div>
						              </div>
						            
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-orange">
						            <span class="info-box-icon push-bottom"><i class="fa fa-rupee" style="font-size:38px;"></i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Yearly</span>
						              <span class="info-box-number"><?php echo $sum1; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 40%"></div>
						              </div>
						            
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						   
						        <!-- /.col -->
						        <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-success">
						            <span class="info-box-icon push-bottom"><i class="fa fa-rupee" style="font-size:38px;"></i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total</span>
						              <span class="info-box-number"><?php echo $sum1; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: 50%"></div>
						              </div>

						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						      </div>
						</div>
					<!-- end widget -->
                    <div class="row">
                        <div class="col-md-12">
                         <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

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
            <!-- end page content -->
          
<?php include('footer.php');?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript"> 

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Money Details'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Money (Thousands)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Total Money On this Month: <b>{point.y:.1f} Thousands</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['January', <?php echo $sum; ?>],
            ['February', 0],
            ['March', 0],
            ['April', 0],
            ['May', 0],
            ['June ', 0],
            ['July', 0],
            ['August', 0],
            ['September', 0],
            ['October', 0],
            ['November', 0],
            ['December', 0],

        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});	
</script>
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
function wedding_search() 
{
	var catagory_type = $("#catagory_type").val();

	
	
	 $.ajax({
		url: 'ajax_year.php',
		type: 'POST',
		data: {catagory_type : catagory_type},
		success: function(data){
		$("#search_result").html(data);
        }
    });
	
}
</script>