<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); 

    $userEmail=$_REQUEST['userEmail'];
    $password=$_REQUEST['password'];
    
    // $sql="SELECT `email`,`user Password` FROM `founder login`.`founder info` WHERE `email` = '$userEmail' and password_verify($password,`user Password`)";

    $stmt = $con->prepare("SELECT * FROM `founder login`.`founder info` WHERE email = ?");
    $stmt->bind_param("s", $_POST['userEmail']);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($_POST['password'], $user['user Password']))
    {
        header('Location: ../Founder part/index.html');

    } else {

        // echo "Login failed";
        header('Location: login failed.html');


    }


    // Close the database connection
    $con->close();

}
else{
    
    // echo "server error";
    header('Location: ../Founder forgot password/server error.html');

}


?>