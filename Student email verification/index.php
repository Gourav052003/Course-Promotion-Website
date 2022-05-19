<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); 

    $userEmail=$_REQUEST['userEmail'];
    $password=$_REQUEST['password'];
    

    $stmt = $con->prepare("SELECT * FROM `student login`.`student info` WHERE email = ?");
    $stmt->bind_param("s", $_POST['userEmail']);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();


    if ($user && password_verify($_POST['password'], $user['student password']))
    {
        header('Location: ../Student part/index.html');

    } else {

        // echo "Login failed";
         header('Location: ../Founder email verification/login failed.html');

    }


    // Close the database connection
    $con->close();

}
else{
    
    // echo "server error";
    header('Location: ../Founder forgot password/server error.html');

}


?>