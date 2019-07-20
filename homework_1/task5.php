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

foreach ($cars as $brand => $car) {
    echo "CAR $brand<br>";
    echo $car['model'] . ' ' . $car['speed'] . ' ' . $car['doors'] . ' ' . $car['year'] . '<br><br>';
}
