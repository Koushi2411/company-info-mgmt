<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width:300px;
            height:30px;
            margin-top:10px;
        }
  .button1 {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align:center;
  font-size: 20px;
  padding:10px 10px 10px 0px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover{
  padding-right: 25px;
  background-color: #f32b57;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.c1{
  display:inline-block;
  padding:100px;
  border-style:dotted;
  border-color:red;
  margin-left:510px;
  margin-top:120px;
}
    </style>
</head>
<?php error_reporting(0);?>
<body>
 
<div class="c1">
<h2 style=" font-family: Arial;font-size:40px;">Welcome Back</h2>
<form action="studentlogin.php" method="post">
<input class="box" type="text" name="name" placeholder="USER ID"><br>
<input class="box" type="password" name="passname" placeholder="PASSWORD" ><br>
<input  class="button1" type="submit">
</form>
</div>      
</body>
</html>