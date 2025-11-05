<?php
require_once __DIR__ . '/../inc/conexao.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$res = $mysqli->query("SELECT * FROM produtos WHERE id = $id");
if(!$res || $res->num_rows === 0){ header('Location: index.php'); exit; }
$row = $res->fetch_assoc();
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Ver Produto</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head><body>
<div class="container"><header><h1>Detalhes Produto</h1></header><nav><a href="/projeto1/index.php">Home</a><a href="index.php">Voltar</a></nav><main class="card">
  <p><strong>Nome:</strong> <?php echo htmlspecialchars($row['nome']); ?></p>
  <p><strong>Preço:</strong> R$ <?php echo number_format($row['preco'],2,',','.'); ?></p>
  <p><strong>Categoria:</strong> <?php echo htmlspecialchars($row['categoria']); ?></p>
  <p><strong>Descrição:</strong><br><?php echo nl2br(htmlspecialchars($row['descricao'])); ?></p>
</main></div></body></html>