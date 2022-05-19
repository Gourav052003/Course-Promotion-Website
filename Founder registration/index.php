<?php
$insert = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";


    // Create a database connection
    $con = mysqli_connect($server, $username, $password); 

    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $course_name = $_REQUEST['course_name'];
    $course_level =$_REQUEST['course_level'];
    $instructor_qualification=$_REQUEST['instructor_qualification'];
    $course_language=$_REQUEST['course_language'];
    $course_link=$_REQUEST['course_link'];
    $country=$_REQUEST['country'];
    $state=$_REQUEST['state'];
    $city=$_REQUEST['city'];
    $street=$_REQUEST['street'];
    $zip_code=$_REQUEST['zip_code'];
    $phone_code=$_REQUEST['phone_code'];
    $phone_number=$_REQUEST['phone_number'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $password=password_hash($password, PASSWORD_BCRYPT);


    $email_exits = $con->prepare("SELECT * FROM `founder login`.`founder info` WHERE email = ?");
    $email_exits->bind_param("s", $_POST['email']);
    $email_exits->execute();
    $email_exits->store_result();
    $email_exits->fetch();
    $n=$email_exits->num_rows;

    if ($n==0)
    {


        
        $from ="gourav052003@gmail.com";
        $to=$email;
        $subject="verify-account-otp";

        // Generating otp with php rand variable

        $otp=rand(100000,999999);
        $message=strval($otp);
        $headers="From: ".$from;

        $send=mail($to,$subject,$message);
        // $send=true;

        if($send){
            
            $otp_sent=true;

            session_start();
            $_SESSION['fn']=$first_name;
            $_SESSION['ln']=$last_name;
            $_SESSION['cn']=$course_name;
            $_SESSION['clvl']=$course_level;
            $_SESSION['iq']=$instructor_qualification;
            $_SESSION['clng']=$course_language;
            $_SESSION['clnk']=$course_link;

            $_SESSION['ctry']=$country;
            $_SESSION['st']=$state;
            $_SESSION['cty']=$city;
            $_SESSION['str']=$street;
            $_SESSION['zc']=$zip_code;
            $_SESSION['pc']=$phone_code;
            $_SESSION['pn']=$phone_number;
            $_SESSION['eml']=$email;
            $_SESSION['pss']=$password;

            $_SESSION['otp_pss']=$otp;
        
            
    
            // header('Location: ../Founder OTP verification/OTP.php');
            header('Location: ../Founder OTP verification/otp.php');


            // echo "successfull sent OTP";
            
        }
        else
        {   
            $otp_sent=false;
            // echo $send;
            // echo("mail send failed");.
        header("Location: ../Student registration/Email_send_failed.html");

        }
    } 
    else{

        // echo "Email already registered";
        header("Location: ../Student registration/Email_exists_error.html");

    }    
    
}
else{
    // echo "not post set";
    header('Location: ../Founder forgot password/server error.html');

}
?>