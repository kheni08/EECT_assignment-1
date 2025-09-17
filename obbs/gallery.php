<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Evenet Management System</title>

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
				<h2>Gallery</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->

<!DOCTYPE html>
<html lang="en">
<head>
 
</head>

<body>
 
    
    <div class="elementor-background-overlay"></div>
  </div>
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
<style>
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

      
        .image img, .section-video video { width: 100%; height: 100%; }
        .popup { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center; }
        .popup-content { position: relative; max-width: 80%; max-height: 80%; }
        .popup img, .popup video { width: 100%; height: auto; border-radius: 5px; }
        .close, .prev, .next { position: absolute; top: 50%; transform: translateY(-50%); background: white; padding: 10px; cursor: pointer; border-radius: 5px; }
        .close { top: 10px; right: 10px; border-radius: 50%; }
        .prev { left: 10px; }
        .next { right: 10px; }
   
</style>
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
        <div class="image"><img src="../obbs/eventimage/birthday2 image.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/image 101.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/bus image 1.jpg" alt=""></div>
        <div class="section-video"><video src="../obbs/eventimage/Ugandan Wedding Decor Of H&V.mp4" autoplay muted></video></div>
        <div class="image"><img src="../obbs/eventimage/cor image 2.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/music image 5.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/art image 2.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/birthday image 1.jpg" alt=""></div>
        <div class="image"><img src="../obbs/eventimage/event image 10.jpg" alt=""></div>
        <div class="section-video"><video src="../obbs/eventimage/production_id_3918375 (2160p).mp4" autoplay muted></video></div>
        <div class="image"><img src="../obbs/eventimage/cor image 6.jpg" alt=""></div>
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

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
        }
        .footer {
            background: #fff;
            padding: 40px 0;
            text-align: center;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: auto;
        }
        .footer-column {
            margin: 20px;
            text-align: left;
        }
        .footer-column h3 {
            margin-bottom: 10px;
        }
        .footer-column ul {
            list-style: none;
        }
        .footer-column ul li {
            margin: 5px 0;
        }
        .footer-column ul li a {
            color: #000;
            text-decoration: none;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
        }
        .contact-info p {
            margin: 5px 0;
        }
        .social-icons {
            margin: 20px 0;
        }
        .social-icons a {
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
            color: #000;
        }
        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Event</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="mail.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Birthday Party</a></li>
                    <li><a href="#">Seminar</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Art & Culture</a></li>
                    <li><a href="#">Music & Entertainment</a></li>
                    <li><a href="#">wedding</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Other Links</h3>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Privacy & Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <p>📍 1002 West 5th Ave, Alaska, Surat, 55060</p>
                    <p>📞 +918590010011</p>
                    <p>✉ eventmanagement@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="social-icons">
        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
    <path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
    <path d="M282 256.2l-95.2-54.1V310.3L282 256.2zM384 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm14.4 136.1c7.6 28.6 7.6 88.2 7.6 88.2s0 59.6-7.6 88.1c-4.2 15.8-16.5 27.7-32.2 31.9C337.9 384 224 384 224 384s-113.9 0-142.2-7.6c-15.7-4.2-28-16.1-32.2-31.9C42 315.9 42 256.3 42 256.3s0-59.7 7.6-88.2c4.2-15.8 16.5-28.2 32.2-32.4C110.1 128 224 128 224 128s113.9 0 142.2 7.7c15.7 4.2 28 16.6 32.2 32.4z"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM351.3 199.3v0c0 86.7-66 186.6-186.6 186.6c-37.2 0-71.7-10.8-100.7-29.4c5.3 .6 10.4 .8 15.8 .8c30.7 0 58.9-10.4 81.4-28c-28.8-.6-53-19.5-61.3-45.5c10.1 1.5 19.2 1.5 29.6-1.2c-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3c-9-6-16.4-14.1-21.5-23.6s-7.8-20.2-7.7-31c0-12.2 3.2-23.4 8.9-33.1c32.3 39.8 80.8 65.8 135.2 68.6c-9.3-44.5 24-80.6 64-80.6c18.9 0 35.9 7.9 47.9 20.7c14.8-2.8 29-8.3 41.6-15.8c-4.9 15.2-15.2 28-28.8 36.1c13.2-1.4 26-5.1 37.8-10.2c-8.9 13.1-20.1 24.7-32.9 34c.2 2.8 .2 5.7 .2 8.5z"/></svg> 
      </div>
        </div>
         <!-- footer-top - end -->

			<div class="footer-bottom">
				<div class="container">
					<div class="row">

						<!-- copyright-text - start -->
						<div class="col-lg-7 col-md-12 col-sm-12">
							<div class="copyright-text">
								<p class="m-0" style="color:#EDB525;">©2024 EMS all right reserved, made with by EMS</p>
							</div>
						</div>
						<!-- copyright-text - end -->
    </footer>
    </footer>
</body>
</html>
