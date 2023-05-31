<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.imagemove1{
  display:inline-block;
  vertical-align:top;
  width: 250px;
  height: 250px;
  background-color: red;
  position: relative;
  border-style:dotted;
  border-color:red;
  animation-name: example1;
  animation-duration:3s;
  animation-iteration-count:infinite;
}

@keyframes example1 {
  0%   {background-color:red; left:0px; top:0px;}
  25%  {background-color:yellow; left:290px; top:0px;}
  50%  {background-color:blue; left:290px; top:220px;}
  75%  {background-color:green; left:0px; top:220px;}
  100% {background-color:red; left:0px; top:0px;}
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(80, 2, 80);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 10px 32px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color:rgb(200, 190, 190);
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: rgb(110, 4, 107);
  color: white;
  padding: 10px 15px;
  border: none;
  margin-left:0px;
  
}

.openbtn:hover {
  background-color:red;
}

#main {
  display:inline-block;
  transition: margin-left .5s;
  padding: 16px;
  border-style:dotted;
  border-color:red;
  width:400px;
  height:700px;
}
#header {
  transition: margin-left .5s;
  padding:5px 100px 10px 0px;
  border-style:dotted;
  border-color:red;
  background-color: rgb(110, 4, 107)
 }
 #header a {
  display:inline-block;
  color:white;
  text-align:center;
  width:200px;
  padding:5px 30px 10px 30px;
  text-decoration:none;

 }
 #header a:hover{
     background-color:red;
 }
 .button {
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

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height:
50px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body style="background-color: rgb(110, 4, 107);height:950px;">
<?php error_reporting(0);?>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="header">
<button class="openbtn" onclick="openNav()">☰ Menu</button> 
  <a style="color:#777; font-family: Georgia, 'Times New Roman', Times, serif;font-size:22px;" href="#home">Home</a>
  <a style="  font-family: Georgia, 'Times New Roman', Times, serif;font-size:19px;" href="#home">staff</a>
  <a style="  font-family: Georgia, 'Times New Roman', Times, serif;font-size:19px;" href="#home">HR</a>
  <a style="  font-family: Georgia, 'Times New Roman', Times, serif;font-size:19px;" href="http://localhost/new/php-worspace/adminloginpage.php">Admin</a>
</div>
<div id="main"> 
  <h2 style=" font-family: Arial;color:white;font-size:40px;">Companies Information Management System:</h2>
  <p style="font-size:25px;color:white;">We are collected IT and Non IT related companies information,which are all visits SIT campus.Here,What are all the companies need and preparation guidence also provided.If you want to gather information about companies.</p>
  <button onclick="myFunction()" class="button"><span>Click </span></button>
</div>
<script> 
    function myFunction()
     {
       window.location.href="http://localhost/new/php-worspace/stulo.php";
     }
</script>
<div class="imagemove1">
<img style="width:750px;
        height:450px;
        object-fit:cover;
        box-shadow:10px 10px 10px rgba(0,0,0,0.50);
        vertical-align: middle;" src="sit.png">
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("header").style.marginLeft = "250px";
  document.getElementById("imagemove").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.margin= "0";
  document.getElementById("header").style.margin= "0";
  document.getElementById("imagemove").style.margin= "0";
}
</script>
   
</body>
</html> 