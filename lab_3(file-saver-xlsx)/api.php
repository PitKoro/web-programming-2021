<?
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');

    $host = 'localhost';  // Хост
    $user = 'root';    // Имя пользователя
    $pass = 'root'; // Установленный вами пароль пользователю
    $link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
    mysql_select_db("korolev", $link); // Выбор БД


    $allUsers = mysql_query('SELECT * FROM chat', $link);

    $result = [['ID', 'NAME', 'DESCRIPTION']];

    while($row = mysql_fetch_array($allUsers)) {
        array_push($result, [$row['id'], $row['name'], $row['description']]);
    }

    mysql_free_result($allUsers);
    mysql_close($link);

    echo json_encode(array('data' => $result));
?>