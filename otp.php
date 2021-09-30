<?php
	error_reporting(0);
session_start();
$lastd_id=$_SESSION['lastd_id'];
include("connection.php");
 
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style type="text/css"> 

body {
    font-family: 'Open Sans', sans-serif;
	overflow-x: hidden !important;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    margin: 0;
    padding: 0;
	    background-color: #b00403;
}	


a {
    text-decoration: none;
    color: inherit;
}
/*************** Font Style *******************/

@font-face {
    font-family: raleway_regular;
    src: url(../fonts/Raleway-Regular.ttf);
}
@font-face {
    font-family: raleway_bold;
    src: url(../fonts/Raleway-Bold.ttf);
}
@font-face {
    font-family: raleway_semibold;
    src: url(../fonts/Raleway-SemiBold.ttf);
}
@font-face {
    font-family: RalewayL;
    src: url(../fonts/Raleway-Light.ttf);
}
.clearboth {
    clear: both;
}
.clearight {
    clear: right;
}
.clearleft {
    clear: left;
}
/********************Header*************************/


.fs_container {
    padding: 128px;
}
.fs_section {
    font-family: raleway_bold;
    margin-left: 5%;
    font-weight: normal;
    font-size: 20px;
    color: #575757;
}
.fs_form_r1 {
    width: 250px;
    margin-left: auto;
    margin-right: auto;
}
.fs_input {
    border: 2px solid #CBAC73;
    padding: 10px;
    border-radius: 4px;
    width: 90%;
}
#fs_submit {
    display: block;
    margin-top: 20px;
    width: 100%;
    padding: 10px;
   background-color: #F39C12;
    border: 2px solid #CBAC73;
    border-radius: 4px;
    color: #fff;
    font-family: raleway_bold;
    font-size: 18px;
    cursor: pointer;
}
.fs_p {
    font-family: raleway_regular;
    font-size: 16px;
    color: #F39C12;
}
.fs_redirect {
    text-decoration: none;
}
.fs_redirect:hover {
    text-decoration: none;
}
.fs_redirect:active {
    text-decoration: none;
}
.fs_redirect:focus {
    text-decoration: none;
}
.fs_le_col {
    width: 33%;
    float: left;
}
.fs_ri_col {
    width: 33%;
    float: right;
}
.fs_form_r2 {
    width: 800px;
    margin-left: auto;
    margin-right: auto;
}
.fs_input_1 {
    border: 2px solid #CBAC73;
    padding: 10px;
    border-radius: 4px;
    width: 100%;
}
.fs_upload {
    background-color: #cbac73;
    display: block;
    color: #fff;
    font-size: 14px;
    padding: 10px;
    font-family: raleway_bold;
    border-radius: 4px;
    width: 110%;
    border: 1px solid #cbac73;
}
.fs_image_up {
    position: relative;
    top: 4px;
    margin-right: 5px;
}
.file-upload {
    position: relative;
    overflow: hidden;
    margin: 20px 10px 20px 0px;
}
.file-upload input.file-input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
#fs_submit_1 {
    display: block;
    margin-top: 20px;
    width: 36%;
    padding: 10px;
    background-color: #CBAC73;
    border: 2px solid #CBAC73;
    border-radius: 4px;
    color: #fff;
    font-family: raleway_bold;
    font-size: 18px;
    cursor: pointer;
}
.fs_p1 {
    font-size: 14px;
    color: #575757;
}
.fs_p1 a {
    color: #0B0080;
    text-decoration: none;
}
.fs_p1 a:hover {
    color: #0B0080;
    text-decoration: none;
}
.fs_p1 a:active {
    color: #0B0080;
    text-decoration: none;
}
.fs_p1 a:focus {
    color: #0B0080;
    text-decoration: none;
}
.fs_form_r3 {
    width: 250px;
    margin-left: auto;
    margin-right: auto;
}
.fs_section_1 {
    font-family: raleway_semibold;
    margin-left: 5%;
    font-weight: normal;
    font-size: 13px;
    color: #F39C12;
    text-align: center;
    position: relative;
    right: 65px;
}
.otp_a {
    float: right;
    margin-top: 20px;
    text-decoration: underline;
    color: #F39C12;
}
/* 
@media only screen and (max-width: 1200px) {
    .foot {
        width: 85%;
    }
    .copyright {
        width: 85%;
    }
    .fs_section_1 {
        margin-left: 2%;
    }
}
@media only screen and (max-width: 990px) { */
    .o_fs {
        width: 28%;
    }
    .o_fs button {
        width: 53%;
        padding: 3%;
    }
    .d_fs {
        width: 22%;
    }
    .t_fs {
        width: 33%;
    }
    .fs_le_col
    {
      width: 50%;
      margin: auto;
      float: none;
    }
    .fs_ri_col
    {
        width: 50%;
        margin:auto;
        float: none;
    }
    .fs_up_col
    {
        width: 50%;
        margin:auto;
        float: none;
    }
    #fs_submit_1
    {
        margin:auto;
        float: none;
    }
    .fs_p1
    {
        margin-bottom: 10px;
        margin-left: 26%;
        margin-top:10px;
    }
/*    .fs_upload
    {
        width: 106%;
    }*/
    .fs_container
    {
        padding-left: 2%;
    }
    .fs_form_r2
    {
        width: 85%;
    }

}
/* @media only screen and (max-width: 780px) { */
    .o_fs {
        width: 27%;
    }
    .d_fs {
        margin-left: 3%;
        width: 28%;
    }
    .d_fs .div2 {
        width: 75%;
    }
    .t_fs {
        margin-left: 3%;
    }
    .fs_section_1 {
        margin-left: 0px;
    }
    .fs_section_1 h2 {
        font-size: 13px;
    }
    @media only screen and (max-width: 690px) {
        .t_fs {
            width: 35%;
            margin-left: 0px;
        }
        .threef h3 span {
            display: inline;
        }
    }
    @media only screen and (max-width: 670px) {
        .o_fs {
            display: block;
            width: 100%;
        }
        .o_fs button {
            width: 24%;
            margin-bottom: 2%;
            padding: 2%;
        }
        .d_fs {
            display: inline;
            margin: auto;
            width: 100%;
        }
        .t_fs {
            width: 40%;
            margin: auto;
        }
        .copyright span {
            clear: both;
            display: block;
            float: none;
        }
    }
    @media only screen and (max-width: 590px) {
        .d_fs {
            display: block;
        }
        .t_fs {
            width: 95%;
        }
        .div2 {
            width: 29%;
        }
    }
    @media only screen and (max-width: 590px) {
        .div2 {
            width: 34%;
        }
        .fs_upload
        {
            width: 116%;
        }
    }	
</style>
<body>

<div class="fs_container">
<section class="fs_section_1">
	<h1>A OTP has been sent to given Email. Please enter OTP here</h1>
</section>
<br />
<?php 
	include("connection.php");
	$id=$_GET['id'];
	$vendorid=$_GET['vendorid'];
	
if(isset($_POST['submit'])){
$b=trim($_POST['email_code']);
//echo "select * from tbl_customer where otp='$b' and id='$id' and vendorid='$vendorid'";
$sql=mysqli_query($link,"select * from tbl_customer where id=$id  and vendorid='$vendorid'");
//echo $sql; exit;
$c=mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);


if($row['otp']==$b)
{
	//header("location:uploading-files.php");
	//echo '<script type="text/javascript">' . "\n"; 
    // echo 'window.location="wedding-directory-profile?id=$vendorid";'; 
     //echo '</script>';
     $sqlstt="UPDATE `tbl_customer` SET `otp`='' WHERE id=$id";
     if($result1=mysqli_query($link,$sqlstt))
     {
         session_start();
         $_SESSION['open']="new";
        echo "<script>window.location='wedding-directory-profile?id=$vendorid';</script>  ";
         
     }
	  					
}
else
{
	echo "<script>alert('wrong Email code');</script>";
}
}

?>
<form class="fs_form_r3" method="POST">
	<p class="fs_p">Validate OTP</p>
	<input class="fs_input" placeholder="XXXXXX" type="password" name="email_code">
	

    <a class="fs_redirect">
	<input  id="fs_submit" name="submit" type="submit" value="Submit"></input>
    </a>

</form>


</div>

</body>
</html>