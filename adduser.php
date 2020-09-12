<?php
include('connection.php');

if(isset($_POST['firstname'])){
$firstnames=$_POST['firstname'];
$lastnames=$_POST['lastname'];
$userids=$_POST['adminid'];
$passwords=md5($_POST['password']);
$securityquestions=$_POST['securityquestion'];
$recoveryanss=$_POST['recoveryans'];
$recoveryemailids=$_POST['recoveryemailid'];
$recoveryphones=$_POST['recoveryphone'];

if(isset($_POST['createuser'])){
	session_start();
$query1="SELECT srno FROM user";
$result1 = $conn->query($query1);
if($result1 == "")
{
$sql2 = "CREATE TABLE user(
  `srno`INT NOT NULL AUTO_INCREMENT , 
  `firstname`text,
  `lastname`text,
  `userid`text,
  `password`text,
  `securityquestion`text,
  `recoveryans`text,
  `recoveryemailid`text,
  `recoveryphone`text,
  `loginvalue`text,
   
  PRIMARY KEY (`srno`),
  UNIQUE(`srno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
;";
$result2 = $conn->query($sql2);	
$sql3 = "CREATE TABLE message(
  `senderid`text,
  `reciverid`text,
  `message`text
) ENGINE=MyISAM DEFAULT CHARSET=latin1
;";
$result3 = $conn->query($sql3);	

$query4="INSERT INTO  user( `firstname`,`lastname`,`userid`,`password`,`securityquestion`,`recoveryans`,`recoveryemailid`,`recoveryphone`,`loginvalue`) 
VALUES('$firstnames','$lastnames','$userids','$passwords','$securityquestions','$recoveryanss','$recoveryemailids','$recoveryphones','0');";
$result4 = $conn->query($query4);

header('location:index.php');
}
else
{
$query6="INSERT INTO  user( `firstname`,`lastname`,`userid`,`password`,`securityquestion`,`recoveryans`,`recoveryemailid`,`recoveryphone`,`loginvalue`) 
VALUES('$firstnames','$lastnames','$userids','$passwords','$securityquestions','$recoveryanss','$recoveryemailids','$recoveryphones','0');";
$result6 = $conn->query($query6);

header('location:index.php');
}
}
}
?>