<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us | Sundaramani Travels</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Arvo:700i" rel="stylesheet">
   
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <script type="text/javascript" src="js/jquery.js"></script>

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/png" href="img/home/logo-color-sm.png"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

 <!-- HEADER -->
    <header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top lightHeader" role="navigation">     

        <div class="container">       

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown singleDrop">
                <a href="index.html">Home</a>
              </li>
               
               <li class="dropdown singleDrop">
                <a href="aboutus.html">About Us</a>
              </li> 

              <li class="dropdown singleDrop">
                <a href="packages.php">Tour Packages</a>
              </li> 

               <li class="dropdown singleDrop">
                <a href="gallery.html">Gallery</a>
              </li>

              <li class="dropdown singleDrop">
                <a href="booking.php">Book Now</a>
              </li>                         

              <li class="active dropdown singleDrop">
                <a href="contact.php">Contact Us</a>
              </li> 
             
            </ul>
          </div>

        </div>
      </nav>
    </header>

    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(img/home/pages/page-title-bg5.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>contact us</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION-->
    <section class="mainContentSection">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-4 col-xs-12">
            <div class="contactInfo">
              <h2>get in touch</h2>
              <p>We're here to provide you with more information, answer any questions you may have! Feel free to contact us!</p>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">address</h4>
                  <p>Invicon Silver Springs<br>
                   Krishna Nagar 6th street <br> Tambaram West, Chennai 600 045.</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Phone number</h4>
                  <p>+91 86674 75644 <br>+91 99400 56963</p>
                </div>
              </div>
              <div class="media">
                <a class="media-left" href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <div class="media-body">
                  <h4 class="media-heading">email us</h4>
                  <p><a href="mailTo:sundaramanitravels@gmail.com">sundaramanitravels@gmail.com</a> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-xs-12">
			
            <div class="contactForm">
            <?php 
                    if(isset($_POST['from_post_flag'])&& $_POST['from_post_flag']==1){
                          $name = $_POST['name']; 
                          $mailid  =  $_POST['mailid']; 
                          $phonenumber = $_POST['phonenumber'];
                          $message = $_POST['message'];
                         
                         $connection=mysqli_connect('localhost','root','','sundaramani-travels');
                         $query ="INSERT INTO enquiry (name,mailid,phonenumber,message) VALUES('$name','$mailid','$phonenumber','$message')";
                         mysqli_query($connection,$query);
                        }
                        ?>
            	 <br>
                 <form action="contact.php" method="post" class="form">
                 <input name="from_post_flag" type="hidden" value="1">
                  <p style="color:orangered;font-size:12px" id="error" class="warning">Message</p>
                 <div class="form-group">
                  <input name="name" type="text" class="form-control" id="name"required  placeholder="Your Name *">
                </div>
                <div class="form-group">
                  <input  name="mailid" type="text" class="form-control" id="mailid" required     placeholder="Your Email *">
                </div>
                <div class="form-group">
                  <input  name="phonenumber" type="text" class="form-control" id="phonenumber" required  placeholder="Your Phone">
                </div>
                <div class="form-group">
                  <textarea  name="message"  class="form-control" id="message" required  placeholder="Your Message*"></textarea>
                </div>
                                    
                <button type="submit" name="create" class="btn buttonCustomPrimary">send message</button>                 
                <p></p>                                               
                     
                </form>
        
          </div>
        </div>
      </div>
    </section>
  <!-- MAP AREA SECTION -->
    <section class="mapArea">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7777.464154626087!2d80.10498252211656!3d12.924933863545926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s54+mudichur+road+tambaram+west+chennai+6000045!5e0!3m2!1sen!2sin!4v1500009566325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>    

<!-- FOOTER INNER -->
    <footer>
      <!-- FOOTER -->
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerContent">
                <a href="index.html" class="footer-logo"><img src="img/home/logo-color-sm.png" alt="footer-logo"><span class="footer-logo-title">Sundaramani Travels</span></a>
           <p>A pilgrimage is a journey in search of moral and spiritual significance.
           India is covered by many holy sites and with sacred rivers.  Going on a pilgrimage is considered as a good Karma. Our motto is to take people to these holy places across India in a most convenient way and with utmost care.</p>
              </div>  


            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerContent">
                <h5>contact us</h5>
                <p>For support or any questions, please get in touch with us!</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-home" aria-hidden="true"></i>Invicon Silver Springs <br>
                   Krishna Nagar 6th street <br>Tambaram West, Chennai 600 0045</li>
                  <li><i class="fa fa-phone" aria-hidden="true"></i>+91 8667475644, +91 9940056963</li>
                  </i></li>
                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:sundaramanitravels@gmail.com">sundaramanitravels@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerContent imgGallery">
                <h5>Gallery</h5>
                 <div class="row">
                <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-1.jpg"><img src="img/home/packages/packages-1.jpg " width="83" height= "73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-2.jpg"><img src="img/home/packages/packages-2.jpg" width="83" height= "73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-3.jpg"><img src="img/home/packages/packages-3.jpg" width="83" height= "73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-4.jpg"><img src="img/home/packages/packages-4.jpg" width="83" height= "73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-5.jpg"><img src="img/home/packages/packages-5.jpg" width="83" height= "73"alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-6.jpg"><img src="img/home/packages/packages-6.jpg" width="83" height= "73" alt="image"></a>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerContent">
                <h5>newsletter</h5>
                <p>Subscribe to our newsletters and get to know our latest offers! </p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Enter your email" aria-describedby="basic-addon21">
                  <span class="input-group-addon" id="basic-addon21"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                </div>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-push-6 col-xs-12">
              <ul class="list-inline">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="packages.php">Tour Packages</a></li>
                <li><a href="contact.php">Enquiry</a></li>                
              </ul>
            </div>
            <div class="col-sm-6 col-sm-pull-6 col-xs-12">
              <div class="copyRightText">
                 <p>Copyright © 2022-2023 Sundaramani Travels. Designed by <a target="_blank" href="https://webbird.co.in/">webbird</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>    
  </div>

<!-- JAVASCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="plugins/counter-up/jquery.counterup.min.js"></script>
<script src="plugins/isotope/isotope.min.js"></script>
<script src="plugins/isotope/jquery.fancybox.pack.js"></script>
<script src="plugins/isotope/isotope-triger.js"></script>
<script src="plugins/countdown/jquery.syotimer.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

