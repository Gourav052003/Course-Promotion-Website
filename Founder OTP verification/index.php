<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    session_start();

     // Set connection variables
     $server = "localhost";
     $username = "root";
     $password = "";
 
 
     // Create a database connection
    $conn = mysqli_connect($server, $username, $password); 
 
     
    // Retrieving otp with session variable

    $D1 = $_REQUEST["a"]*100000;
    $D2 = $_REQUEST["b"]*10000;
    $D3 = $_REQUEST["c"]*1000;
    $D4 = $_REQUEST["d"]*100;
    $D5 = $_REQUEST["e"]*10;
    $D6 = $_REQUEST["f"]*1;

    $nice_otp = $D1+$D2+$D3+$D4+$D5+$D6;



        echo "otp verification starts";
      
        if($nice_otp==$_SESSION["otp_pss"]){
        

            $fn=$_SESSION['fn'];
            $ln=$_SESSION['ln'];
            $cn=$_SESSION['cn'];
            $clvl=$_SESSION['clvl'];
            $iq=$_SESSION['iq'];
            $clng=$_SESSION['clng'];
            $clnk=$_SESSION['clnk'];

            $ctry=$_SESSION['ctry'];
            $st=$_SESSION['st'];
            $cty=$_SESSION['cty'];
            $str=$_SESSION['str'];
            $zc=$_SESSION['zc'];
            $pc=$_SESSION['pc'];
            $pn=$_SESSION['pn'];
            $eml=$_SESSION['eml'];
            $pss=$_SESSION['pss'];

            $sql = "INSERT INTO `founder login`.`founder info` (`first name`, `last name`, `course name`, `course level`, `instructor qualification`, `course language`, `course link`,
             `counrty`,`state`,`city`,`street`,`zip code`,`phone code`,`phone number`,`email`,`user Password`)
            VALUES (
            '$fn',
            '$ln',
            '$cn',
            '$clvl',
            '$iq',
            '$clng',
            '$clnk',
            '$ctry',
            '$st',
            '$cty',
            '$str',
            '$zc',
            '$pc',
            '$pn',
            '$eml',
            '$pss');";

           
        
            // Execute the query
            if($conn->query($sql) == true){
                
                // echo"Flag for successful insertion";
             
                $insert = true;

                header("Location: ../Founder login/index.php");
        
            }
            else{
                // echo "ERROR: $sql <br> $conn->error";
                header('Location: ../Course addition/Quote_error.html');

            }

        }
        else{
            // echo $nice_otp;
            // echo "Wrong otp";
            header("Location: wrong otp.html");

        }
        
}
else{
    header('Location: ../Founder forgot password/server error.html');
    
}



    ?>
 
