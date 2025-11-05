<?php
// Arquivo de conexão MySQL usando mysqli
// Ajuste as credenciais conforme seu ambiente local (XAMPP, WAMP, LAMP)
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'projeto1';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    die('Falha na conexão MySQL: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
?>