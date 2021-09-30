<?php error_reporting(0);
session_start();    
include('connection.php');
include("functions.php");
$id  = ourl_decode($_GET['id']);
$select_mail =mysqli_query($link,"SELECT * FROM tbl_users WHERE id='".$id."'");	
$result=mysqli_fetch_array($select_mail);
$email=$result['email'];
$base_url=$base_url."index";
//echo $base_url;exit;
$query  = mysqli_query($link,"UPDATE tbl_users SET email_status  ='active' WHERE id  = '".$id ."'") or die(mysql_error());
if($query)
{
	 $result = mysqli_query($link,"select * from tbl_users where id ='".$id ."'  and  email_status  = 'active'") or die(mysql_error());
	 $count = mysqli_num_rows($result);
 	 if ($count != 0) {
			echo "<script type='text/javascript'>window.location.href = '".$base_url."';</script>";
 	 }
	 else
	 {
		  echo 'Status not Updated, Please try again'; 
	 }
}
?>