<?php

function tack1(array $arrayString, bool $isConcat = false): string
{
    if ($isConcat) {
        return implode(' ', $arrayString);
    }

    foreach ($arrayString as $string) {
        echo '<p>' . $string . '</p>';
    }

    return '';
}

function task2(string $operator, ... $arg)
{
    $result = !empty($arg) ? $arg[0] : 0;

    foreach (array_slice($arg, 1) as $value) {
        switch ($operator) {
            case '+':
                $result += $value;
                break;
            case '-':
                $result -= $value;
                break;
            case '*':
                $result *= $value;
                break;
            case '/':
                $result /= $value;
                break;
            default:
                return 'Unknown operator';
                break;
        }
    }

    return $result;
}

function task3($row, $collum)
{
    if (!is_int($row) || !is_int($collum)) {
        echo '<tr>' .
            '<td>' .
            'Значения должны быть целыми числами' .
            '</td>' .
            '</tr>';

        return;
    }

    if ($row > 1) {
        task3($row - 1, $collum);
    }

    echo '<tr>';

    for ($i = 1; $i <= $collum; $i++) {
        echo '<td align="center" width="32" height="32">' . $row * $i . '</td>';
    }

    echo '</tr>';
}

function task4()
{
    echo date('d:m:Y H:i', time()) . PHP_EOL;
    echo strtotime('2016-02-24 12:10:22') . PHP_EOL;
}

function task5($stringWithUpper, $stringWithWord)
{
    echo preg_replace('/[A-ZА-ЯЁ]/u', '', $stringWithUpper) . PHP_EOL;
    echo str_replace('Две', 'Три', $stringWithWord) . PHP_EOL;
}

function task6($fileName)
{
    echo file_get_contents($fileName) . PHP_EOL;
}
