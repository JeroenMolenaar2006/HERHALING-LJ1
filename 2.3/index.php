<?php
$day = "date('l')";
switch ($day) {
    case "monday":
        echo "Vandaag is het maandag";
        break;
    case "tuesday":
        echo "Vandaag is het dinsdag";
        break;
    case "wednesday":
        echo "Vandaag is het woensdag";
        break;
    default:
        echo "Onbekende dag";
}


?>