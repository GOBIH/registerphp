<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document view</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nick_name</th>
          <th scope="col">first_name</th>
          <th scope="col">last_name</th>
          <th scope="col">password</th>
          <th scope="col">gender</th>
          <th scope="col">address</th>
          <th scope="col">email</th>
          <th scope="col">actions</th>


        </tr>
      </thead>
      <tbody>
        <?php

        $sql = "select * from `PersonalDetails`";
        $result = mysqli_query($conn, $sql);
        //   if($result){
        //       $rows=mysqli_fetch_array($result);
        //       echo $rows('first_name');

        //   }

        while ($rows = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <th scope="row"><?php echo $rows['id']; ?></th>
            <td><?php echo $rows['nick_name']; ?></td>
            <td><?php echo $rows['first_name']; ?></td>
            <td><?php echo $rows['last_name']; ?></td>
            <td><?php echo $rows['password']; ?></td>
            <td><?php echo $rows['gender']; ?></td>
            <td><?php echo $rows['address']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td>
              <button class="btn btn-primary"><a href="update.php?updateid=<?php echo $rows['id']; ?>" class="text-light">Update</a></button>
              <button class="btn btn-danger"> <a href="delete.php?deleteid=<?php echo $rows['id']; ?>" class="text-light">Delete</a></button>
            </td>
          </tr>

        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</body>

</html>