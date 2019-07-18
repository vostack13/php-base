<?php

echo '<pre>';
echo '<table>';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';

    for ($j = 1; $j <= 10; $j++) {
        if ($i % 2 === 0 && $j % 2 === 0) {
            $result = '(' . $i * $j . ')';
        } elseif ($i % 2 !== 0 && $j % 2 !== 0) {
            $result = '[' . $i * $j . ']';
        } else {
            $result = $i * $j;
        }

        echo '<td align="center" width="32px" height="32px">' . $result . '</td>';
    }

    echo '</tr>';
}

echo '</table>';
