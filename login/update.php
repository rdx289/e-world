<?php
session_start();
include("conn.php");
if(isset($_POST['submit']))
{
	$email=$_SESSION['user'];
	$pp=$_FILES['image']['name'];
	
	$rm=$_FILES['resume']['name'];
	$rmtemp=$_FILES['resume']['tmp_name'];
	
	$name=$_POST['fname'];
	$deg=$_POST['designation'];
	$age=$_POST['age'];
	$em=$_POST['email'];
	$mob=$_POST['mob'];
	$fb=$_POST['fb'];
	$insta=$_POST['insta'];
	$twiter=$_POST['twiter'];
	$in=$_POST['linkedin'];
	$google=$_POST['google'];
	if($pp=="")
	{
		$folder=$_SESSION['im'];
	}
	else
	{
		$un=$_SESSION['im'];
		/*unlink($un);
		$r=rand(1,500);*/
		$folder = "picture/" /*.$r*/ .$pp;
		move_uploaded_file($_FILES['image']['tmp_name'],$folder);
	
		
	}
	
	if($rm=="")
	{
		$folder1=$_SESSION['res'];
	}
	else
	{
		$unn=$_SESSION['res'];
		unlink($unn);
		$r=rand(1,500);
		$folder1 = "resumes/".$r.$rm;
		move_uploaded_file($rmtemp,$folder1);
	}
		$u="UPDATE `webdesign` SET `name`='$name',`designation`='$deg',`age`='$age',`email`='$em',`phone`='$mob',`pic`='$folder',`fb`='$fb',`insta`='$insta',`twiter`='$twiter',`in`='$in',`google`='$google',`resume`='$folder1' WHERE phone='$email'";
		$result = mysqli_query($con,$u);
		if($result==true)
		{
			
			header('location:profile.php?up=sss');
		}
		else
			{
				header('location:profile.php?upp=sss');
			}
}
		else
		{
			header("location:index.php");
	
		}
	
?>