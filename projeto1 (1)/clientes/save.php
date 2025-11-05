<?php
require_once __DIR__ . '/../inc/conexao.php';
if($_SERVER['REQUEST_METHOD'] !== 'POST'){ header('Location: index.php'); exit; }
$id = isset($_POST['id']) && $_POST['id'] !== '' ? (int) $_POST['id'] : null;
$nome = isset($_POST['nome']) ? $mysqli->real_escape_string($_POST['nome']) : '';
$email = isset($_POST['email']) ? $mysqli->real_escape_string($_POST['email']) : '';
$telefone = isset($_POST['telefone']) ? $mysqli->real_escape_string($_POST['telefone']) : '';
if($id){
    $sql = "UPDATE clientes SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = $id";
    $mysqli->query($sql);
} else {
    $sql = "INSERT INTO clientes (nome,email,telefone) VALUES ('$nome','$email','$telefone')";
    $mysqli->query($sql);
}
header('Location: index.php');
exit;
?>