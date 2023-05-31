<?php

require __DIR__ . "/vendor/autoload.php";
use Dompdf\Dompdf;

 $conn=new mysqli("localhost","root","","company")or die("unable to connect");
     if($conn)
     echo"&#10003";
     else
     echo"sorry";

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

    $dompdf=new Dompdf();
$dompdf->render();
$dompdf->stream("karthik.pdf");

    
}
}
else
echo "0 results";

?>

