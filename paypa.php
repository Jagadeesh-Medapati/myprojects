<?php 
error_reporting(0);
?>
<?php
$id = $_GET['id'];
include('connection.php');
$select = "select * from tbl_vendors where id='$id'";
$select1 = mysqli_query($link,$select);
$select2 = mysqli_fetch_assoc($select1);
$amount = $_GET['amount'];
$paymentmode = $_GET['paymentmode'];
$product = $select2['plan'];
$name = $select2['name'];
$phone = $select2['phone'];
$email = $select2['email'];
$success = "http://aoepartner.com/gemini-matrimonynew/success.php";
$failure = "http://aoepartner.com/gemini-matrimonynew/cancel.php";
$service = $select2['service'];
$service1 = $select2['service1'];
$bank = $select2['bank'];
?>
<html>
  <head>

<style>
.paytable {
    border: 2px;
    background-color: #b00403;
    padding: 75px;
    background: linear-gradient(#b00403, #d6bdbd, #b00403);
    box-shadow: 2px 2px 32px 2px #b00403;
    border-radius: 25px;
}
h1 {
    text-shadow: 0px 0px 1pc;
    text-align: center;
    color: #b82b2a;
}
    input.paypalbutton {
    margin: 0 auto;
    display: block;
}
body.bgcoloronly {
    background-color: #FFC40C;
}
a.backtohomec {
    color: white;
    text-decoration: none;
}
button.btn.btn-lg.btn-block.btn-danger {
    			background-color: #ffc40c;
    			border: 1px solid #ffc40c;
    			border-radius: 15px;
    			padding: 10px;
    			font-size: 16px;
    			font-weight: 700;
    			color: #b93131;
    			/* text-align: center; */
			}
			.panel-footer {
    			text-align: center;
   			 margin-top: 10px;
			}
</style>
</head>
<br>
  <body onload="submitPayuForm()" class="bgcoloronly">
<br>
<h1> Confirm Your Payment Details</h1>
<br/>
<?php
$paypalId='geminimatrimony2018@gmail.com';
?>
<center> 
 <form action="<?php echo $action; ?>" method="post" name="payuForm" class="payform">
 <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="INR">
        <a href="subscribe" class="backtohomec">Back To Subscribe</a> 
        <table class="paytable">
          <td style="color:white;font-size:20px"><b>Amount: </b></td>
          <td  ><input name="amount"    style="height:30px;width:200px;"  readonly value="<?php echo $amount ?>"  class="form-control" /></td>
          <td style="color:white;font-size:20px;p">Name: </td>
          <td ><input name="name"style="height:30px;width:200px;" readonly id="firstname" value="<?php echo $name ?>" class="form-control" ></td>
        </tr>
        <tr style="margin-top:3% !important;">
          <td style="color:white;font-size:20px">Email: </td>
          <td><input name="email" style="height:30px;width:200px;" readonly  id="email" value="<?php echo $email; ?>" /></td>
          <!--<td style="color:white;font-size:20px">Phone: </td>
          <td><input name="phone" style="height:30px;width:200px;" value="<?php //echo $phone; ?>" readonly></td>-->
        </tr>
              <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="INR">
		   <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
        <tr>
          <!--<td>Success URI: </td>-->
          <td colspan="3"><input name="surl" style="height:30px;width:200px;" type="hidden" value="<?php echo $success ?>" size="64" /></td>
        </tr>
        <tr>
          <!--<td>Failure URI: </td>-->
          <td colspan="3"><input name="furl" style="height:30px;width:200px;" type="hidden" value="<?php echo $failure ?>" ></td>
        </tr>
        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" style="height:30px;width:200px;" value="payu_paisa" size="64" /></td>
        </tr>
<input name="udf2" type="hidden" value="<?php echo $id ?>" />
</tr>
</tr>
</form>
</center>
        <tr>
         
            <td colspan="4">   <!-- Display the payment button. -->
<?php
	$paypalUrl='https://www.paypal.com/cgi-bin/webscr';
	$paypalId='geminimatrimony2018@gmail.com';
?>
<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="It Solution Stuff">
						    <input type="hidden" name="item_number" value="2">
						    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="INR">
						    <input type="hidden" name="cancel_return" value="http://aoepartner.com/gemini-matrimonynew/cancel.php">
						    <input type="hidden" name="return" value="http://aoepartner.com/gemini-matrimonynew/success.php">  
						    
						
						<div class="panel-footer">
							<button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
						</div>
					</div>
    			</form>
</td>
          <?php //} ?>
        </tr>
      </table>




  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </body>
</html>
