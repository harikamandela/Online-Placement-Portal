<?php
$umail=$_POST["umail"];
$pwd=$_POST["pwd"];


$link=mysqli_connect("localhost","root","","email");
	//mysql_select_db("email",$link);
if(!$link)
	{
		echo "Connection failed".mysql_error();
	}
	$query="select * from register where email='".$umail."' and pwd='".$pwd."'";
	$result=mysqli_query($link,$query) or die("Query failed".mysql_error());
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_row($result);
		session_start();
		$_SESSION['umail']=$row[2];
		$_SESSION['pwd']=$row[1];
		$_SESSION['uid']=$row[0];		
		header('location:home.php?uid='.$umail.'');
	}
	else
	{
		header('location:sign in.php?login=fail');
	}
?>