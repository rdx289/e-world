

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/hstyle.css">
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	
	<style>@media screen and (max-width:1000px)
{
	.footer
	{
		position:relative;
		bottom:0;
		margin-top:300px;
	}
}
</style>
</head>
<body>
<!------------------------------Header----------------------------->
<div class="header2">
<a href="index.php"><img src="image/logo.png" height="40" width="10%" align="left"/></a>
<ul>
<li><a class="no_active" href="index.php">Home</a></li>
<li><a class="no_active" href="#"><i class="fas fa-caret-down"></i>About</a>
	<ol class="under-about">
		<li><a href="vision/vission.php">Vision & Mission</a></li>
		<li><a href="director/director.php">CMD</a></li>
		<li><a href="director/managing_d.php">Chairman</a></li>
		</ol>
</li>
<li><a class="no_active" href="#"><i class="fas fa-caret-down"></i>Course</a>
<ol class="under-about1">
		<li><a class="no_active" href="#">Computer Zone<i class="fas fa-caret-right"></i></a>
			<ol class="under_comscience">
			<li><a class="no_active" href="comp_basic.php">Basic</a></li>
			<li><a class="no_active" href="comp_program.php">Programming</a></li>
			
			</ol>
		</li>
		<li><a href="#">Science<i class="fas fa-caret-right"></i></a>
		<ol class="under_comscience1">
			<li><a href="cource/junior.php">Junior(6,7,8,9,10)</a></li>
			<li><a href="cource/intermediate_science.php">Intermediate</a></li>
			<li><a href="cource/iitjee.php">IIT-JEE</a></li>
			<li><a href="cource/medical.php">Medical</a></li>
			<li><a href="cource/science_hons.php">Honours</a></li>
			</ol>
		</li>
		<li><a href="#">Commerce<i class="fas fa-caret-right"></i></a>
		<ol class="under_comscience2">
			<li><a href="cource/intermediate_com.php">Intermediate</a></li>
			<li><a href="cource/commerce_hons.php">Honours</a></li>
			</ol>
		</li>
		<li><a href="#">Arts<i class="fas fa-caret-right"></i></a>
		<ol class="under_comscience4">
			<li><a href="cource/economics.php">Economics</a></li>
			</ol>
		</li>
		<li><a href="#">Vocational<i class="fas fa-caret-right"></i></a>
		<ol class="under_comscience5">
			<li><a href="cource/bba.php">BBA</a></li>
			<li><a href="cource/mba.php">MBA</a></li>
			</ol>
		</li>
		<li><a href="#">Competition<i class="fas fa-caret-right"></i></a>
		<ol class="under_comscience3">
			<li><a href="cource/ssc.php">SSC</a></li>
			<li><a href="cource/banking.php">Banking</a></li>
			<li><a href="cource/railway.php">Railway</a></li>
			</ol>
		</li>
		</ol>
</li>
<li><a class="no_active" href="faculty/faculty.php">Faculty</a>
</li>
<li><a class="no_active" href="gallery.php">Gallery</a></li>
<li><a class="active" href="#">Contact Us</a></li>
</ul>
</div>
<!---------------------------Image---------------->
<div class="header-image">
<img src="image/p.jpg" width="100%" height="150px">
</div>
<div class="header-title">
<h1>Contact Us</h1>
</div>
<!----------------------contact--------------------->
<div class="contact">
<div class="part1">
<div class="ss">
<div class="ic">
<i class="fas fa-map-marker-alt"></i>
</div>
<div class="add"><h6>ADDRESS:</h6>
<p>2nd Floor, Room NO - 209,215, Hariom Tower,Circular Road, Ranchi, Jharkhand 834001<p></div>
</div>
<div class="ss">
<div class="ic"><i class="fas fa-phone"></i></div>
<div class="add"><h6>OUR CONTACT NUMBER</h6>
<p>+91 9304463336
<br>+91 9835163251</p></div>
</div>
<div class="ss">
<div class="ic"><i class="far fa-envelope"></i></div>
<div class="add"><h6>OUR CONTACT E-MAIL</h6>
<p>eworldmedical@gmail.com</p></div>
</div>
</div>
<div class="part2">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.344124253711!2d85.33121531444876!3d23.375765008902263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e11320dd1c41%3A0xc507bf477c3380b5!2sE-World!5e0!3m2!1sen!2sin!4v1550311046162" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
   
</div>
<div class="entry">
<p style=color:red;>
<?php
if(@isset($_GET['ms']))
{
	echo $_GET['ms'];
}
?>
</p>
<form action="send.php" method="post">
		  <input class="cont" type="text" name="name" placeholder="Enter Your Name*" required>
		  
		  <input class="cont" type="email" name="email" placeholder="Enter Your Email*" required>
		  
		  <input class="cont" type="number" name="mob" placeholder="Enter Your Mobile number">
		  
		  <input class="cont" type="text" name="sub" placeholder="Subject">
		  
		  <textarea  id="txt" name="msg" placeholder="Write something.."></textarea>
		  
		  <input id="submit" type="submit" value="Submit" name="submit">
</form>
</div>
</div>

</div>
<!---------------------------Footer---------------->
<div class="footer">
<div class="mainfooter">
<div class="under_footer1">
<h2 style="color:#cce0ff";>e-world</h2>
<i class="fas fa-map-marker-alt"></i>
<blockquote>
  <p> 2nd Floor, Room NO - 209,215, Hariom Tower,Circular Road, Ranchi, Jharkhand 834001</p>
</blockquote>
<i class="fas fa-phone-square"></i><div class="mobb">9304463336</div>
</div>
<div class="under_footer2">
  <blockquote>
    <h6><strong>UsefulLinks </strong></h6>
  </blockquote>
  <ul>
  <li><a href="index.php">Homepage</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="#">Term & Condition</i></a></li>
  </ul>
</div>

<div class="under_footer4">
<h6>Get in Touch</h6>
<form>
<input class="suscr" type="text" name="uname" placeholder="Enter Your Name.." required>
<input class="suscr" type="text" name="email" placeholder="Enter Your Email.." required>
<input class="suscr" type="text" name="mob" placeholder="Enter Your Ph.No.." required>
<input class="btnn" type="submit" value="Suscribe" name="submit">
</form>

</div>
</div>
<div class="second_footer">
©2018 ALL RIGHTS RESERVED e-world<p><a href="designby.php" target="_blank">Designed By K-9</a></p>
</div>
</div>
</body>
</html>
