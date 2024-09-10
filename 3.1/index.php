<?php 


$city = ['rotterdam','london', 'munich', 'vienna'];
echo $city[0]; 
echo end(&array:$city);

$city[] = "paris";
echo end(&array:$city);

?>