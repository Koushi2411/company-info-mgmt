<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="second.css">
    <style> 
       th,td{
        padding-left:35px;
        padding-right:35px;
        padding-top:6px;
        padding-bottom:6px;
       }
    </style>
</head>
<body style="background-image:url('feather.avif');background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php error_reporting(0);?> 
       <div style="display:inline-block;">
        <form action="fordatabase.php" method="post">
        <input style="width:350px;height:30px;border-radius:10px; box-shadow:10px 10px 10px rgba(0,0,0,0.50);background:transparent;" class="uid" type="text" name="user" placeholder="USER ID"><br>
        <input style="width:100px;height:30px;margin-top:10px;border-radius:10px; box-shadow:10px 10px 10px rgba(0,0,0,0.50);background:transparent;" type="submit" name="uid" placeholder="Search"><br>
       </form>
      </div>
      <div style="margin-top:10px;margin-left:250px;display:inline-block;">
        <form action="fordatabase.php" method="post">
        <input style="width:350px;height:30px;border-radius:10px; box-shadow:10px 10px 10px rgba(0,0,0,0.50);background:transparent;" type="number" name="yesorno" placeholder="DISPLAY ALL-press 1"><br>
        <input style="width:100px;height:30px;margin-top:10px;border-radius:10px; box-shadow:10px 10px 10px rgba(0,0,0,0.50);background:transparent;" type="submit" name="display" value="yes"><br>
        </form>
       </div>
<table style="margin-top:15px;" align ="center" border = "4" cellpadding = "3" cellspacing = "0">
     <tr>
       <th>User Id</th>
       <th>first Name</th>
       <th>Middle Name</th>
       <th>Last Name</th>
       <th>Password</th>
       <th>Department</th>
       <th>Email Id</th>
       <th>Phone Number</th>
     </tr>
        <?php
        $num=$_POST["yesorno"];
        if($num==1)
        { 
          $conn=new mysqli("localhost","root","","company")or die("unable to connect");
          if($conn)
            echo"&#10003";
            else
            echo"sorry";
          $sql="SELECT userId,firstName,lastName,midleName,securePassword,department,email,phoneNum FROM student
          ORDER BY firstName";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
        while($row=$result->fetch_assoc())
        {  
        $fname=$row["firstName"];
        $sName=$row["lastName"];
        $uid=$row["userId"];
        $pass=$row["securePassword"];
        $midN=$row["midleName"];
        $dept=$row["department"];
        $mail=$row["email"];
        $phn=$row["phoneNum"];
         echo "<tr>";
          echo "<td>$uid</td>";
          echo "<td>$fname</td>";
          echo "<td>$midN</td>";
          echo "<td>$sName</td>";
          echo "<td>$pass</td>";
          echo "<td>$dept</td>";
          echo "<td>$mail</td>";
          echo "<td>$phn</td>";
          echo "</tr>";
        }
        }
        else
        echo "0 results"; 
        }
       ?>
<?php
 $useid=$_POST["user"];
 $conn=new mysqli("localhost","root","","company")or die("unable to connect");
 if($conn)
   echo"&#10003";
   else
   echo"sorry";

   $ssql="SELECT userId,firstName,lastName,midleName,securePassword,department,email,phoneNum FROM student
   WHERE userId='$useid'";

        $result=$conn->query($ssql);
        if($result->num_rows > 0)
        {
        while($row=$result->fetch_assoc())
        {  
          $fname=$row["firstName"];
          $sName=$row["lastName"];
          $uid=$row["userId"];
          $pass=$row["securePassword"];
          $midN=$row["midleName"];
          $dept=$row["department"];
          $mail=$row["email"];
          $phn=$row["phoneNum"];
           echo "<tr>";
            echo "<td>$uid</td>";
            echo "<td>$fname</td>";
            echo "<td>$midN</td>";
            echo "<td>$sName</td>";
            echo "<td>$pass</td>";
            echo "<td>$dept</td>";
            echo "<td>$mail</td>";
            echo "<td>$phn</td>";
            echo "</tr>";
        }
        }
        else
        echo "0 results"; 
        
        
   
?>
</table>

</body>
</html>