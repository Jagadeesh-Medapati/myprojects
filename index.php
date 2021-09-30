<?php
session_start(); 
error_reporting(0);
	//ob_start();	
include('connection.php');

	// echo "<pre>"; print_r($_SESSION); echo "</pre>";
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Gemini Matrimony</title>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta name="description" content="Weddlist" />
		<meta name="keywords" content="wedding, wedding vendor, wedding vendor directory, HTML template, html theme, wedding html template, wedding html theme, weddlist, weddlist html, weddlist html template">
		<meta name="author" content="udayraj" />
		<meta name="MobileOptimized" content="320" />
		<link href="images/favicon.png" rel="icon" type="image/x-icon"/> <!-- favicon -->
		
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
		<!-- revolution -->   
		<link rel="stylesheet" type="text/css" href="revolution/css/settings.css"> <!-- revolution setting css -->
		<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">  <!-- revolution layer css --> 
		
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
			 .location-block.bgcol {
            border: 5px solid #fff;
            border-radius: 3px;
            }
            .overlay-bg.new {
             background: #291f225c;
            }
			.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-bottom {
			height: 256px !important;
			}
		</style>
	</head>
	<!-- end head -->
	<!--body start-->
	<body>
		
	
		<?php  include('header.php');?>
		
		
		
		<!-- home revolution slider  --> 
		<section class="home-revo-slider">
			<article class="content">    
				<div id="rev_slider_1066_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125" data-source="gallery" style="background-color:transparent;padding:0px;">
					<!-- slider bottom panel -->
					<!--<div class="slider-bottom-panel" >
						
						<div class="container">
						<form action="weddingdir" method="post" class = "" role = "form">
						<div class="col-sm-4">
						<div class="select-category-dropdown dropdown">
						<select class = "form-control" name="catagory" id="catagory">
						<option value="">Select Category</option>
						<?php   
							/*include("connection.php");    
								$select_speciality=mysqli_query($link,"select distinct(categoryname) from category order by categoryname asc");
								while($get=mysqli_fetch_array($select_speciality))
							{ */?>        
							<option "<?php //echo $get['categoryname'];?>"><?php //echo ucwords($get['categoryname']);?></option>
							<?php
							//} ?>
							</select>
							</div>
							</div>
							<div class="col-sm-4">
							<div class="select-category-dropdown dropdown">
							<select class = "form-control" name="city_name" id="city_name">
							<option value="">Select City</option>
							<?php           
								/*$select_location=mysqli_query($link,"select distinct(city) from tbl_vendors order by city asc ");
									while($get_location=mysqli_fetch_array($select_location))
								{ if($get_location['city'] !=''){ */ ?>
								<option value="<?php //echo $get_location['city'];?>"><?php //echo ucwords($get_location['city']);?></option>
								<?php
								//} } ?>        
								</select>
								</div>
								</div>
								<div class="col-sm-4">
								<div class="slider-bottom-panel-btn">
								<button type="submit" name="insurance_search" class="btn btn-pink">Find A Vendor</button>
								</div>
								</div>
								</form>
								</div>
					</div>-->
					<!-- end slider bottom panel -->
					<div id="rev_slider_1066_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
						<ul >  
							<!-- SLIDE  -->
								<?php
						include('connection.php');
						
						$query1="select * from slider";
						$result1=mysqli_query($link,$query1);
						while($row1=mysqli_fetch_array($result1)){
							$image=$row1['slider']; 
						
							$id=$row1['id'];    
						?>
							<li class="slider-li-one" data-index="rs-3004" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="admin/img-admin/slider/<?php echo $image; ?>" style="height:100px" height="10px" alt="" onerror=this.src="noimage.png" data-bgposition="left left" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
								<div class="overlay-bg"></div>
								<!-- LAYERS -->
								<!-- LAYER NR. 1 -->
								<div class="tp-caption NotGeneric-Title   tp-resizeme" 
								id="slide-3004-layer-1" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
								data-fontsize="['52','52','52','52']"
								data-lineheight="['70','70','70','50']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[10,10,10,10]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[10,10,10,10]"
								data-paddingleft="[0,0,0,0]"
								style="font-family: 'Lora';z-index: 5; white-space: nowrap;text-transform:left;">
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" 
								id="slide-3004-layer-4" 
								data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
								data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="text" 
								data-responsive_offset="on" 
								data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
								data-textAlign="['left','left','left','left']"
								data-paddingtop="[0,0,0,0]"
								data-paddingright="[0,0,0,0]"
								data-paddingbottom="[0,0,0,0]"
								data-paddingleft="[0,0,0,0]"
								style="font-family: 'initial'; z -index: 6; white-space: nowrap;text-transform:left;">
								</div>   
							</li>
							

							<?php } ?>
							<!-- SLIDE 2 -->
						</ul>
					</div>
				</div>
			</article>
		</section> 
		<!-- end home revolution slider -->
		
		
			
			
			<?php
				include('connection.php');
			
				if(isset($_POST['submit14']) && $_SESSION['userid']=="")
				{
				
				
					$email=$_POST['email'];
					$password=$_POST['password']; 
					
					$sqlstt1=mysqli_query($link,"select * from tbl_users where email='".$email."' and password='".$password."'");
					$result=mysqli_num_rows($sqlstt1);
					$reslut1=mysqli_fetch_array($sqlstt1);
					$username=$reslut1['name'];
					$userid=$reslut1['id'];
					$gender12=$reslut1['gender'];
				  	$hold54=$reslut1['hold'];
					$email=$reslut1['email'];
					$email_status34=$reslut1['email_status'];
					if($result==0)
					{
						$wrong_details34=1;
					}
					else
					{
						if($email_status34=='active')
						{
							$_SESSION['cusername']=$username;
							$_SESSION['userid'] = $userid;             
							$_SESSION['email'] = $email;
							$_SESSION['gender1'] = $gender12;
							$_SESSION['hold'] = $hold54;
						
							//echo "<script>alert($userid);</script>";
						//echo "<script>window.location.reload();</script>";
							//header('Location: index.php');

							echo "<script>window.location='index';</script>";
							// echo "<script>window.location='dashboard/index';</script>  ";
						}
						else
						{
							$email_status34=1;
						}
					} 
						
				}
			?>
			
			<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content change">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
							<h4 class="modal-title">Login to Continue </h4>
						</div>
						<div class="fail_login"><?php if(!empty($wrong_details34)){echo "<script>alert('Invalid Credentials, please enter correct details');window.location='index';</script>  "; } ?></div>
						<div class="fail_login"><?php if($email_status34=='1'){echo "<script>alert('Email  is not activated, please activate from your mail');window.location='index';</script>  "; } ?></div>
						<div class="modal-body">
							<div class="login-w3ls">
								<form id="signin" action="#" method="post">
									<label>Email</label>
									<input type="text" name="email" class="form-control size" placeholder="Email" required="">
									<label>Password</label>
									<input type="password" name="password" class="form-control size" placeholder="Password" required="">  
									<div class="w3ls-loginr"> 
										<a href="forgot_password">Forgot password ?</a>
									</div>
									<div class="clearfix"> </div>
								
									<input type="submit" name="submit14" class="continue-login" value="Login">
									<div class="clearfix"> </div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		
		
		<section id="news" class="pt120 pb90 asd">
			<div class="container">
				<div class="section text-center">
					<h3 class="section-heading">Latest News &amp; Updates</h3>
					<p class="section-sub-heading"></p>
				</div>
				<div class="row"> 
					<?php
						include('connection.php');
						$query1="select * from latestnews";
						$result1=mysqli_query($link,$query1);
						while($row1=mysqli_fetch_array($result1)){
							$image=$row1['img']; 
							$name=$row1['name'];   $date=$row1['date'];   $description=$row1['description'];  
							$id=$row1['id'];    
						?>
						<div class="col-md-4 col-sm-6">
							
							<div class="news-block">
								<div class="news-img">
									<img src="admin/img-admin/latestnewsimage/<?php echo $image; ?>" class="img-responsive latestnes" alt="news"	onerror=this.src="noimage.png">
									<div class="meta-tag"><?php echo $date; ?></div>
								</div>
								<div class="news-dtl">
									<h6 class="news-heading"><span class="eds"><?php echo $name; ?></span></h6>
									
									<a href="latest-news?id=<?php echo $id; ?>" class="btn read-more">Read More</a>
								</div>
							</div>
							
						</div>
					<?php } ?>
					
				</div>
			</div>
		</section>
		
		
		<!-- wedding plan -->
		<section id="wedding-plan" class="ptb120">
			<div class="container">
				<div class="section text-center">
					<h3 class="section-heading">Start Planning Your Wedding Step By Step</h3>
				
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="wedding-plan-block">
							<div class="wedding-plan-img img-circle">
								<img src="images/wedding-directory/1.jpeg" class="img-circle" alt="wedding-plan"	onerror=this.src="noimage.png">
								<div class="overlay-bg"></div>
							</div>
							<div class="wedding-plan-dtl text-center">
								<h5 class="heading"><a href="search" class="text-color">Search For Your Bride & Groom</a></h5>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="wedding-plan-block">
							<div class="wedding-plan-img img-circle">
								<img src="images/wedding-directory/2.jpg" class="img-circle" alt="wedding-plan"	onerror=this.src="noimage.png">
								<div class="overlay-bg"></div>
							</div>
							<div class="wedding-plan-dtl text-center">
								<h5 class="heading"><a href="wedding-directory"  class="text-color">Search For wedding Directory</a></h5>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="wedding-plan-block">
							<div class="wedding-plan-img img-circle">
								<img src="images/newimg/19.jpg" class="img-circle" alt="wedding-plan"	onerror=this.src="noimage.png">
								<div class="overlay-bg"></div>
							</div>
							<div class="wedding-plan-dtl text-center">
								<h5 class="heading"><a href="login_register"  class="text-color">Have a beautiful marriage life</a></h5>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end wedding plan -->
		<?php
		  if (isset ( $error )) {
			echo '<span style="color:red">'.$error.'</span>';
		  }
		  ?>
		  <?php 
		  $select_user_type =mysqli_fetch_array(mysqli_query($link,"select * from tbl_users where id='".$userid."'"));
$amount = $select_user_type['amount'];
$hold123 = $select_user_type['hold'];
//$user_register_date = date('Y-m-d',strtotime($select_user_type['date']));
	 //echo $user_type; exit;
$user_register_date = $select_user_type['subscribedate'];


	$result = mysqli_query($link,"select distinct(otherid) from hitnumber where userid ='".$userid ."' and otherid!='$userid'");
	 $count = mysqli_num_rows($result);
	?>

					
				<?php	
	/*$nin_date= date('d-m-Y', strtotime($user_register_date. ' +90 days'));
	$t_weeks_date1= date('d-m-Y', strtotime($user_register_date. ' +180 days'));
	$t_weeks_date2= date('d-m-Y', strtotime($user_register_date. ' +365 days'));
	$next_year = date('d-m-Y', strtotime($user_register_date. ' +710 days'));
	$after_two_year = date('d-m-Y', strtotime($user_register_date. ' +2000 days'));
	$after_two_year1 = date('d-m-Y', strtotime($user_register_date. ' +1500 days'));
	 
	 
	 
												$my_id185=mysqli_query($link,"select * from brideandgroompricelist where id='14'");
												$myid185=mysqli_fetch_array($my_id185);
												$mycat185=$myid185['amount'];
											    $leeds2=$myid185['leeds'];
											    
												
													$my_id186=mysqli_query($link,"select * from brideandgroompricelist where id='15'");
												$myid186=mysqli_fetch_array($my_id186);
												$mycat186=$myid186['amount'];
												$leeds3=$myid186['leeds'];
											
												
													$my_id187=mysqli_query($link,"select * from brideandgroompricelist where id='16'");
												$myid187=mysqli_fetch_array($my_id187);
												$mycat187=$myid187['amount'];
												$leeds4=$myid187['leeds'];
												
												
													$my_id188=mysqli_query($link,"select * from brideandgroompricelist where id='17'");
												$myid188=mysqli_fetch_array($my_id188);
												$mycat188=$myid188['amount'];
												$leeds5=$myid188['leeds'];
											
												
													$my_id189=mysqli_query($link,"select * from brideandgroompricelist where id='18'");
												$myid189=mysqli_fetch_array($my_id189);
												$mycat189=$myid189['amount'];
												$leeds6=$myid189['leeds'];
												
													$my_id1891=mysqli_query($link,"select * from brideandgroompricelist where id='19'");
												$myid1891=mysqli_fetch_array($my_id1891);
												$mycat1891=$myid1891['amount'];
												$leeds61=$myid1891['leeds'];*/
												
	 ?>
		<!-- wedding gallery -->
		<h3 class="center-ofline">Brides</h3>
		<div class="container-fluid">
			<div class="row">
				<div class="span12">
					<div class="well"> 
						<div id="Brides" class="carousel slide">
							
							<ol class="carousel-indicators">
								<li data-target="#Brides" data-slide-to="0" class="active"></li>
								<li data-target="#Brides" data-slide-to="1"></li>
								<li data-target="#Brides" data-slide-to="2"></li>
							</ol>
							
							<!-- Carousel items -->
							<div class="carousel-inner">
								
								
								<div class="item active">
									<?php
										include('connection.php');
										$query="select * from tbl_users where gender='female' and hold='unhold' and id!='$id' order by id desc LIMIT 0, 4";
										$result=mysqli_query($link,$query);
										while($row=mysqli_fetch_array($result)){
											$image=$row['image'];                                 
											$id=$row['id']; 
											$gender=$row['gender'];
											$name=$row['name']; 
											$hold78=$row['hold']; 
											//echo $hold78;
										
										?>								
										<?php
											
											//echo "SELECT * FROM hitnumber where userid='$userid'";
											//$count = mysqli_num_rows(mysqli_query($link,"SELECT distinct(otherid) FROM hitnumber where userid='$userid'"));
											//echo $count;
										?>									
										<div class="row-fluid">
											<?php
												if(empty($_SESSION['userid'])){
												?>
											
												
												<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a id="viewbtn" data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
												<?php } else { ?>
												<?php
                                               
											    ?>
												    
											<?php  if( $hold123 == 'unhold'){ ?>
									
												<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                  
                     <?php if($_SESSION['gender1']=='male'  && $_SESSION['hold'] == 'unhold' ){ ?>
                     
                  
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                      
                      <?php } 
								else if($_SESSION['hold'] == 'hold'){ ?>
								<a id="viewbtn" data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
																		View More
																			</a>
													
													
                       <?php } else { ?>
                       
                       
                        
													
                         <a data-toggle="modal" data-target="#myModal12345"  class="btn btn-pink">
												View More
													</a>
													<?php }  ?>
                  </div>
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
											<?php }  ?> 
										</div><!--/row-fluid-->
									<?php } ?>
									</div><!--/item-->
								
		
								<div class="item">
									<?php
										include('connection.php');
										$query="select * from tbl_users where gender='female' and id!='$id' order by id desc LIMIT 4, 4";
										$result=mysqli_query($link,$query);
										while($row=mysqli_fetch_array($result)){
											$image=$row['image'];                                 
											$id=$row['id'];
											$gender=$row['gender'];
										?>

										<div class="row-fluid">
											<?php
												if(empty($_SESSION['userid'])){
												?>
													<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a id="viewbtn" data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
                                                 <?php }else{ ?>
													<?php
                                                // include('connection.php');
                                                // $query="select * from brideandgroompricelist";
                                                // $result12=mysqli_query($link,$query);
                                                // while($row=mysqli_fetch_array($result12)){
                                                // $mycat185=$row['amount']; 
                                                // $dayw=$row['valid']; 
                                                // $leeds2=$row['leeds']; 
                                                // $newDate = date('Y-m-d', strtotime($user_register_date. " + $dayw days"));
                                                // if($amount==$mycat185  && $count>=$leeds2 && $newDate >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }
                                                // /*else if($amount==$mycat186 && $count>=$leeds3 && $t_weeks_date1 >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }
                                                // else if($amount==$mycat187 && $t_weeks_date2 >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }
                                                
                                                // else if($amount==$mycat188  && $next_year >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }
                                                // else if($amount==$mycat189  && $count>=$leeds6 && $after_two_year >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }
                                                // else if($amount==$mycat1891  && $after_two_year1 >= $user_register_date){
                                                // mysqli_query($link,"update tbl_users set hold='hold' where id='$userid'");
                                                // }*/
                                                // }
											    // ?>
										<?php if( $hold123=='unhold'){ ?>
										
												<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                  
                     <?php if($_SESSION['gender1']=='male' || $_SESSION['userid']==$id){ ?>
                     
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       <?php } else { ?>
                         <a data-toggle="modal" data-target="#myModal12345"  class="btn btn-pink">
												View More
													</a>
													<?php } ?>
                  </div>
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
       
											<?php } ?> 
										</div><!--/row-fluid-->
									<?php } ?>
								</div><!--/item-->
								
								<div class="item">
									<?php
										include('connection.php');
										$query="select * from tbl_users where gender='female' and id!='$id' order by id desc LIMIT 8, 4";
										$result=mysqli_query($link,$query);
										while($row=mysqli_fetch_array($result)){
											$image=$row['image'];                                 
											$id=$row['id']; 
											$gender=$row['gender'];
										?>
										<div class="row-fluid">
											<?php
												if(empty($_SESSION['userid'])){
												?>
												<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a id="viewbtn" data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
												<?php }else{ ?>	
											<?php
                                                
											    ?>
													<?php if( $hold123=='unhold'){ ?>
										
											<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                  
                     <?php if($_SESSION['gender1']=='male' || $_SESSION['userid']==$id){ ?>
                     
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       <?php } else { ?>
                         <a data-toggle="modal" data-target="#myModal12345"  class="btn btn-pink">
												View More
													</a>
													<?php } ?>
                  </div>
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
       
											<?php } ?> 
										</div><!--/row-fluid-->
									<?php } ?>
								</div><!--/item-->								
							</div>
						</div>
					</div> 
				</div>
			</div>
		</div>
		
		<div class='modal fade' id='myModal' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:grey;">Please Login to view details.</h4>
								<div class='col-md-12' align='center'>
									<a href='matrimony1.php'><button type="button" class="btn btn-primary">Login</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class='modal fade' id='myModal123' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">To view the complete profile please subscribe.</h4>
								<!-- <div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Login</button></a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end wedding gallery -->
			<div class='modal fade' id='myModal1234' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">Your login as Groom ,Please See Bride</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Ok</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class='modal fade' id='myModal54' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">Not Pay Money</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Ok</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class='modal fade' id='myModal12345' role='dialog'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
					</div>
					<div class='modal-body'>
						<div class='row'>
							<div class='col-md-12' align='center'>
								<h4 style="font-size:20px;color:white;">Your login as Bride ,Please See Groom</h4>
								<div class='col-md-12' align='center'>
									<a href='index'><button type="button" class="btn btn-primary changecolor">Ok</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		/*	$my_id1859=mysqli_query($link,"select * from amountpay where id='12'");
												$myid1859=mysqli_fetch_array($my_id1859);
												$mycat1859=$myid1859['amount'];
											    $leeds2=$myid185['leeds'];
											    
												
													$my_id1869=mysqli_query($link,"select * from amountpay where id='13'");
												$myid1869=mysqli_fetch_array($my_id1869);
												$mycat1869=$myid1869['amount'];
												$leeds3=$myid186['leeds'];
											
												
													$my_id1879=mysqli_query($link,"select * from amountpay where id='14'");
												$myid1879=mysqli_fetch_array($my_id1879);
												$mycat1879=$myid1879['amount'];
												$leeds4=$myid187['leeds'];*/
												
												?>
		
		
		<!-- wedding location -->
		<section id="wedding-location" class="bglight ptb120 sdf">
			<div class="container">
				<div class="section text-center">
					<h3 class="section-heading">Wedding Directory</h3>
					<p class="section-sub-heading"></p>
				</div>
				
				<div class="wedding-location-block">
					
					<div class="row">
						<?php
							include('connection.php');
						$query="select * from tbl_vendors where email_status='active' and hold='unhold' LIMIT 9 ";
							$result=mysqli_query($link,$query);
							while($row=mysqli_fetch_array($result)){
								$image=$row['image'];                                 
								$id=$row['id'];  
								$amount1=$row['amount'];  
								$user_register_dateq = $row['subscribevendordate'];
							
								
								//$four_weeks_date= date('Y-m-d', strtotime($user_register_date. ' +90 days'));
								//$four_weeks_date1= date('Y-m-d', strtotime($user_register_date. ' +365 days')); 
								//$four_weeks_date2= date('Y-m-d', strtotime($user_register_date. ' +700 days'));  
							?>
							
							
							<div class="col-md-4 col-sm-12">
								
								
								<div class="row">
									
									<div class="col-md-12 col-sm-6">
										
										<div class="location-block">
												
											<div class="city-img">
												<img src="<?php echo $base_url;?>vendor/imageone/<?php echo $row['image']; ?>" class="img-responsive image-wed" alt="city"	onerror=this.src="noimage.png">
												<div class="overlay-bg"></div>
											</div>
											<div class="city-dtl text-center">
												<h6 class="city-dtl-heading"><a href="customerform?id=<?php echo $id; ?>"><?php echo $row['businessname']; ?></a></h6>
												<p></p>
												<a href="customerform?id=<?php echo $id; ?>" class="btn btn-pink">view</a>
												
											</div>
										</div>
										
									</div>
									
								</div>
								
							</div>
						<?php } ?>  
					</div>
					
					
				</div>
				
				<div class="location-btn text-center">
					<a href="weddingdir" class="btn btn-pink">View More Wedding Directory</a>
				</div>
			</div> <br /><br /><br />
			<!-- wedding gallery -->
			
			<section id="wedding-gallery" class="wedding-gallery-main-block">
				<h3 class="center-ofline">Grooms</h3>
				<div class="container-fluid">
					<div class="row">
						<div class="span12">
							<div class="well"> 
								<div id="Grooms" class="carousel slide">
									
									<ol class="carousel-indicators">
										<li data-target="#Grooms" data-slide-to="0" class="active"></li>
										<li data-target="#Grooms" data-slide-to="1"></li>
										<li data-target="#Grooms" data-slide-to="2"></li>
									</ol>
									
									<!-- Carousel items -->
									<div class="carousel-inner">
										
										<div class="item active">
											<?php
												include('connection.php');
												//echo "select * from tbl_users where gender='Male' order by id desc LIMIT 0, 4";exit;
												$query1="select * from tbl_users where gender='male' and  hold='unhold' and id!='$id' order by id desc LIMIT 0, 4";
												$result1=mysqli_query($link,$query1);
												while($row1=mysqli_fetch_array($result1)){
													$image=$row1['image'];                                
													$id=$row1['id'];
													$gender=$row1['gender'];
													$name1=$row1['name'];
													$hold=$row1['hold'];
												?>
												<div class="row-fluid">
													<?php
														if(empty($_SESSION['userid'])){
														?>
													
															<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name1; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a  id="viewbtn"  data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
														<?php }else{ ?>
														<?php
                                              
											    ?>
													<!--	<div class="col-md-3"><a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="thumbnail">
														    <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" alt="Image"	onerror=this.src="noimage.png"/></a></div>-->
														    	
                                    
                                   <?php if($hold123=='unhold'){ ?>
									
												<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
					<p>Name:<?php echo $name1; ?></p><p>Gender:<?php echo $gender; ?></p>
					
                  <?php if($_SESSION['gender1']=='female' || $_SESSION['userid']==$id ){ ?>
       
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       <?php }
                       else if($_SESSION['gender1'] =='female'){ ?>
                           
                          <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       
                           
                       <?php }
                       
                       
                       
                       else { ?>
                         <a data-toggle="modal" data-target="#myModal1234"  class="btn btn-pink">
												View More
													</a>
													<?php } ?>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name1; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
       
													<?php } ?> 
												</div><!--/row-fluid-->
											<?php } ?>
										</div><!--/item-->
										
										<div class="item">
											<?php
												include('connection.php');
												$query1="select * from tbl_users where gender='male' and id!='$id'and  hold='unhold' order by id desc LIMIT 4, 4";
												$result1=mysqli_query($link,$query1);
												while($row1=mysqli_fetch_array($result1)){
													$image=$row1['image'];                                
													$id=$row1['id'];
													$gender=$row1['gender'];
													
												?>
												<div class="row-fluid">
													<?php
														if(empty($_SESSION['userid'])){
														?>
															<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name1; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a  id="viewbtn"  data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
														<?php }else{ ?>
															<?php
                                            
											    ?>
													<?php if( $hold123=='unhold'){ ?>
										
												<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
               
                  <?php if($_SESSION['gender1']=='male' && $_SESSION['userid']==$id ){ ?>
       
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       <?php }
                       else if($_SESSION['gender1'] =='female'){ ?>
                           
                          <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       
                           
                       <?php }
                       
                       
                       
                       else { ?>
                         <a data-toggle="modal" data-target="#myModal1234"  class="btn btn-pink">
												View More
													</a>
													<?php } ?>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
       
													<?php } ?> 
												</div><!--/row-fluid-->
											<?php } ?>
										</div><!--/item-->
										
										<div class="item">
											<?php
												include('connection.php');
												$query1="select * from tbl_users where gender='male' and id!='$id' and  hold='unhold' order by id desc LIMIT 8, 4";
												$result1=mysqli_query($link,$query1);
												while($row1=mysqli_fetch_array($result1)){
													$image=$row1['image'];                                
													$id=$row1['id']; 
													$gender=$row1['gender'];  
												?>
												<div class="row-fluid">
													<?php
														if(empty($_SESSION['userid'])){
														?>
																<div class="col-md-3"> 
                                                   <div class="location-block bgcol">
                                                      <div class="city-img">
                                                            <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                                       <div class="overlay-bg new"></div>
                                                    </div>
                                                    <div class="city-dtl text-center">
                                                        <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                                                        <p>Name:<?php echo $name1; ?></p><p>Gender:<?php echo $gender; ?></p>
                                                          <a  id="viewbtn"  data-toggle="modal" data-target="#myModal" class="btn btn-pink">View More</a>
                                                      </div>
                                                    </div>
                                                 </div>
															<?php }else{ ?>
																<?php
                                                
											    ?>
														<?php if( $hold123=='unhold'){ ?>
										
											<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
               
                  <?php if($_SESSION['gender1']=='male' && $_SESSION['userid']==$id ){ ?>
       
                      <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       <?php }
                       else if($_SESSION['gender1'] =='female'){ ?>
                           
                          <a href="profile-details?id=<?php echo $id; ?>&gender=<?php echo $gender; ?>" class="btn btn-pink">View More</a>
                       
                           
                       <?php }
                       
                       
                       
                       else { ?>
                         <a data-toggle="modal" data-target="#myModal1234"  class="btn btn-pink">
												View More
													</a>
													<?php } ?>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                    
                                    <?php } else { ?>
                                    	<div class="col-md-3"> 
                                    <div class="location-block bgcol">
                                         <div class="city-img">
                                      
                                        <img class="image-wi" src="dashboard/imageone/<?php echo $image; ?>" class="img-responsive thumbnail image-wed" alt="Image"	onerror=this.src="noimage.png"/>
                                      <div class="overlay-bg new"></div>
                                     </div>
                                       <div class="city-dtl text-center">
                    <h6 class="city-dtl-heading"><a href="">Profile Id: <?php echo $id; ?></a></h6>
                    <p>Name:<?php echo $name; ?></p><p>Gender:<?php echo $gender; ?></p>
                    <a data-toggle="modal" data-target="#myModal123"  class="btn btn-pink">
												View More
													</a>
													
                     
                  </div>
                                    
                                    
                                    </div></div>
                                     <?php }
 ?>          
       
														    
                        	
														    
														    
													<?php } ?> 
												</div><!--/row-fluid-->
											<?php } ?>
										</div><!--/item-->
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</section>
			<!-- end wedding gallery -->
			
			
		</section>
		<!-- end wedding location -->
		
		
		<!-- testimonial -->
		<section id="testimonial-block" class="testimonial-main-block">
			<div class="overlay-bg"></div>
			<div class="container">
				<div class="section text-center">
					<h3 class="section-heading">Words From Happy Couples</h3>
					<p class="section-sub-heading"></p>
				</div>
				<div id="testimonials-slider" class="testimonials-slider">
					<?php
						include('connection.php');
						$query1="select * from review where status='active'";
						$result1=mysqli_query($link,$query1);
						while($row1=mysqli_fetch_array($result1)){
							$image=$row1['img']; 
							$name=$row1['name'];   $date=$row1['date'];   $description=$row1['description'];  
							$id=$row1['id'];    
						?>
						<div class="item testimonial-block">
							<div class="testimonial-client-img">
								<img src="admin/img-admin/reviewimage/<?php echo $image; ?>" class="img-responsive res" alt="client"	onerror=this.src="noimage.png">
							</div>
							<div class="testimonial-dtl">
								<h5 class="testimonial-client"><?php echo $name; ?></h5>
								<div class="date"><?php echo $date; ?></div>
								<p style="color=#FFF"><?php echo $description; ?></p>
							</div>
						</div>
						<?php } ?>
				</div>
			</div>    
		</section>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script>
			$(function() {
				$( "#datepicker" ).datepicker({
					dateFormat : 'dd/mm/yy',
					changeMonth : true,
					changeYear : true,
					yearRange: '-100y:c+nn',
					maxDate: '-1d'
				});
			});
			
		</script>
		
		<!-- end testimonial -->
		<!-- news and update -->
	<style>
	span.eds {
    line-height: 2.63;
    color: #FFD700;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 8px;
    </style>	
		<!-- end news and update -->
		<?php include('footer.php'); ?>
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
		<!-- revolution js files -->
		<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>  
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<!-- end revolution js files -->
		<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
		<script type="text/javascript">
			var tpj=jQuery;
			var revapi1066;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_1066_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1066_1");
				}
				else
				{
					revapi1066 = tpj("#rev_slider_1066_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"auto",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"off",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							},
							arrows: {
								style:"",
								enable:true,
								hide_onmobile:true,              
								hide_onleave:false,
								hide_delay:0,
								hide_delay_mobile:1200,
								hide_under:0,
								hide_over:9999,
								tmp:'',
								rtl:false,
								left : {                              
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0, 
									container:"slider",             
								},
								right : {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0,
									container:"slider",
								}
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridwidth: 1000,
						gridheight:[570,770,770,770],
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
							type:"mouse",
							disable_onmobile:"on"
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:1,
						stopAtSlide:0,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: ".header",
						fullScreenOffset: "60px",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			}); 
		</script>
		<script>
			function openWindo(windoName) {
				var i;
				var x = document.getElementsByClassName("windo");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				document.getElementById(windoName).style.display = "block";  
			}
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
		<script type="text/javascript"> 
			$(document).ready(function() {
				$('#Brides').carousel({
					interval: 10000
				})
			});
			$(document).ready(function() {
				$('#Grooms').carousel({
					interval: 10000
				})
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