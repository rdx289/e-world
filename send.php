<?php
	if(isset($_POST['submit']))
	{
		$uname=$_POST['name'];
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		$msg=$_POST['msg'];
		$sub=$_POST['sub'];
		$to='eworldmedical@gmail';
		$subject='Contact';
		$message="Name :".$uname."\n"."Mobile :".$mob."\n"."Subject :".$sub."\n\n"."Message :"."\n".$msg;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers))
		{
			header('location:contact.php?ms=Thank You !!');
		}
		else{
			header('location:contact.php?ms=Something Went Wrong !!');
		}
			
	}	
	else if(isset($_POST['butn']))
	{
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		$to='eworldmedical@gmail';
		$subject='Suscribe';
		$message="Name :".$uname."\n"."Mobile :".$mob;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers))
		{
			header('location:index.php?ms=Thank You !!');
		}
		else{
			header('location:index.php?wrong=Something Went Wrong !!');
		}
			
	}
else
{
	header('location:contact.php');
}
?>