<?php session_start();?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.gadiservicingwale.com/register-user.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2017 17:10:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name=apple-mobile-web-app-capable content=yes />
<title>Register User - GadiServicingWale.com</title><link rel="shortcut icon" href="dummies/icon.ico">
<link rel="shortcut icon" href="404.html">
<title>Get All Motor vehicle Serviced with our GhadiService.ga</title>
<meta name='keywords' content='bike servicing online booking, TamilNadu Bike Servicing, Salem Bike/car Servicing, pickup drop bike servicing'>
<meta name='Description' content='Get your bike serviced from best service center within your surroundings. Get Upto 20% Off. Servicing charges starting from Rs.200 Only.'>
 
<link rel="stylesheet" type="text/css" href="library/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="library/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="library/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="library/css/animate.custom.css">
<link rel="stylesheet" type="text/css" href="library/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" class="ui" href="semantic/semantic.css">
<link rel="stylesheet" type="text/css" href="library/css/style.css">
<link rel="stylesheet" type="text/css" href="library/css/skins/default.css">
<link rel="stylesheet" type="text/css" href="library/css/application.css">
<link rel="stylesheet" type="text/css" href="library/css/custom.css">  
 
<script src="library/js/modernizr.custom.min.js" type="text/javascript"></script>
</head>
<body class="enable-fixed-header enable-inview-animations" onload="javascript:initMap('Area To Select',20.5204, 20.8567,'my_canvas');">
 
<div class="se-pre-con"></div>
<input type="hidden" id="scrollTopValue" value="250"/>
<header id="header">
<div class="container">
<div class="header-inner clearfix">
<form id="dummy-form" action="#" style="margin: 0px">
</form>
<div class="header-branding">
<a href="booking.html"><img src="dummies/logo.png" alt="GhadiService.ga"></a>
</div>
<div class="header-tools">
 
<div class="header-language">
<button class="header-btn">
<i class="marker icon"></i>TamilNadu
</button>
<input type="hidden" name="userCity" id="userCity" value="TamilNadu">
<nav class="header-nav">
<ul class="custom-list">
<li class="active"><a href="#" onselect="javascript:markCity('TamilNadu');">
	<i class="marker icon"></i> Salem</a></li>
<li class="active">	<a href="#" onselect="javascript:markCity('TamilNadu');"><i class="marker icon"></i> Chennai</a></li>
<li class="active">	<a href="#" onselect="javascript:markCity('TamilNadu');"><i class="marker icon"></i> Coimbatore</a></li>
<li class="active">	<a href="#" onselect="javascript:markCity('TamilNadu');"><i class="marker icon"></i> Madurai</a></li>
	
</ul>
</nav>
</div>

 
<div class="header-login">
<button class="login-toggle header-btn" id="login-btn"><i class="fa fa-power-off"></i> Login</button>
<div class="header-form">
<form action="#" method="POST">
<?php include 'logindb.php';?>
<fieldset>
<p class="form-row">
<input name="mobilenumber" class="email" type="number" placeholder="Mobile No." pattern='[0-9]*'>
</p>
<p class="form-row">
<input class="required" type="password" placeholder="Password" name="password">
</p>
<p><input type="submit" value="login" name="submit" class="submit-btn button"></p>
<p align="center"><input type="reset" value="Reset" class="submit-btn button" ></p>
<p class="form-row forgot-password">
<a href='reset-password.html'>Reset Password?</a>
</p>
<p class="form-row forgot-password">
<a href="register-user.html">Register Customer</a><br>
<a href="register-user.html">Register Servicer</a>
</p>
</fieldset>
</form>
</div>
</div>
 <span class='header-add-offer'><a href='register-station.html' class='button'><i class='fa fa-plus'></i> Register for Service </a></span> </div>
 
</div>
<button class="navbar-toggle button">
<i class="fa fa-bars"></i>
</button>
</div>
</header>
<div class="ui modal" id="message-popup-new-alert">
<div class="header"><h4 id="message-popup-new-alert-title"> </h4> </div>
<div class="content" style="padding:0px;height: 200px;overflow: auto;">
<table style="overflow: hidden; margin:0px;">
<tr height="100%">
<td width="30%" id="IMAGESHOW" style="text-align: left;">
<img alt="alert" src="dummies/alert.png" height="100px" id="ALERT" style="display: none;margin-top: 35px">
<img alt="alert" src="dummies/success.png" height="100px" id="SUCCESS" style="display: none;margin-top: 35px">
</td>
<td width="100%" style="text-align: left;vertical-align: middle;">
<h4 id="message-popup-new-alert-message">
Some Issue Encountered!!
</h4>
</td>
</tr>
</table>
</div>
<div class="actions" id="message-popup-new-alert-close">
<div class="ui cancel button">Close</div>
</div>
</div>
<script>
	function markCity(city){
		$("#userCity").val(city);
	}
</script>  
 
<div id="core" class="page-search-results">
 
<div class="page-header">
<div class="container">
<div class="page-header-inner clearfix">
<div class="steps-mobile-view">
<ul class="custom-list breadcrumbs">
<li id="step1-progress">Step - 1 /</li>
<li id="step2-progress">Step - 2 /</li>
<li id="step3-progress">Step - 3</li>
</ul>
</div>
</div>
</div>
</div>
  
<div class="main-wrapper-container">
<div class="container">
<div id="main-wrapper">
<div class="row">
<div class="col-md">
<div class="steps-desktop-view">
<div class="ui three top attached steps">
<div class="active step" id="step1-desktop">
<i class="marker icon"></i>
<div class="content">
<div class="title">Step 1</div>
<div class="description">Choose Your Pickup Area</div>
</div>
</div>
<div class="step" id="step2-desktop">
<i class="calendar icon"></i>
<div class="content">
<div class="title">Step 2</div>
<div class="description">Choose Date And Time</div>
</div>
</div>
<div class="step" id="step3-desktop">
<i class="thumbs up icon"></i>
<div class="content">
<div class="title">Step 3</div>
<div class="description">Book An Appoinment</div>
</div>
</div>
</div>
</div>  
<aside class="properties-search" id="step1">
<div class="steps-mobile-view">
<h3 class="properties-search-title">
<i class="fa fa-map-marker"></i> Step 1
</h3>
<h5 class="properties-search-subtitle">Choose Your Area</h5>
</div>
 
<div class="properties-search-basic">
 
<div id="step1-error"></div>
<div class="default-form" id="properties-search-form-swap">
 
<span class="select-box full" title="Choose Yor Area">
 <select name="area" data-placeholder="Choose Your Area" required="required">
<option>Choose Your Area</option>
<option value='8'>Salem AmmaPet</option><option value='12'>Astampati</option><option value='6'>Omalure</option><option value='7'>Gugai</option><option value='4'>New Bustand</option><option value='11'>Old Bustand</option><option value='5'>Junction</option> </select>
</span>
 
<p class="form-row">
<button class="button next" id="step1-next" submit-type="ajax">
Next <i class="fa fa-forward"></i>
</button>
</p>
</div>
</div>
 
</aside>  
 
<aside class="properties-search" id="step2" style="display: none;">
<div class="steps-mobile-view">
<h3 class="properties-search-title">
<i class="fa fa-calendar"></i> Step 2
</h3>
<h5 class="properties-search-subtitle">Choose Date And Time</h5>
</div>
 
<div class="properties-search-basic" id="step2-holder">
 
<div id="step2-error"></div>
<div class="default-form" id="properties-search-form-swap">
 
<p class="form-row clearfix">
<span class="calendar-input input-left" title="Servicing Date">
<input type="text" name="bookingDate" placeholder="Servicing Date" data-dateformat="mm-dd-yy" readonly> <i class="fa fa-calendar"></i>
</span> <span class="select-box input-right" title="Choose Time Slot">
<select name="timeslot" data-placeholder="Pickup Slot">
<option>Choose Time Slot</option>
<option value="0911">9 To 11 AM</option>
<option value="1113">11 To 1 PM</option>
<option value="1315">1 To 3 PM</option>
<option value="1517">3 To 5 PM</option>
<option value="1718">5 To 6 PM</option>
</select>
</span>
</p>
<p class="form-row clearfix">
 
<div class="ui buttons">
<input id="pac-input" name="pac-input" type="text" placeholder="Enter Your Pickup Location" class="map-input">
<div class="or"></div>
<button class="ui positive button" onclick="javascript:myCurrentLocation();">My Location <i class="fa fa-location-arrow fa-4"></i></button>
</div>
</p>
<div id="my_canvas">
<h5>Select Location</h5>
</div>
 
<p class="form-row">
<button class="button back" id="step2-back">
<i class="fa fa-backward"></i> Back
</button>
</p>
<p class="form-row">
<button class="button next" id="step2-next">
Next <i class="fa fa-forward"></i>
</button>
</p>
</div>
</div>
 
</aside>  
 
<aside class="properties-search" id="step3" style="display: none;">
<div class="steps-mobile-view">
<h3 class="properties-search-title">
<i class="fa fa-thumbs-o-up"></i>
Step 3
</h3>
<h5 class="properties-search-subtitle">
Book An Appoinment
</h5>
</div>
 
<div class="properties-search-basic">
 
<div id="step3-error">
</div>
<div class="default-form" id="properties-search-form-swap">
<marquee>
<h4>
Your bike has any specific issue? No worry you can tell your bike problem to Pickup boy
</h4>
</marquee>
<div id="booking-details">
<p class="form-row clearfix">
<span class="input input-left" title="Name">
<input type="text" placeholder="Name" name="bikername" value="">
</span>
<span class="input input-right" title="Bike Number">
<input type="text" placeholder="Bike Number(MH14AH0070)" name="bikenumber" value="" style="text-transform: uppercase;">
</span>
</p>
<p class="form-row clearfix three-fields">
<span class="select input-left field1" title="Choose Make">
<select name="bikeMake" data-placeholder="Choose Make" onchange="javascript:onBikeSelect();">
<option>Choose Make</option>
</select>
</span>
<span class="select input-right field2" title="Choose Varient">
<select name="bikeVarient" data-placeholder="Choose Varient">
<option>Choose Varient</option>
</select>
</span>
<span class="select input-right field3" title="Choose Service Type">
<select name="servicingTypes" data-placeholder="Choose Service Type">
</select>
<font size="2" style="font-style: oblique;color:inherit">Tell Your Choice Of Bike Oil To Pickup Boy</font>
</span>
</p>
<div id="otpDIV">
<p class="form-row clearfix">
<span class="input input-left" title="Mobile">
<input type="number" placeholder="10 digit Mobile" name="mobile" pattern='[0-9]*'>
</span>
<button class="button verify" id="verify"><i class="fa fa-mobile mobile-icon" aria-hidden="true"></i> Verify</button>
</p>
<p class="form-row clearfix">
<span class="input input-left" title="Mobile">
<input type="number" pattern='[0-9]*' placeholder="Enter OTP Sent To Your Mobile" name="otp" style="border-color: #DAD5D5;background-color: rgba(0, 0, 0, 0.22);">
</span>
</p>
</div>
<p class="form-row">
<button class="button back" id="step3-back"><i class="fa fa-backward"></i> Back</button>
</p>
<p class="form-row">
<button class="button next" id="step3-next">Next <i class="fa fa-forward"></i></button>
</p>
</div>
<div class="form-row reschedule" style="display: none;" id="service-centers-busy">
<div class="header">
<h5 id="busy-msg"></h5>
</div>
<div class="content">
<div class="counter" id="service-centers-busy-counter">
<h4>90</h4>
</div>
</div>
<div class="footer">
<h5>Either you rescheduled booking or proceed with service center from other Area</h5>
<h6>Pick And Drop charges may be apply</h6>
</div>
<p class="form-row">
<form action="http://www.gadiservicingwale.com/booking.php">
<button class="button back" id="reschedule" style="margin-top:15px;"><i class="fa fa-calendar"></i> Reschedule</button>
</form>
</p>
<p class="form-row">
<button class="button next" id="proceed">Proceed <i class="fa fa-forward"></i></button>
</p>
</div>
<div id="allot-service-center" class="form-row service-center-allotment" style="display: none;">
<div class="col-md-8 col-md-push-4">
<div class="ui card">
<h5 class="label">
Alloted Service Station
</h5>
<div class="content">
<h5 id="alloted-service-station-name"></h5>
<div id="alloted-service-station-charges">
</div>
<div id="alloted-service-station-pnd-charges">
</div>
<div id="alloted-service-station-rating">
</div>
<div id="servicing-details">
</div>
<div id="is-authorized">
</div>
</div>
<div class="image">
<img class="ui wireframe image" src="dummies/ajax-loader.gif" id="alloted-center-banner">
</div>
<div class="content">
<button class="button submit-btn" id="book">Book <i class="fa fa-clock-o"></i></button>
</div>
</div>
</div>
<div class="col-md-4 col-md-pull-8">
<span>
<p>
We have alloted the best Service Station based on the Reviews and Availability.
<span id="more-station-message" style="display: none;">
<br>
<br> *However you can choose the Service Center from below list.
</span>
</p>
</span>
<br>
<div class="ui cards" id="service-station-options">
</div>
<p class="form-row">
<button class="button back3" id="step3-back-last"><i class="fa fa-backward"></i> Back</button>
</p>
</div>
</div>
<div id="confirmation" style="display: none;">
</div>
</div>
</div>
 
</aside>  
</div>
</div>
</div>
</div>
</div>
</div>
 

 <!--<div class="map">-->
 <center>	<div id="mapouter"><div id="gmap_canvas"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q=Sona College of Technology - Engineering Colleges, Salem, Tamil Nadu, India, &t=&z=15&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe><a href="http://www.embedgooglemap.net">add google map to your website</a></div><style>#gmap_canvas{height:500px;width:1000px;}#mapouter{overflow:hidden;height:500px;width:1000px;}</style></div>
 </center>
<section class="content-section services">
<div class="container">
<div class="row">
<h3 align="center">WHY CHOOSE GADI SERVICING WALE ?</h3><br>
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa marker icon"></i>
</p>
<h3 class="service-title">Find Top Service Center</h3>
<p>Find top Service provider based on reviews from our customers. Compare the service price and efficiency of Service providers.</p>
</div>
 
</div>
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa fa-clock-o"></i>
</p>
<h3 class="service-title">Save Time</h3>
<p>No more waiting in queue for your turn. With us beat the queue just go and avail the service.</p>
</div>
 
</div>
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa fa-calendar"></i>
</p>
<h3 class="service-title">Book Appointment Online</h3>
<p>Book an Appointment online with top service provider with no extra cost. Get booking updates online as well as through SMS.</p>
</div>
 
</div>
</div>
<div class="row">
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa fa-beer"></i>
</p>
<h3 class="service-title">Don't look for an off day/holiday</h3>
<p>Don't spoil your off/holiday for Gadi Servicing. Now enjoy your holiday and our service centers will pick up your gadi/bike/motorbike, service it & drop it back.</p>
</div>
 
</div>
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa fa-bicycle"></i>
</p>
<h3 class="service-title">Don't ask your friends and family to ferry you back</h3>
<p>Don't ask anyone for ferry. Be a King, book an appointment online and our bike service centers will pick-up and drop off your gadi / motorcycle / bike.</p>
</div>
 
</div>
<div class="col-sm-4">
 
<div class="service-container">
<p class="service-icon">
<i class="fa fa-bed"></i>
</p>
<h3 class="service-title">No more getting up early & disturbing sleep</h3>
<p>Morning dreams come true so keep dreaming late. Our bike servicing centers will pick-up & drop-off bike from your workstation as well.</p>
</div>
 
</div>
</div>
 
<br/>
<div class="row">
<div class="col-sm-12">
<h3 align="center">HOW IT WORKS ?</h3><br/>
<a href='#' id='video_popup'><img alt="How GadiServicingWale Works?" src="dummies/gadiservicingwale_how_it_works.png" class="howItWorks_img"/></a>
</div>
</div>
</div>
</section><section class="content-section" id="about-us">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3 align="center">ABOUT US</h3>
<p>In today's digital world, Where you could get almost everything on
fingertips we took one more step ahead to change your traditional way of gadi servicing!</p>
We are glad to introduce 'GadiServicingWale' an online motorcycle repair and maintenance service that target your Gadi maintenance troubles.
We believe that your time and your bike both are beyond price and which can be managed right using technology.
<p>@GhadiService.ga's you get Pickup & Drop facility,
freedom to choose best service center, Real time booking & service tracking, Pay on Delivery.</p>
<p>Everyone needs pampering so does your Ghadi. So don't wait Pamper your Gadi toaday with GadiServicingWale.com .</p>
<p class="cta-button">
<a href="#" onclick="javascript:openLoginPopup();" class="button"><i class="fa fa-motorcycle"></i> Book Servicing Now!</a>
</p>
</div>
</div>
</div>
</section>  
 
<div id="testimonials">
<div class="container">
<div class="testimonials-inner">
 
<div class="testimonial-list">

<div class="testimonial"> <p class="portrait"> <img src="dummies/rm.jpg" alt="Rahul"> </p> <blockquote class="quote"> <p> Hassle free service :)</p> <footer> <cite>Venkat - <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></cite> </footer> </blockquote></div><div class="testimonial"> <p class="portrait"> <img src="dummies/rm.jpg" alt="Piyush"> </p> <blockquote class="quote"> <p> Free Pickup & Drop with world class servicing... Loving it</p> <footer> <cite>Sreenivas - <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></cite> </footer> </blockquote></div><div class="testimonial"> <p class="portrait"> <img src="dummies/rm.jpg" alt="Subrata"> </p> <blockquote class="quote">  <footer> <cite>Shri- <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></cite> </footer> </blockquote></div><div class="testimonial"> <p class="portrait"> <img src="dummies/rf.jpg" alt="Swati"> </p> <blockquote class="quote"> <p> Superb service..no more waiting for weekends to go for servicing. </p> <footer> <cite>Hashini - <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></cite> </footer> </blockquote></div><div class="testimonial"> <p class="portrait"> <img src="dummies/rm.jpg" alt="parth"> </p> <blockquote class="quote"> <p> Fantastic..must go for it..</p> <footer> <cite>parth - <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></cite> </footer> </blockquote></div> </div>

 
<div class="navigation">
<button class="button prev">
<i class="fa fa-chevron-left"></i>
</button>
<button class="button next">
<i class="fa fa-chevron-right"></i>
</button>
</div>
 
</div>
</div>
</div>  
 
<aside id="bottom-panel">
<div class="container">
<div class="row">
<div class="widget links-widget">
<h3 class="widget-title">
<span>Quick Links</span>
</h3>
<br>
<div class="row">
<a href="booking-2.html">Home</a>&nbsp;|
<a href="#about-us">About Us</a>&nbsp;|
<a href="#" onclick="javascript:openLoginPopup();">Track My Servicing</a>&nbsp;|&nbsp;<a href="register-user.html">Register</a>&nbsp;|&nbsp;<a href="#" onclick="javascript:openLoginPopup();">Login</a>&nbsp;|&nbsp;<a href="register-station.html">Register Service Station</a>&nbsp; |&nbsp;<a href="contact-us.html">Contact Us</a> 
</div>
</div>
</div>
</div>
</aside>  
 
<footer id="footer">
<div class="container">
<div class="row">
<div class="col-sm-8">
 
<p>
Copyright 2017 &copy; GhadiService.ga . All rights reserved.
</p>
 
</div>
 
 
 
 
 
<a href="https://msg91.com/startups/?utm_source=startup-banner" target="_blank"><img src="dummies/msg91Badge.png" width="90" height="75" title="MSG91 - SMS for Startups" alt="Bulk SMS - MSG91"></a>
</div>
</div>
</footer>  
 
<script src="library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="library/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="library/js/jquery.ba-outside-events.min.js" type="text/javascript"></script>
<script src="library/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="library/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="library/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="library/twitter/jquery.tweet.min.js" type="text/javascript"></script>
<script src="semantic/semantic.js"></script>
<script src="library/js/scripts.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFadpIV1v3qOK_A0aR5qeiNipcD6iTTuI&amp;libraries=places" async defer></script>
<script src="library/js/application.js" type="text/javascript"></script>
 
<script>
			$(window).load(function() {
				$(".se-pre-con").fadeOut("slow");;
			});
		</script>
<div class="ui basic modal" style="margin-top:-110px">
<i class="close icon"></i>
<div class="header">
Servicing Details
</div>
<div style="margin-left:30%">
<ul>
<li>
Oil Change - <b>220RS</b>
</li>
</ul>
</div>
</div>
</body>

<!-- Mirrored from www.gadiservicingwale.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Mar 2017 17:09:59 GMT -->
</html>