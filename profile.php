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
		<a class="active" href="profile.php">Profile</a>
		<a href="signout.php">Sign Out</a>
		</div>
		
	</div>
	
	<div id="contentarea">
		<h2>Hi,<?php echo $var; ?></h2>
		<table border="1" align="center">
		<tr>
		<th>User Id</th>
		<th>Email</th>
		<th>Mobile no.</th>
		<th>City</th>
		<th>Gender</th>
		</tr>
		<?php 
			$link=mysqli_connect("localhost","root","","email");
			//mysql_select_db("email",$link);
			if(!$link)
				{
					echo "Connection failed".mysql_error();
				}
			$query="select * from register where email='".$var."'";
			$sql=mysqli_query($link,$query) or die("Query failed".mysql_error());
			if(mysqli_num_rows($sql)>0)
				{
					while( $row=mysqli_fetch_row($sql))
					{
						echo "<tr class='rowB'>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>".$row[4]."</td>";
						echo "<td>".$row[5]."</td>";
						echo "</tr>";
					}
				}
		?>
		</table>
						
	</div>
	
	
	</div>
	<div id="footer">
		</div>
</div>
</body>

</html>