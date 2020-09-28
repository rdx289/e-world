<?php
include("conn.php");
$idd=$_GET['rid'];
if($idd==true)
{
$q="SELECT * from webdesign WHERE id='$idd'";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);
$rs=$d['resume'];
header('content-Disposition: attachment; filename = '.$rs."");
header('content-type:application/octent-strem');
header('content-length='.filesize($rs));
readfile($rs);



}
else
{
	header('location:index.php');
}
?>