<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .box{
            width:510px;margin-top:10px;height:27px;border-radius:15px 0px 15px 0px;margin-left:20px;background:transparent;color:black;
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
<body style="background-image:url('leaf.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
<?php error_reporting(0);?> 
    <div style="display:inline-block;width:650px;border-style:ridge;border-width:thick;border-color:green;margin-top:80px;vertical-align:top; margin-left:30px;box-shadow:15px 15px 10px rgba(0,0,0,0.60);">
    <h1 style="display:inline-block;"><span style="color:green;margin-left:130px;"><u>YOU ARE HIRED</u></span></h1>
    <form action="studentinsert.php" method="post">
        <input class="box" type="text" name="user" placeholder="*USER ID"><br>
        <input class="same" type="text" name="fN" placeholder="*FIRST NAME">
        <input   class="same" type="text" name="mN" placeholder="MIDDLE NAME">
        <input   class="same" type="text" name="lN" placeholder="*LAST NAME"><br>
        <input   class="box" type="text" name="pas" placeholder="*PASSWORD"><br>
        <input  class="box" type="text" name="dpt" placeholder="*DEPARTMENT"><br>
        <input  class="box" type="text" name="emil" placeholder="*EMAIL"><br>
        <input   class="box" type="text" name="phnN" placeholder="PHONE NUMBER"><br>
        <input class="sub" type="submit" placeholder="yes"><br>
</form>
<?php
 $conn=new mysqli("localhost","root","","company")or die("unable to connect");
 if($conn)
   echo"&#10003";
   else
   echo"sorry";
   $useid=$_POST["user"];
   $fname=$_POST["fN"];
   $midN=$_POST["mN"];
   $lName=$_POST["lN"];
   $pass=$_POST["pas"];
   $dept=$_POST["dpt"];
   $mail=$_POST["emil"];
   $phn=$_POST["phnN"];
    
   $ssql="select * from student where userId='$useid'";
   $result=$conn->query($ssql);
        if($result->num_rows> 0)
        {
            echo "<b>USER ID ALREADY EXIST,PLEASE TRY ANOTHER!</b>";
        }
        else{
           
            $sql="INSERT INTO student(userId,firstName,midleName,lastName,securePassword,department,email,phoneNum)VALUES('$useid','$fname','$midN','$lName','$pass','$dept','$mail','$phn')"; 
            if($conn->query($sql)===TRUE)
            {
                echo "<br><b>Profile Inserted Successfully &#10003</b>";
            }
            else
            echo "failed";
                $conn->close();
        }
?>
</div>
<div style="display:inline-block;width:400px;height:270px;margin-left:150px;border-style:dotted;border-color:red;vertical-align:top;margin-top:80px;">
    <?php
       echo "<br><h1>check once:</h1><br><b>USER ID:$useid <br>  FIRST NAME:$fname<br>  MIDDLE NAME:$midN <br> LAST NAME:$lName <br> PASSWORD:$pass <br>  DEPARTMENT:$dept  <br> EMAIL:$mail <br> PHONE NUM:$phn</b>";
    ?>
</div>

<button style="border-style:dotted;border-color:red;mvertical-align:top;margin-left:30px;margin-right:30px;" onclick="fun3();">View Database</button>
<script>
    function fun3()
    {
        window.location.href="http://localhost/new/php-worspace/fordatabase.php";
    }
    </script>

<button onclick="myFunction()" style="width=100px;height:30px;vertical-align:top;">Refresh &#8635</button>
<p id="demo"></p>
<script>
      function myFunction()
      {
        location.reload();
      }
    </script>
</body>
</html>