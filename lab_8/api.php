<?
header('Content-Type: text/html; charset=utf-8');
$address = '151.248.113.144';
$port = 9092;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, $address, $port);

$msg = $_POST['name'];
socket_write($socket, $msg, strlen($msg));
$out = socket_read($socket, 1024);
echo $out;

?>