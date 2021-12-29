<?php 
 $conn=mysqli_connect("localhost","root","","sundaramani-travels");
 $del_query="delete from panchaboothasthalam where id=".$_GET['id'];
 $result=mysqli_query($conn,$del_query);
header("Location:panchabootha-sthalam.php?kasdel=succ")
?>
