<?php
require_once __DIR__ . '/../inc/conexao.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$res = $mysqli->query("SELECT * FROM produtos WHERE id = $id");
if(!$res || $res->num_rows === 0){ header('Location: index.php'); exit; }
$row = $res->fetch_assoc();
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Editar Produto</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head><body>
<div class="container"><header><h1>Editar Produto</h1></header><nav><a href="/projeto1/index.php">Home</a><a href="index.php">Voltar</a></nav><main class="card">
  <form method="post" action="save.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <label for="nome">Nome</label><input id="nome" name="nome" type="text" value="<?php echo htmlspecialchars($row['nome']); ?>" required />
    <label for="preco">Preço (ex: 12.90)</label><input id="preco" name="preco" type="text" value="<?php echo htmlspecialchars($row['preco']); ?>" required />
    <label for="categoria">Categoria</label><input id="categoria" name="categoria" type="text" value="<?php echo htmlspecialchars($row['categoria']); ?>" />
    <label for="descricao">Descrição</label><textarea id="descricao" name="descricao"><?php echo htmlspecialchars($row['descricao']); ?></textarea>
    <div style="display:flex;gap:8px;margin-top:8px"><button type="submit" class="btn">Atualizar</button><a class="btn ghost" href="index.php">Cancelar</a></div>
  </form>
</main></div></body></html>