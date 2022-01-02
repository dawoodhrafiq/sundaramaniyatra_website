<?php 

session_start();
if(!isset($_SESSION['admin_id']) || $_SESSION['admin_id']==''){
 header('Location:login.php?login=fail');
}

 $conn=mysqli_connect("localhost","root","","sundaramani-travels");
 $del_query="delete from enquiry where id=".$_GET['id'];
 $result=mysqli_query($conn,$del_query);
header("Location:enquiry.php? del=succ")
?>
