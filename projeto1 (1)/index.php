<?php
// Página inicial - links para os CRUDs
?><!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Projeto1 - CRUD</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <header>
      <div class="brand"><div class="logo">CR</div><div><h1>Projeto 1 — CRUD</h1><p class="lead">Clientes e Produtos</p></div></div>
    </header>
    <nav>
      <a href="clientes/index.php">CRUD Clientes</a>
      <a href="produtos/index.php">CRUD Produtos</a>
      <a href="README.txt">README</a>
    </nav>
    <main class="card">
      <h2>Instruções</h2>
      <p class="meta">Importe <code>projeto1.sql</code> em seu MySQL (por exemplo via phpMyAdmin), ajuste <code>inc/conexao.php</code> e acesse <code>index.php</code>.</p>
      <p>Boa sorte — entregue no Blackboard!</p>
    </main>
  </div>
</body>
</html>