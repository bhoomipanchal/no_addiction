<?php
session_start();
include "db_conn.php";

if (
	isset($_POST['name']) &&
	isset($_POST['email']) &&
	isset($_POST['contact']) &&
	isset($_POST['age']) &&
	isset($_POST['address']) &&
	isset($_POST['password']) &&
	isset($_POST['confirmpassword'])
) {

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	$contact = test_input($_POST['contact']);
	$gender = test_input($_POST['gender']);
	$age = $_POST['age'];
	$address = test_input($_POST['address']);
	$password = test_input($_POST['password']);
	$confirmpassword = test_input($_POST['confirmpassword']);

	$user_data = 'name=' . $name . '&email=' . $email . '&contact=' . $contact . '&address=' . $address . '&gender=' . $gender . '&age=' . $age . '&password=' . $password . '&confirmpassword=' . $confirmpassword;


	if (empty($name)) {
		header("Location: sign-up.php?error=User Name is required&$user_data");
		exit();
	} else if (empty($email)) {
		header("Location: sign-up.php?error=User Email is required&$user_data");
		exit();
	} else if (empty($gender)) {
		header("Location: sign-up.php?error=User gender is required&$user_data");
		exit();
	} else if (empty($age)) {
		header("Location: sign-up.php?error=User Age is required&$user_data");
		exit();
	} else if (empty($password)) {
		header("Location: sign-up.php?error=User Password is required&$user_data");
		exit();
	} else if (empty($confirmpassword)) {
		header("Location: sign-up.php?error=User Confirm Password is required&$user_data");
		exit();
	} else if ($password !== $confirmpassword) {
		header("Location: sign-up.php?error=The Confirm Password does not match&$user_data");
		exit();
	} else {
		// hashing the password
		// $password = md5($password);

		$sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: sign-up.php?error=The email already exists&$user_data");
			exit();
		} else {
			$sql2 = "INSERT INTO users(name, email, contact, gender, age, address, password) VALUES('$name', '$email', '$contact', '$gender', '$age', '$address', '$password')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				header("Location: sign-in.php?success=Your account has been created successfully");
				exit();
			} else {
				header("Location: sign-up.php?error=unknown error occurred&$user_data");
				exit();
			}
		}
	}
} else {
	echo "zxczxc";
	exit();
	header("Location: sign-up.php");
	exit();
}
