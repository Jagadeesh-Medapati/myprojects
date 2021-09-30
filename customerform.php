<!DOCTYPE html>
<html lang="en">
<head>
<title>Vendor</title>
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
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>

<!-- end page banner -->
<!-- contact us -->
  <section class="padding-mail">
    <div class="container"> 
        <div class="contact-form form-group" style="position: relative;bottom: 150px;left: 300px;" >
		<?php
    $id=$_GET['id'];
   
include('connection.php');

if(isset($_POST['submit']))
{
  
  $email=$_POST['email'];
  $name=$_POST['name']; 
  $phone=$_POST['phone'];
  $id=$_POST['id'];
   $otp = rand(100000,10000000);
   $date= date('Y-m-d H:i:s',time()+ 19800  );
 
  //echo "INSERT INTO `tbl_customer` (`vendorid`,`name`,`phone`,`email`,`date`,`otp`) VALUES('".$id."','".$name."','".$phone."','".$email."',now(),'".$otp."')";exit;
    $sqlstt=mysqli_query($link,"INSERT INTO `tbl_customer` (`vendorid`,`name`,`phone`,`email`,`date`,`otp`) VALUES('".$id."','".$name."','".$phone."','".$email."','$date','".$otp."')");
    //echo mysqli_error($link);exit;   
         $id1 =mysqli_insert_id($link);
         //echo "select * from tbl_users where id= '".$id."'";exit;
       $sql=mysqli_query($link,"select * from tbl_customer where id= '".$id."'");
       $c=mysqli_num_rows($sql);
                $row=mysqli_fetch_array($sql);
       if($row)
       {
           $_SESSION['id']=$row['id'];
                             
       }
      // echo "success";exit;
      $sqlstt=1;
    if($sqlstt==1)
    { 
     
              $to=$_POST['email'];
              $subject = "Customer Registration OTP For Gemini Matrimony";
              $headers="From: Matrimony"; 
              $headers ="From: GeminiMatrimony<geminimatri@geminimatrimony.com>\n";
              //$headers .= "Organization: Sender Organization\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
              $headers .= "X-Priority: 3\r\n";
              $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
              //$encode_id  = ourl_encode($id);
                        //$act_link = $base_url."account-verification-users?id=".$encode_id;  
              $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Email tempalte</title>
            <style>
            body {
              margin: 0;
              padding: 0;
            }
            img {
              outline: 0;
            }
            </style>
            </head>
            <body>
            <br> Dear "'.$name.'"  
  
              <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your Customer registration OTP  "'.$otp.'" <br><br>
  
            <div  style="margin: 0px auto; text-align:center;"> </div>
  
            <br><br>
  
            Thank You,<br>
            Matrimony Support.
            </body>
            </html>
            ';   
          if(mail($to, $subject, $message, $headers)){
					 
					  echo "<script>alert('Thank you for registering! OTP has been sent to $to');window.location='otp?id=$id1&vendorid=$id';</script>  ";					
						}
						else 
						{
              $msg = 'mail sending fail';
              echo "<script>alert($msg);window.location='customerform';</script>  ";
         
						}	
					$success=1; 
	
					}	
					else{
            echo "<script>alert('not inserted');window.location='customerform';</script>  ";
          }
          echo "<script>window.location='index';</script>  ";
          
}
?>
<h2>Customer Details</h2>
         <form class="" action="customerform" method="post" >
							
                     <div class="form-group">
					 <label for="username">Name</label>
                        <input style="width:50%;" type="text" class="form-control" name="name" placeholder="Name" required>
                     </div>
					  <div class="form-group ">
					  <label for="username">Email</label>
                        <input style="width:50%;" type="email" class="form-control" name="email" placeholder="Email" required>
                     </div>
					 <div class="form-group ">
					  <label for="username">Mobile</label>
                        <input style="width:50%;" type="text" class="form-control" name="phone"  placeholder="Phone" required>
                     </div>
                     <div class="form-group ">
				
                        <input style="width:50%;" type="hidden" class="form-control" name="id"   value="<?php echo $id;?>" >
                     </div>
				<div class="form-group">
					  <input type="submit" style="background-color:#b00403; width: 80px;color: whitesmoke;border-radius: 20%" name="submit" value="Send">
                    </div>
                  
						</form>
        </div>
      </div>
    </div>
  </section>
<!-- end contact us -->
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

<!-- end jquery -->
</body>
</html>