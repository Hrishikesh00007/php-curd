<?php 

include ('connection.php');

$sql=("DELETE FROM `newtest` WHERE `id`='".$_GET['deleteid']."'");

$result=mysqli_query($con,$sql);

if($result){
header('location:display.php');
}

?>