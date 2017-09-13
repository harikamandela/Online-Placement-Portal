<?php
 session_start();
 $frm=$_SESSION['umail'];
 $to=$_POST['to'];
 $sub=$_POST['sub'];
 $msg=$_POST['msg'];
 $dt=date("Y-n-d");
 $send=$_POST['send'];
 $save=$_POST['save'];
 $inflag=0;
 $dflag=2;
 $sflag=3;
 if(isset($send))
 {
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
	$query="insert into inbox values('".$id."','".$frm."','".$to."','".$sub."','".$msg."','".$dt."','".$inflag."')";
	$sql=mysql_query($query) or die("Query failed".mysql_error());
	$query="insert into inbox values('".$id."','".$to."','".$frm."','".$sub."','".$msg."','".$dt."','".$sflag."')";
	$sql=mysql_query($query) or die("Query failed".mysql_error());
	if((mysql_affected_rows())>0)
	{
		header('location:compose.php?sent=success');
	}
	else
	{
		echo "Query failed";
	}
}
if(isset($save))
 {
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
	$query="insert into inbox values('".$id."','".$to."','".$frm."','".$sub."','".$msg."','".$dt."','".$dflag."')";
	$sql=mysql_query($query) or die("Query failed".mysql_error());
	
	if((mysql_affected_rows())>0)
	{
		header('location:compose.php?save=success');
	}
	else
	{
		echo "Query failed";
	}
}
?>