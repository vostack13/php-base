<?php

$a = 123;
$b = '34234some';
$c = '0';
$d = [];

class MyClass {};

$e = new MyClass();

echo '<pre>';
var_dump(boolval($a));
var_dump((bool)$b);
var_dump((bool)$c);
var_dump((bool)$d);
var_dump((bool)$e);

echo '<hr>';

$str = '12312Some';

var_dump((int)$str);
var_dump($str + $a);

echo '<hr>';

$strArray = (array)'12312Some';
$strInt = (array)100;

var_dump($strArray);
var_dump($strInt);
