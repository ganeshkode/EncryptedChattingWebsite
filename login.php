<?php
include('connection.php');
  session_start();

  if(isset($_POST['signup']))
{
	header('Location:signup.php');
}

if(isset($_POST['login']))
{
$user_name = $_POST['userid'];
$password = $_POST['password']; 
$database=	"user";
$query = "SELECT * FROM $database WHERE userid='$user_name'";
$result = $conn->query($query);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row1 = $result->fetch_array())
		{
			//column name in database
			$usernames		= 	$row1['userid']; 
			$passwords		= 	$row1['password']; 
			$firstname		= 	$row1['firstname']; 
			$lastname		= 	$row1['lastname']; 
			$srno		 	= 	$row1['srno']; 
		}
}

else{$srno=0;}
$password=md5($password);
if($srno != 0)
{
if(($user_name == $usernames) && ($password == $passwords))
{
	$_SESSION['user_name']=$user_name;
	$query1 = "UPDATE $database SET loginvalue=1 WHERE userid='$user_name'";
$result1 = $conn->query($query1);
header('Location:home.php');	
}else
{
$myfile2 = fopen("error1.php", "w");
$txt2 = '<?php $error="Username and password  not match"; echo $error;?>';
fwrite($myfile2, $txt2);
fclose($myfile2);
header('Location:index.php');
}
}else	{
	$myfile3 = fopen("error1.php", "w");
$txt3 = '<?php $error="Username not found"; echo $error;?>';
fwrite($myfile3, $txt3);
fclose($myfile3);
	header('Location:index.php');
}
 
}


?>