<?php
session_start();

//var_dump($_SESSION);

if (!isset($_SESSION['a'])) {
    $a = mt_rand(1, 100);
    $_SESSION['a'] = $a;
} else {
    $a = $_SESSION['a'];
}

$_SESSION['a'] = $a;

var_dump($a);

//var_dump($_GET);
//var_dump($_POST);
