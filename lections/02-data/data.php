<?php
// *** data from xml
//$fileData = file_get_contents('usersStorage.xml');
//// var_dump($fileData); // string from file
//$xml = new SimpleXMLElement($fileData); // create xml-element from string
//
//foreach ($xml->users->user as $user) {
//    echo $user->name->__toString() . '<br>';
//    echo 'id: ' . $user->attributes()->id . ', ';
//    $subId = 'sub-id';
//    echo 'sub-id: ' . $user->attributes()->$subId . ', ';
//    echo '<br>';
//}


// ** data from csv

// ЧТЕНИЕ CSV
// r - чтение
// fopen() — создание указателя на файл
//$fp = fopen('usersStorage.csv', 'r');
//
//if (!$fp) {
//    die('cant open file');
//}
//
//$ret = [];
//
//while ($str = fgetcsv($fp, 1000*1024, ';')) {
//    $ret[] = $str;
//}
////echo '<pre>' . print_r($ret, 1) . '</pre>';
//echo '<pre>' . var_export($ret) . '</pre>';
//
//// ЗАПИСЬ В CSV
//$ret[] = ['Geo;rg"e', 64, 'New York'];
//
////w - чтение и запись
//$newFile = fopen('usersStorage.csv', 'w');
//
//foreach ($ret as $item) {
//    fputcsv($newFile, $item, ';');
//}


// ** json
//echo json_encode($ret);

$users = [
    'users' => [
        ['name' => 'Dima', 'id' => 1],
        ['name' => 'Dima2', 'id' => 2],
        ['name' => 'Dima3', 'id' => 3, 'properties' => ['city' => 'SPb']],
    ]
];
//echo json_encode($users);

echo '<pre>';
$jsonString = '{"users":[{"name":"Dima","id":1},{"name":"Dima2","id":2},{"name":"Dim3","id":3,"properties":{"city":"SPb"}}]}';
print_r(json_decode($jsonString, false));
