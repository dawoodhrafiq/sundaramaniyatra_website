<?php 
 $conn=mysqli_connect("localhost","root","","sundaramani-travels");
 $del_query="delete from thirunallaru where id=".$_GET['id'];
 $result=mysqli_query($conn,$del_query);
header("Location:thirunallaru.php?kasdel=succ")
?>
