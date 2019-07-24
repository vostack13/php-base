<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}

// ** получение пользователя по id
$id = $_GET['id'] ?? 0;
if ($id) {
    $ret = $pdo->query("SELECT * FROM users WHERE id = $id");
    // SQL INJECTION // ?id=123 UNION SELECT * FROM users; / ;DELETE * FROM users

    if (!$ret) { // проверяем на успешность
        print_r($pdo->errorInfo()); die;
    }

    $user = $ret->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>' . print_r($user, 1) . '</pre>';
}


// ** получение пользователя по имени
$name = $_GET['name'] ?? '';

//if ($name) {
//    $ret = $pdo->query("SELECT * FROM users WHERE `name` = '$name'");
//    $user = $ret->fetchAll(PDO::FETCH_ASSOC);
//    echo '<pre>' . print_r($user, 1) . '</pre>';
//}


// ** безопасный вариант
// $mysql = new mysqli('127.0.0.1', 'root', 'root', 'test', 3306);
// $name = mysqli_real_escape_string($mysql, $name);
//if ($name && ($secure = 1)) {
//    $query = $pdo->prepare("SELECT * FROM users WHERE `name` = :user_name");
//    $query->execute(['user_name' => $name]);
//    $user = $query->fetchAll(PDO::FETCH_ASSOC);
//    echo '<pre>' . print_r($user, 1) . '</pre>';
//}

if (isset($_REQUEST['form_send'])) {
    include "ajax.html";
}

if (!empty($_REQUEST['ajax'])) {
    header('Content-type: application/json');
    echo json_encode($user ? $user[0] : []);
}