<?php require_once __DIR__ . '/../inc/conexao.php'; ?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Criar Produto</title><link rel="stylesheet" href="/projeto1/assets/style.css"></head><body>
<div class="container"><header><h1>Criar Produto</h1></header><nav><a href="/projeto1/index.php">Home</a><a href="index.php">Voltar</a></nav><main class="card">
  <form method="post" action="save.php">
    <label for="nome">Nome</label><input id="nome" name="nome" type="text" required />
    <label for="preco">Preço (ex: 12.90)</label><input id="preco" name="preco" type="text" required />
    <label for="categoria">Categoria</label><input id="categoria" name="categoria" type="text" />
    <label for="descricao">Descrição</label><textarea id="descricao" name="descricao"></textarea>
    <div style="display:flex;gap:8px;margin-top:8px"><button type="submit" class="btn">Salvar</button><a class="btn ghost" href="index.php">Cancelar</a></div>
  </form>
</main></div></body></html>