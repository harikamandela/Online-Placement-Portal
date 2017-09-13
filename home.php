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
		<a href="chpwd.php">Change Password</a>
		<a href="profile.php">Profile</a>
		<a href="signout.php">Sign Out</a>
		</div>
		
	</div>
	
	<div id="contentarea">
		<h2>Hi,<?php echo $var; ?></h2>
	</div>
	
	
	</div>
	<div id="footer">
		</div>
</div>
</body>

</html>