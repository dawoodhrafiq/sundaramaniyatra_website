<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Packages | Sundaramani Travels</title>
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
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Arvo:700i" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/png" href="img/home/logo-color-sm.png" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
  <div class="main-wrapper">

    <!-- HEADER -->
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

              <li class="active dropdown singleDrop">
                <a href="packages.php">Tour Packages</a>
              </li>

              <li class="dropdown singleDrop">
                <a href="gallery.html">Gallery</a>
              </li>

              <li class="dropdown singleDrop">
                <a href="booking.html">Book Now</a>
              </li>

              <li class="dropdown singleDrop">
                <a href="contact.html">Contact Us</a>
              </li>
              <li class="dropdown searchBox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>



    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(img/home/pages/page-title-bg4.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Pushkaram Trip</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PAGE CONTENT -->
    <sectio class="mainContentSection singlePackage">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="generalInfo">
            <?php
              $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
              $sel_query = "select * from pushkaram";
              $result = mysqli_query($conn, $sel_query);
              $row = mysqli_fetch_array($result);
              ?>
              <h2>General Information</h2>
              <p><strong><?php echo $row['content']; ?></strong></p>
            </div>
          </div>

          <div class="col-xs-12">
            <div class="row">
              <div class="isotopeContainer" id="container">
                <div class="col-sm-4 isotopeSelector america">
                  <article class="">
                    <figure>
                      <img src="img/navatirupati/nellaiappar.png" alt="image">
                      <div class="overlay-background">
                        <div class="inner"></div>
                      </div>
                      <div class="overlay galleryMasonry">
                        <a class="fancybox-pop" rel="portfolio-1" href="img/navatirupati/nellaiappar.png ">
                          <span class="overlayInfo">
                            <h2>Nellaiyappar</h2>
                            <button class="btn buttonTransparent" type="button">view</button>
                          </span>
                        </a>
                      </div>
                    </figure>
                  </article>
                </div>

                <div class="col-sm-4 isotopeSelector asia">
                  <article class="">
                    <figure>
                      <img src="img/navatirupati/navatirupati2.jpg" alt="image">
                      <div class="overlay-background">
                        <div class="inner"></div>
                      </div>
                      <div class="overlay galleryMasonry">
                        <a class="fancybox-pop" rel="portfolio-1" href="img/navatirupati/navatirupati2.jpg">
                          <span class="overlayInfo">
                            <h2>Nava Tirupati</h2>
                            <button class="btn buttonTransparent" type="button">view</button>
                          </span>
                        </a>
                      </div>
                    </figure>
                  </article>
                </div>

                <div class="col-sm-4 isotopeSelector america">
                  <article class="">
                    <figure>
                      <img src="img/navatirupati/papanasam.jpg" alt="image">
                      <div class="overlay-background">
                        <div class="inner"></div>
                      </div>
                      <div class="overlay galleryMasonry">
                        <a class="fancybox-pop" rel="portfolio-1" href="img/navatirupati/papanasam.jpg.jpg">
                          <span class="overlayInfo">
                            <h2>Papanasam</h2>
                            <button class="btn buttonTransparent" type="button">view</button>
                          </span>
                        </a>
                      </div>
                    </figure>
                  </article>
                </div>



              </div>
              <!--container-->
            </div>
          </div>

          <!--*****************************************************-->
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="generalInfo">
                  <br><br>
                  <h2>TRIP Information</h2>
                </div>
              </div>
              <div class="col-xs-12">
                <div role="tabpanel" class="countryTabs">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#over-view" aria-controls="over-view" role="tab" data-toggle="tab"><i class="fa fa-search" aria-hidden="true"></i> OVER VIEW</a>
                    </li>
                    <li role="presentation">
                      <a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab"><i class="fa fa-calendar" aria-hidden="true"></i> Itinerary</a>
                    </li>
                    <li role="presentation">
                      <a href="#package-info" aria-controls="package-info" role="tab" data-toggle="tab"><i class="fa fa-gift" aria-hidden="true"></i> Package Info</a>
                    </li>
                    <li role="presentation">
                      <a href="#travel-info" aria-controls="travel-info" role="tab" data-toggle="tab"><i class="fa fa-info" aria-hidden="true"></i> Travel Info</a>
                    </li>

                    <li class="pull-right">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-plane" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cab" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-train" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-bus" aria-hidden="true"></i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="over-view">
                      <div class="row">
                        <div class="col-sm-8 col-xs-12">
                          <div class="commonInfo">

                            <p><strong style="text-transform:uppercase;"><?php echo $row['duration']; ?> TRIP</strong><br>
                              Local travel by AC Travellor, Non-AC accomodation and pure veg food provided. <br>
                              <br><strong>STARTS/ ENDS IN</STRONG>: Chennai<br>
                              <br><strong>PLACES</strong>: <br>PAPANASAM <br>
                              THAMIRABARANI <br>
                              NAVA KAIYLAYAM TEMPLES<br>
                              NANGUNERI<br>
                              THIRUKURUNGUDI<br>
                              NAVA TIRUPATI<br>
                              NELLAIYAPPAR KOIL <br> <br>
                              <strong>Note:</strong><br>
                              Tickets are opening by July 19th. This is a very good opportunity to participate in the Pushkaram. Take part in the Pushkaram and get the blessings of Lord Shiva And Maha Vishnu (Nava Tirupati & Nava kayilayam)
                            </p>
                          </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                          <aside>
                            <div class="well booknow">
                              <h3><strong>Pushkaram trip</strong></h3>
                              <ul class="list-unstyled">

                                <li><span>MONTH: </span> <strong><?php echo $row['month']; ?></strong></li>
                                <li></i><span>MODE OF TRAVEL: </span> <strong><?php echo $row['modeoftravel']; ?></strong></li>
                                <li><span>DURATION:</span> <strong><?php echo $row['duration']; ?></strong></li>
                                <br>
                                <li></i>Starts from <span class="booknw-rupees"><img src="img/home/rupees.png" width="12" height="17"> <strong><?php echo $row['price']; ?></strong>* </span> Per Person</li>
                              </ul>
                              <a href="booking.html" class="btn buttonCustomPrimary">BOOK NOW</a>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>
                    <!--**********************************************************-->

                    <div role="tabpanel" class="tab-pane" id="itinerary">
                      <div class="row">
                        <div class="col-sm-8 col-xs-12">
                          <div class="commonInfo">
                            <p> OCT 19th START FROM CHENNAI BY KANYAKUMARI EXPRESS <br><br>
                              <strong>Oct 20: </strong>
                              Morning reach Tirunelveli. From there travelling to Papanasam. Taking holy bath at Thamirabarani. While returning from Papanasam visit other Nava kaiylayam temples. Evening visit Nanguneri, Thirukurungudi. Night stay at Tirunelveli.<br><br>
                              <strong>Oct 21: </strong>Morning Nava tirupati & Nellaiyappar koil and night train from Tirunelveli. <br><br>

                              Tickets are opening by July 19th.
                            </p>
                          </div>
                        </div>


                        <div class="col-sm-4 col-xs-12">
                          <aside>
                            <div class="well booknow">
                              <h3><strong>Pushkaram trip</strong></h3>
                              <ul class="list-unstyled">

                                <li><span>MONTH: </span> <strong><?php echo $row['month']; ?></strong></li>
                                <li></i><span>MODE OF TRAVEL: </span> <strong><?php echo $row['modeoftravel']; ?></strong></li>
                                <li><span>DURATION:</span> <strong><?php echo $row['duration']; ?></strong></li>
                                <br>
                                <li></i>Starts from <span class="booknw-rupees"><img src="img/home/rupees.png" width="12" height="17"> <strong><?php echo $row['price']; ?></strong>* </span> Per Person</li>
                              </ul>
                              <a href="booking.html" class="btn buttonCustomPrimary">BOOK NOW</a>
                            </div>
                          </aside>
                        </div>



                      </div>
                    </div>


                    <!--**********************************************************-->

                    <div role="tabpanel" class="tab-pane" id="package-info">
                      <div class="row">
                        <div class="col-sm-8 col-xs-12">
                          <div class="commonInfo">
                            <p><strong><i class="fa fa-check-circle" aria-hidden="true"></i> Package Fare Includes:</strong><br><br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> III AC Train ticket (Rs. 6,000) / Sleeper ticket (Rs. 4,700) <br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Breakfast, Lunch, Dinner, Snacks & tea throughout the trip (Vegetarian Only)<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> AC Vehicle Travel on road <br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Non AC accommodation (Twin Sharing)<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Driver allowance / Toll / Parking charges<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Incidental charges<br><br>


                              <i class="fa fa-times-circle" aria-hidden="true"></i><strong> Package Fare Excludes: </strong> <br><br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> To perform rituals<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Travel insurance<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Telephone calls<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Laundry charges<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Porter charges<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Dolly charges<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Camera and photo charges <br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Any other expenses/activity that is not part of the itinerary.<br>
                            </p>
                          </div>
                        </div>


                        <div class="col-sm-4 col-xs-12">
                          <aside>
                            <div class="well booknow">
                              <h3><strong>Pushkaram trip</strong></h3>
                              <ul class="list-unstyled">

                                <li><span>MONTH: </span> <strong><?php echo $row['month']; ?></strong></li>
                                <li></i><span>MODE OF TRAVEL: </span> <strong><?php echo $row['modeoftravel']; ?></strong></li>
                                <li><span>DURATION:</span> 2 days</li>
                                <br>
                                <li></i>Starts from <span class="booknw-rupees"><img src="img/home/rupees.png" width="12" height="17"> <strong><?php echo $row['price']; ?></strong>* </span> Per Person</li>
                              </ul>
                              <a href="booking.html" class="btn buttonCustomPrimary">BOOK NOW</a>
                            </div>
                          </aside>
                        </div>
                      </div>
                    </div>


                    <div role="tabpanel" class="tab-pane" id="travel-info">
                      <div class="row">
                        <div class="col-sm-8 col-xs-12">
                          <div class="commonInfo">

                            <p><strong>The following are suggestions for smooth travel:</strong><br><br>

                              <i class="fa fa-caret-right" aria-hidden="true"></i> Bring sufficient traditional wear (dhotis’and uthiriyam for men and sarees for women) and towels.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Big plastic bags to keep wet clothes while moving from one city to another.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Medium size flask to keep hot water.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Regular medicine for the individual, also keep recent Doctor prescription.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> First aid medicine like pain balm, avomin etc.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Avoid wearing jewels and valuable items.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Bring lock & key for your travel bags and long chain with lock & key for your safety.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Please do not keep more cash with you.<br>
                              <i class="fa fa-caret-right" aria-hidden="true"></i> Keep plastic mug and tissue papers.<br>
                            </p>
                          </div>
                        </div>


                        <div class="col-sm-4 col-xs-12">
                          <aside>
                            <div class="well booknow">
                              <h3><strong>Pushkaram trip</strong></h3>
                              <ul class="list-unstyled">

                                <li><span>MONTH: </span> <strong><?php echo $row['month']; ?></strong></li>
                                <li></i><span>MODE OF TRAVEL: </span> <strong><?php echo $row['modeoftravel']; ?></strong></li>
                                <li><span>DURATION:</span> <strong><?php echo $row['duration']; ?></strong></li>
                                <br>
                                <li></i>Starts from <span class="booknw-rupees"><img src="img/home/rupees.png" width="12" height="17"> <strong><?php echo $row['price']; ?></strong>* </span> Per Person</li>
                              </ul>
                              <a href="booking.html" class="btn buttonCustomPrimary">BOOK NOW</a>
                            </div>
                          </aside>
                        </div>


                      </div>
                    </div>

                    <!--**********************************************************-->

                  </div>
                </div>
              </div>
              <div class="col-xs-12">
                <p class="text-muted"><strong>*</strong>Cost of the trip for III AC Train ticket starts from Rs. 6,000 per person.<br>Final cost depends on the number of travellers, category of stay and mode of travel.</p>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="btnArea">
                    <a href="packages.php" class="btn buttonTransparent"><i class="fa fa-caret-left" aria-hidden="true"></i> back to tour packages</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <!--**********************************************************-->

          <div class="col-xs-12">
            <div class="relatedProduct">
              <h2>you may also like</h2>
              <div class="row">

                <div class="col-sm-4 col-xs-12">
                  <div class="relatedItem">
                    <img src="img/home/packages/packages-4.jpg" alt="related image">
                    <div class="maskingInfo">
                      <h4>Divyadesam - Phase I</h4>
                      <p>4 Days</p>
                      <a href="divyadesam.php" class="btn buttonTransparent">view more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="relatedItem">
                    <img src="img/home/packages/packages-5.jpg" alt="related image">
                    <div class="maskingInfo">
                      <h4>Panchabootha Sthalam</h4>
                      <p>6 Days</p>
                      <a href="panchabootham.php" class="btn buttonTransparent">view more</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <div class="relatedItem">
                    <img src="img/home/packages/packages-6.jpg" alt="related image">
                    <div class="maskingInfo">
                      <h4>Arupadai Veedu</h4>
                      <p>6 Days</p>
                      <a href="arupadaiveedu.php" class="btn buttonTransparent">view more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </sectio>

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
                  India is covered by many holy sites and with sacred rivers. Going on a pilgrimage is considered as a good Karma. Our motto is to take people to these holy places across India in a most convenient way and with utmost care.</p>
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
                    <a class="fancybox-pop" href="img/home/packages/packages-1.jpg"><img src="img/home/packages/packages-1.jpg " width="83" height="73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-2.jpg"><img src="img/home/packages/packages-2.jpg" width="83" height="73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-3.jpg"><img src="img/home/packages/packages-3.jpg" width="83" height="73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-4.jpg"><img src="img/home/packages/packages-4.jpg" width="83" height="73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-5.jpg"><img src="img/home/packages/packages-5.jpg" width="83" height="73" alt="image"></a>
                  </div>
                  <div class="col-xs-4">
                    <a class="fancybox-pop" href="img/home/packages/packages-6.jpg"><img src="img/home/packages/packages-6.jpg" width="83" height="73" alt="image"></a>
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
                <li><a href="contact.html">Enquiry</a></li>
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