<?php include "connect.php";?>
<?php
$id = $_GET['updateid'];
$sql = "select * from `PersonalDetails` where id=$id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
$nick_name = $rows['nick_name'];
$first_name = $rows['first_name'];
$last_name = $rows['last_name'];
$password = $rows['password'];
$gender = $rows['gender'];
$address = $rows['address'];
$email = $rows['email'];

if (isset($_POST['submit'])) {
    $nick_name = $_POST['nick_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];


    $sql = "update `PersonalDetails` set id=$id,first_name='$first_name',last_name='$last_name',password='$password',gender='$gender',address='$address',email='$email'where id =$id";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "updated successfully";
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
                <input type="text" name="first_name" autocomplete="off" value=<?php echo $first_name; ?> id="firstName">
            </div>


            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" autocomplete="off" value=<?php echo $last_name; ?> id="lastName">
            </div>

            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" name="password" autocomplete="off" value=<?php echo $password; ?> id="password">
            </div>



            <div class="form-group">
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" autocomplete="off" value=<?php echo $gender; ?> id="Gender">
            </div>


            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" name="address" autocomplete="off" value=<?php echo $address; ?> id="Address">
            </div>


            <div class="form-group">
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" autocomplete="off" value=<?php echo $email; ?> id="emailAddress">
            </div>

            <button type="submit" class="btn btn primary" name="submit">Update</button>
        </form>

    </div>
</body>

</html>