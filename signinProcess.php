<?php

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];


if(empty($email)){
    echo "Please Fill Email";
}elseif (empty($password)){
    echo "Please Fill Password";
}else{
    $conn = new mysqli("localhost","root","S@mithu#23","slcf_db","3307");

    if($conn->connect_error){
        echo ("Connection faild:" .$conn->connect_error);
    }

    $query1 = "SELECT * FROM `users` WHERE `email` = '".$email."'";
    $result1 = $conn->query($query1);

    if($result1->num_rows > 0){

        $row = $result1->fetch_assoc();

        $verify_password = md5($password);

        if($verify_password == $row['password']){

            $_SESSION['user'] = $row;
            $query2 = "UPDATE `users` SET `status` = 'ACTIVE' WHERE `id` = '".$row['id']."'";
            $result2 = $conn->query($query2);

           echo "Success";

        }else{
            echo "Password Incorrect";
        }

    }else {
        echo "Account not found for this email";
    }
}



?>