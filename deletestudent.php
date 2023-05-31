<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .box{
            width:510px;margin-top:10px;height:27px;border-radius:15px 0px 15px 0px;margin-left:20px;background-color:;color:black;
         }
        .box:hover{
            background-color:white;
        }
        .same{
            margin-top:10px;height:27px;border-radius:15px 0px 15px 0px;margin-left:20px;background:transparent;
        }
        .same:hover{
            background-color:white;
        }
        .sub{
            width:100px;margin-top:10px;height:27px;border-radius:0px 15px 0px 15px;margin-left:20px;background:transparent;
        }
        .sub:hover{
            background-color:white;
        }
        </style>
</head>
<body>
<form action="studentinsert.php" method="post">
        <input class="box" type="text" name="user" placeholder="*USER ID"><br>
        <input class="sub" type="submit" placeholder="yes"><br>
</form>
          $ssql="UPDATE student
           set lastName='M'
           where userId='1si20is022'";
     $result=$conn->query($ssql);   
     if($conn->query($ssql)===TRUE)
     {echo"<br>";
      echo "changed";
      echo"<br>";
     }    
     else
     echo "error"; 
</body>
</html>