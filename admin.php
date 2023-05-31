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
 <div class="head">
      <div class="head-flex-1">
      <img style="  width:100px;
                height:90px;
                margin-top:25px;
                margin-left:100px;
                object-fit:cover;
                border-width:thin;
                 border-style:solid;
                border-radius:100%;
                box-shadow:10px 10px 10px rgba(0,0,0,0.50);" src="hired.jpeg">
        <p class="heading-name">YOU ARE HIRED</p>
      </div>
      <div class="head-flex-2"></div>
      <div class="head-flex-3">
      <img style="  width:100px;
                height:90px;
                margin-top:25px;
                margin-left:400px;
                object-fit:cover;
                border-width:thin;
                 border-style:solid;
                border-radius:100%;
                box-shadow:10px 10px 10px rgba(0,0,0,0.50);" src="admitdp.jpg">
      <p class="page-name">
         ADMIN PAGE
      </p>
      </div>
        
 </div>
    <div class="grideg-2">
            
        <div style="background-color:bisque">
       
        </div>

       <div>
       <div class="student-staf-employ-flex">
              <div class="student-flex-1">
               <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">STUDENT</p>
               <img style="  width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:80px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;" src="student.jpeg">
               <button onclick="fun1()" class="view-button">VIEW</button>
               <button class="view-button">UPDATE</button>
               <button class="view-button">DELETE</button>
               <button onclick="fun4()" class="view-button">ADD</button>
                </div>
                <script>
                  function fun1()
                  {
                    window.location.href="http://localhost/new/php-worspace/fordatabase.php";
                  }
                  function fun4()
                  {
                    window.location.href="http://localhost/new/php-worspace/studentinsert.php";
                  }
                 </script>
                <div class="staff-flex-1">
                <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">STAFF</p>
                <img  style="  width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:80px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;" src="staff.jpg">
                <button onclick="fun2()" class="view-button">VIEW</button>
               <button class="view-button">UPDATE</button>
               <button class="view-button">DELETE</button>
               <button class="view-button">ADD</button>
                </div>
                <script>
                  function fun2()
                  {
                    window.location.href="http://localhost/new/php-worspace/staffview.php";
                  }
                 </script>
                <div class="employ-flex-1">
                <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">EMPLOYEE</p>
                <img  style="  width:100px;
                    height:90px;
                    margin-top:25px;
                    margin-left:80px;
                    object-fit:cover;
                    border-width:thin;
                    border-style:solid;
                    border-radius:100%;
                    box-shadow:10px 10px 10px rgba(0,0,0,0.50);
                    vertical-align:middle;" src="HR.jpg">
                <button class="view-button">VIEW</button>
               <button class="view-button">UPDATE</button>
               <button class="view-button">DELETE</button>
               <button class="view-button">ADD</button>
                 </div>

                 <div class="staff-flex-1">
                <p style="display:inline-block;padding-top:40px;margin-left:70px;margin-top:50px;font-size:32px;font-family:'Times New Roman';margin-top:0px; vertical-align:middle;">COMPANY</p>
                <img class="compny-photo" src="comp.jpeg">
                <button class="view-button">VIEW</button>
               <button class="view-button">UPDATE</button>
               <button class="view-button">DELETE</button>
               <button class="view-button">ADD</button>
                </div>

       </div>
       </div>
    
</body>
</html>


      