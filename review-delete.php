<?php
	include('connection.php');
	$id=$_GET['id'];
	
	$query="delete from review where id='$id'";
	if($result=mysqli_query($link,$query))
	{
		echo "<script type='text/javascript'>if(confirm('Deleted')){document.location.href='client-reviews-view'}else{document.location.href='client-reviews-view'}</script>";
	}
	else
	{
		echo "<script type='text/javascript'>if(confirm('Oops..something was wrong')){document.location.href='client-reviews-view'}else{document.location.href='client-reviews-view'}</script>";
	}
	mysqli_close($link);
?>