<?php
session_start();
?>
<?php
error_reporting(0);

include('connection.php');
$username = $_SESSION['username'];
$vendorid = $_SESSION['vendorid'];
$email = $_SESSION['email'];
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding</title>
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
    min-height: 390px;
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
    background-color: #27AE60;
    color: #fcfcfc;
}

.pt-bg-green span:nth-child(2) {
    background-color: #27AE60;
    color: #D5D8DC;
}

.pt-bg-green a {
    border: 4px solid #27AE60;
    color: #27AE60;
    margin-top: 8px;
}

.pt-bg-green a:hover {
    background-color: #27AE60;
    color: #fff;
} /* End Color Green */

.pt-bg-red span:first-child {
    background-color: #C0492B;
    color: #fcfcfc;
}

.pt-bg-red span:nth-child(2) {
    background-color: #C0492B;
    color: #D5D8DC;
}

.pt-bg-red a {
    border: 4px solid #C0492B;
    color: #C0492B;
    margin-top: 8px;
}

.pt-bg-red a:hover {
    background-color: #C0492B;
    color: #fff;
} /* End Color Red */

.pt-bg-blue span:first-child {
    background-color: #2980B9;
    color: #fcfcfc;
}

.pt-bg-blue span:nth-child(2) {
    background-color: #2980B9;
    color: #D5D8DC;
}

.pt-bg-blue a {
    border: 4px solid #2980B9;
    color: #2980B9;
    margin-top: 8px;
}

.pt-bg-blue a:hover {
    background-color: #2980B9;
    color: #fff;
} /* End Color Blue */
/* END PRICE TABLE */
</style>
</head>
<!-- end head -->
<!--body start-->
<body>
	<?php include('header.php');?>
<!-- page banner -->
  <section id="page-banner" class="page-banner" style="background-image: url('images/about-us/1.png');"> 
    <div class="overlay-bg"></div>
    <div class="container">
      <div class="banner-dtl text-center">
        <h2 class="banner-heading">Packages</h2>
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li class="active">packages</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
<!-- end page banner -->
<!-- about our weddlist -->
  <section id="about-our-weddlist" class="ptb120 why-choose-main-block">
                  
<div class="container">
    <div class="row row-flex">
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-green">
                <div>
                    <span>40 DAYS</span>
                    <span>Price Rs.1000</span>
<!--                     <h3>Offer includes!</h3> -->
                </div>
                <ul>
                       <li>---------</li>
                     <li>---------</li>
                   <li>---------</li>
                  <li>---------</li>
                 <li>---------</li>
                </ul>
                <a href="confirmpayment?id=<?php echo $vendorid;?>&amount=1000">purchase</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-red">
                <div>
                    <span>90 Days </span>
                    <span>Price Rs.4000</span>
<!--                   <h3>Offer includes!</h3> -->
                </div>
                <ul>
                       <li>---------</li>
                     <li>---------</li>
                   <li>---------</li>
                  <li>---------</li>
                 <li>---------</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>180 DAYS</span>
                    <span>Price Rs.5000</span>
<!--                   <h3>Offer includes!</h3> -->
                </div>
                <ul>
                 <li>---------</li>
                     <li>---------</li>
                   <li>---------</li>
                  <li>---------</li>
                 <li>---------</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div>
		    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>270 DAYS</span>
                    <span>Price Rs.6500</span>
<!--                     <h3>Offer includes!</h3> -->
                </div>
                <ul>
                     <li>---------</li>
                     <li>---------</li>
                   <li>---------</li>
                  <li>---------</li>
                 <li>---------</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div>
		    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="price-table pt-bg-blue">
                <div>
                    <span>TILL U MARRY</span>
                    <span>Price Rs.10,000 </span>
<!--                  <h3>Offer includes!</h3> -->
                </div>
                <ul>
                      <li>---------</li>
                     <li>---------</li>
                   <li>---------</li>
                  <li>---------</li>
                 <li>---------</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div>
    </div>
</div>
   <!-- <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="why-choose-img">
            <img src="images/why-choose.png" class="img-responsive" alt="why-choose">
          </div>
        </div>
        <div class="col-md-8">
          <div class="section">
            <div class="row">
              <div class="col-sm-5">
                <h3 class="section-heading">About Our Gemini<span>Matrimony</span></h3>
              </div>
              <div class="col-sm-7">
                <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="why-block">
                <div class="why-icon">
                  <i class="flaticon-two-hearts"></i>
                </div>
                <h4 class="why-choose-heading">20 Year Experience</h4>
                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
              </div>
              <div class="why-block">
                <div class="why-icon">
                  <i class="flaticon-food"></i>
                </div>
                <h4 class="why-choose-heading">1500+ Wedding Suppliers</h4>
                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="why-block">
                <div class="why-icon">
                  <i class="flaticon-valentine-day"></i>
                </div>
                <h4 class="why-choose-heading">100 Real Weddingse</h4>
                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
              </div>
              <div class="why-block">
                <div class="why-icon">
                  <i class="flaticon-wedding-day"></i>
                </div>
                <h4 class="why-choose-heading">Perfect Checklist</h4>
                <p>Sed ut perspiciatis unde omnis iste na voluptatem accusantium doloremque laudantium</p>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
<!-- end about our weddlist -->
<!-- plan start main block -->
 <!-- <section id="plan-start-main-block" class="plan-start-main-block bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 pad-0">
          <div class="plan-discription">
            <h3 class="plan-heading">Your Wedding Planing Start Here</h3>
            <div class="plan-text-block">
              <p class="plan-sub-heading">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem.</p>
              <p class="plan-sub-heading">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid ex ea commodi consequatur uis autem vel eum iure repre henderit qui in ea voluptate velit esse quam.</p>
            </div>

          </div>
        </div>
        <div class="col-sm-7">
          <div class="plan-start-block">
            <div class="row">
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-wedding-day"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Check List</h4>
                  <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et lacinia mi id maix maximus massa duis ultricies nibh lectus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-start-block">
            <div class="row"> 
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-love-talk"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Budget Planner</h4>
                  <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et lacinia mi id maix maximus massa duis ultricies nibh lectus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-start-block">
            <div class="row">
              <div class="col-sm-2 col-xs-3 pad-0">
                <div class="widget-icon">
                  <i class="flaticon-wedding-planning"></i>
                </div>
              </div>
              <div class="col-sm-10 col-xs-9"> 
                <div class="section">
                  <h4 class="section-heading">Guest List</h4>
                  <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et lacinia mi id maix maximus massa duis ultricies nibh lectus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
<!-- end plan start main block -->

<!-- why choose block -->
<!--  <section id="why-choose" class="why-choose-main-block ptb120">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <h3 class="section-heading">Why Choose Gemini Matrimony</h3>
              </div>
              <div class="col-md-8 col-sm-8">
                <p class="section-sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim adminim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-heart-with-arrow"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">20 Years Experience</h4>
                      <p class="why-choose-sub-heading">Sed ut perspiciatis unde omnis ist voluptatem accusantium doloremque laudantium ut enim ad.</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-food"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">1500+ Wedding Suppliers</h4>
                      <p class="why-choose-sub-heading">Sed ut perspiciatis unde omnis ist voluptatem accusantium doloremque laudantium ut enim ad.</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-valentine-day"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">100 Real Weddings</h4>
                      <p class="why-choose-sub-heading">Sed ut perspiciatis unde omnis ist voluptatem accusantium doloremque laudantium ut enim ad.</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="why-choose-block">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="why-choose-icon">
                      <img src="images/about-us-2/why-ch-icon-bg.png" class="img-responsive" alt="icon">
                      <i class="flaticon-wedding-day"></i>
                    </div>
                  </div>
                  <div class="col-xs-9">
                    <div class="why-choose-dtl">
                      <h4 class="why-choose-heading">Perfect Checklist</h4>
                      <p class="why-choose-sub-heading">Sed ut perspiciatis unde omnis ist voluptatem accusantium doloremque laudantium ut enim ad.</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="weddlist-img">
            <img src="images/about-us-2/weddlist.png" class="img-responsive" alt="weddlist img">
          </div>
        </div>
      </div>
    </div>
  </section>-->
<!-- end why choose -->

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