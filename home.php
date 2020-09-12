<html>
<?php
include('connection.php');
 include('session.php');
include('userheader.php');
$frowcount="";
$query2 = "SELECT * FROM user WHERE loginvalue='0'";
$result2 = $conn->query($query2);
if($result2 != ""){
$frowcount=$result2->num_rows;	
if ($frowcount > 0) 
{
    while($row2 = $result2->fetch_array())
		{
			$fuserid[]     =	 $row2['userid'];
		}
}else{
	$fsrno ="";
}
}
$orowcount="";
$query1 = "SELECT * FROM user WHERE loginvalue='1'";
$result1 = $conn->query($query1);
if($result1 != ""){
$orowcount=$result1->num_rows;		
if ($orowcount > 0) 
{
    while($row1 = $result1->fetch_array())
		{
			$ouserid[]     =	 $row1['userid'];
		    
		}
}else{
	$osrno ="";
}
}



?>
 
            <div class="s-12 m-8 l-9">
               <div class="box">
                  <!-- HEADER -->     
                  <!-- CAROUSEL --> 
                  <div class="line">
                  <section>
                     <article class="line">
                        <div>
							<div class="s-12 m-8 l-9">

<div class="s-12 m-8 l-9">
<?php
echo "<table class='s-12 m-8 l-9'><tr><td style='font-size:200%;color:black;width:10%;margin-left:5%;'>Online user</td></tr></table>";
if($orowcount == "1")
{
	echo "<table class='s-12 m-8 l-9'><tr><td><br></td></tr><tr><td><br></td></tr><tr><td><br></td></tr><tr><td><br></td></tr></table>";
}
for($i=0;$i<$orowcount;)
{
	if($ouserid[$i] != $loginuserid){
	echo "<table class='s-12 m-8 l-9'><tr><td><span class='fas fa-circle' style='font-size:18px;color:green;'></span><a href='message.php?userfriendid=".$ouserid[$i]."' style='font-size:150%;color:black;'>".$ouserid[$i]."</a></td></tr></table>";
	}
	$i++;
}
echo "<table><tr class='s-12 m-8 l-9'><td style='font-size:200%;color:black;;width:10%;margin-left:5%;'>Offline user</td></tr></table>";
if($frowcount == "")
{
	echo "<table class='s-12 m-8 l-9'><tr><td><br></td></tr><tr><td><br></td></tr><tr><td><br></td></tr><tr><td><br></td></tr></table>";
}
for($i=0;$i<$frowcount;)
{
	if($fuserid[$i] != $loginuserid){
	echo "<table><tr class='s-12 m-8 l-9'><td style='font-size:200%;color:black;width:10%;'><a href='message.php?userfriendid=".$fuserid[$i]."'>".$fuserid[$i]."</a></td></tr></table>";
	}
	$i++;
}
?>
  </div>
						
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