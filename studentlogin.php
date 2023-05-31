
<?php
error_reporting(0);
//require 'stulo.php';
 $conn=new mysqli("localhost","root","","company")or die("unable to connect");
 if($conn)
 echo"&#10003";
  else
  echo"sorry";
  $userN=($_POST["name"]);
   $passN=($_POST["passname"]); 

  $ssql="select securePassword,firstName,lastName from student
  where userId='$userN'";
  $result=$conn->query($ssql);   
 if($result->num_rows>0)
  {   
      while($row=$result->fetch_assoc())
      { 
       $pas=$row["securePassword"]; 
       $name=$row["firstName"];
       $sname=$row["lastName"];
      }
    }
    else
    {
     echo("<b>User name is Not Valid!</b>");

    }
  session_start();
   //require 'stu.html';
   if(isset($_SESSION['kk']))
   {  session_unset();
    echo "<script>location.href='company1.php'</script>";
   }
   else
   {
         
          if($pas==$_POST["passname"])
          {
           // $SESSION["val"]="ok";
        
            $_SESSION['kk']=$userN;
           // echo("<b>$name $sname [succesfull login]</b>");
             echo "<script>location.href='studentlogin.php'</script>";
             
          }
           else{
               echo "<script> alert('Invalid Password!!') </script>";
               echo "<script>location.href='stulo.php'</script>";
              
               }
         }
     
   
    
    ?>
    
 