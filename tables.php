<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body style="background-image:url('water.avif');background-repeat:no-repeat;background-attachment:fixed;background-size:100% 100%;">
    <?php
    $name="karthik";
    $place="harenahali";
    $usn="1si20is33";
    ?>
    <table cellpadding="4" cellspacing="50">
         <colgroup>
           <col span="3" style="background-color:greenyellow">
           <col style="background-color:antiquewhite">

        <tr>
            <th>student Name</th>
            <th>USN</th>
            <th>place</th>
        </tr>
        <?php
         echo "<td>$name</td>";
         echo "<td>$usn</td>";
         echo "<td>$place</td>";
       
        ?>
        <tr>
            <td>Karthik</td>
            <td>1si20is020</td>
            <td>harenahalli</td>
        </tr>
    </table>
    <br><br><br>
    <input style="width:300px;height:30px;border-radius:5px;background:transparent;box-shadow:10px 10px 10px black;color:white;font-size:20px;" type="text" placeholder="User Id">
</body>
</html>