<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$mysqli = new mysqli($host, $user, $password, $db);

if($mysqli->error){
    echo 'falha na conexão com o banco de dados';
}


?>