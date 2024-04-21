<?php
$num = "hello world!!";
echo $num .'= '.gettype($num)."</br>";

$x=10;
$y=10;
echo ($x===$y)."</br>";
$num = 53.89;
$num1 = "43.34";
$sum = $num+(float)$num1;// floatval($num1)
echo $sum."</br>";

$num2 = 53.89;
$num3 = "43.34";
$sum1 = $num2+$num3;// int + String
echo $sum1."</br>";

$number =array(3,4,1,2);
for($i=0; $i<count($number);$i++)
{
echo $number[$i].' ';
}
/* For each */
foreach($number as $num)
{
echo $num.' '."</br>";
}

$student = array(
    "name" => "abebe",
    "age" => 20,
    "university" => "DBU",
    "major" => "Software Engineering"
    );
    foreach($student as $bura=>$value){
    echo $bura.": ".$value."<br/>";
    }
?>