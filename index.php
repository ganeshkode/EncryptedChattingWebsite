<!DOCTYPE html>
<html>
<?php
include('header.php');
session_start();

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
                          
                           <div class="s-12 m-12 l-6">
                              <form method="POST" action="login.php">
						<p>
						<h1>Login Section</h1>
						<h4>
						
					    <br>
						<div class="loginsec " id="admin">
						<div class="pos" id="error1"><?php include("error1.php");
						$myfile1 = fopen("error1.php", "w") or die("Unable to open file!");
                        $txt1 = '<?php $error=""; echo $error;?>';
                        fwrite($myfile1, $txt1);
                        fclose($myfile1);
						?>
						</div>
							
							User Id
							<br>
							
							<input type="text" name="userid" autofocus ></input>
							<br>
							<br>
							Password
							<br>
							
							<input type="password" name="password"></input>
							<br>
							<br>
							<button type="submit" name="login">Login</button>
							<br>
							<br>
							<button type="submit" name="signup">Create Account</button>
							
						   <br><br><br>
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

