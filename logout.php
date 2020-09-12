<?php
    include('connection.php');
  include('session.php');

	$query1 = "UPDATE user SET loginvalue=0 WHERE userid='$user_check'";
$result1 = $conn->query($query1);

   if(session_destroy()) {
	   
      header("Location:index.php");
   }
?>