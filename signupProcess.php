<?php

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli("localhost","root","S@mithu#23","slcf_db","3307");

if (empty($fname)){
    echo "Please Fill First Name";
}elseif (empty($lname)){
    echo "Please Fill Last Name";
    }elseif (empty($email)){
        echo "Please Fill Email";
    }elseif (empty($password)){
        echo "Please Fill Password";
    }else{
        
        $query1 = "SELECT * FROM `users` WHERE `email` = '".$email."'";
        $result1 = $conn->query($query1);

        if($result1->num_rows > 0){
            echo "Email Already Exist";
        } else {
            $enceypt_Password = md5($password);
            

            $query2 = "INSERT INTO `users`(`fname`,`lname`,`email`,`password`)
            VALUES ('".$fname."','".$lname."','".$email."','".$enceypt_Password."');";

            $result2 = $conn->query($query2);

            echo 'success';
        }

    }

?>