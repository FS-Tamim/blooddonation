<?php
  $db_host="localhost";
  $db_user="root";
  $db_password="";
  $df_name="blooddonation";
  $conn=mysqli_connect($db_host,$db_user,$db_password, $df_name);

  if(!$conn)
  {
  	die("connection failed");
  }
  else
 
  
?>