<?php
	$uid=$_POST["uid"];
	$apwd=$_POST['apwd'];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
	$mob=$_POST["mob"];
	$city=$_POST["city"];
	$gender=$_POST["gen"];
	if($apwd == $pwd)
	{
		$link=mysqli_connect("localhost","root","","email");
		//mysql_select_db("email",$link);
		if(!$link)
		{
			echo "Connection failed".mysql_error();
		}
		$query="insert into register values('".$uid."','".$pwd."','".$email."','".$mob."','".$city."','".$gender."')";
		$sql=mysqli_query($link, $query) or die("Query failed".mysql_error());
	
		if((mysqli_affected_rows())>0)
		{
			header('location:sign in.php?reg=sucess');
		}
		else
		{
			echo "Query failed";
		}
	}
	else
	{
		header('location:sign up.php?mispwd=yes');
	}
	
?>	