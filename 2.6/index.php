<?php
$score = 78;

switch (true) {
    case ($score > 90):
        echo "toppie";
        break;

    case ($score > 75):
        echo "minder toppie";
        break;


    case ($score > 55):	
        echo "normaal toppie";
        break;
        
    default:
    echo "geen toppie";
}

?>