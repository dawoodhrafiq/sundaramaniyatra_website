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
                <a href="booking.php">Book Now</a>
              </li>

              <li class="dropdown singleDrop">
                <a href="contact.php">Contact Us</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>




    <!-- PAGE TITLE -->

    <section class="pageTitle" style="background-image:url(img/home/pages/page-title-bg6.jpg);">

      <div class="container">

        <div class="row">

          <div class="col-xs-12">

            <div class="titleTable">

              <div class="titleTableInner">

                <div class="pageTitleInfo">

                  <h1>Tour Packages</h1>

                  <div class="under-border"></div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>



    <!-- PAGE CONTENT -->

    <section class="mainContentSection packagesSection">

      <div class="container">

        <div class="row">

          <div class="col-xs-12">


            <div class="media packagesList">
              <a class="media-left fancybox-pop" href="img/home/packages/packages-21.jpg">
                <img class="media-object" src="img/home/packages/packages-21.jpg" alt="Image">
              </a>
              <div class="media-body">
                <div class="bodyLeft">
                  <h4 class="media-heading"><a href="cuddalore.php">Cuddalore Trip</a></h4>
                  <div class="countryRating">
                    <span>Temples</span>
                    <ul class="list-inline rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                  $sel_query = "select * from cuddalore";
                  $result = mysqli_query($conn, $sel_query);
                  $row = mysqli_fetch_array($result);
                  ?>
                  <p><strong><?php echo $row['content']; ?></strong></p>
                  <ul class="list-inline detailsBtn">
                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>
                  </ul>
                </div>
                <div class="bodyRight">
                  <div class="bookingDetails">

                    <a href="cuddalore.php" class="btn buttonTransparent clearfix">Details</a>
                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>
                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-1.jpg">

                <img class="media-object" src="img/home/packages/packages-1.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="kasi.php">Kasi Trip</a></h4>

                  <div class="countryRating">

                    <span>Kasi-Gaya-Allahabad</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>
                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                  $sel_query = "select * from kasitrip";
                  $result = mysqli_query($conn, $sel_query);
                  $row = mysqli_fetch_array($result);
                  ?>

                  <p><strong><?php echo $row['content']; ?></strong></p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="kasi.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>

            <div class="media packagesList">
              <a class="media-left fancybox-pop" href="img/home/packages/packages-14.jpg">
                <img class="media-object" src="img/home/packages/packages-14.jpg" alt="Image">
              </a>
              <div class="media-body">
                <div class="bodyLeft">
                  <h4 class="media-heading"><a href="singapore-malaysia.php">Singapore - Malaysia Trip</a></h4>
                  <div class="countryRating">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from sing";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <span>Singapore - Malaysia</span>
                    <ul class="list-inline rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                  <p><strong><?php echo $row['content']; ?></strong> </p>
                  <ul class="list-inline detailsBtn">
                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>
                  </ul>
                </div>
                <div class="bodyRight">
                  <div class="bookingDetails">

                    <a href="singapore-malaysia.php" class="btn buttonTransparent clearfix">Details</a>
                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>
                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-20.jpg">

                <img class="media-object" src="img/home/packages/packages-20.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="garudaseva.php">Garuda Seva Trip</a></h4>

                  <div class="countryRating">

                    <span>Garuda Seva - Pancha Narasimhar</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>

                  <p><strong><?php echo $row['content']; ?></strong>
                  </p>
                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                  $sel_query = "select * from garudaseva";
                  $result = mysqli_query($conn, $sel_query);
                  $row = mysqli_fetch_array($result);
                  ?>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> </i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> </i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="garudaseva.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>




            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-18.jpg">

                <img class="media-object" src="img/home/packages/packages-18.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="ahobilam.php">Ahobilam Trip</a></h4>

                  <div class="countryRating">

                    <span>Ahobilam - Mahanandi - Srisailam</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>


                  <p> <strong> There are nine temples of Lord Narasimha in Ahobilam which house the self-manifested Deities of the Lord. Lord Shiva in Srisailam temple is referred to as one of the twelve Jyotirlingas. This temple is classified as one of the Paadal Petra Sthalam. Mahanandi is one of the Nava Nandis.
                    </strong></p>

                  <ul class="list-inline detailsBtn">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from Ahobilam";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="ahobilam.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>




            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-2.jpg">

                <img class="media-object" src="img/home/packages/packages-2.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="shirdi.php">Shirdi Trip</a></h4>

                  <div class="countryRating">

                    <span>Maharashtra</span>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from Shirdi";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>

                  <p> <strong> The darshan of Baba in Shirdi gives us all goodness and wellness. Also we have the darshan of Triyambakeshwar in Nashik, Panchavati, Ellora and Grishneswar, Vitobha Panduranga Darshan at Pandaripur and finally Sri Ragavendra Swami Mutt at Manthralayam. </strong></p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="shirdi.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>

            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-3.jpg">

                <img class="media-object" src="img/home/packages/packages-3.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="udupi.php">Udupi Trip</a></h4>

                  <div class="countryRating">
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from Udupi";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <span>Karnataka</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>

                  <p><strong><?php echo $row['content']; ?></strong></p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">



                    <a href="udupi.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>



            <div class="media packagesList">
              <a class="media-left fancybox-pop" href="img/home/packages/packages-19.jpg">
                <img class="media-object" src="img/home/packages/packages-19.jpg" alt="Image">
              </a>
              <div class="media-body">
                <div class="bodyLeft">
                  <h4 class="media-heading"><a href="bhadrachalam.php">Bhadrachalam Trip</a></h4>
                  <div class="countryRating">
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from bhadrachalam";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <span>Andhra Pradesh</span>
                    <ul class="list-inline rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                  <p> <strong>Apart from 108 Divyadesams, even more significant places of Lord Vishnu are there. Lord Vishnu has showered his blessings in the form of Rama in Bhadrachalam, Sathyanarayana at Annavaram, Koormanathaswamy at Srikakulam etc. </strong> </p>
                  <ul class="list-inline detailsBtn">
                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>
                  </ul>
                </div>
                <div class="bodyRight">
                  <div class="bookingDetails">

                    <a href="bhadrachalam.php" class="btn buttonTransparent clearfix">Details</a>
                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>
                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-8.jpg">

                <img class="media-object" src="img/home/packages/packages-8.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="mathura.php">Vaishno Devi Trip</a></h4>

                  <div class="countryRating">

                    <span>Mathura - Ayodhya - Katra</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from vaishnodevi";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                  <p> <strong>Mathura also known as Krishnajanmaboomi. Pilgrimage to Mata Vaishnodevi is one of the holiest. Ayodhya is also known as Rama Janmaboomi. Naimisaranyam is the place where 18 puranas were told Suthbouranikar. Chakra theertham is an important theertham.</strong> </p>

                  <ul class="list-inline detailsBtn">

                   
                    <li><span class="textInfo"><i class="fa fa-plane" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="mathura.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>



            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-17.jpg">

                <img class="media-object" src="img/home/packages/packages-17.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="mukthinath.php">Mukthinath Trip</a></h4>

                  <div class="countryRating">
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from mukthinath";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                    <span>Nepal</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>

                  <p> <strong>"Mukthinath" word is derived from "Mukti" and "Nath". "Mukti" means "Salvation" and "Nath" means "God or Master". Mukti holds great significance for all spiritual people. Muktinath this Sanskrit name itself has religious overtone and a sort of emotional ring to it for the devout Hindus.</strong> </p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>
                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="mukthinath.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>


            <div class="media packagesList">
              <a class="media-left fancybox-pop" href="img/home/packages/packages-4.jpg">
                <img class="media-object" src="img/home/packages/packages-4.jpg" alt="Image">
              </a>
              <div class="media-body">
                <div class="bodyLeft">
                  <h4 class="media-heading"><a href="divyadesam-2.php">Chola Naatu Divyadesam</a></h4>
                  <div class="countryRating">
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from CholaNaatu";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                    <span>40 Temples</span>
                    <ul class="list-inline rating">
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                  </div>
                  <p><strong><?php echo $row['content']; ?></strong></p>
                  <ul class="list-inline detailsBtn">
                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>
                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>
                  </ul>
                </div>
                <div class="bodyRight">
                  <div class="bookingDetails">

                    <a href="divyadesam-2.php" class="btn buttonTransparent clearfix">Details</a>
                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>
                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-16.jpg">

                <img class="media-object" src="img/home/packages/packages-16.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="pandyanadu.php">Pandya Naadu Divyadesam</a></h4>

                  <div class="countryRating">
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from PandyaNaadu";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                    <span>Tamilnadu</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>

                  <p> <strong>The Divya Desams (sacred places) are 108 temples that are regarded by Srivaishnavite Hindus as being of special holiness. There are 18 Divya Desams based on Pandya nadu out of which 9 divyadesams are called Nava Tirupathi temples.</strong> </p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="pandyanadu.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>

            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-15.jpg">

                <img class="media-object" src="img/home/packages/packages-15.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="malainadu.php">Malainadu Divyadesam</a></h4>

                  <div class="countryRating">

                    <span>Kerala</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from Malainadu";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                  <p> <strong>The Divya Desams (sacred places) are 108 temples that are regarded by Srivaishnavite Hindus as being of special holiness. These Divya Desams were praised by the 12 Alvars, the ultimate devotees of Lord Vishnu. There are 11 Divya Desams based on Malai nadu the ancient Kerala.</strong> </p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="malainadu.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>





            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-13.jpg">

                <img class="media-object" src="img/home/packages/packages-13.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="pandaripuram.php">Pandaripuram Hampi Trip</a></h4>

                  <div class="countryRating">

                    <span>Maharashtra - Karnataka</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from Pandaripuram";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                  </div>

                  <p><strong><?php echo $row['content']; ?></strong></p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="pandaripuram.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>



            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-12.jpg">

                <img class="media-object" src="img/home/packages/packages-12.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="thulakaveri.php">Thula Kaveri Trip</a></h4>

                  <div class="countryRating">

                    <span>Tamilnadu</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from ThulaKaveri";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                  <p> <strong>Sixty six crores of sacred waters in all the fourteen worlds, come stay in Kaveri, in the month of Thula by the order of Lord Keshava says Agneya purana. This period is very auspicious for taking bath in the Kaveri. </strong> </p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i>  <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i>  <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="thulakaveri.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>






            <div class="media packagesList">

              <a class="media-left fancybox-pop" href="img/home/packages/packages-10.jpg">

                <img class="media-object" src="img/home/packages/packages-10.jpg" alt="Image">

              </a>

              <div class="media-body">

                <div class="bodyLeft">

                  <h4 class="media-heading"><a href="navatirupati.php">Nava Tirupati Trip</a></h4>

                  <div class="countryRating">

                    <span>Tamilnadu</span>

                    <ul class="list-inline rating">

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                      <li><i class="fa fa-star" aria-hidden="true"></i></li>

                    </ul>

                  </div>
                  <?php
                    $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                    $sel_query = "select * from NavaTirupati";
                    $result = mysqli_query($conn, $sel_query);
                    $row = mysqli_fetch_array($result);
                    ?>

                  <p> <strong>This trip covers Nava Tirupati and Nava Kailayam temples. Also covers Kutrallam falls, Kutralanathar temple, Nellaiyappar temple and Thenkasi Viswanathar temple.</strong> </p>

                  <ul class="list-inline detailsBtn">

                    <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> <strong><?php echo $row['month']; ?></strong></span></li>

                    <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> <strong><?php echo $row['duration']; ?></strong></span></li>

                  </ul>

                </div>

                <div class="bodyRight">

                  <div class="bookingDetails">

                    <a href="navatirupati.php" class="btn buttonTransparent clearfix">Details</a>

                    <a href="booking.php" class="btn buttonTransparent clearfix">Book</a>

                    <a href="contact.php" class="btn buttonTransparent">Inquiry</a>

                  </div>

                </div>

              </div>

            </div>










            <div class="row">

              <div class="col-xs-12">

                <div class="paginationCenter">

                  <ul class="pagination">

                    <li>

                      <a href="#" aria-label="Previous">

                        <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous</span>

                      </a>

                    </li>

                    <li class="active"><a href="#">1</a></li>

                    <li><a href="packages-2.php">2</a></li>



                    <li>

                      <a href="packages-2.php" aria-label="Next">

                        <span aria-hidden="true">Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>

                      </a>

                    </li>

                  </ul>

                </div>

              </div>

            </div>

          </div>

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
                <li><a href="contact.php">Enquiry</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-sm-pull-6 col-xs-12">
              <div class="copyRightText">
                <p>Copyright ?? 2022-2023 Sundaramani Travels. Designed by <a target="_blank" href="https://webbird.co.in/">webbird</a>.</p>
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