<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['first_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>display data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


</head>

<body>
    <thead>
    <h1>Hello, <?php echo $_SESSION['first_name']; ?></h1>

    </thead>
    <tbody>
        <tr>
            <td>
            <button class="btn btn-primary"><a href="display.php" class="text-light">your  data to view</a></button>

            </td>
            <td>
            <a href="logout.php">Logout</a>

            </td>
        </tr>

    </tbody>







     

</body>

</html>

<?php 

}

 ?>

