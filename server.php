<?php

	session_start();

	$name="";
	$location="";
	$id=0;
	$edit_state=false;
	$db=mysqli_connect('localhost','root','','crud') or die ("Failed to connect");

	if(isset($_POST['save'])){
		$name=$_POST['name'];
		$location=$_POST['location'];

		$query="INSERT INTO info (name,location) VALUES ('$name','$location')";

		mysqli_query($db,$query);

		$_SESSION['msg']="SAVED...";
		header('location: index.php');
	}

	//update records
	if(isset($_POST['update'])){
		$name=mysql_real_escape_string($_POST['name']);
		$location=mysql_real_escape_string($_POST['location']);
		$id=mysql_real_escape_string($_POST['id']);

		mysqli_query($db,"UPDATE info  SET name='$name', location='$location' where id=$id ");

		$_SESSION['msg']="VALUES UPDATED";

		header('location: index.php');
	}

	//deleting records
	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM info where id=$id ");
		$_SESSION['msg']="RECORD DELETED";
		header('location:index.php');		
	}

	$results=mysqli_query($db,"SELECT * FROM `info`");
?>