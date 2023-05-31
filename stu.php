<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLoginPage</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="second.css">
</head>
<body >
<?php error_reporting(0);?>
<div style="margin-left:600px;display:inline-block;margin-top:100px;">
                 <?php
                  $conn=new mysqli("localhost","root","","company")or die("unable to connect");
                  if($conn)
                  echo"&#10003";
                   else
                   echo"sorry";
                 ?>
    <form action= "adminloginpage.php" method="post">
        <input style="width:350px;height:30px;margin-top:2px;border-radius:10px;background:transparent;" type="text" name="user" placeholder="USER ID"><br>
        <input style="width:350px;height:30px;margin-top:2px;border-radius:10px;background:transparent;" type="password" name="password" placeholder="PASSWORD"><br>
        <input style="width:150px;height:30px;margin-top:2px;margin-left:100px;border-radius:10px;background:transparent;" type="submit" name="uid" placeholder="submit"><br>
</form>
    <br>
    <?php 
      $uidvar=$_POST["user"];
      $passwordvar=$_POST["password"];
    
      $ssql="select securePassword,firstName,lastName from student
     where userId='$uidvar'";
     $result=$conn->query($ssql);   
     if($result->num_rows>0)
      {     
          while($row=$result->fetch_assoc())
          { 
            
           $pas1=$row["securePassword"]; 
           if($pas1==$passwordvar&&$school1==$schoolvar&&$dob1==$dobvar)
           {
             echo("student[succesfull login]");
             header("Location:admin.php");
            }
            else{
                echo("Incorrect user Id or password");
                }
          }
      }
      else
      echo "<b>0 result.<b>";
    ?>
  </div>
</body>
</html>