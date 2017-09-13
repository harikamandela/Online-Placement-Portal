<?php
 session_start();
 $frm=$_SESSION['umail'];
 $id=$_GET['id'];
 if(!isset($_SESSION['umail']))
	{
		header('location:index.php');
	}
	$link=mysql_connect("localhost","root","");
	mysql_select_db("email",$link);
	if(!$link)
		{
			echo "Connection failed".mysql_error();
		}
	$query="delete from inbox where id='".$id."'";
	$sql=mysql_query($query) or die("Query failed".mysql_error());	
	if((mysql_affected_rows())>0)
	{
		header('location:trash.php?msg=delete');
	}
	else
	{
		echo "Query failed";
	}
?>