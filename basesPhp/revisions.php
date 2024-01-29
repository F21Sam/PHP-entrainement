<?php
$age = 18;

if ($age < 18) {
    echo "Mineur";
} elseif ($age >= 18 && $age < 21) {
    echo "Majeur mais mineur";
} else {
    echo "Majeur";
}

// Boucle for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// Boucle while
$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}

// Boucle do-while
$k = 0;
do {
    echo $k;
    $k++;
} while ($k < 5);
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "It's Monday!";
        break;
    case "Tuesday":
        echo "It's Tuesday!";
        break;
    default:
        echo "It's another day.";
}
function add($a, $b) {
    return $a + $b;
}

function multiply($x, $y) {
    return $x * $y;
}

$result = multiply(2, 5); // Le résultat est 10


?>