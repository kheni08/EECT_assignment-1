  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>event website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
    rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="website.css">

</head>

<body>
  
  <div class="event-widget-container">
    <div class="event-widget-conetnt">
      <h1 class="event-heading-title event-size-default"> </h1>
      <h1 class="w-100% text-center site-title px-5"><?php echo $_settings->info('name') ?></h1>
    <button class="btn btn-lg btn-default bg-gradient-maroon border-0 rounded-pill px-4 w-25" id="book_now">Book Now!</button>
    </div>
              
    <div class="sild show sild section">
      <img class="mySlides" src="./event  image/image 7.jpg">
      <img class="mySlides" src="./event  image/image 2.jpg">
      <img class="mySlides" src="./event  image/image 3.jpeg">
      <img class="mySlides" src="./event  image/music image.jpg">
      <img class="mySlides" src="./event  image/image 101.jpg">
    </div>
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
   </div>
   <section id="about-section2" class="about-section2 sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">
   <div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-pragraph-text-left">
								<p>
									An eCommerce company is an online business that specializes in selling goods or services over the internet
                  . It is a type of digital commerce that involves the exchange of goods and services between customers and businesses through the use of the internet. 
								</p>
							</div>
						</div>
						<!-- section-pragraph - end -->

						<!-- section-title - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<small class="sub-title">we are Event </small>
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
                <i class="fa-solid fa-handshake fa-lg" style="color: #ee792b;"></i>
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
                <i class="fa-solid fa-champagne-glasses fa-lg" style="color: #ee792b;"></i>
								</span>
								<strong class="title-text">Unique Scenario</strong>
								<small class="sub-title">We make out of the box</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
								<i class="fa-solid fa-clock fa-lg" style="color: #ee792b;"></i>
								</span>
								<strong class="title-text">Unforget Time</strong>
								<small class="sub-title">the best & perfect venues</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
                <i class="fa-solid fa-phone-volume fa-lg" style="color: #ee792b;"></i>
								</span>
								<strong class="title-text">24/7H. Supports</strong>
								<small class="sub-title">anytime anywhere</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
                <i class="fa-solid fa-lightbulb fa-lg"style="color: #ee792b;"></i>
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
          <img src="./event  image/HOLI IMAGE.jpg" alt="">
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
                  <i class="fa-solid fa-clock"></i>
                </span>
                Start 9:00 Pm TO 5:00Pm
              </li>
              <li>
                <span class="service-type-icon">
                <i class="fa-solid fa-location-dot"></i>
                </span>
                SURAT
              </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
              
    
    
  <div class="collection-banner">
    <div class="collection-title">
      <h2>Services By Event Management</h2>
    </div>
    <div class="collection-banner">
      <div class="collection-wrapper">
        <div class="event-block">
          <div class="event-image">
            <img src="./event  image/cor image 1.jpg">
          </div>
          <div class="event-info">
            <h5>Corporate Event Management</h5>
            <p> A conference is a meeting, often lasting a few days, which is organized on a particular subject, or to
            bringtogether people who have a common interest.</p>
            <span class="event-button-content-wrapper">
              <span class="event-button-text"><a href="conference.html" target="_blank">Learn More</a></span>
              <span class="event-button-icon">
                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
              </span>
            </span>
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="./event  image/music image 6.jpeg">
          </div>
          <div class="event-info">
            <h5>Music & Entertainment</h5>
            <p> Music is a form of art that uses sound organised in time.
             Music is also a form of entertainment that puts sounds together in a way that people like, find interesting or dance to.
          </p>
            <span class="event-button-content-wrapper">
            

              <span class="event-button-text"><a href="" target="_blank">Learn More</a></span>
              <span class="event-button-icon">
                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
              </span>
            </span>
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="./event  image/birthday image.jpg">
          </div>
          <div class="event-info">
            <h5>Party</h5>
            <p>  Lorem ipsum dollor site amet the best consectuer diam nerdistin adipiscing elites 
            sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...........
          </p>
            <span class="event-button-content-wrapper">
              <span class="event-button-text"><a href="party.html" target="_blank">Learn More</a></span>
              <span class="event-button-icon">
                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
              </span>
            </span>
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
          <img src="event  image/seminar image 7.jpg" alt="">
          </div>
          <div class="event-info">
            <h5>Seminnar </h5>
           <p>A seminar is a gathering of people who discuss a specific topic. 
            Seminars are often interactive and can be educational or professional in nature. 
             </p>
            <span class="event-button-content-wrapper">
              <span class="event-button-text"><a href="seminar.html" target="_blank">Learn More</a></span>
              <span class="event-button-icon">
                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
              </span>
            </span>
          </div>
        </div>

        <div class="event-block">
          <div class="event-image">
            <img src="./event  image/art image 4.jpg">
          </div>
          <div class="event-info">
            <h5>Art & Culture</h5>
            <p>Art and Culture refer to a belief or practice followed by a group of people for such a long period that it
               has gained dominance and represents itself as a culture or art for the whole community associated with it.</p>
            <span class="event-button-content-wrapper">
              <span class="event-button-text"><a href="" target="_blank">Learn More</a></span>
              <span class="event-button-icon">
                <i aria-hidden="true" class="fas fa-angle-double-right"></i>
              </span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="home-service-content">
          <div class="section-title">
            <span class="line-style"></span>
            <small class="sub-title"> gallery</small>
            <h2 class="big-title"><strong>Beautiful & Unforgettable Times</strong></h2>
          </div>
  <div class="container">
    <div class="button-group filter-button-group">
   <button class="btn " data-filter="*"><H2><B>OUR GALLERY</B></H2></button>
   <button class="btn " data-filter="*">All Gallery</button>
  
 </div>
  <div class="gallery">
      <div class="image">
          <img src="./event  image/art image 5.jpg" alt="">
      </div>
      <div class="image">
        <img src="./event  image/birthday2 image.jpg" alt="">
    </div>

      <div class="image">
          <img src="./event  image/image 101.jpg" alt="">
      </div>
      
    <div class="image">
      <img src="./event  image/bus image 1.jpg" alt="">
      </div>

      <div class="section-video">
        <video src="./event  image/Ugandan Wedding Decor Of H&V.mp4" autoplay muted></video>
        </div>

     <div class="image">
      <img src="./event  image/cor image 2.jpg" alt="">
      </div>

        <div class="image">
          <img src="./event  image/music image 5.jpg" alt="">
          </div>
          <div class="image">
          <img src="./event  image/birthday image 1.jpg" alt="">
          </div>

          <div class="image">
            <img src="./event  image/event image 10.jpg" alt="">
            </div>
  </div>

<div class="map-wrapper">
  <div class="get_row1_col2">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29749.22512403347!2d72.86179987357364!3d21.245598798551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1738856758684!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="get_row1_col2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29749.22512403347!2d72.86179987357364!3d21.245598798551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1738856758684!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="get_row1_col2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29749.22512403347!2d72.86179987357364!3d21.245598798551647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1738856758684!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
  </div>
 

  <footer>
    <footer id="footer" class="main-footer">
      <div class="men">
        <div class="container">
          <div class="row footer-top-block">
            <div class="col-md-5">
              <div class="social-links">
                <div class="social-icons">
                  <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="useful-link">
                <h2>Quick Links</h2>
                <div class="use-links">
                  <li><a href="homee.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                  <li><a href="event.php"><i class="fa-solid fa-angles-right"></i>Event</a></li>
                  <li><a href="about.php"><i class="fa-solid fa-angles-right"></i>About</a></li>
                  <li><a href="gallery.php"><i class="fa-solid fa-angles-right"></i>Gallery</a></li>
                  <li><a href="concate.php"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="useful-link">
                <h2>Services </h2>
                <div class="use-links">
                <li><a href="corporate"><i class="fa-solid fa-angles-right"></i>Corporate</a></li>
                  <li><a href="birthday party"><i class="fa-solid fa-angles-right"></i>Birthday Party</a></li>
                  <li><a href="seminar"><i class="fa-solid fa-angles-right"></i>Seminar</a></li>
                  <li><a href="sports"><i class="fa-solid fa-angles-right"></i>Sports</a></li>
                  <li><a href="art & culter"><i class="fa-solid fa-angles-right"></i>Art & Culture</a></li>
                  <li><a href="music & entertainment"><i class="fa-solid fa-angles-right"></i>Music & Entertainment</a>
                  </li>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="useful-link">
                <h2>Other link</h2>
                <div class="use-links">
                  <li><a href="Blog"><i class="fa-solid fa-angles-right"></i>Blog</a></li>
                  <li><a href="Privat & Policy"><i class="fa-solid fa-angles-right"></i>Privat & Policy</a></li>
                  <li><a href="seminar"><i class="fa-solid fa-angles-right"></i>Terms of Service</a></li>
                  </li>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="address">
                <h2>Contact Info</h2>
                <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                <div class="address-links">
                  <li class="address1"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>1002 West 5th
                    Ave,Alaska, surat,55060. </li><br>
                  <li class="address2"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>1002 West 5th
                    Ave,Alaska, surat,55060. </li><br>
                  <li class="address3"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>1002 West 5th
                    Ave,Alaska, surat,55060. </li><br>

                </div>
              </div>
            </div>
            <div class="footer-bottom-block">
              <ul class="icon-list-items inline-items">
                <li class="icon-list-item inline-item-text">
                  <span class="icon-list-icon">
                    <i aria-hidden="true" class="fas fa-phone-alt"></i></span>
                  <span class="icon-list-text">+918590010011</span>
                </li>
                <li class="icon-list-item inline-item">
                  <span class="icon-list-icon">
                    <i aria-hidden="true" class="fas fa-envelope"></i></span>
                  <span class="icon-list-text">eventmanagement@gmail.com</span>
                </li>
              </ul>
            </div>
            <div class="Footer_row2">
                    <p>© 2045 All Rights Reserved. HTML Design</p>
                </div>
                
    </footer>
</body>

</html>