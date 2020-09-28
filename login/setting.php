<?php
session_start();
include("conn.php");
$email=$_SESSION['user'];
if($email==true)
{
	$q="SELECT * from webdesign WHERE phone='$email'";
	$run=mysqli_query($con,$q);
	$d=mysqli_fetch_assoc($run);
	if(isset($_POST['submit']))
	{
		$dpas=$d['pass'];
		$opass=$_POST['o_pass'];
		$npass=$_POST['n_pass'];
		$cpass=$_POST['c_pass'];
		if($npass==$cpass)
		{
			if($dpas==$opass)
			{
				$u="UPDATE `webdesign` SET `pass`='$npass' WHERE phone='$email'";
				$result = mysqli_query($con,$u);
				if($result==true)
				{
			
				header('location:setting.php?up=sss');
				}
				else
				{
				header("location:profile.php");
				}
			}
			else
			{
				header('location:setting.php?ms=Old Password Incorrect !!');
			}
		}
		else
		{
			header('location:setting.php?ms=Cofirm Password Not Matched !!');
		}
			
	}	

}
else
{
	header('location:index.php');
}
?>

<html>
<head>
<title>Home</title>	

<link rel="stylesheet" type="text/css" href="sstyle.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
if(@isset($_GET['up']))
{
	echo '<script>swal("Good job!", "Password Change successfull!", "success");</script>';
}
?>
<div class="contener">
<div class="header">
<h2>Welcome <font style=color:#fff;><?php echo $d['name'];?></font></h2>
</div>

<div class="wriper">
<div class="pas_change">
<p style=color:red;>
<?php
if(@isset($_GET['ms']))
{
	echo $_GET['ms'];
}
?>
</p>
<form method="post" action="">
<p>Enter Old Password:-</p>
<input class="login" type="text" name="o_pass">
<p>Creat New Password:-</p>
<input class="login" type="text" name="n_pass">
<p>Confirm Password:-</p>
<input class="login" type="text" name="c_pass"></br>
<input type="submit" name="submit" class="btn" value="Submit">
</form>
</div>
<div class="r_sides">
<ul>
<li><a href="profile.php">Profile<i class="fas fa-user"></i></a></li>
<li><a class="active" href="#">Settings<i class="fas fa-cog"></i></a></li>
<li></i><a href="logout.php">Sign Out<i class="fas fa-sign-out-alt"></i></a></li>
</ul>
</div>
</div>
<div class="footer">
<h5>Designed by K-9</h5><img src="lion.png" height="30px" width="30px">

</div>
</div>
</body>
</html>
