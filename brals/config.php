<?php
$db_server='localhost';
$db_database='klient';
$db_user='root';
$db_password='';

$connection=mysqli_connect($db_server, $db_user, $db_password, $db_database);
mysqli_select_db($connection, "klient");


if(!$connection) {
	die('Не удаеться подключиться к базе данных');
}
?>