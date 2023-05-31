<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet  href="second.css">
</head>
<body>
<?php error_reporting(0);?>
 <div class="head">
        <img class="hired-image" src="hired.jpeg">
        <p class="heading-name">YOU ARE HIRED</p>
        <p class="page-name">STAFF PAGE</p>
        <div class="head-flex-3">
         <img class="admin-dp-1" src="admitdp.jpg">
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
            
            <div style="background-color:bisque">
            <button class="login">LOGIN</button>  
            </div>
    
           <div class="student-staf-employ-flex-1">
                 
    
           </div>
</body>
</html>