<?php
session_start(); 
error_reporting(0);

include('connection.php');
$name = $_SESSION['name'];
$vendorid= $_SESSION['vendorid'];
$email = $_SESSION['email'];		
?>
<style type="text/css"> 
body {
    font-family: 'Open Sans', sans-serif;
    overflow-x: hidden !important;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}   
</style>
    <style type="text/css"> 
/* PRICE TABLE */
.row-flex {
    display: flex;
    flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
}

.price-table {
    max-width: 325px;
    min-height: 336px;
    background-color: #fff;
    border-radius: 0 0 0 25px;
    border: 1px solid #ccc;
    box-shadow: 5px 5px 8px #ccc;
    display: block;
    margin: 10px auto;
    padding: 0 0 8px 0;
    text-align: center;
    margin-bottom: 50px;
}

.price-table span {
    display: block;
}

.price-table span:first-child {
    padding: 16px 0 0 0;
    font-size: 2em;
    text-transform: uppercase;
    font-weight: bold;
}

.price-table span:nth-child(2) {
    padding: 0 0 16px 0;
}

.price-table span:nth-child(4) {
    padding: 8px 0;
    font-weight: bold;
    font-size: 1.2em;
}

.price-table > ul {
    list-style: none;
    display: block;
    padding: 0;
    margin: 0;
    margin-bottom: 25px;
}

.price-table > ul > li {
    display: block;
    padding: 8px 0;
}

.price-table > ul > li:first-child {
    border-top: 1px solid #ccc;
}

.price-table > ul > li {
    border-bottom: 1px solid #ccc;
}

.price-table a,
.price-table a:active,
.price-table a:focus,
.price-table a:hover,
.price-table a:visited {
    text-transform: uppercase;
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    font-weight: bold;
    transition-duration: .2s;
}

/* Colors */
.pt-bg-black span:first-child {
    background-color: #212121;
    color: #fcfcfc;
}

.pt-bg-black span:nth-child(2) {
    background-color: #212121;
    color: #D5D8DC;
}

.pt-bg-black a {
    border: 4px solid #212121;
    color: #212121;
    margin-top: 8px;
}

.pt-bg-black a:hover {
    background-color: #212121;
    color: #fff;
} /* End Color Black */

.pt-bg-green span:first-child {
    background-color: #f39c12;
    color: #b00403;
}

.pt-bg-green span:nth-child(2) {
   background-color: #f39c12;
    color: #b00403;
}

.pt-bg-green a {
    border: 4px solid #b00403;
    color: #b00403;
    margin-top: 8px;
}

.pt-bg-green a:hover {
    background-color: #f39c12;
    color: #fff;
} /* End Color Green */

.pt-bg-red span:first-child {
    background-color: #e27474;
    color: #fcfcfc;
}


.pt-bg-ree span:first-child {
    background-color:#9c27b091;
    color: #fcfcfc;
}

.pt-bg-red span:nth-child(2) {
    background-color: #e27474;
    color: #D5D8DC;
}


.pt-bg-ree span:nth-child(2) {
    background-color: #9c27b091;
    color: #D5D8DC;
}

.pt-bg-ree a {
    border: 4px solid black;
    color: black;
    margin-top: 8px;
}

.pt-bg-ree a:hover {
    background-color: black;
    color: #fff;
} /* End Color Red */

.pt-bg-red a {
    border: 4px solid black;
    color: black;
    margin-top: 8px;
}

.pt-bg-red a:hover {
    background-color: black;
    color: #fff;
} /* End Color Red */

.pt-bg-blue span:first-child {
    background-color: #b00403;
    color: #fcfcfc;
}

.pt-bg-blue span:nth-child(2) {
    background-color: #b00403;
    color: #D5D8DC;
}

.pt-bg-blue a {
    border: 4px solid #b00403;
    color: #b00403;
    margin-top: 8px;
}

.pt-bg-blue a:hover {
    background-color: #b00403;
    color: #fff;
} /* End Color Blue */
/* END PRICE TABLE */
</style>
<?php include('header.php');?>

            <!-- start page content -->
           <div class="page-content-wrapper">
                <div class="page-content" style="min-height:605px">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Subscribe</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                              
                                <li class="active">Subscribe</li>
                            </ol>
                        </div>
                    </div>
            
<div class="container">
    <div class="row row-flex">
        
       <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-green">
                <div>
                    <span>Free</span>
                    <span>Price : Free</span>

                </div>
                <ul>
                <li> Validity Period:1 MONTH</li>
                <li> Leeds : 50 Hits</li>
                <li> View Profile Photos : 50 Hits</li>
                <li> Search , View ,Save Profiles : 50 Hits</li>
         
                </ul>
                <a href="">purchase</a>
            </div>
        </div>-->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-red">
                <div>
                    <span>BRONZE</span>
                    <span>Price Rs.51</span>

                </div>
               <ul>
                 <li> Validity Period:3 MONTHS</li>
                <li> Leeds : Unlimited</li>
                <li> View Profile Photos : Unlimited</li>
                <li> Search , View ,Save Profiles : Unlimited </li>
         
                </ul>
                                <a href="paypa?id=<?php echo $vendorid;?>&amount=51.00&paymentmode=paidmode">purchase</a>
            
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>SILVER</span>
                    <span>Price Rs.3000</span>

                </div>
                <ul>
                 <li> Validity Period:6 MONTHS</li>
                <li> Leeds : Unlimited </li>
                <li> View Profile Photos : Unlimited </li>
                <li> Search , View ,Save Profiles : Unlimited </li>
                </ul>
                <a href="paypal?id=<?php echo $vendorid;?>&amount=2">purchase</a>
            </div>
        </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
             <div class="price-table pt-bg-ree">
                <div>
                    <span>GOLD</span>
                    <span>Price Rs.5000</span>
                </div>
               <ul>
                 <li> Validity Period:12 MONTHS</li>
                <li> Leeds : Unlimited </li>
                <li> View Profile Photos : Unlimited </li>
                <li> Search , View ,Save Profiles : Unlimited </li>
                </ul>
                <a href="paypal?id=<?php echo $vendorid;?>&amount=1">purchase</a>
            </div>
        </div>
           <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-blue">
                 <div>
                    <span>PLATINUM</span>
                    <span>Price Rs.7500</span>
                </div>
               <ul>
                 <li> Validity Period:12 MONTHS</li>
                <li> Leeds : 50 Hits </li>
                <li> View Profile Photos : Unlimited </li>
                <li> Search , View ,Save Profiles : Unlimited </li>
                </ul>
                <a href="paypal?id=<?php echo $vendorid;?>&amount=1">purchase</a>
            </div>
        </div>-->
              <!--  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-green">
                 <div>
                    <span>PLATINUM+</span>
                    <span>Price Rs.10,000</span>
                </div>
               <ul>
                 <li> Validity Period:12 MONTHS</li>
                <li> Leeds : Unlimited </li>
                <li> View Profile Photos : Unlimited </li>
                <li> Search , View ,Save Profiles : Unlimited </li>
                </ul>
                <a href="paypal?id=<?php echo $vendorid;?>&amount=1">purchase</a>
            </div>
        </div>-->
    </div>
</div>
      </div>
  </div>      
    
            
            
            
 <?php include('footer.php');?>