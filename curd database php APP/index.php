<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<h1>Datebase App</h1>
<h2>users</h2>

<body>
<a href="add.html"><font color="green"><b>Add New Data</font></b></a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>#</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Age</td>
		<td>Location</td>
		<td>Date</td>
		<td>Update</td>
		
	</tr>
	<?php 
	// code...
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['lastname']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['location']."</td>";
		echo "<td>".$res['date']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
