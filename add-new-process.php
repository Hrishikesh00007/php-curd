<?php

include ('connection.php');

$sql=("INSERT INTO `newtest` (`name`,`email`,`age`,`city`) VALUES 
('".$_POST['name']."','".$_POST['email']."','".$_POST['age']."','".$_POST['city']."')");

$res=mysqli_query($con,$sql);

if($res){
    header('location:display.php');
}


?>