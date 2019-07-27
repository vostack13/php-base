<?php
$host = '127.0.0.1';
// ДОЛЖНА БЫТЬ ПОДКЛЮЧЕНА mysqli!!!
$mysql = new mysqli($host, 'root', 'gopq49uma1', 'db_posts', 3306);
// проверим успешность подключения
if (mysqli_connect_errno()) {
    echo 'Connection error: ' . mysqli_connect_error();
    die;
}

// ** select

// выберем пользователей отсортированных по убыванию id в количестве 5 штук
$ret = $mysql->query("SELECT * FROM users ORDER BY id DESC LIMIT 5");
$data = $ret->fetch_all(); // из объекта результата вопроса получаем записи
echo 'affected rows: ' . $mysql->affected_rows . '<br>'; // выводим кол-во затронутых записей
echo 'result: <pre>' . print_r($data, 1) . '</pre>'; // распечатываем рез-т


// ** insert
$password = md5('jack\'sPassword'); // пароль хэшируем

//// вставим нового ползователя с именем Jack
//$ret = $mysql->query("INSERT INTO users (`name`, `age`, `password`) VALUES ('Jack', 23, '$password');");
//
//if (!$ret) { // проверим, что запрос успешно выполнился
//    echo "query error: " . $mysql->error; // если нет - выведем ошибку и умрем
//    die;
//}

// выведем айди последней вставленной записи, он будет уникален в рамках текущего соединения с БД, на него можно рассчитывать
echo 'last insert id: ' . $mysql->insert_id . '<br>';



// ** update
// обновим емэйл ВСЕМ пользователям с идентификатором больше 5, будьте осторожны с такими командами, как правило
// условие WHERE должно быть строгим например "... WHERE id = " . (int)$id;
$ret = $mysql->query("UPDATE users SET `name` = 'Jhone' WHERE id = 7");

// выведем число обновленных строк, mysql подчитает лишь те строки котоыре реально обновились
// то есть если у кого-то из попавших под условие пользователей уже был емейл "ololo@mail.ru" такая запись обновлена не будет
//echo $mysql->affected_rows . ' rows updated';
