<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); 

    $course_domain=$_REQUEST['course_domain'];
    $core_subject =$_REQUEST['core_subject'];
    $img=$_FILES['img'];
    $link=$_REQUEST['link'];

    $imgName=$img['name'];
    $imgError=$img['error'];
    $imgTemp=$img['tmp_name'];

    $imgExt= explode(".",$imgName);
    $imgCheck=strtolower(end($imgExt));
    $imgExtStored = array('png','jpg','jpeg');

    if(in_array($imgCheck,$imgExtStored))
    {
        $destinationImg='upload/'.$imgName;

        move_uploaded_file($imgTemp,$destinationImg);

        $sql = "INSERT INTO `course images`.`course img` (`Domain`,`Core subject`,`course logo`,`hyperlink`) VALUES('$course_domain','$core_subject','$destinationImg','$link');";

    
        if($con->query($sql) == true){
                

            // echo"Flag for successful insertion"; 

            header("Location: Course uploaded.html");
                       
        
        }   
            
        
        else{
            // echo "ERROR: $sql <br> $con->error";
            header("Location: Quote_error.html");
        }
    
    }
    else{
        // echo "Not good extension";
        header("Location: invalid extension.html");

    }

}     
else{
    header('Location: ../Founder forgot password/server error.html');
}

?>
