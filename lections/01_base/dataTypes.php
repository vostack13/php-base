<?php

// Всего 8 типов данных

// 1. int
$int = 123;
var_dump(PHP_INT_MAX, PHP_INT_MIN);

// 2. float
$float = 2.15;
var_dump(36 - 35.99); // нельзя мешать целые числа и дробные, иноче потеря точности
var_dump((36*100 - 35.99*100) / 100); // выход из ситуации

// 3. string
$string = 'My name is Stanislav';
$string2 = "My value is $int";
$string2 = 'My value is $int and i need \'quotes\'';

// 4. boolean
$boolean = false;

// 5. array
$array = [1, 2, 3];
$array1 = [1, 2, $array];

$array2 = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'array' => $array,
];

// 6. object
class MyClass {};

$object = new MyClass();

// 7. resource
$file = fopen('C:/text.txt', 'r');
$file2 = fopen('./text2.txt', 'w+');

var_dump($file2);


// 8. null
var_dump(null);
//var_dump($null);
