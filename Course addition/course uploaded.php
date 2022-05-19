<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
    <style>
        
        *{
            margin:0px 0px 0px 15px ;
            
        }
        
        body{
            background-image:url('Wood.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
            overflow-x: hidden;
            
        }
        
.courses{
    display:flex;
    flex-wrap: wrap;

  /* position: fixed; */
  bottom: 0;
  background: rgba(68, 49, 49, 0.0);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
 
}

.c1 img{
    margin: 0px;
    width: 292px;
    height: 200px;
    border-radius: 20px 20px 0px 0px;
}

.c1 h3{
    text-align: center;
}

.c1{

    margin: 10px 50px 30px 0px;
    /* border: 2px Solid brown; */
    border-radius: 20px;  
    background-color: whitesmoke;
    transition: transform .2s;
    
  }
  
  
  .c1:hover{
  box-shadow: 6px 6px 6px -1px rgb(0 0 0 / 69%), 13px 13px 5px -13px rgb(255 255 255 / 0%);
  transform: scale(1.01);
}

/* Responsive */

   @media screen and (max-width: 1465px){
 
    .c1 img{
      margin: 0px;
      width: 27vw;
      height: 200px;
  }
  }

  @media screen and (max-width: 1279px){

    .c1 img{
      margin: 0px;
      width: 25vw;
      /* height: 250px; */
      height: 200px;
  }
  } 
   
  @media screen and (max-width: 1023px){

    .c1 img{
      margin: 0px;
      width: 25vw;
      height: 200px;
  }
  } 

  @media screen and (max-width: 989px){

    .c1 img{
      margin: 0px;
      width: 380px;
      height: 200px;
  }
  } 

  @media screen and (max-width: 989px){

    .c1 img{
      margin: 0px;
      width: 38vw;
      height: 200px;
  }
  } 

  @media screen and (max-width: 788px){

    .c1 img{
      margin: 0px;
      width: 37vw;
      height: 200px;
  }
  } 

  @media screen and (max-width: 726px){

    .c1 img{
      margin: 0px;
      width: 35vw;
      height: 200px;
  }
  } 

  @media screen and (max-width: 630px){

    *{
      margin:20px 0px 0px 4vw;
    }
    .c1 img{
      margin: 0px;
      width: 75vw;
      height: 200px;
  }
  } 
</style>
    <div class="courses">
        
<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); 
    $displaySql="SELECT * FROM `course images`.`course img`";

    if($con->query($displaySql) == true){
                
        $displayImg =  $con->query($displaySql);

        while($result=mysqli_fetch_array($displayImg))
        { 
            
            ?>

         <a href="<?php echo $result['hyperlink']?>" >
             <div class="c1">
                 <img src="<?php echo $result['course logo'];?>">
                 <h3><?php echo $result['Domain'];?></h3>
                 <h3><?php echo $result['Core subject'];?></h3>
            </div>
        </a>

        <?php 
         
     
     }  
     
    }
     
     ?>

</div>


</body>
</html>