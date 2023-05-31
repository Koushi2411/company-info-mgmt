<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}
.button2 {
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

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}
.box{
   width:300px;
    height:30px;
     margin-top:10px;
  }
  .cont{
    vertical-align:top;
    margin-left:50px;
    display:inline-block;
     border-style:dotted;
     border-color:red;
  }
  .bigbox{
    vertical-align:top;
    display:inline-block;
     border-style:dotted;
     border-color:red;
    width:800px;
    height:700px;
  }
</style>
</head>
<body style="background-color: rgb(110, 4, 107);height:600px;color:white">
<?php error_reporting(0);?>
<div class="bigbox">
<form method="post">
<input class="box" type="number" name="num" placeholder="SL.No of company">
  <button type="submit" name="sub" value="sub1"class="button2"><span>Submit </span></button><br><br>
 </form>
 <?php

    $number=$_POST["num"];
    if($number>0)
    { $conn=new mysqli("localhost","root","","company")or die("unable to connect");
     if($conn)
     echo"&#10003";
     else
     echo"sorry";
     
     $number=$_POST["num"];
     $sql="SELECT * FROM allcompanys
         WHERE companyId='$number';"; 
         
         $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
        while($row=$result->fetch_assoc())
        {  
            $id=$row["companyId"];
            $name=$row["cname"];
            $sector=$row["sector"];
            $founder=$row["founder"];
            $ceo=$row["ceo"];
            $numemp=$row["numOfEmploy"]; 
            $language=$row["languages"];
            $nation=$row["nation"];
            $product=$row["product"];
            $subbranch=$row["subBranchIndia"];
            $started=$row["startedYear"];
            $link=$row["link"];

             echo("Company Name is <b style='color:gold'>$name</b>.<br><br>");
             echo("Company founder is <b style='color:gold'>$founder</b>.<br><br>");
             echo("Company sector is <b style='color:gold'>$sector</b>.<br><br>");
             echo("Company ceo is <b style='color:gold'>$ceo</b>.<br><br>");
             echo("Number of employs working here is <b style='color:gold'>$numemp.</b><br><br>");
             echo("<b>Required skills are <b style='color:gold'>$language.</b><br><br>");
             echo("The foundation started or main branch in<b style='color:gold'> $nation</b>.<br><br>");
             echo("The products or outcomes of company is<b style='color:gold'> $product</b>.<br><br><br>");
             echo("The sub-branches in India are<b style='color:gold'> $subbranch</b>.<br><br><br>");
             echo("This company Started at<b style='color:gold'> $started</b>.<br><br>");
             echo "The preferred link for extra information<b><u style='color:gold'><a href='$link'>$link</a></u></b>.<br><br>";

            
        }
        }
        else
        echo "0 results";
       
    }
 ?>
 
</div>
<button onclick="window.print();">download</button>
<div class="cont">
<form method="post">
<button type="submit" name="b1" value="bb1"class="button2"><span>IT </span></button>
<button type="submit" name="b2"value="bb2"class="button2"><span>NON-IT</span></button>
</form>
<?php
   if(array_key_exists('b1',$_POST)){
    it();
   }
   function it()
   {     $conn=new mysqli("localhost","root","","company")or die("unable to connect");
      if($conn)
      echo"&#10003";
      else
      echo"sorry";
       $sql="SELECT companyId,cname,sector FROM allcompanys
             WHERE sector='IT'
             ORDER BY cname;";
          $result=$conn->query($sql);
          echo("<b>As per your opinion IT companies Listed.</b><br><br>");
         if($result->num_rows > 0)
         {
         while($row=$result->fetch_assoc())
         {  
             $id=$row["companyId"];
             $name=$row["cname"];
             $sector=$row["sector"];
             echo("$id. $name <br><br>");
         }
         }
         else
         echo "0 results"; 
      }
   if(array_key_exists('b2',$_POST)){
    nit();
   }
   function nit()
   {   $conn=new mysqli("localhost","root","","company")or die("unable to connect");
    if($conn)
      echo"&#10003";
      else
      echo"sorry";
    $sql="SELECT companyId,cname,sector FROM allcompanys
             WHERE sector='NON-IT';";
          $result=$conn->query($sql);
          echo("<b>As per your opinion NON-IT companies Listed.</b><br><br>");
         if($result->num_rows > 0)
         {
         while($row=$result->fetch_assoc())
         {  
             $id=$row["companyId"];
             $name=$row["cname"];
             $sector=$row["sector"];
             echo("$id. $name <br><br>");
         }
         }
         else
         echo "0 results"; 
         
   }
?>

    
</div>
</body>
</html> 