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



    // $_SESSION["otp_v"]=$_REQUEST["otp"];

        

        echo "otp verification starts";
        // $otp_verified=true/false;
        
        if($nice_otp==$_SESSION["otp_pss"]){
        // if(true){

            $fn=$_SESSION['fn'];
            $ln=$_SESSION['ln'];
            $dob=$_SESSION['dob'];
            $cd=$_SESSION['cd'];
            $sf=$_SESSION['sf'];
            $cl=$_SESSION['cl'];
            $ctry=$_SESSION['ctry'];
            $st=$_SESSION['st'];
            $cty=$_SESSION['cty'];
            $str=$_SESSION['str'];
            $zc=$_SESSION['zc'];
            $pc=$_SESSION['pc'];
            $pn=$_SESSION['pn'];
            $el=$_SESSION['el'];
            $eml=$_SESSION['eml'];
            $pss=$_SESSION['pss'];

            $sql = "INSERT INTO `student login`.`student info` (`first name`, `last name`, `dob`, `current studying`, `studying from`, `language`,
            `country`,`state`,`city`,`street`,`zip code`,`phone code`,`phone number`,`education level`,`email`,`student password`)
            VALUES (
            '$fn',
            '$ln',
            '$dob',
            '$cd',
            '$sf',
            '$cl',
            '$ctry',
            '$st',
            '$cty',
            '$str',
            '$zc',
            '$pc',
            '$pn',
            '$el',
            '$eml',
            '$pss');";
        
            // Execute the query
            if($conn->query($sql) == true){
                
                // echo"Flag for successful insertion";
                // echo $n;
                // echo mysqli_num_rows($user);
                header("Location: ../Student login/index.php");

                $insert = true;
        
            }
            else{
                // echo "ERROR: $sql <br> $conn->error";
                header('Location: ../Course addition/Quote_error.html');
                
            }

        }
        else{
            // echo $nice_otp;
            // echo "Wrong otp";

        header('Location: ../Student registration/OTP_failed.html');

        }
        
}
else{
    // echo "Hello post is not set";
    header('Location: ../Founder forgot password/server error.html');

}



    ?>
 


</body>
 
</html>