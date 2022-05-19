<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="add.css">

    <title>Document</title>
</head>
<body>

<div class="split left">
  <div class="centered">
    <img src="h1.jpg" alt="course girl" >
  </div>
</div>
    
<div class="split right">
  <div class="centered">

        <h1>Upload your course website</h1>

       <form action="db.php" method="post" enctype="multipart/form-data">

       <br>
       <br>
       <br>
       <br>

        <label for="Course domain">Course domain : </label>
        <select name="course_domain">
                <option value="select Domain">select Domain</option>
                <option value="School">School</option>
                <option value="Arts">Arts</option>
                <option value="Engineering">Engineering</option>
                <option value="Medical Sciences">Medical Sciences</option>
                <!-- <option value="Medical Sciences">
                    <input type="text" name="specify_others"/>
                </option> -->
                
            </select>
            
            <br>
            <br>
            <br>
            <br>


            <label for="Name of branch">Name of branch : </label>
            <select name="core_subject">
                <option value="select Domain">select Domain</option>
                <option value="Engineering">Eng</option>
                <option value="Medical Sciences">Med</option>
                <option value="School">Sch</option>
            </select>
            
            <br>
            <br>
            <br>
            <br>
            
            
            <label for="hyperlink">Course link : </label>
            <input type="text" name="link" id="hyperlink"/>
            
            <br>
            <br>
            <br>
            <br>
            
            <label for="course logo">Course logo : </label>
            <input type="file" name="img" accept="image/*" />
            
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="Upload Image" name="submit">
            
        
        </form>


        <!-- <script type="text/javascript" src="https://form.jotform.com/jsform/221330309539451"></script> -->

        </div>
</div> 
</body>
</html>