<?php

echo '<pre>';

const MY_CONST = 123;
define(MY_SOME_CONST, 123);

var_dump(MY_CONST);
var_dump(MY_SOME_CONST);

echo '<hr>';

if (defined('MY_CONST')) {
    echo 'MY_CONST 123 <br>';
} elseif (MY_CONST == 124) {
    echo 124;
} else {
    echo 'not 123 or 124<br>';
}

echo '<hr>';

$type = 2;

switch ($type) {
    case 1:
        echo 'type = 1<br>';
        break;
    case 2:
        echo 'type = 2<br>';
        break;
    case 3:
        echo 'type = 3<br>';
        break;
    default:
        echo 'type is unknown<br>';
}

include "./some_conf.php";
//require "./some_conf.php"; // если файл отсутствует, то не продолжит работу
//include_once "./some_conf.php"; // *_once — если файл уже подключен, то подлючать сново не будет
//require "/some_conf.php";       // *_once — если файл уже подключен, то подлючать сново не будет

echo '<hr>';

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[] = $i * 2;
};

print_r($array);

for ($i = 5; $i <= sizeof($array); $i++) {
    if (isset($array[$i])) {
        var_dump($array[$i]);
    }
}

echo '<hr>';

$arrayKeys = [];

for ($i = 0; $i < 10; $i++) {
    $key = mt_rand(1, 100);
    $arrayKeys["key_$key"] = $i * 2;
}

foreach ($arrayKeys as $key => $value) {
    echo "$key is $value<br>";
}

echo '<hr>';

$i = 0;

do {
    if (!isset($array[$i])) {
        break;
    }

    echo "$i => $array[$i]<br>";
    $i++;
} while ($array[$i] < 15);

echo '<hr>';

$i = 0;
$c = 0;
while ($array[$i] < 15) {
    echo "$i => $array[$i]<br>";

    $c++;

    if ($c > 1000) {
        break;
    }
}
