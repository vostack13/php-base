<?php

echo '<pre>';
function helloVasja (string $name, string $lastName = 'Иванов')
{
    echo  'Привет ' . $name . ' ' . $lastName . '<br>';
}

function complete (): string
{
    return 'Я сделал';
}

$helloPetja = function (): string
{
    return 'anonym<br>';
};

helloVasja('Петр');
helloVasja('Игорь', 'Петров');

$result = complete();

var_dump($result);


echo $helloPetja();

$users = [
    [
        'name' => 'Петя',
        'age' => 21,

        'say_hello' => function () {
            echo 'Привет, я Петя';
        },

    ],

    [
        'name' => 'Вася',
        'age' => 31,

        'say_hello' => function () {
            echo 'Привет, я Вася';
        },
    ],

    [
        'name' => 'Маша',
        'age' => 11,

        'say_hello' => function () {
            echo 'Привет, я Маша';
        },
    ]
];

usort($users, function ($user1, $user2) {
    return $user1['age'] - $user2['age'];

    // ТОЖЕ САМОЕ
//    if ($user1['age'] > $user2['age']) {
//        return -1;
//    } elseif ($user1['age'] < $user2['age']) {
//        return 1;
//    } else {
//        0;
//    }
});

echo '<pre>';
print_r($users);


$someUsers = [
    'forum' => [
        'Маша',
        'Петя',
        'Коля',

    ],
    'vk' => [
        'Галя',
        'Саша',

    ],
    'sites' => [
        'mama.ru' => [
            'Влад',
            'Коля',
        ],
        'papa.ru' => [
            'Сережа',
            'Катя',
            'Валентин',
        ],
    ],
];

function printName($nameArray)
{
    $result = '';

    foreach ($nameArray as $key => $name) {
        if (is_array($name)) {
            $result .= printName($name);
        } else {
            $result .= $name . ', ';
        }
    }

    return $result;
}

echo printName($someUsers);

function myFunc (... $args)
{
    return $args[0];
}


// func_get_args();  /// достает все аргументы функции, в которой вызывается
