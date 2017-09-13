<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
 session_start();
 $var=$_SESSION['umail'];
 	if(!isset($_SESSION['umail']))
		{
			header('location:index.php');
		}
	$inflag=0;
	$id=$_GET['id'];
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
		<a class="active" href="inbox.php">Inbox</a>
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
				$link=mysqli_connect("localhost","root","","email");
				//mysql_select_db("email",$link);
				if(!$link)
				{
					echo "Connection failed".mysql_error();
				}
				$query="select * from inbox where too='".$var."' and flag='".$inflag."' and id='".$id."'";
				$sql=mysqli_query($link,$query) or die("Query failed".mysql_error());
				if(mysqli_num_rows($sql)>0)
				{
					while( $row=mysqli_fetch_row($sql))
					{
						$frm=$row[1];
						$sub=$row[3];
						$msg=$row[4];
					}
				}
				
		?>	
			<table border="1" align="center">
				<tr class='rowB'>
					<td>From:</td>
					<td><input name="frm" type="text" class="textbox" value="<?php echo $frm; ?>" readonly /></td>
				</tr>											
				<tr class='rowB'>
					<td>Subject:</td>
					<td><input name="sub" type="text" class="textbox" value="<?php echo $sub; ?>" readonly /></td>
				</tr>
				<tr class='rowB'>
					<td>Message:</td>
					<td><textarea name="msg" cols="16" rows="5" class="textbox" readonly  ><?php echo $msg; ?></textarea></td>
				</tr>
			</table>
	</div>
	
	
	</div>
	
	<div id="footer">
		</div>
</div>
</body>

</html>
