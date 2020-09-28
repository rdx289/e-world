<?php
include("login/conn.php");

$q="SELECT * from webdesign WHERE phone='8987485092'";
$run=mysqli_query($con,$q);
$r=mysqli_fetch_assoc($run);
?>
<?php
include("login/conn.php");

$q="SELECT * from webdesign WHERE phone='7549903999'";
$run=mysqli_query($con,$q);
$t=mysqli_fetch_assoc($run);
?>
<?php
include("login/conn.php");

$q="SELECT * from webdesign WHERE phone='9525178942'";
$run=mysqli_query($con,$q);
$s=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Design BY</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="wholediv">
	<!-------------------taukir---------------->

   <div class="developer-profile">
         <div class="developer-info">
           <img src="login/<?php echo $t['pic'];?>" alt="image">
         	 <div class="developer-data">
             <h1><?php echo $t['name'];?></h1>
             <h3><?php echo $t['designation'];?></h3>
             <hr><br>
             <h4><table>
               <tr>
                 <td>Age</td> <td>: </td> <td><?php echo $t['age'];?></td>
               </tr>
               <tr>
                 <td>Phone</td> <td>: </td> <td>+91 <?php echo $t['phone'];?></td>
               </tr>
               <tr>
                 <td>email</td> <td>: </td> <td><?php echo $t['email'];?></td>
               </tr>
             </table></h4>

           </div>
         </div>
        <!--    --->
        <div class="social">
              <ul>
                <li> <a href="<?php echo $t['fb'];?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="<?php echo $t['insta'];?>" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="<?php echo $t['twiter'];?>" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="<?php echo $t['in'];?>" target="_blank"> <i class="fab fa-linkedin"></i> </a> </li>
                <li> <a href="<?php echo $t['google'];?>" target="_blank"> <i class="fab fa-google-plus-g"></i> </a> </li>
                <li> <a href="http://www.eworldranchi.tk/login/download.php?rid=7549903999"> <i class="fas fa-arrow-down"></i> </a> </li>
              </ul>

         </div>

        <!-- -->
      </div>
      <!-----------------rishav------------- -->
      <div class="developer-profile">
         <div class="developer-info">
           <img src="login/<?php echo $r['pic'];?>" alt="image">
           <div class="developer-data">
             <h1><?php echo $r['name'];?></h1>
             <h3><?php echo $r['designation'];?></h3>
             <hr><br>
             <h4><table>
               <tr>
                 <td>Age</td> <td>: </td> <td><?php echo $r['age'];?></td>
               </tr>
               <tr>
                 <td>Phone</td> <td>: </td> <td>+91 <?php echo $r['phone'];?></td>
               </tr>
               <tr>
                 <td>email</td> <td>: </td> <td><?php echo $r['email'];?></td>
               </tr>
             </table></h4>

           </div>
         </div>
        <!--    --->
        <div class="social">
              <ul>
                <li> <a href="<?php echo $r['fb'];?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="<?php echo $r['insta'];?>" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="<?php echo $r['twiter'];?>" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="<?php echo $r['in'];?>" target="_blank"> <i class="fab fa-linkedin"></i> </a> </li>
                <li> <a href="<?php echo $r['google'];?>" target="_blank"> <i class="fab fa-google-plus-g"></i> </a> </li>
                <li> <a href="http://www.eworldranchi.tk/login/download.php?rid=8987485092" > <i class="fas fa-arrow-down"></i> </a> </li>
              </ul>

         </div>

        <!-- -->
      </div>

      <!--------------------Shakil------------------ -->






      <div class="developer-profile">
         <div class="developer-info">
           <img src="login/<?php echo $s['pic'];?>" alt="image">
           <div class="developer-data">
             <h1><?php echo $s['name'];?></h1>
             <h3><?php echo $s['designation'];?></h3>
             <hr><br>
             <h4><table>
               <tr>
                 <td>Age</td> <td>: </td> <td><?php echo $s['age'];?></td>
               </tr>
               <tr>
                 <td>Phone</td> <td>: </td> <td>+91 <?php echo $s['phone'];?></td>
               </tr>
               <tr>
                 <td>email</td> <td>: </td> <td><?php echo $s['email'];?></td>
               </tr>
             </table></h4>

           </div>
         </div>
        <!--    --->
        <div class="social">
              <ul>
                <li> <a href="<?php echo $s['fb'];?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="<?php echo $s['insta'];?>" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                <li> <a href="<?php echo $s['twiter'];?>" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="<?php echo $s['in'];?>" target="_blank"> <i class="fab fa-linkedin"></i> </a> </li>
                <li> <a href="<?php echo $s['google'];?>" target="_blank"> <i class="fab fa-google-plus-g"></i> </a> </li>
                <li> <a href="http://www.eworldranchi.tk/login/download.php?rid=9525178942" > <i class="fas fa-arrow-down"></i> </a> </li>
              </ul>

         </div>

        <!-- -->
      </div>










    </div>

  </body>
</html>
