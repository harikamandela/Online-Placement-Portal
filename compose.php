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
		<a class="active" href="compose.php">Compose</a>
		<a href="inbox.php">Inbox</a>
		<a href="sent.php">Sent</a>
		<a href="draft.php">Draft</a>
		<a href="trash.php">Trash</a>
		<a href="chpwd.php">Change Password</a>
		<a href="profile.php">Profile</a>
		<a href="signout.php">Sign Out</a>
		</div>
		
	</div>
	
	<div id="contentarea">
		<h2>Hi,<?php echo $var; ?></h2>
						<?php
							if(isset($_GET['sent']))
								{
									if($_GET['sent']=="success")
											{
												echo "<center>Message Has Been Sent.</center>";

											}
								}
							if(isset($_GET['save']))
								{
									if($_GET['save']=="success")
											{
												echo "<center>Message Has Been Saved.</center>";
											}
								}
							if(isset($_GET['user']))
								{
									if($_GET['user']=="no")
											{
												echo "<center><font color='red'>Receiver Is Not Registered User</font></center>";
											}
								}
						?>
									<form action="composeproc.php" method="post">
											<table border="1" align="center">
											<tr class='rowB'>
											<td>To:</td>
											<td><input name="to" type="text" class="textbox" /></td>
											</tr>											
											<tr class='rowB'>
											<td>Subject:</td>
											<td><input name="sub" type="text" class="textbox" /></td>
											</tr>
											<tr class='rowB'>
											<td>Message:</td>
											<td><textarea name="msg" cols="16" rows="5" class="textbox" ></textarea></td>
											</tr>
											<tr class='rowB'>
											<td colspan="2"><center><input type="submit" class="btn" title="Send Email" value="Send" name="send"/>
											&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn" title="Save As draft" value="Save As Draft" name="save"/></center></td>
											</tr>
											</table>
									</form>
	</div>
	
	
	</div>
	
	<div id="footer">
		</div>
</div>
</body>

</html>