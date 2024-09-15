

<?php
$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers); $i++) {
    $originalNumber = $numbers[$i];
    $multipliedBy = $originalNumber * 2;
    
    echo "Origineel getal: " . $originalNumber . "<br>";
    echo "Keer 2: " . $multipliedBy . "<br>";
}
?>