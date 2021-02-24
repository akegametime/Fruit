<!DOCTYPE html>
<html lang="en">
<center>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

  $fruit=$_GET['fruit'];  
  $total ;
  $width=$_GET['width'];  
  $operator2 = $_GET ['operator2'];

if($fruit == 'mango'){


echo "<img src ='image/mango.jpg' alt=''  width = '$width' <br> <br> ";
echo "มะม่วง กิโลละ 100 บาท <br>" ;
echo "จำนวน " .$operator2."KG <br>";

$total = $operator2*100;
echo "ราคารวม = ".$total." บาท";
} 

if ($fruit == 'grape') {

echo "<img src ='image/grape.jpg' alt=''  width = '$width' <br><br>";
echo "องุ่น กิโลละ 200 บาท <br>" ;
echo "จำนวน " .$operator2."KG <br>";
$total = $operator2*200;
echo "ราคารวม = ".$total." บาท";
}


if ($fruit == 'orange') {

    echo "<img src ='image/orange.jpg' alt=''  width = '$width' <br><br>";
    echo "ส้ม กิโลละ 300 บาท <br>" ;
    echo "จำนวน " .$operator2."KG <br>";
    $total = $operator2*300;
echo "ราคารวม = ".$total." บาท";
    }

?>






</body>

</center>
</html>