<?php
 session_start();
 $email=$_SESSION['umail'];
 $pwd=$_SESSION['pwd'];
 $old=$_POST['old'];
 $new=$_POST['new'];
 $cnew=$_POST['cnew'];
 if($new==$cnew)
	{
	if($pwd==$old)
		{
			$link=mysqli_connect("localhost","root","","email");
		//	mysql_select_db("email",$link);
				if(!$link)
					{
						echo "Connection failed".mysql_error();
					}
					$query="update register set pwd='".$cnew."' where email='".$email."' and pwd='".$pwd."'";
					$result=mysqli_query($link, $query) or die("Query failed".mysql_error());
					if((mysqli_affected_rows($link)) >= 0)
					{
						header('location:chpwd.php?cngpwd=success');
					}
		}
	else
	{
	 header('location:chpwd.php?cngpwd=fail');
	}
	}
	else
	{
		header('location:chpwd.php?cngpwd=wrong');
	}
 ?>