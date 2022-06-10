<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <h1 class="text-center">Login Page</h1>

        <form action="validate.php" method="POST" autocomplete="off">

            <!-- <div class="form-group" style="visibility: hidden"  >
				<label for="nickName">Nick Name:</label>
				<input type="text" name="nick_name" autocomplete="off" id="nickName">
			</div> -->

            <div class="form-group">
                <label class="form-label">first_name</label>
                <input type="text" class="form-control" autocomplete="off" name="first_name">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" autocomplete="off" name="password">
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-0">Login</button>
            </div>
            <!-- <div>
            <a href="index.php">SignUp</a>
            </div> -->

        </form>
    </div>

</body>

</html>