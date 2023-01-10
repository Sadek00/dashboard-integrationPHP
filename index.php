<?php
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
  	<div class="col-6   m-auto">

  		<h2 class="text-center text-success">Register Form</h2>
		  	<form action="Register-post.php" method="POST"> <!-- Connection Of Register_post page -->
		  		<div class="form-group">
				    <label for="exampleInputName1">Name</label>
				    <input type="text" class="form-control <?php  
				    if (isset($_SESSION['NameErr'])) {
				    	echo 'NameErr';
				    }
				 	?>" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter Name">
					<span class="text-danger">
					<style>
							.NameErr{
								border: 1px solid red 
								}
					</style>
					<?php
						if (isset($_SESSION['NameErr'])) {
							echo $_SESSION['NameErr'];
							unset($_SESSION['NameErr']);

						}
						if (isset($_SESSION['NameExist'])) {
							echo $_SESSION['NameExist'];
							unset($_SESSION['NameExist']);

						}
					?>
					</span>
				</div>

				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <span class="text-danger">
					<?php
						if (isset($_SESSION['EmailValidateErr'])) {
							echo $_SESSION['EmailValidateErr'];
							unset($_SESSION['EmailValidateErr']);

						}
						if (isset($_SESSION['EmailValidationErr'])) {
							echo $_SESSION['EmailValidationErr'];
							unset($_SESSION['EmailValidationErr']);

						}
					?>
					</span>
				</div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
				      <span class="text-danger">
					<?php
						if (isset($_SESSION['PasswordErr'])) {
							echo $_SESSION['PasswordErr'];
							unset($_SESSION['PasswordErr']);

						}
					?>
					</span>
				</div>
				 <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password </label>
				    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirm Password">
				      <span class="text-danger">
					<?php
						if (isset($_SESSION['Confirm_passwordErr'])) {
							echo $_SESSION['Confirm_passwordErr'];
							unset($_SESSION['Confirm_passwordErr']);

						}
						if (isset($_SESSION['Confirm_passwordMatchErr'])) {
							echo $_SESSION['Confirm_passwordMatchErr'];
							unset($_SESSION['Confirm_passwordMatchErr']);

						}
					?>
					</span>
				</div>
				<div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<div class="form-check text-center">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>


  		
  	</div>
  </div>
</div>

</body>
</html>