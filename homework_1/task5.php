<?php

$bmw = [
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015',
];

$toyota= [
    'model' => 'Land Cruiser',
    'speed' => '90',
    'doors' => '5',
    'year' => '2019',
];

$opel= [
    'model' => 'Astra GTC',
    'speed' => '150',
    'doors' => '3',
    'year' => '2017',
];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel,
];


echo '<pre>';

foreach ($cars as $car => $value) {
    echo "CAR $car<br>";
    echo $value['model'] . ' ' . $value['speed'] . ' ' . $value['doors'] . ' ' . $value['year'] . '<br><br>';
}
