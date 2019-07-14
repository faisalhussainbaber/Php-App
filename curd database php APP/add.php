<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$lname = mysqli_real_escape_string($mysqli, $_POST['lastname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);

		
	
	if(empty($name) || empty($lname) || empty($email) || empty($age) || empty($location)) {
				
		if(empty($name)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}

		if(empty($lname)) {
			echo "<font color='red'>last Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($location)) {
			echo "<font color='red'>Location field is empty..</font><br/>";
		}

		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		

		$result = mysqli_query($mysqli, "INSERT INTO users(name,lastname,email,age,location) VALUES('$name','$lname','$email','$age','$location')");
		
	
		echo "<font color='green'><b>Data added successfully.</b>";
		echo "<br/><a href='index.php'><b>View Result</b></a>";
	}
}
?>
</body>
</html>
