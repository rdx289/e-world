<?php
session_start();
include("conn.php");
$email=$_SESSION['user'];
if($email==true)
{
$q="SELECT * from webdesign WHERE phone='$email'";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);
$_SESSION['im']=$d['pic'];
$_SESSION['res']=$d['resume'];
}
else
{
	header('location:index.php');
}
?>

<html>
<head>
<title>Home</title>	

<link rel="stylesheet" type="text/css" href="pstyle.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php
if(@isset($_GET['up']))
{
	echo '<script>swal("Good job!", "Update successfull!", "success");</script>';
	
}
else if(@isset($_GET['upp']))
{
	echo '<script>swal ( "Oops" ,  "Something went wrong!" ,  "error" );</script>';
	
}

?>
<div class="contener">
<form method="post" action="update.php" enctype="multipart/form-data">
<div class="header">
<h2>Welcome <font style=color:#fff;><?php echo $d['name'];?></font></h2>
</div>
<div class="wriper">
<div class="sides">
<h3>Profile</h3>
<div class="dp">
<img src="<?php echo $d['pic'];?>" width="100%"height="100%">
</div>
<input type="file" name="image" class="up">
<h2><center>Resume</center><h2>
<input type="file" name="resume" accept="application/pdf">
</div>
<div class="datas">
<input class="login_email" type="text" name="fb" value="<?php echo $d['fb'];?>" placeholder="ex:https://facebook">
<input class="login_mob" type="text" name="insta" value="<?php echo $d['insta'];?>" placeholder="ex:https://insta">
<input class="login_email" type="text" name="twiter" value="<?php echo $d['twiter'];?>" placeholder="ex:https://twiter">
<input class="login_mob" type="text" name="google" value="<?php echo $d['google'];?>" placeholder="ex:https://google">
<input class="login_email" type="text" name="linkedin" value="<?php echo $d['in'];?>" placeholder="ex:https://linkedin">

 
 
<input class="login" type="text" name="fname" value="<?php echo $d['name'];?>">
<input class="login" type="text" name="designation" value="<?php echo $d['designation'];?>" placeholder="designation">
<input class="login" type="text" name="age" value="<?php echo $d['age'];?>">
<input class="login_email" type="text" name="email" value="<?php echo $d['email'];?>" placeholder="email">
<input class="login_mob" type="text" name="mob" value="<?php echo $d['phone'];?>" readonly>
</div>
<div class="r_sides">
<ul>
<li><a href="setting.php">Settings<i class="fas fa-cog"></i></a></li>
<li></i><a href="logout.php">Sign Out<i class="fas fa-sign-out-alt"></i></a></li>
</ul>
</div>
</div>
<div class="det">
<!---------<h4>Address:</h4>
<textarea name="details"><?php echo $d['address'];?></textarea>----------->
<input class="btn" type="submit" name="submit" value="Update Informtion">
</div>
</form>
<div class="footer">
<h5>Designed by K-9</h5><img src="lion.png" height="30px" width="30px">
</div>
</div>
</body>
</html>
