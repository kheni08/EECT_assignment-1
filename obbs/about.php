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
				<h2>About Us</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	
	
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<h4><?php  echo htmlentities($row->PageTitle);?></h4>
						<p><?php  echo $row->PageDescription;?></p><?php $cnt=$cnt+1;}} ?>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-top -->
	
	<!-- //about -->
	<!-- footer -->
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>
		
</body>	
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Service</title>
  <style>
    /* Reset some default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* General Body Styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    /* Main Container */
    .about_main {
      width: 80%;
      margin: 0 auto;
    }

    /* About Row Styling */
    .about_row1,
    .about_row2 {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
	  background: rgb(205, 175, 175);
    }

    /* Column Styles */
    .about_row1_col1, .about_row2_col1 {
      width: 48%;
    }

    .about_row1_col2, .about_row2_col2 {
      width: 48%;
    }

    .about_row1_col1 img, .about_row2_col2 img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    /* Title Styling */
    h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 15px;
    }

    /* Paragraph Styling */
    p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }

    /* Add some space between rows */
    .about_row1,
    .about_row2 {
      margin-bottom: 30px;
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
      .about_row1,
      .about_row2 {
        flex-direction: column;
      }

      .about_row1_col1, .about_row2_col1,
      .about_row1_col2, .about_row2_col2 {
        width: 100%;
        margin-bottom: 20px;
      }

      h2 {
        font-size: 22px;
      }

      p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <div class="about_main">

    <!-- About Row 1 -->
    <div class="about_row1">
      <div class="about_row1_col1">
        <img src="..\obbs\eventimage\chair image 1.jpg" alt="Chair Image">
      </div>
      <div class="about_row1_col2">
        <h2>Our Story in Slices</h2>
        <p>
          It all started in the year of 2011, a young Gujrathi couple from Canada who came to learn yoga in Cannanore,
          asked for our hotel to help them with the wedding catering (Oh yes! Our family is a bunch of hoteliers for ages now)
          and also wanted assistance with décor & the game began! – Sravani & Venkatesh
        </p>
      </div>
    </div>

    <!-- About Row 2 -->
    <div class="about_row2">
      <div class="about_row2_col1">
        <h2>Corporate Catering</h2>
        <p>
          If you work in administration, you may have been tasked with ordering food for your office at some point.
          The service of providing food for a company’s employees is referred to as corporate catering.
        </p>
      </div>
      <div class="about_row2_col2">
        <img src="../obbs/eventimage/image 2.jpg" alt="Corporate Catering Image">
      </div>
    </div>

    <!-- About Row 3 -->
    <div class="about_row1">
      <div class="about_row1_col1">
        <img src="../obbs/eventimage/FLOWER IMAGE1.jpg" alt="Flower Decoration">
      </div>
      <div class="about_row1_col2">
        <h2>Flower Decoration</h2>
        <p>
          Ideal for outdoor event spaces, flower arches and arbors are the perfect statement décor.
          They’re also a wonderful frame for guest photos. Again, these arrangements are on the pricier end of the scale.
        </p>
      </div>
    </div>

    <!-- About Row 4 -->
    <div class="about_row2">
      <div class="about_row2_col1">
        <h2>DJ Parties</h2>
        <p>
          DJs add a modern touch to traditional weddings by blending cultural songs with contemporary hits,
          creating a lively dance floor.
        </p>
      </div>
      <div class="about_row2_col2">
        <img src="../obbs/eventimage/dj party image 1.jpg" alt="DJ Party Image">
      </div>
    </div>

    <!-- About Row 5 -->
    <div class="about_row1">
      <div class="about_row1_col1">
        <img src="../obbs/eventimage/event image 8.jpg" alt="Event Catering">
      </div>
      <div class="about_row1_col2">
        <h2>Catering Services: Exploring Delicious Cuisine, Costs, and Menu Options</h2>
        <p>
          In event catering services have become increasingly important for weddings and other events.
          Nowadays, many people prefer to host their events either at their homes or nearby wedding halls with tents.
        </p>
      </div>
    </div>

  </div>

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


</body>
</html>
<?php
include('includes/footer.php');
?>