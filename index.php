<?php

include('server.php');

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
					<td><a href="#">Edit</a></td>
					<td><a href="#">Delete</a></td>	
				</tr>
			<?php } ?>		
		</tbody>
	</table>

	<form method="post" action="server.php"> 
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		
		<div class="input-group">
			<label>Location</label>
			<input type="text" name="location">
		</div>
	
		<div class="input-group">
			<label><button class="btn" name="save" type="submit">Save</button>
			
		</div>
	</form>

</body>
</html>