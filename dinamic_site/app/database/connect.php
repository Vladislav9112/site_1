<?php 
$driver = 'mysql';
$host = 'localhost';
$db_name = 'dinamic_site';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
	$pdo = new PDO(
		"$driver:host=$host;dbname=$dbname;charset=$charset", $db_user, $db_pass, $options
	);
} catch (PDOException $i) {
	die("ошибка ");
}


// $driver = 'mysql';
// $host = 'localhost';
// $db_name = 'dinamic_site';
// $db_user = 'root';
// $db_pass = 'root';
// $charset = 'utf8';
// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// try{
// 	$pdo = new PDO(
// 		"$driver:host=$host;dbname=$dbname;charset=$charset", $db_user, $db_pass, $options
// 	);
// }cath (PDOException $i){
// 	die("Ошибка подключение к базе данных");
// }

// $driver = 'mysql';
// $host = 'localhost';
// $db_name = 'dinamic_site';
// $db_user = 'root';
// $db_pass = 'mysql';
// $charset = 'utf8';
// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// try {
// 	$pdo = new PDO(
// 		dsn: "$driver:host=$host;dbname=$db_name;charset=$charset",$db_user, $db_pass,$options);