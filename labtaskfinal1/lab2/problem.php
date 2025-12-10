<?php
//1========================

$length=15;
$width=10;

$area=$length*$width;
$perimeter=2*($length+$width);

echo "The area of rectangle = {$area}";
echo "The perimeter of rectangle = {$perimeter}";
echo "<br>";

//2========================

$amount = 150;
$vat =  $amount  * (15/100);
echo "Value added tax = ($vat)";
echo "<br>";

//3========================

$num1=11;
if ($num1%2 == 0) {
    echo "The number is Even";
}
else {
    echo "The number is odd";
}
echo "<br>";

//4========================

$num2=5;
$num3=10;

if($num1>$num2 && $num1>$num3)
{
    echo "The largest number is =$num1";
}

elseif($num2>$num1 && $num2>$num3)
{
    echo "The largest number is =$num2";
}
else
{
    echo "The largest number is =$num3";
}
echo "<br>";
//5========================
  for($i=10; $i<=100; $i++)
    if($i%2 !=0)
    {
        echo $i. " ";
    }
    echo "<br>";
//6========================
   for($i=0; $i<3; $i++)
   {
   for($j=0; $j<=$i; $j++)
   {
    echo " * ";
   }
    echo "<br>";
   }
 //8======================== 
  
    
?>