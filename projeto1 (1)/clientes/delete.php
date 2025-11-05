<?php
require_once __DIR__ . '/../inc/conexao.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
if($id){
    $mysqli->query("DELETE FROM clientes WHERE id = $id");
}
header('Location: index.php');
exit;
?>