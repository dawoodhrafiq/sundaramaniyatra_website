<?php 
 $conn=mysqli_connect("localhost","root","","sundaramani-travels");
 $del_query="delete from orderform where id=".$_GET['id'];
 $result=mysqli_query($conn,$del_query);
header("Location:enquiry.php?kasdel=succ")
?>
