<?php
require_once __DIR__ . '/../inc/conexao.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$res = $mysqli->query("SELECT * FROM clientes WHERE id = $id");
if(!$res || $res->num_rows === 0){ header('Location: index.php'); exit; }
$row = $res->fetch_assoc();
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Ver Cliente</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head><body>
<div class="container"><header><h1>Detalhes Cliente</h1></header><nav><a href="/projeto1/index.php">Home</a><a href="index.php">Voltar</a></nav><main class="card">
  <p><strong>Nome:</strong> <?php echo htmlspecialchars($row['nome']); ?></p>
  <p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
  <p><strong>Telefone:</strong> <?php echo htmlspecialchars($row['telefone']); ?></p>
</main></div></body></html>