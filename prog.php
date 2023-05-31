<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
<?php
  $conn=new mysqli("localhost","root","","company")or die("unable to connect");
  if($conn)
   echo"succesful";
   else
   echo"sorry";
?>
   <form action="prog.php" method="get">
     <input type="text" placeholder="USER ID" name="name"><br>
     <input type="text" placeholder="PASSWORD" name="passname"><br>

    <input type="submit">
  </form>
  <?php 
    $userN=$_GET["name"];
    $passN=$_GET["passname"];
    $ssql="select securePassword from student
           where userId='$userN'";
     $result=$conn->query($ssql);   
     if($result->num_rows>0)
     {
     while($row=$result->fetch_assoc())
     { 
      $pas=$row["securePassword"]; 
      if($pas==$passN)
      {
        echo("$pas  $userN");
        echo("  succesfull login");
      }
      else{
        echo"Plese enter valid id and password";
      }
     }    
    }
     else
     echo "error";

  ?>
</body>
</html>
 
 
    