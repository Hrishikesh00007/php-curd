<?php 

include ('connection.php');

$sql="UPDATE `newtest` SET `name`='".$_POST['name']."',`email`='".$_POST['email']."', `age`='".$_POST['age']."',`city`='".$_POST['city']."'
 WHERE `id`='".$_GET['updateid']."'   ";

$res=mysqli_query($con,$sql);

if($res){
header('location:display.php');
}

?>