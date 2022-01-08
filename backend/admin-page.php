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
                        <br>
                        <h1>user details.</h1>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            CREATE USER
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">USER DETAILS </h5>
                                        <?php
                                        if (isset($_POST['from_post_flag']) && $_POST['from_post_flag'] == 1) {
                                            $fullname = $_POST['fullname'];
                                            $gender  =  $_POST['gender'];
                                            $mailid = $_POST['mailid'];
                                            $phonenumber = $_POST['phonenumber'];
                                            $city = $_POST['city'];
                                            $username = $_POST['username'];
                                            $password = $_POST['password'];
                                            header("Location:admin-page.php?add=succ");
                                            $connection = mysqli_connect('localhost', 'root', '', 'sundaramani-travels');
                                            $query = "INSERT INTO admin (fullname,gender,mailid,phonenumber,city,username,password) VALUES('$fullname',' $gender','$mailid','$phonenumber','$city','$username','$password')";
                                            mysqli_query($connection, $query);
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-body">
                                        <form action="admin-page.php" method="post">
                                            <input name="from_post_flag" type="hidden" value="1">
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input type="text" placeholder="full name" class="form-control" name="fullname" id="fullname" required>

                                            </div>
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">gender</label>
                                                <select class="form-control" name="gender" id="gender" required>
                                                    <option value="">select</option>
                                                    <option>male</option>
                                                    <option>female</option>
                                                    <option>other</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mailid" class="form-label">Email Id</label>
                                                <input type="email" placeholder="mail id" class="form-control" name="mailid" id="mailid" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="phonenumber" class="form-label">phone number</label>
                                                <input type="number" placeholder="please enter your mobile number with +91 " class="form-control" name="phonenumber" id="phonenumber" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Enter your city name</label>
                                                <input type="text" placeholder="enter your city name" class="form-control" name="city" id="city" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">user name </label>
                                                <input type="text" placeholder="user name" class="form-control" name="username" id="username" required>
                                                <div id="emailHelp" class="form-text">this is your login id </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password1" required>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Submit</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>






                        <table class="table table-striped table-hover">
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "sundaramani-travels");
                            $sel_query = "select * from admin";
                            $result = mysqli_query($conn, $sel_query);
                            $msg = "";
                            if (isset($_GET['del']) && $_GET['del'] == 'succ') {
                                $msg = "The user data Has Been Deleted Successfully.";
                            }
                            if (isset($_GET['update']) && $_GET['update'] == 'succ') {
                                $msg = "Your Record Has Been updated Successfully.";
                            }
                            if (isset($_GET['adding']) && $_GET['adding'] == 'succ') {
                                $msg = "Your Record Has Been created Successfully.";
                            }

                            ?>
                            <div class="text-center">
                                <h5 style="color:red;" class="display-10"> <?php echo $msg; ?></h5>
                            </div>

                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>GENDER</th>
                                    <th>MAIL ID</th>
                                    <th>PHONE NUMBER</th>
                                    <th>CITY</th>
                                    <th>USER NAME</th>
                                    <th>PASSWORD</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['fullname']; ?></th>
                                        <td><?php echo $row['gender']; ?></th>
                                        <td><?php echo $row['mailid']; ?></td>
                                        <td><?php echo $row['phonenumber']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td>
                                            <a href="view-message.php?id=<?php echo $row['id']; ?>"><i class="fas fa-eye"></i></a>
                                            <a href="delete-admin.php?id=<?php echo $row['id']; ?>" onclick="checkdelete(<?php echo $row['id']; ?>);"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>




                    </div>

                    <script>
                        function checkdelete(studid) {
                            if (confirm('Are you sure you want to delete')) {
                                window.location.href = "enquiry.php?id=" + studid;
                                return true;
                            } else
                                return false;
                        }
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>

</html>