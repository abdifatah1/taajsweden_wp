<?php

$dollar=$_GET["q"];

if ($dollar < 1000){
  $percentage = 5;
} // end if

else if ($dollar >= 1000 && $dollar <=1990){
  $percentage = 4;
}// end else if

else if ($dollar >=2000 && $dollar <5000){
  $percentage = 3;
} // end else if
else{
  $percentage = 2;
}
$result = $percentage*$dollar / 100;

$sum =(+$dollar) + (+$result);
$sek = 9.56;
$sum1 = (+$sum)*(+$sek);
$sum2 = round($sum1*100)/100;

echo $sum2 . ' SEK';



?>
