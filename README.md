# Gestão de Brinquedos

Sistema básico em PHP e MySQL para cadastrar, listar, editar e excluir brinquedos. Os comandos SQL usam prepared statements.

## Como executar

1. Inicie o Apache e o MySQL pelo XAMPP.
2. No phpMyAdmin, importe `database/db.sql` para criar o banco e a tabela.
3. Confira usuário e senha do MySQL em `infra/conexao.php`. O padrão está como `root` sem senha.
4. Coloque a pasta `CRUD-Brinquedos` dentro da pasta `htdocs` do XAMPP.
5. Acesse `http://localhost:(numero da sua porta)/CRUD-Brinquedos/` no navegador.
