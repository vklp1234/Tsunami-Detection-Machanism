<?php
   $connection = mysqli_connect("118.185.43.122", "0187cs161025", "sistec","0187cs161025");
   
   $dp1=$_POST['depth2'];
   $loc1=$_POST['location2'];
   $magni1=$_POST['magnitude2'];
   
   
   $sql="insert into tsunami(depth,location,magnitude) values($dp1,'$loc1',$magni1);";
   $retval=mysqli_query($connection,$sql);
   
?>