<?php

$grades = ['8.5', '7.0', '6.5', '9.0', '4.5'];

foreach ($grades as $grade) {
    echo 'Het cijfer is: ' . $grade . "<br>";
    if ($grade >= 5.5) 
    {
        echo "voldoende" . "<br>";
    }
    else echo "onvoldoende" . "<br>";
};
?>