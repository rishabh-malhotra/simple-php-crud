<!DOCTYPE html>
<html>
<head>
	<title>Php Crud</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<thead>
			<th>S.no</th>
			<th>Name</th>
			<th>Location</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>India</td>
				<td><a href="#">Edit</a></td>
				<td><a href="#">Delete</a></td>	
			</tr>	
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
			<label><button class="btn" >Save</button></label>
			
		</div>
	</form>

</body>
</html>