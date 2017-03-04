<?php
session_start();
require 'connect.php';
		$a1 = mysqli_real_escape_string($db,$_POST['nschool']);
		$a2 = mysqli_real_escape_string($db,$_POST['username']);
		$a3 = mysqli_real_escape_string($db,$_POST['pword']);
		$a4 = mysqli_real_escape_string($db,$_POST['diocese']);
mysqli_query($db,"INSERT INTO diocese(diocese) VALUES('$a4')");
mysqli_query($db,"INSERT INTO account(username,pword) VALUES('$a2','$a3')");
mysqli_query($db,"INSERT INTO school(nschool) VALUES('$a1')");

$add = mysqli_fetch_row($account);
header("Location:admin_schools.php");
?>