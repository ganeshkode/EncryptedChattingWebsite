<?php
   include('connection.php');
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   date_default_timezone_set("Asia/Kolkata");
   $alltables = mysqli_query($conn,"SHOW TABLES;");
 
// record the output
$output = array();
 
while($table = mysqli_fetch_assoc($alltables)){
 foreach($table as $db => $tablename){
  $sql = 'OPTIMIZE TABLE '.$tablename.';';
  $response = mysqli_query($conn,$sql) or die(mysql_error());
  $output[] = mysqli_fetch_assoc($response);
 };
};
	
   $user_check = $_SESSION['user_name'];

   $ses_sql = mysqli_query($conn,"select * from user where userid = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
	  $loginuserid = $row['userid'];
	  $loginuser=$row['firstname']." ".$row['lastname'];
      
   
   if(!isset($_SESSION['user_name'])){
      header("location:index.php");
   }
?>