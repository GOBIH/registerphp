<?php
include('connect.php');

if (isset($_POST['submit'])) {
	$nick_name = $_POST['nick_name'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];


	$sql = "INSERT INTO PersonalDetails (`nick_name`,`first_name`,`last_name`,`password`,`gender`,`address`,`email`) VALUES ('$nick_name','$first_name',
	'$last_name','$password','$gender','$address','$email')";


	$result = mysqli_query($conn, $sql);

	if ($result) {
		// echo "New record created successfully";
		header('location:display.php');
	} else {
		die(mysqli_error($conn));
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registerForm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
	<div class="container my-5">

		<h1>PersonalDetails</h1>
		<form method="post">

			<div class="form-group">
				<label for="nickName">Nick Name:</label>
				<input type="text" name="nick_name" autocomplete="off" id="nickName">
			</div>


			<div class="form-group">
				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" autocomplete="off" id="firstName">
			</div>


			<div class="form-group">
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" autocomplete="off" id="lastName">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" autocomplete="current-password" required="" id="password">
			</div>



			<div class="form-group">
				<label for="Gender">Gender:</label>
				<input type="text" name="gender" autocomplete="off" id="Gender">
			</div>


			<div class="form-group">
				<label for="Address">Address:</label>
				<input type="text" name="address" autocomplete="off" id="Address">
			</div>


			<div class="form-group">
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" autocomplete="off" id="emailAddress">
			</div>

			<button type="submit" class="btn btn primary" name="submit">submit</button>

		</form>

	</div>
</body>

</html>