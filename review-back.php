<?php
	error_reporting(0);
	include('connection.php');
	$id=$_POST['id'];
	
	$dir="../admin/img-admin/reviewimage/";
	$file_path=$dir.basename($_FILES["img"]["name"]);
	$file=$_FILES["img"]["tmp_name"];
	$file1=$_FILES["img"]["name"];
	
	if(isset($_FILES["img"]["name"]) && !empty($_FILES["img"]["name"]))
	{
		$file1=$_FILES["img"]["name"];
	}
	else
	{
		$file1=$_POST['pic1'];
	}
	
	
	if(move_uploaded_file($file,$file_path))
	{}
	$img= $_POST['img']; 
$name= $_POST['name']; 
$date= $_POST['date'];
$description= $_POST['description'];
	
$query="update review set img='$file1',name='$name',date='$date',description='$description' where id='$id'";
	if($result=mysqli_query($link,$query))
	{
		echo "<script type='text/javascript'>if(confirm('Updated')){document.location.href='client-reviews-add'}else{document.location.href='client-reviews-add'}</script>";
	}
	else
	{
		echo "<script type='text/javascript'>if(confirm('oops..something went wrong')){document.location.href='client-reviews-add'}else{document.location.href='client-reviews-add'}</script>";
	}
	
	mysqli_close($link);
?>