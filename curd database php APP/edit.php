<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);	
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);

	
	// code..
	if(empty($name) || empty($lname) || empty($email) || empty($age) || empty($location)) {	
			
		if(empty($name)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}

		if(empty($lname)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	

		if(empty($location)) {
			echo "<font color='red'>Location field is empty.</font><br/>";
		}

	} else {	
		

		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',lastname='$lname',email='$email',age='$age',location= '$location' WHERE id=$id");
		
		
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$lname = $res['lastname'];
	$age = $res['email'];
	$email = $res['age'];
	$location = $res['location'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname" value="<?php echo $lname;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>

			<tr> 
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo $location;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
