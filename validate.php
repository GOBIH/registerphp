<?php

session_start();

include "connect.php";

if (isset($_POST['first_name']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $first_name = validate($_POST['first_name']);

    $password = validate($_POST['password']);

    if (empty($first_name)) {

        header("Location: loginpage.php?error=User Name is required");

        exit();
    } else if (empty($password)) {

        header("Location: loginpage.php?error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM PersonalDetails WHERE first_name='$first_name' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['first_name'] === $first_name && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['first_name'] = $row['first_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: logdisplay.php");

                exit();
            } else {

                header("Location: loginpage.php?error=Incorect User name or password");

                exit();
            }
        } else {

            header("Location: loginpage.php?error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: loginpage.php");

    exit();
}
