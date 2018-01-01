<?php

	include('server.php');

	//fetch records to be updated... 
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$rec=mysqli_query($db,"SELECT * FROM info where id=$id");
		$record=mysqli_fetch_array($rec);
		$id=$record['id'];
		$name=$record['name'];
		$location=$record['location'];
		$edit_state=true;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Crud</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['msg'])): ?>
		<div class="msg">
			
			<?php 
				echo $_SESSION['msg'];
				unset($_SESSION);
			?>
		</div>	
	<?php endif; ?>


	<table>
		<thead>
			<th>Name</th>
			<th>Location</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($results))  { ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['location']; ?></td>
					<td><a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
					<td><a class="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a></td>	
				</tr>
			<?php } ?>		
		</tbody>
	</table>

	<form method="post" action="server.php"> 
		<input type="hidden" name="id" value="<?php echo $id; ?>"> 
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>">
		</div>
		
		<div class="input-group">
			<label>Location</label>
			<input type="text" name="location" value="<?php echo $location; ?>">
		</div>
	
		<div class="input-group">
			<?php if ($edit_state==false) { ?>
				<button class="btn" name="save" type="submit">Save</button>
			<?php }else{ ?>
				<button class="btn" name="update" type="submit">Update</button>
			<?php } ?>
		</div>
	</form>

</body>
</html>