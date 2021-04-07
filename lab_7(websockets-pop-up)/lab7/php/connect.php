<?
$host = 'localhost';  // Хост
$user = 'root';    // Имя пользователя
$pass = 'root'; // Установленный вами пароль пользователю
$link = mysql_connect($host, $user, $pass); // Соединяемся с СУБД
mysql_select_db("korolev", $link); // Выбор БД
?>