<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event mangment system  </title>

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
				<h2>Event</h2>
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
	.collection-banner {
    padding: 50px 0;
  }
  .collection-banner .collection-title {
    text-align: center;
    font-size: 35px;
    font-weight: 600px;
    font-family: "montserrat",sans-serif;
    line-height: 1.2em;
  }
  
  .collection-banner .collection-wrapper {
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
  }
  
  .collection-banner .collection-wrapper .event-block {
    max-width: calc(25% - 15px);
    width: 100%;
    border: 1px solid #f2f2f2;
    border-radius: 15px;
    transition: all 0.3s linear;
  }
  .collection-banner .collection-wrapper .event-block:hover {
    transform: scale(1.1);
    transition: all 0.3s linear;
  }
  .collection-banner .collection-wrapper .event-block .event-image img {
    height: 100%;
    max-height: 330px;
    width: 100%;
    min-height: 330px;
    object-fit: cover;
  }
  .collection-banner .collection-wrapper .event-block .event-info {
    background: #F2F2F2;
    padding: 20px;
    border-radius: 0 0 15px 15px;
  }
  .has-bg-img .image-wrapper {
    display: flex;
  }
  .has-bg-img .image-wrapper .image-left-block {
    max-width: 55%;
    width: 100%;
  }
  .has-bg-img .image-wrapper .image-right-block {
    max-width: 45%;
    width: 100%;
  }
  .has-bg-img .image-wrapper .image-left-block img,
  .has-bg-img .image-wrapper .image-right-block img {
    height: 100%;
  }
  
  .event-button-content-wrapper {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}
  .event-widget-container {
      position: relative;
      margin-bottom: 20px;
  }

.event-widget-container .event-widget-conetnt {
  position: absolute;
  top: 50%;
  color: #fff;
  left: 100px;
  transform: translateY(-50%);
  z-index: 1;
}

.event-widget-container .elementor-background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: 0.4;
}
.event-button-content-wrapper{
    font-size: 18px;
    color: white;
    padding: 10px 30px 10px 30px;
    border-radius: 20px;
    background: linear-gradient(to right, #08a9df, #56479b);
    border: 0px;
  }
  </style>
  </head>
  <body>

  <div class="collection-banner">
      <div class="collection-wrapper">
        <div class="event-block">
          <div class="event-image">
            <img src="../obbs/eventimage/cor image 1.jpg">
          </div>
          <div class="event-info">
            <h3>Corporate </h3>
            <p> A conference is a meeting, often lasting a few days, which is organized on a particular subject, or to
            bringtogether people who have a common interest.</p>
           
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="../obbs/eventimage/music image 6.jpeg">
          </div>
          <div class="event-info">
            <h3>Music & Entertainment</h3>
            <p> Music is a form of art that uses sound organised in time.
             Music is also a form of entertainment that puts sounds together in a way that people like, find interesting or dance to.
          </p>
         
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="../obbs/eventimage/birthday image.jpg">
          </div>
          <div class="event-info">
            <h3>Party</h3>
            <p>  Lorem ipsum dollor site amet the best consectuer diam nerdistin adipiscing elites 
            sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...........
          </p>
        
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
          <img src="../obbs/eventimage/seminar image 7.jpg" alt="">
          </div>
          <div class="event-info">
            <h3>Seminnar </h3>
           <p>A seminar is a gathering of people who discuss a specific topic. 
            Seminars are often interactive and can be educational or professional in nature. 
             </p>
           
           
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="../obbs/eventimage/art image 4.jpg">
          </div>
          <div class="event-info">
            <h3>Art & Culture</h3>
            <p>Art and Culture refer to a belief or practice followed by a group of people for such a long period that it
               has gained dominance and represents itself as a culture or art for the whole community associated with it.</p>
          
          </div>
        </div>
        <div class="event-block">
          <div class="event-image">
            <img src="../obbs/eventimage/con 3.jpg">
          </div>
          <div class="event-info">
            <h3>Wedding</h3>
            <p> In as superheroes, swooping in to save the day and take care of everything from venue selection to vendor management,
               budget management to design and décor, timeline management to coordination, and post-wedding ceremony to honeymoon packages on the big day and occasions. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  </body>
  </html>
	<!-- //banner -->
	 
	<!-- about-top -->

	<div class="about-top">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				
				<p class="wow fadeInUp animated" data-wow-delay=".5s">List of event booking details.</p>
					<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Event Name</th>
									<th>Description</th>
									<th>Price</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
								<?php
$sql="SELECT * from tblservice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
								
								<tr>
									<td><?php echo htmlentities($cnt);?></td>
									<td><?php  echo htmlentities($row->ServiceName);?></td>
									<td><?php  echo htmlentities($row->SerDes);?></td>
									<td>Rs.<?php  echo htmlentities($row->ServicePrice);?></td>
									<?php if($_SESSION['obbsuid']==""){?>
									<td><a href="login.php" class="btn btn-default">Book Event</a></td>
									<?php } else {?>
									<td><a href="book-services.php?bookid=<?php echo $row->ID;?>" class="btn btn-default">Book Event</a></td><?php }?>
								</tr> <?php $cnt=$cnt+1;}} ?>
							</tbody>
						</table>
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