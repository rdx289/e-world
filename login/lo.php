<?php
session_start();

include("conn.php");
if(isset($_POST['submit']))
{
	$email=$_POST['uname'];
	$pass=$_POST['pass'];
	
	$q="SELECT * from webdesign WHERE phone='$email'";
	$run=mysqli_query($con,$q);
	$r=mysqli_num_rows($run);
	if($r==1)
	{
		$p="SELECT * from webdesign WHERE pass='$pass' && phone='$email'";
		$run=mysqli_query($con,$p);
		$r=mysqli_num_rows($run);
		if($r==1)
		{
			$_SESSION['user']=$email;
			
			header('location:profile.php');
			
		}
		else
		{
			header('location:index.php?m=Password Is Wrong !!');
		}
	}
	else
	{
		header('location:index.php?m=Email Not Registered !!');
	}
}

else
{
	header('location:index.php');
}

?>