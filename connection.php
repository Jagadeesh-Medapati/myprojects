<?php
$link=mysqli_connect("localhost","root","");
$base_url = "http://" . $_SERVER['SERVER_NAME'].'/';
if($link==false)
{
	echo "Error while connecting";
}
mysqli_select_db($link,"geminimatrimony_db");
?>