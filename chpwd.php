<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
 session_start();
 $var=$_SESSION['umail'];
 	if(!isset($_SESSION['umail']))
		{
			header('location:index.php');
		}
 ?>
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
		<a href="compose.php">Compose</a>
		<a href="inbox.php">Inbox</a>
		<a href="sent.php">Sent</a>
		<a href="draft.php">Draft</a>
		<a href="trash.php">Trash</a>
		<a class="active" href="chpwd.php">Change Password</a>
		<a href="profile.php">Profile</a>
		<a href="signout.php">Sign Out</a>
		</div>
		
	</div>
	
	<div id="contentarea">
		<h2>Hi,<?php echo $var; ?></h2>
									<form action="cpwdproc.php" method="Post">
											<table border="1" align="center">
											<tr class='rowB'>
											<th colspan=2><h2>Change Password</h2></th>
											</tr>
											<tr class='rowB'>
											<td>Old Password:</td>
											<td><input name="old" type="password" class="textbox" /></td>
											</tr>											
											<tr class='rowB'>
											<td>New Password:</td>
											<td><input name="new" type="password" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Conform Password:</td>
											<td><input name="cnew" type="password" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td colspan="2"><center><input type="submit" class="btn" title="Change Password" value="Change"/>
											&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn" title="Reset" value="Reset"/></center></td>
											</tr>
											</table>
											<?php
												if(isset($_GET['cngpwd']))
													{
														if($_GET['cngpwd']=="fail")
															{
																echo "<center>Your old password is mismatch,<br>Please enter Correct.</center>";
															}
													}
												if(isset($_GET['cngpwd']))
													{
														if($_GET['cngpwd']=="wrong")
															{
																echo "<center>New Password and Conform Password is mismatch</center>";
															}
													}
												if(isset($_GET['cngpwd']))
													{
														if($_GET['cngpwd']=="success")
															{
																echo "<center>Your password has been changed</center>";
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