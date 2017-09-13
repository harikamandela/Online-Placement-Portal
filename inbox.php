<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
 session_start();
 $var=$_SESSION['umail'];
 	if(!isset($_SESSION['umail']))
		{
			header('location:index.php');
		}
	$inflag=0;
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
		if(isset($_GET['delete']))
			{
				if($_GET['delete']=="success")
					{
						echo "<center>Message Has Been deleted.</center>";
					}
			}
		?>
			<table border="1" align="center">
			<tr>
				<th>Date</th>
				<th>From</th>
				<th>Subject</th>
				<th>Read</th>
				<th>Delete</th>
			</tr>
		<?php
				$link=mysqli_connect("localhost","root","","email");
					//mysql_select_db("email",$link);
				if(!$link)
				{
					echo "Connection failed".mysql_error();
				}
				$query="select * from inbox where too='".$var."' and flag='".$inflag."'";
				$sql=mysqli_query($link, $query) or die("Query failed".mysql_error());
				if(mysqli_num_rows($sql)>0)
				{
					while( $row=mysqli_fetch_row($sql))
					{
						echo "<tr class='rowB'>";
						echo "<a href='readinbox.php?id=".$row[0]."'>";
						echo "<td>".$row[5]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td>";
						?>
						<?php 
						echo "<a href='readinbox.php?id=".$row[0]."'>"; ?><img src="images/read.ico" alt="read" height="15" width="15"></a>
						<?php
						echo "</td>";
						?>
						</a>
						<?php
						echo "<td>";
						echo "<a href='deleteinbox.php?id=".$row[0]."'>";
						?>
						<img src="images/delete.png" alt="delete" height="15" width="15">
						<?php
						echo "</td>";
						echo "</tr>";
						?>
						</a>
						<?php
					}
				}
				else
				{
					echo "<tr>";
				    echo "<th colspan='5'>";
					echo "No More Incoming Mails";
					echo "</th>";
					echo "</tr>";
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