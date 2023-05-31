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
<body style="  background-image:url('eyes.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;">
<?php error_reporting(0);?>
 <div class="head">
        <img style="width:100px;
        height:90px;
        margin-top:25px;
        margin-left:50px;
        object-fit:cover;
        border-width:thin;
        border-style:solid;
        border-radius:100%;
        box-shadow:10px 10px 10px rgba(0,0,0,0.50);
        vertical-align: middle;" src="hired.jpeg">
        <p class="heading-name">YOU ARE HIRED</p>
        <p class="page-name">HOME PAGE</p>
        <div class="head-flex-3">
         <img style="  width:100px;
                height:90px;
                margin-top:25px;
                margin-left:100px;
                object-fit:cover;
                border-width:thin;
                 border-style:solid;
                border-radius:100%;
                box-shadow:10px 10px 10px rgba(0,0,0,0.50);" src="admitdp.jpg">
            <a class="admin-word"><u onclick="myFunction()" class="admin-key ">AdminLogin</u></a>
            <script> 
               function myFunction()
               {
                window.location.href="http://localhost/php-worspace/adminloginpage.php";
               }
            </script>
           </div>
 </div>
    <div class="grid-eg">
        <div class="login-gri">
            <button style=" width:160px;
            height:40px;
            color:black;
            background-color:rgb(108, 233, 108);
            border-width:thin;
            border-radius:5px;
            border-width:thin;
            margin-top:5px;
            margin-left:20px;
            cursor:pointer;
            box-shadow:10px 10px 10px rgba(0,0,0,0.50);">LOGIN</button>  
        </div>

       <div class="student-staf-employ-flex">
              <div class="student-flex">
               <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">STUDENT</p>
               <img style=" width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:40px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;" src="student.jpeg">
                </div>

                <div class="staf-flex">
                <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">STAFF</p>
                <img style="  width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:80px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;" src="staff.jpg">
                </div>
               
                <div class="employ-flex">
                <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">EMPLOYEE</p>
                <img style="  width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:80px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;"  src="HR.jpg">
                 </div>

       </div>

                <div class="login-page">
                  <p style="font-size:30px;
                      font-family: 'Times New Roman';
                      color:green;
                      padding-left:160px;
                      margin-top:40px;
                      border-width:thick;
                      border-color: red;"><u>LOGIN HERE</u></p>
                <div class="fit-login-page">
                <?php
                  $conn=new mysqli("localhost","root","","company")or die("unable to connect");
                  if($conn)
                  echo"&#10003";
                   else
                   echo"sorry";
                  ?>
                <form action="header.php" method="post">
                 <input class="uid" type="text" name="name" placeholder="USER ID">
                 <input class="password" type="password" name="passname" placeholder="PASSWORD" >
                 <input class="num" type="number" name="x" placeholder="STU:1/STAFF:2/EMP:3">
                 <input class="submit" type="submit">
                  </form>
                <?php
                   $userN=($_POST["name"]);
                   $passN=($_POST["passname"]);
                   $y=($_POST["x"]);
                       if($y==1)
                       {   
                        $ssql="select securePassword,firstName,lastName from student
                        where userId='$userN'";
                        $result=$conn->query($ssql);   
                       if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            { 
                             $pas=$row["securePassword"]; 
                             if($pas==$passN)
                             {
                              $name=$row["firstName"];
                               $sname=$row["lastName"];
                               echo("$name $sname [succesfull login]");
                               header("Location:.php");
                              }
                              else{
                                  echo("Incorrect user Id or password");
                                  }
                            }
                        }
                      }
                       else if($y==2)
                       {
                        $ssql="select password,firstName,lastName from staffs
                        where userId='$userN'";
                        $result=$conn->query($ssql);   
                       if($result->num_rows>0)
                        {   
                            while($row=$result->fetch_assoc())
                            { 
                             $pas=$row["password"]; 
                            
                             if($pas==$passN)
                             {
                              $name=$row["firstName"];
                               $sname=$row["lastName"];
                               echo("$name $sname [succesfull login]");
                               header("Location:staff.php");
                              
                              }
                              else{
                                  echo("Incorrect user Id or password");
                                  }
                            }
                        }
                       }
                       else if($y==3)
                       {

                       }
                  ?>
                </div>
             
         </div>
        
    </div>
</body>
</html>

