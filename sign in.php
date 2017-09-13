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
		<a class="active" href="sign in.php">Sign In</a>
		<a href="sign up.php">Sign Up</a>

		</div>
		
	</div>
	
	<div id="contentarea">
									<form action="signproc.php" method="post">
											<table border="1" align="center">
											<tr>
											<th colspan=2><h2>Sign In</h2></th>
											</tr>
											<tr class='rowB'>
											<td>User Email:</td>
											<td><input name="umail" type="text" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Password:</td>
											<td><input name="pwd" type="password" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td colspan="2"><center><input type="submit" class="btn" title="Log In" value="Log In"/>
											&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn" title="Reset" value="Reset"/></center></td>
											</tr>
											</table>
											<br>
											<?php
												if(isset($_GET['login']))
													{
														if($_GET['login']=="fail")
															{
																echo "<center><font color='red' size=5>User Email id or password is incorrect</font></center>";
															}
													}
												if(isset($_GET['reg']))
													{
														if($_GET['reg']=="sucess")
															{
																echo "<center>Regristration prcess sucessfully completed<br/>Now pls login With Your userid</center>";

															}
													}
												if(isset($_GET['logout']))
													{
														if($_GET['logout']=="success")
															{
																echo "<center>You are logged out</center>";
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