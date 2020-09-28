<?php
session_start();
if(isset($_SESSION['user']))
{
	header('location:profile.php');
}
?>
<html>
<head>
	<title>Login</title>
<style type="text/css">
		body{
		background-image: url("back.jpg");
		background-size:cover;
		background-repeat:no-repeat;
		background-position:fixed;
		}
		
		
		.login_form{
			background-color:rgba(0,0,0,0.3);
			width:25%;
			height:310px;
			padding:20px;
			border-radius:15px;
			position:absolute;
			float:right;
			right:100px;
			top:100px;
			font-weight:700;
			color:white;
		}
		
		.login
		{
		width:75%;
		height:40px;
		margin-top:40px;
		margin-left:40px;
		border-radius:5px;
		background-color:rgba(255,83,26,0.5);
		color:white;
		
		}
		
		::placeholder{
			color:white;
		}
		.button{
			margin:top:40px;
			margin:left:40px;
			border-radius:5px;
			height:30px;
			width:100px;
			background-color:#ff531a;
			margin-left:40px;
			margin-top:30px;
			font-weight:700;
			color:white;
			
			
		}
	h3
{
	font-size:180%;
	text-align:center;
	width:35%;
	display:inline-block;
	margin:0;
	padding:0;
	text-shadow:2px 3px 5px blue;
}
.links a
{
	font-size:15px;
	height:20px;
	line-height:25px;
	text-decoration:none;
	color:blue;
}
.alert
{
	color:red;
	font-size:100%;
	display:inline-block;
	width:60%;
	text-align:center;
	margin:0;
	padding:0;
}
</style>
</head>
<body>

<div class="login_form">

<h3>Login</h3>
<p class="alert">
<?php
if(@isset($_GET['m']))
{
	echo $_GET['m'];
}
?>
</p>
<form action="lo.php" method="post">
	<input class="login" type="text" name="uname" placeholder="Enter Registered Mob.No" required></input><br>
	<input class="login" type="password" name="pass" placeholder="Enter password..." required></input><br>
	<input class="button" type="submit" name="submit" value="submit"></input>
	


</form>
<span class="links">
<a href="forgot.php">Forget Password ?</a>
</span>
</div>

</body>
</html>