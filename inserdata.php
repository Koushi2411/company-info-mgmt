<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="second.css">
</head>
<body>


      <?php
          $conn=new mysqli("localhost","root","","company")or die("unable to connect");
          if($conn)
            echo"&#10003";
            else
            echo"sorry";
          
           
       
                
        
    
        

      ?>

</body>
</html>