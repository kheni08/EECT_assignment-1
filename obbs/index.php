<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Management System </title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 


<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
		<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
				<h2>Event Management System</h2>
			</div>
		</div>
	</div>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>event website</title>
  
<style>
/* friendly itm balloon about */
friendli item 
.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 992px) {
.col-lg-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}
}
@media (min-width: 576px) {
.col-sm-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}
}
.section-title .big-title strong {
  font-weight: 900;
}


section#about-section2 {
  padding-bottom: 100px;
}

.about-section2 .services-list ul li a .icon {
  z-index: 1;
  float: left;
  width: 80px;
  height: 60px;
  position: relative;
  border-radius: 5px;
  text-align: center;
  margin-right: 30px;
  font-size: 36px;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #f7f7f7;
  border-left: 3px solid #f7f7f7;
  border-right: 3px solid #f7f7f7;
  display: flex;
  align-items: center;
  justify-content: center;
}
.small, small {
  font-size: 80%;
  font-weight: 400;
}
.about-section2 .section-pragraph {
  margin: 0px;
  line-height: 30px;
  color: #333333;
}
.section-pragraph-text-left {
  text-align: left!important;
}
.section-title .big-title {
  margin: 0px;
  padding: 0px;
  font-size: 48px;
  font-weight: 400;
  color: #333333;
}
.section-title {
  position: relative;
}
.section-title .line-style {
  z-index: 1;
  top: -30px;
  left: -30px;
  width: 70px;
  height: 3px;
  position: absolute;
  background-color: #ffbe30;
}
.strong, span, small, i {
  line-height: normal;
  display: inline-block;
}
a, button {
  border: none;
  cursor: pointer;
  background: none;
  text-decoration: none;
  display: inline-block;
}
p {
  display: block;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  unicode-bidi: isolate;
}
.about-section2 .section-pragraph {
  line-height: 30px;
}

.about-section2 .services-list {
  margin-top: 30px;
}

.about-section2 .services-list li .icon svg.icon-baloon {
  width: 60px;
  height: 60px;
}

.about-section2 .services-list ul li a .icon:before {
  top: -22px;
  left: -59px;
  width: 51px;
  content: '';
  z-index: -1;
  height: 51px;
  position: absolute;
  border-radius: 8px;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #f7f7f7;
  border-top: 3px solid #f7f7f7;
  border-left: 3px solid #f7f7f7;
  -webkit-transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
  -ms-transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
  transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
}

.about-section2 .services-list ul li a .icon:after {
  content: '';
  left: -59px;
  width: 51px;
  z-index: -1;
  height: 51px;
  bottom: -22px;
  position: absolute;
  border-radius: 8px;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #f7f7f7;
  border-right: 3px solid #f7f7f7;
  border-bottom: 3px solid #f7f7f7;
  -webkit-transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
  -ms-transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
  transform: scale(1) rotate(45deg) translateX(50px) translateY(-50px) skewX(-10deg) skewY(-10deg);
}

.about-section2 .services-list ul {
  width: 100%;
  margin: 0px;
  padding: 0px;
  display: table;
  border-top: 1px solid #f0f0f0;
  border-left: 1px solid #f0f0f0;
}

.about-section2 .services-list li {
  float: left;
  width: 33.333%;
  display: inline-block;
  border-right: 1px solid #f0f0f0;
  border-bottom: 1px solid #f0f0f0;
}

.about-section2 .services-list ul li a {
  z-index: 1;
  width: 100%;
  height: 100%;
  display: table;
  padding: 50px 40px;
  position: relative;
  background-color: #ffffff;
}

   /* gallery */

 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

h2.page-heading{
  text-align: center;
  font-size: 30px;
  margin: 15px;
}

h5.section-heading {
  margin: 20px 30px;
}

.gallery {
  margin: 30px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1.5rem;
  grid-auto-flow: dense;
}

.gallery .image img{
  width: 100%;
  max-width: 100%;
  height: 280px;
  object-fit: cover;
  border-radius: 10px;
  vertical-align: middle;
}

.gallery .section-video video {
  border-radius: 10px;
  vertical-align: middle;
 position: relative;
  object-fit: cover;
}
.breadcrumb-section .breadcrumb-list ul .breadcrumb-item:last-child {
  margin-right: 0px;
  padding-right: 0px;
}
.breadcrumb-section .breadcrumb-list ul .breadcrumb-item {
 
  list-style: none;
  position: relative;
  margin-right: 30px;
  padding-right: 30px;
  color: #F2F2F2;
  display: inline-block;
  text-transform: capitalize;
  text-align: center;
}
.breadcrumb-section .breadcrumb-list ul .breadcrumb-item .breadcrumb-link {
  font-weight: 700;
  color: #ffffff;
  text-transform: capitalize;
}


/* service-section */

.service-section {
  padding: 50px 0px 0;
}

.service-section .service-item {
  display: flex;
}

.service-section .service-item .service-image {
  width: 48%;
  position: relative;
  padding-right: 70px;
  padding-bottom: 70px;
  float: left;
  
}

.service-section .service-item .service-image .big-image {
  overflow: hidden;
  border-radius: 3px;
  -webkit-box-shadow: 0px 0px 60px 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 0px 60px 3px rgba(0, 0, 0, 0.2);
}

.service-section .service-item .service-image .big-image img {
  max-width: 100%;
  vertical-align: middle;
  width: 100%;
}

.service-section .service-item .service-content {
  width: 52%;
  padding: 30px 30px;
  float: right;
}

.service-section .service-item .service-content .service-title {
  padding-bottom: 30px;
  border-bottom: 1px solid #f0f0f0;
  margin-bottom: 30px;
}

.service-section .service-item .service-content .service-title .title-text {
  font-weight: 700;
  font-size: 30px;
  color: #333333;
  text-transform: capitalize;
  line-height: 1.2;
  margin-bottom: .5rem;
}

.service-section .service-item .service-content .service-title .service-price {
  font-weight: 900;
  color: #ffbe30;
  line-height: normal;
  display: inline-block;
  word-spacing: 2px;
  letter-spacing: .6px;
  font-size: 16px;
}

.service-section .service-item .service-content .service-description {
  color: #333333;
  margin-bottom: 30px;
  word-spacing: 2px;
  letter-spacing: .6px;
  font-size: 16px;
}

.service-section .service-item .service-content .service-type-list {
  margin-bottom: 50px;
}

.service-section .service-item .service-content .service-type-list ul {
  width: 100%;
  margin: 0px;
  padding: 0px;
  display: table;
}

.service-section .service-item .service-content .service-type-list ul li {
  width: 50%;
  float: left;
  list-style: none;
  font-weight: 700;
  margin-bottom: 5px;
  padding-right: 15px;
  color: #333333;
  display: inline-block;
  font-size: 14px;
  text-transform: uppercase;
  word-spacing: 2px;
  letter-spacing: .6px;
  text-align: left;
}

.service-section .service-item .service-content .service-type-list ul li .service-type-icon {
  width: 30px;
  height: 30px;
  line-height: 30px;
  margin-right: 5px;
  text-align: center;
  color: #ffffff;
  border-radius: 100%;
  font-size: 14px;
  background-color: #ffbe30;
  display: inline-block;
}

.service-section .service-item .service-content .section-title {
  position: relative;
  margin-bottom: 50px;
}

.service-section .service-item .service-content .section-title .line-style {
  z-index: 1;
  top: -30px;
  left: -30px;
  width: 70px;
  height: 3px;
  position: absolute;
  background-color: #ffbe30;
}

.service-section .service-item .service-content .section-title .sub-title {
  margin-bottom: 15px;
  letter-spacing: 5px;
  color: #878787;
  font-size: 18px;
  text-transform: uppercase;
}

.service-section .service-item .service-content .section-title .big-title {
  margin: 0px;
  padding: 0px;
  font-size: 48px;
  font-weight: 400;
  color: #333333;
  text-transform: capitalize;
}

.service-section .service-item .service-content .event-title {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #f0f0f0;
}

.service-section .service-item .service-content .event-title .tag {
  font-weight: 900;
  margin-bottom: 15px;
  color: #333333;
  font-size: 16px;
  display: inline-block;
}

.service-section .service-item .service-content .event-title .tag i {
  color: #ffbe30;
}

.service-section .service-item .service-content .event-title .title-text {
  font-weight: 400;
  font-size: 30px;
  text-transform: capitalize;
  line-height: 1.2;
}

.service-section .service-item .service-content .event-title .sub-title {
  font-weight: 700;
  color: #ffbe30;
  word-spacing: 2px;
  letter-spacing: .6px;
  font-size: 16px;
}

.service-section.event-service-section .service-item .service-content .service-type-list ul li {
  width: 100%;
  display: block;
  color: #878787;
  font-weight: 400;
}
  
.image img, .section-video video { width: 100%; height: 100%; }
        .popup { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; }
        .popup-content { position: relative; max-width: 80%; max-height: 80%; }
        .popup img, .popup video { width: 100%; height: auto; border-radius: 5px; }
        .close, .prev, .next { position: absolute; top: 50%; transform: translateY(-50%); background: white; padding: 10px; cursor: pointer; border-radius: 5px; }
        .close { top: 10px; right: 10px; border-radius: 50%; }
        .prev { left: 10px; }
        .next { right: 10px; }

</style>
</head>

<body>
  
  
              
   
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000); // Change image every 3 seconds
    }
  </script>
   </div>
   <section id="about-section2" class="about-section2 sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">
   <div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-pragraph-text-left">
								<p>
									An ECommerce company is an online business that specializes in selling goods or services over the internet
                  . It is a type of digital commerce that involves the exchange of goods and services between customers and businesses through the use of the internet. 
                 </p>
							</div>
						</div>
						<!-- section-pragraph - end -->

						<!-- section-title - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<h1 class="sub-title">we are Event </h1>
								<h2 class="big-title"><strong>No.1</strong> Events Management</h2>
							</div>
						</div>
						<!-- section-title - end -->

					</div>
				</div>

				<div class="services-list">
					<ul>

						<li>
							<a href="#!">
								<span class="icon"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ee792b" d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48 0 224 28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16L0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-80 0zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-208c0-8.8-7.2-16-16-16l-80 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"/></svg>
                </span>
								<strong class="title-text">friendly team</strong>
								<small class="sub-title">more than 200 teams</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
                <svg class="icon-baloon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ee792b" version="1.1" id="Capa_1" width="800px" height="800px" viewBox="0 0 30.333 30.333" xml:space="preserve">
                  <g>
                    <g>
                      <g>
                        <path d="M22.536,25.234c-0.742-0.429-1.586-0.914-2.424-1.699c-1.533-1.435-1.639-3.874-1.55-5.287h1.062     c0.59,0,0.994-0.598,0.773-1.146l-0.962-2.393h-2.969l-0.962,2.393c-0.221,0.55,0.184,1.146,0.775,1.146h0.772     c-0.097,1.699,0.081,4.559,2.03,6.383c0.965,0.902,1.888,1.435,2.699,1.903c1.432,0.827,2.221,1.282,2.4,3.122     c0.037,0.388,0.362,0.677,0.744,0.677c0.024,0,0.05-0.001,0.073-0.003c0.412-0.041,0.715-0.407,0.674-0.819     C25.425,26.902,24.022,26.092,22.536,25.234z"/>
                        <path d="M12.914,21.889l-0.962-2.393H8.984l-0.963,2.393c-0.221,0.55,0.184,1.146,0.775,1.146h0.773     c-0.097,1.699,0.082,4.559,2.031,6.383c0.145,0.135,0.329,0.202,0.513,0.202c0.2,0,0.4-0.08,0.548-0.238     c0.283-0.302,0.267-0.775-0.035-1.06c-1.534-1.435-1.639-3.874-1.55-5.287h1.063C12.732,23.035,13.135,22.438,12.914,21.889z"/>
                        <path d="M11.141,6.732c0-0.642,0.076-1.263,0.207-1.86c-0.288-0.051-0.58-0.085-0.88-0.085c-3.21,0-5.813,3.014-5.813,6.732     c0,3.718,2.603,6.731,5.813,6.731c2.427,0,4.504-1.725,5.375-4.171C13.116,13.068,11.141,10.159,11.141,6.732z M9.504,8.584     c-0.789,0-1.432,0.803-1.432,1.791c0,0.552-0.447,1-1,1s-1-0.448-1-1c0-2.09,1.539-3.791,3.432-3.791c0.553,0,1,0.448,1,1     C10.504,8.136,10.057,8.584,9.504,8.584z"/>
                        <path d="M17.954,13.463c3.209,0,5.813-3.014,5.813-6.731C23.768,3.014,21.163,0,17.954,0c-3.21,0-5.813,3.014-5.813,6.732     C12.141,10.45,14.743,13.463,17.954,13.463z M17.447,1.405c0.554,0,1,0.448,1,1c0,0.552-0.446,1-1,1     c-0.789,0-1.433,0.803-1.433,1.791c0,0.552-0.446,1-1,1c-0.553,0-1-0.448-1-1C14.016,3.105,15.555,1.405,17.447,1.405z"/>
                      </g>
                    </g>
                  </g>
                  </svg>
								</span>
								<strong class="title-text">perfect venues</strong>
								<small class="sub-title">the best & perfect venues</small>
							</a>
						</li>
						<li>
							<a href="#!"> 
								<span class="icon">
                <svg class="icon-cheers" xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ee792b" d="M155.6 17.3C163 3 179.9-3.6 195 1.9L320 47.5l125-45.6c15.1-5.5 32 1.1 39.4 15.4l78.8 152.9c28.8 55.8 10.3 122.3-38.5 156.6L556.1 413l41-15c16.6-6 35 2.5 41 19.1s-2.5 35-19.1 41l-71.1 25.9L476.8 510c-16.6 6.1-35-2.5-41-19.1s2.5-35 19.1-41l41-15-31.3-86.2c-59.4 5.2-116.2-34-130-95.2L320 188.8l-14.6 64.7c-13.8 61.3-70.6 100.4-130 95.2l-31.3 86.2 41 15c16.6 6 25.2 24.4 19.1 41s-24.4 25.2-41 19.1L92.2 484.1 21.1 458.2c-16.6-6.1-25.2-24.4-19.1-41s24.4-25.2 41-19.1l41 15 31.3-86.2C66.5 292.5 48.1 226 76.9 170.2L155.6 17.3zm44 54.4l-27.2 52.8L261.6 157l13.1-57.9L199.6 71.7zm240.9 0L365.4 99.1 378.5 157l89.2-32.5L440.5 71.7z"/></svg>
                </span>
								<strong class="title-text">Unique Scenario</strong>
								<small class="sub-title">We make out of the box</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
								<svg  calss="icon-time" xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ee792b" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
								</span>
								<strong class="title-text">Unforget Time</strong>
								<small class="sub-title">the best & perfect venues</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
                <svg class="icon-phone" xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ee792b" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
              </span>
								<strong class="title-text">24/7H. Supports</strong>
								<small class="sub-title">anytime anywhere</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#ee792b" d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"/></svg>
								</span>
								<strong class="title-text">New&Briliant Idea</strong>
								<small class="sub-title">we have million ideas</small>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</section>
   <div class="service-section event-service-section">
    <div class="container">
      <div class="service-item">
        <div class="service-image">
          <div class="big-image">
          <img src="../obbs/eventimage/HOLI IMAGE.jpg" alt="">
          </div>
        </div>
        <div class="service-content">
          <div class="section-title">
            <span class="line-style"></span>
            <small class="sub-title">our latest event</small>
            <h2 class="big-title"><strong>our upcoming</strong> Events</h2>
          </div>
          <div class="event-title">
            <small class="tag">
              <i class="fas fa-bookmark"></i>
              Featured Event
            </small>
            <h3 class="title-text">RANG RAGER <strong>Holi Festival</strong></h3>
            <span class="sub-title">Tickets start from 666.00 Rs</span>
          </div>
          <p class="service-description">
          Holi is a sacred ancient tradition of Hindus,
         a holiday in many states of India and Nepal with regional holidays in other countries.
          </p>
          <div class="service-type-list">
            <ul>
              <li>
                <span class="service-type-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                  <path fill="#f1f2f3" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                </span>
                Start 9:00 Pm TO 5:00Pm
              </li>
              <li>
                <span class="service-type-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#f5f7fa" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                
                </span>
                SURAT
              </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
              
    
    
 
  <div class="home-service-content">
          <div class="section-title"><center>
            <span class="line-style"></span>
            <small class="sub-title"> </small>
            <h2 class="big-title"><strong>Beautiful & Unforgettable Times</strong></h2> </center>
          </div>
  <div class="container">
    <div class="button-group filter-button-group">
    <center>
   <H2>OUR GALLERY</B></H2>
   <H3>All PHOTOS & VIDEOS</B></H3>
   </center>
 </div>
 <div class="gallery">
        <div class="image"><img src="../obbs/eventimage/art image 5.jpg" alt=""></div>

        <div class="section-video"><video src="../obbs/eventimage/Ugandan Wedding Decor Of H&V.mp4" autoplay muted></video></div>
       
        <div class="image"><img src="../obbs/eventimage/cor image 2.jpg" alt=""></div>

        <div class="image"><img src="../obbs/eventimage/music image 5.jpg" alt=""></div>
      
        <div class="image"><img src="../obbs/eventimage/bus image 1.jpg" alt=""></div>

       <div class="image"><img src="../obbs/eventimage/birthday2 image.jpg" alt=""></div>

       <div class="image"><img src="../obbs/eventimage/image 101.jpg" alt=""></div>

        <div class="section-video"><video src="../obbs/eventimage/production_id_3918375 (2160p).mp4" autoplay muted></video></div>
       
       <div class="image"><img src="../obbs/eventimage/art image 2.jpg" alt=""></div>
    
    </div>
    
    <div class="popup">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <div class="popup-content"></div>
        <span class="next">&#10095;</span>
    </div>
       <script>
        const galleryItems = document.querySelectorAll('.gallery .image img, .gallery .section-video video');
        const popup = document.querySelector('.popup');
        const popupContent = document.querySelector('.popup-content');
        const closeBtn = document.querySelector('.close');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let currentIndex = 0;

        function showPopup(index) {
            popupContent.innerHTML = '';
            let clonedItem = galleryItems[index].cloneNode(true);
            clonedItem.controls = clonedItem.tagName === 'VIDEO';
            popupContent.appendChild(clonedItem);
            popup.style.display = 'flex';
            currentIndex = index;
        }

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => showPopup(index));
        });

        closeBtn.addEventListener('click', () => { popup.style.display = 'none'; });
        prevBtn.addEventListener('click', () => showPopup((currentIndex - 1 + galleryItems.length) % galleryItems.length));
        nextBtn.addEventListener('click', () => showPopup((currentIndex + 1) % galleryItems.length));
    </script>
      
 <!----map start---->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Maps Embeds</title>
  <style>
    /* Reset some default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* General body styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    /* Container to hold the map section */
    

    /* Styling for each map container */
    
    /* Responsive Design: stack maps vertically on smaller screens */
    @media screen and (max-width: 768px) {
      .get_row1_col2 {
        width: 100%; /* Stack the maps vertically */
      }
    }

    /* Ensure that iframes fill the container */
    iframe {
      width: 100%;
      height: 300px;
      border: 0;
    }
  </style>
</head>
<body>

  <div class="map-wrapper">

    <!-- First Map -->
    <div class="get_row1_col2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29749.22512403347!2d72.86179987357364!3d21.245598798551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1738856758684!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    

  </div>

</body>
</html>
  <?php
include('includes/footer.php');
?>
</body>

</html>