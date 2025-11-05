README - Projeto1 (CRUD Clientes + Produtos)
-------------------------------------------

Tema: Produtos (novo CRUD)
Banco: projeto1
Conexão: inc/conexao.php (mysqli). Ajuste usuário/senha conforme ambiente local.

Como usar:
1. Importe 'projeto1.sql' no seu MySQL (phpMyAdmin ou linha de comando).
2. Copie a pasta 'projeto1' para a pasta raiz do servidor web (ex: htdocs ou www).
3. Ajuste credenciais em inc/conexao.php se necessário.
4. Acesse http://localhost/projeto1/index.php

Estrutura de pastas:
- inc/conexao.php   -> arquivo de conexão com o banco
- clientes/        -> CRUD completo (index, create, edit, save, delete, show)
- produtos/        -> CRUD completo (index, create, edit, save, delete, show)
- assets/style.css -> estilos visuais
- projeto1.sql     -> script para criar banco e tabelas

Observações:
- As ações de criação/edição/exclusão usam técnicas simples com mysqli e redirecionamentos via header().
- Para produção, recomenda-se usar prepared statements e validação/escape adequados.
