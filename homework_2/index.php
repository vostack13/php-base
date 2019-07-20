<?php

require_once('./functions.php');

echo '<pre>';

/*
 * ЗАДАЧА 1
 */
tack1(['Маша', 'Петя', 'Катя'], false);

/*
 * ЗАДАЧА 2
 */
echo task2('/', 6, 8);

echo PHP_EOL;

/*
 * ЗАДАЧА 3
 */
echo '<table>';
    task3(8, '10');
echo '</table>';

echo PHP_EOL;

/*
 * ЗАДАЧА 4
 */
task4();

echo PHP_EOL;

/*
 * ЗАДАЧА 5
 */
task5('Карл у Клары украл Кораллы', 'Две бутылки лимонада');

echo PHP_EOL;

/*
 * ЗАДАЧА 6
 */
//$testData = 'Привет мир!';
//file_put_contents('./test.txt', $testData);

task6('test.txt');
