<?php

session_start();

$name="";
$location="";
$id=0;

$db=mysqli_connect('localhost','root','','crud') or die ("Failed to connect");

if(isset($_POST['save'])){
	$name=$_POST['name'];
	$location=$_POST['location'];

	$query="INSERT INTO 'info' (name,location) VALUES ('$name','$location')";

	mysqli_query($db,$query);

	$_SESSION['msg']="SAVED...";
	header('location: index.php');
}

$results=mysqli_query($db,"SELECT * FROM `info`");
?>