<?php
require_once __DIR__ . '/../inc/conexao.php';
if($_SERVER['REQUEST_METHOD'] !== 'POST'){ header('Location: index.php'); exit; }
$id = isset($_POST['id']) && $_POST['id'] !== '' ? (int) $_POST['id'] : null;
$nome = isset($_POST['nome']) ? $mysqli->real_escape_string($_POST['nome']) : '';
$preco = isset($_POST['preco']) ? $mysqli->real_escape_string($_POST['preco']) : '0.00';
$categoria = isset($_POST['categoria']) ? $mysqli->real_escape_string($_POST['categoria']) : '';
$descricao = isset($_POST['descricao']) ? $mysqli->real_escape_string($_POST['descricao']) : '';
if($id){
    $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', categoria = '$categoria', descricao = '$descricao' WHERE id = $id";
    $mysqli->query($sql);
} else {
    $sql = "INSERT INTO produtos (nome,preco,categoria,descricao) VALUES ('$nome','$preco','$categoria','$descricao')";
    $mysqli->query($sql);
}
header('Location: index.php');
exit;
?>