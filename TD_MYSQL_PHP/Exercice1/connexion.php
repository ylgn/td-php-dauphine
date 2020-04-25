<?php

$db_type = 'mysql';
$host = 'localhost';
$db_name ='bibliotheque';
$dsn = $db_type.':host='.$host.';dbname='.$db_name;
$username = 'yannis';
$password = 'yannis';
$connect= new PDO($dsn, $username, $password);
?>