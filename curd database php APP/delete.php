<?php
//including the database connection file
include("config.php");


$id = $_GET['id'];

//code..
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");


header("Location:index.php");
?>

