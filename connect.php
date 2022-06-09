<?php
    $servername = "localhost";
    $username = "root";
    $password = "Greefi@321";
    $dbname = "testphp";



    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      exit();
    }

  
		?>
