<?php
	session_start();
	require_once'../Database.php';
	$id=$_SESSION['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];

	$edit="UPDATE user_form SET name='$name', email='$email' WHERE id=$id";
	$edit_user=mysqli_query($db,$edit);

	if ($edit_user) {
		$_SESSION['name']=$name;
		$_SESSION['Update'] = 'Update Succesfully ';
		header('location: users.php');
	}

?>