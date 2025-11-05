<?php
require_once __DIR__ . '/../inc/conexao.php';
$res = $mysqli->query("SELECT * FROM clientes ORDER BY id DESC");
?>
<!doctype html>
<html lang="pt-BR">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>CRUD Clientes</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head>
<body>
  <div class="container">
    <header><div class="brand"><div class="logo">CR</div><div><h1>CRUD Clientes</h1><p class="lead">Lista</p></div></div></header>
    <nav><a href="/projeto1/index.php">Home</a><a class="active" href="index.php">Clientes</a></nav>
    <main class="card">
      <h2>Listagem - Clientes</h2>
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
              <th>Email</th>
              <th>Telefone</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php while($row = $res->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo htmlspecialchars($row['nome']); ?></td>
              <td><?php echo htmlspecialchars($row['email']); ?></td>
              <td><?php echo htmlspecialchars($row['telefone']); ?></td>
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