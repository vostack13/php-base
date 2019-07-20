<?php

$a = '123';
$string = 'randomstring';

$result = isset($a); // true | false    объявлена переменная или нет
$result = empty($a); // true | false    пустая переменная или нет

$result = is_string($a); // true | false    является ли строкой
$result = is_int($a); // true | false    является ли ТИП числом
$result = is_numeric($a); // true | false    является ПЕРЕМЕННАЯ числом

$result = intval($a); // true | false    перобразование в число

$result = strpos($string, 'tring'); // 7   поиск начала вхождения подстроки

echo str_replace( 'string', 'integer', $string).PHP_EOL;
echo __DIR__.PHP_EOL;   /// путь до текущей папки
echo __FILE__.PHP_EOL;  /// путь до текущего файла

echo strlen($string); // длинна строки

echo strtoupper($string);  // загланые буквы
echo strtolower($string);  // прописные буквы
echo ucfirst($string);     // первый символ — заглавный

$c = 7.54;

echo round($c);  // округление в большую или в меньшую сторону
echo ceil($c);  // округление в большую сторону
echo floor($c);  // округление в меньшую сторону

$currentUnix = time();  // unixtime
$someUnix = mktime(1,2,3,4,5,2019);  // unixtime
$otherUnix = strtotime('27.04.2019'); // unixtime

echo date('d.m.Y H:i');
echo date('d.m.Y H:i', $someUnix);


$array = [1, 2, 3];
$someStr = implode('|', $array);  // 1|2|3
print_r(explode('|', $someStr));

array_push($array, 5);

array_map(function ($item) {
    return $item * 2;
}, $array);

$namedArray = [
    'key' => '123',
];

var_dump(array_key_exists('key', $namedArray));  // наличие ключа в массиве
var_dump(array_keys( $namedArray));  // наличие ключей


var_dump($result);
