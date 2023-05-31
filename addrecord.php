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

<?php error_reporting(0);?> 
        <form action="addrecord.php" method="post">
        <input type="number" name="yesorno" placeholder="DISPLAY ALL-press 1"><br>
        <input type="submit" name="display" value="yes"><br>
        </form>
        <?php
        $num=$_POST["yesorno"];
        if($num==1)
        { 
          $conn=new mysqli("localhost","root","","company")or die("unable to connect");
          if($conn)
            echo"&#10003";
            else
            echo"sorry";
          $sql="SELECT userId,firstName,midleName,lastName,password,department,email,phoneNum,sector FROM staffs
          ORDER BY firstName";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
        while($row=$result->fetch_assoc())
        {  
        echo"<br>";
        $fname=$row["firstName"];
        $sName=$row["lastName"];
        $uid=$row["userId"];
        $pass=$row["password"];
        $midN=$row["midleName"];
        $dept=$row["department"];
        $mail=$row["email"];
        $phn=$row["phoneNum"];
        $sect=$row["sector"];

        echo "user Id:$uid <br> name:$fname $midN $sName <br> pass:$pass <br> dept:$dept <br> mail:$mail <br> phn:$phn  sector:$sect<br>";
        }
        }
        else
        echo "0 results"; 
        }
        

      ?>
<form action="fordatabase.php" method="post">
        <input class="uid" type="text" name="user" placeholder="USER ID"><br>
        <input type="submit" name="uid" placeholder="Search"><br>
    </form>
<?php
 $useid=$_POST["user"];
 $conn=new mysqli("localhost","root","","company")or die("unable to connect");
 if($conn)
   echo"&#10003";
   else
   echo"sorry";

   $ssql="SELECT firstName,midleName,lastName,password,department,email,phoneNum,sector FROM staffs
   WHERE userId='$useid'";

        $result=$conn->query($ssql);
        if($result->num_rows > 0)
        {
        while($row=$result->fetch_assoc())
        {  
            echo"<br>";
            $fname=$row["firstName"];
            $sName=$row["lastName"];
            $uid=$row["userId"];
            $pass=$row["password"];
            $midN=$row["midleName"];
            $dept=$row["department"];
            $mail=$row["email"];
            $phn=$row["phoneNum"];
            $sect=$row["sector"];

        echo "user Id:$uid <br> name:$fname $midN $sName <br> pass:$pass <br> dept:$dept <br> mail:$mail <br> phn:$phn  sector:$sect<br>";
        }
        }
        else
        echo "0 results"; 
        
        
   
?>

</body>
</html>