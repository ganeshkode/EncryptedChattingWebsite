<!DOCTYPE html>
<html>
	<?php
	include('connection.php');
include('header.php');
?>
				
<<!-- RIGHT COLUMN -->   
            <div class="s-12 m-8 l-9">
               <div class="box">
                  <!-- HEADER -->     
                  <!-- CAROUSEL --> 
                  <div class="line">
                  <section>
                     <article class="line">
                        <div>
						     <div class="s-12 m-12 l-12">
<div id="create form">

     <fieldset >
        <legend>Sign Up</legend> 
           <form method="POST" action="adduser.php">
				<table border="0 px">
					<tr> 
					<td> <h4>user details section</h1></td> 
					</tr>
					<tr> 
						<td>user full name :</td>
						<td> <input type="text" name="firstname" placeholder="enter first name" autofocus ></input></td>
						<td> <input type="text" name="lastname" placeholder="enter last name" ></input></td>
					</tr> 
					<tr> 
						<td>user id :</td>
						<td> <input type="text" name="adminid" placeholder="enter user id" ></input></td>
                        
					</tr> 
					<tr> 
						<td>Password :</td>
						<td> <input type="password" name="password" placeholder="enter password" ></input></td>
					</tr> 
					<tr> 
						<td>Conform Password :</td>
						<td> <input type="password" name="password" placeholder="enter password Again" ></input></td>
					</tr>
					<tr> 
					<td> <h4>Recovery section</h1></td> 
					</tr> 
					<tr> 
						<td>security question</td>
					</tr> 
					<tr> 
						<td>question</td>
						<td colspan=3> <select name="securityquestion" >
                                    <option value="What was your childhood nickname?" >What was your childhood nickname?</option>
                                    <option value="What is your favorite team?" >What is your favorite team?</option>
									<option value="In what city or town did your mother and father meet?" >In what city or town did your mother and father meet?</option>
                                    <option value="What was your favorite sport in high school?" >What was your favorite sport in high school?</option>
									<option value="What was the make and model of your first car?" >What was the make and model of your first car?</option>
                                    <option value="What was the name of the hospital where you were born?" >What was the name of the hospital where you were born?</option>
									<option value="What school did you attend for sixth grade?" >What school did you attend for sixth grade?</option>
                                    <option value="In what town was your first job?" >In what town was your first job?</option>
									<option value="What is the name of the place your wedding reception was held?" >What is the name of the place your wedding reception was held?</option>
                                    <option value="Which is your favorite college?" >Which is your favorite college?</option>
                             </select>
						</td>
					</tr>
					<tr> 
						<td>Answer :</td>
						<td> <input type="text" name="recoveryans" placeholder="enter Answer" ></input></td>
					</tr> 
					<tr>
					<tr id="email"> 
						<td>Email Id :</td>
						<td> <input type="email" name="recoveryemailid" placeholder="enter Email-id" ></input></td>
					</tr> 
					<tr id="phone"> 
						<td>phone no (optional) :</td>
						<td> <input type="tel" name="recoveryphone" placeholder="enter Phone no" ></input></td>
					</tr>
															
					<tr>
					<tr> 
					
					</tr>					
					<tr>
					<td><button type="submit" name="createuser" >create account</button></td>
					</tr>
					
		</table> 
			</form> 		
</fieldset>
		</fieldset>
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

