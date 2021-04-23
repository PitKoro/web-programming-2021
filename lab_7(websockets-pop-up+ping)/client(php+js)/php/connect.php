<?
$host = 'localhost';  // Хост
$user = 'korolev';    // Имя пользователя
$pass = 'YTQO2UHN'; // Установленный вами пароль пользователю
$link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
mysql_select_db("korolev", $link); // Выбор БД
?>