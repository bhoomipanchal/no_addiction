<?php
$sname = "localhost";
$name = "root";
$password = "";
$db_name = "test";

$conn = mysqli_connect($sname, $name, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
