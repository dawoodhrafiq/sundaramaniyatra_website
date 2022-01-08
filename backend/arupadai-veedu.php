<?php
 session_start();
 if(!isset($_SESSION['admin_id']) || $_SESSION['admin_id']==''){
  header('Location:../login.php?login=fail');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main3.css">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>admin panel</title>
</head>

<body style="font-family: 'Bebas Neue', cursive;">
  <div class=over-body>
    <!-- HEADER  -->

    <header>

      <div class="navbar-1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img width="70%" class="logo" src="../img/home/for-admin.png" alt="img"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div>
                <a style="text-decoration:none; color:#fff; padding-left:15px;" href="enquiry.php"><i style="font-size:20px;" class="fas fa-mail-bulk"></i></a>
                <a style="text-decoration:none; color:#fff; padding-left:15px;   " href="admin-page.php"><i style="font-size:20px;" class="fas fa-users-cog"></i></a>
                <a style="text-decoration:none; color:#fff; padding-left:15px;" href="logout.php"><i style="font-size:20px;" class="fas fa-sign-out-alt"></i></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- ============================LEFT----SIDE=============================== -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <div class="left-clm">
            <div class="btns ">

              <button> <a style="margin-right:15px;" href="dashboard.php"><i class="fas fa-gopuram"></i>cuddalore</a></button>

              <div class="btn-top">
                <button> <a style="margin-right:55px;" href="kasi.php"><i class="fas fa-gopuram"></i>kasi</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:20px;" href="sin-mal.php"><i class="fas fa-gopuram"></i>SINGAPORE - MALAYSIA</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="garuda-seva.php"><i class="fas fa-gopuram"></i>garuda seva</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="ahobilam.php"><i class="fas fa-gopuram"></i>AHOBILAM</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="shirdi.php"><i class="fas fa-gopuram"></i>Shirdi</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="udupi.php"><i class="fas fa-gopuram"></i>udupi</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Bhadrachalam.php"><i class="fas fa-gopuram"></i>Bhadrachalam</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Vaishnodevi.php"><i class="fas fa-gopuram"></i>Vaishnodevi</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Mukthinath.php"><i class="fas fa-gopuram"></i>Mukthinath</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="cholanaatu.php"><i class="fas fa-gopuram"></i>CHOLA NAATU</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="pandyanadu.php"><i class="fas fa-gopuram"></i>Pandya nadu</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="malainadu.php"><i class="fas fa-gopuram"></i>Malai nadu</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Pandaripuram.php"><i class="fas fa-gopuram"></i>Pandaripuram</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="thulakaveri.php"><i class="fas fa-gopuram"></i>THULA KAVERI</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="navatirupati.php"><i class="fas fa-gopuram"></i>Nava Tirupati</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="thondainattu.php"><i class="fas fa-gopuram"></i>THONDAI NATTU</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Thirunallaru.php"><i class="fas fa-gopuram"></i>Thirunallaru</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="Pushkaram.php"><i class="fas fa-gopuram"></i>Pushkaram</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="panchabootha-sthalam.php"><i class="fas fa-gopuram"></i>PANCHABOOTHA STHALAM</a></button>

              </div>
              <div class="btn-top">
                <button> <a style="margin-right:10px;" href="arupadai-veedu.php"><i class="fas fa-gopuram"></i>ARUPADAI VEEDU</a></button>

              </div>

            </div>


          </div>
        </div>
        <div class="col-10">
          <div class="right-clm">
            <h1>GENERAL INFORMATION ABOUT arupadai veedu</h1>
            <div class="popup_msg text-center">
              <?php
              $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
              $sel_query = "select * from arupadaiveedu";
              $result = mysqli_query($conn, $sel_query);
              $msg = "";
              if (isset($_GET['del']) && $_GET['del'] == 'succ') {
                $msg = "Your Record Has Been Deleted Successfully.";
              }
              if (isset($_GET['update']) && $_GET['update'] == 'succ') {
                $msg = "Your Record Has Been updated Successfully.";
              }
              if (isset($_GET['adding']) && $_GET['adding'] == 'succ') {
                $msg = "Your Record Has Been created Successfully.";
              }
              if (isset($_GET['kasdel']) && $_GET['kasdel'] == 'succ') {
                $msg = "trip data Has Been deleted Successfully.";
              }

              ?>
              <h5 class="display-10"> <?php echo $msg; ?></h5>
            </div>

            <div class="text-start btn-add">
              <!-- Button trigger modal -->
              <div class="btn-add">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i>Add Trip</button>
              </div>


              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Trip Details Of 'arupadai veedu'</h5>
                      <?php
                      if (isset($_POST['from_post_flag']) && $_POST['from_post_flag'] == 1) {
                        $content = $_POST['content'];
                        $month =  $_POST['month'];
                        $modeoftravel = $_POST['modeoftravel'];
                        $duration = $_POST['duration'];
                        $price = $_POST['price'];
                        $closingday = $_POST['closingday'];
                        header("Location:arupadai-veedu.php?adding=succ");
                        $connection = mysqli_connect('localhost', 'root', '', 'sundaramani-travels');
                        $query = "INSERT INTO arupadaiveedu (content,month,modeoftravel,duration,price,closingday) VALUES('$content','$month','$modeoftravel','$duration','$price','$closingday')";
                        mysqli_query($connection, $query);
                      }
                      ?>
                    </div>
                    <div class="modal-body ">
                      <form action="arupadai-veedu.php" method="post">
                        <input name="from_post_flag" type="hidden" value="1">
                        <div class="mb-3">
                          <label for="name" class="form-label">content</label>
                          <textarea class="form-control" name="content" id="content" type="text" required rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                          <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">MONTH:</span>
                            <input type="text" class="form-control" placeholder="Enter month and date" name="month" id="month" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">MODE OF TRAVEL:</span>
                            <input type="text" class="form-control" placeholder="Enter tarvel details" name="modeoftravel" id="modeoftravel" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">DURATION:</span>
                            <input type="text" class="form-control" placeholder="Enter day duration" name="duration" id="duration" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">PRICE:</span>
                            <input type="text" class="form-control" placeholder="Enter price" name="price" id="price" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">payment before:</span>
                            <input type="text" class="form-control" placeholder="Enter last date of the payment" name="closingday" id="closingday" required>
                          </div>
                        </div>

                        <button type="submit" name="create" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top:10px; margin-bottom:20px; margin-left:10px;">
              <h2>Overview of arupadai veedu</h2>
            </div>


            <table>
              <?php
              $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
              $sel_query = "select * from arupadaiveedu";
              $result = mysqli_query($conn, $sel_query);
              $row = mysqli_fetch_array($result);
              ?>
              <thead class="d-flex">
                <tr class="view">
                  <div class="container">
                    <h5>content :<span style="color:#7F5217;"> <?php echo $row['content']; ?></span></h5>
                    <h5>month :<span style="color:#7F5217;"> <?php echo $row['month']; ?></span></h5>
                    <h5>mode of travel :<span style="color:#7F5217;"> <?php echo $row['modeoftravel']; ?></span></h5>
                    <h5>duration :<span style="color:#7F5217;"> <?php echo $row['duration']; ?></span></h5>
                    <h5>price :<span style="color:#7F5217;"> <?php echo $row['price']; ?></span></h5>
                    <h5>closing day :<span style="color:#7F5217;"> <?php echo $row['closingday']; ?></span></h5>
                  </div>
                </tr>
              </thead>
              <div class="btn-add ">
                <a class="btn btn-danger" href="delete-arupadaiveedu.php ?id=<?php echo $row['id']; ?>" onclick="checkdelete(<?php echo $row['id']; ?>);"><i class="fas fa-trash-alt"></i> delete</a>
              </div>
            </table>
          </div>

          <script>
            function checkdelete(studid) {
              if (confirm('Are you sure you want to delete')) {
                window.location.href = "arupadai-veedu.php?id=" + studid;
                return true;
              } else
                return false;
            }
          </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>

</html>