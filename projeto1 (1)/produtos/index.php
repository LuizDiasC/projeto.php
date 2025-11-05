<?php
require_once __DIR__ . '/../inc/conexao.php';
$res = $mysqli->query("SELECT * FROM produtos ORDER BY id DESC");
?>
<!doctype html>
<html lang="pt-BR">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>CRUD Produtos</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head>
<body>
  <div class="container">
    <header><div class="brand"><div class="logo">CR</div><div><h1>CRUD Produtos</h1><p class="lead">Lista</p></div></div></header>
    <nav><a href="/projeto1/index.php">Home</a><a class="active" href="index.php">Produtos</a></nav>
    <main class="card">
      <h2>Listagem - Produtos</h2>
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
        <div><a class="btn" href="create.php">+ Novo</a></div>
        <div class="meta">Resultados: <strong><?php echo $res->num_rows; ?></strong></div>
      </div>
      <div style="overflow:auto">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Preço</th>
              <th>Categoria</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php while($row = $res->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo htmlspecialchars($row['nome']); ?></td>
              <td>R$ <?php echo number_format($row['preco'],2,',','.'); ?></td>
              <td><?php echo htmlspecialchars($row['categoria']); ?></td>
              <td class="actions">
                <a class="btn ghost" href="show.php?id=<?php echo $row['id']; ?>">Ver</a>
                <a class="btn ghost" href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a class="btn" href="#" onclick="if(confirm('Deseja excluir #'+<?php echo $row['id']; ?>+'?')){window.location='delete.php?id='+<?php echo $row['id']; ?>;}">Excluir</a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>