<?php

    include 'connect.php';
    $nick_name=$_POST['nick_name'];
    $first_name=$_POST['first_name'];
    $password=$_POST['password'];

    $sql="select * from `PersonalDetails` where nick_name='$nick_name',first_name='$first_name', password='$password'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            
            header('location:display.php');
            // echo 'conection successful';
        }
        else {
            echo 'invalid data'; 
    }
}