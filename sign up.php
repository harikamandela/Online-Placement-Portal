<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>IIS</title>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</head>

<body>
<div id="page">
	<div id="header">
<img src="images\home.jpg" title="R & D TECHNOLOGY">
	</div>
	
	<div id="mainarea">
	<div id="sidebar">
		<div id="sidebarnav">
		<a href="index.php">Home</a>
		<a href="sign in.php">Sign In</a>
		<a class="active" href="sign up.php">Sign Up</a>
		</div>
		
	</div>
	
	<div id="contentarea">
						
										<form action="regisproc.php" method="POST">
											<table border="1" align="center">
											<tr>
											<th colspan=2><h2>Register</h2></th>
											</tr>
											<tr class='rowB'>
											<td>User Id:</td>
											<td><input name="uid" type="text" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Password:</td>
											<td><input name="apwd" type="password" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Conform Password.:</td>
											<td><input name="pwd" type="password" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Email:</td>
											<td><input name="email" type="text" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Contact No.:</td>
											<td><input name="mob" type="text" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>City:</td>
											<td>
											<select name="city">
													<option value="surat">Surat</option>
													<option value="baroda">Baroda</option>
													<option value="valsad">Valsad</option>
													<option value="ahmedabad">Ahmedabad</option>
													<option value="mumbai">Mumbai</option>
													<option value="jaypur">Jaypur</option>
													<option value="delhi">Delhi</option>
													<option value="goa">Goa</option>
													<option value="rajkot">Rajkot</option>
											</select>
											</td>
											</tr>
											<tr class='rowB'>
											<td>Gender:</td>
											<td>
												<input name="gen" type="radio"  value="male"  />Male
												<input name="gen" type="radio"  value="female" />Female</td>
											</tr>
											<tr class='rowB'>
											<td colspan="2"><center><input type="submit" class="btn" title="Register" value="Register"/>
											&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn" title="Reset" value="Reset"/></center></td>
											</tr>
										</table>
										<?php
											if(isset($_GET['mispwd']))
												{
													if($_GET['mispwd']=="yes")
														{
															echo "<center>Password is Mismatch.</center>";
														}
												}
										?>
										</form>
									
	</div>
	
	
	</div>
	
	<div id="footer">
		</div>
</div>
</body>

</html>