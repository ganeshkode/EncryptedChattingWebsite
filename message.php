<html>
<?php
include('connection.php');
include('session.php');
include('userheader.php');
 
 
if(isset($_GET['userfriendid']))
{
	$userfriendid = $_GET['userfriendid'];
}
if(isset($_POST['message'])){
	$usermessages=$_POST['message'];
	$replacechar=array();
$storechar=array();
	$concents="";
$oringnalstring=$usermessages;
$stringlength = strlen($oringnalstring);
$data = $oringnalstring;
$n=0;
for($i=0;$i<$stringlength;)
{
	$singlechar=substr($data,$i,1);
	$storechar[$i]=$singlechar;
	$i++;
}
for($j=0;$j<$stringlength;)
{
	$singlestorechar=$storechar[$j];
for($i=32;$i<127;)
{
$oringnalchar=chr($i);	
if (strpos($singlestorechar , $oringnalchar) === false) {
}else{
	$replacecharvalue=3+$i;
	$changechar=chr($replacecharvalue);
	$replacechar[$j]=str_replace($oringnalchar, $changechar, $singlestorechar);
	$concents=$concents.$replacechar[$j];
}
$i++;
}
$j++;
}
$query4 = "INSERT INTO message (`senderid`, `reciverid`, `message` ) VALUES ('$loginuserid', '$userfriendid','$concents');";
$result4 = $conn->query($query4);
}
$query3 = "SELECT * FROM message";
$result3 = $conn->query($query3);
if($result3 != ""){
$mrowcount1=$result3->num_rows;		
if ($mrowcount1 > 0) 
{
	$message=array();
    while($row3 = $result3->fetch_array())
		{
			$message[]     =	 $row3['message'];
			$senderid[]     =	 $row3['senderid'];
		    $reciverid[]     =	 $row3['reciverid'];
		}
}
}

?>

<!-- RIGHT COLUMN -->   
            <div class="s-12 m-8 l-9">
               <div class="box">
                  <!-- HEADER -->     
                  <!-- CAROUSEL --> 
                  <div class="line">
                  <section>
                     <article class="line">
                        <div>
							<div class="s-12 m-12 l-12">

<fieldset style="width:99.9%;height:92%; margin-left: auto;margin-right: auto;">
        <legend style="color:red;font-size:200%; text-transform: uppercase;"><?php echo $userfriendid;?></legend>		

<div class="display" style="overflow:auto;">
<?php
for($k=0;$k<$mrowcount1;)
{
	$messages=$message[$k];
	$replacechar=array();
$storechar=array();
$concents="";
$oringnalstring=$messages;
$stringlength = strlen($oringnalstring);
$data = $oringnalstring;
$n=0;
for($i=0;$i<$stringlength;)
{
	$singlechar=substr($data,$i,1);
	$storechar[$i]=$singlechar;
	$i++;
}
for($j=0;$j<$stringlength;)
{
	$singlestorechar=$storechar[$j];
for($i=32;$i<127;)
{
$oringnalchar=chr($i);	
if (strpos($singlestorechar , $oringnalchar) === false) {
}else{
	$replacecharvalue=$i-3;
	$changechar=chr($replacecharvalue);
	$replacechar[$j]=str_replace($oringnalchar,$changechar, $singlestorechar);
	$concents=$concents.$replacechar[$j];
}
$i++;
}
$j++;
}
	if(($senderid[$k] == $loginuserid) && ($reciverid[$k] == $userfriendid)){
		echo "<table><tr><td style='float:right;background-color:lightgrey;border-bottom: 6px solid blue; margin-right:2%;'> ".$concents."</td></tr></table>";
	}
	if(($senderid[$k] == $userfriendid) && ($reciverid[$k] == $loginuserid)){
		echo "<table><tr><td style='float:left;background-color:lightgrey;border-bottom: 6px solid red;margin-left:2%;'>".$concents."</td></tr></table>";
	}
	$k++;
}

?>
</div>
<div> 
<form method=POST action="">
<input type=text name=message class="message" value="" autofocus>

</input>
<button class="sendbutton" type=submit name=sendmessage >send</button>
</form>
</div>

</fieldset>						
							</p>
					</form>
                           </div>
                        </div>
                     </article>
                  </section>
               </div>
			
<?php include('footer.php'); ?>			
			
</body>

	
</html>

