# Sistema-de-Compra-Web

Como avaliação desse desse semestre, você deve fazer um sistema de compra e O objetivo é criar um CRUD, validando assim o seu aprendizado.

O sistema deve conter as seguintes funcionalidades:
Cadastro de Produtos, Controle de Venda, Consulta Estoque, Tela Gerencial

Dois tipos de usuário:
ADM, Vendedor.

 - Cadastro de Produtos / Consulta / Edição
Código Produto - Vendedor
Nome Do Produto
Data de Cadastro
Fornecedor
Custo Produto
Valor de Venda

- Controle de Venda
Data da Venda
QTDE comprada
Código Produto
Valor da Venda

Tela Gerencial - ADM
Consulta de Produtos - Exluir
Consulta de Vendas

Regras de Negócio

Cadastro de Produtos / Consulta / Edição
Data de Cadastro, deve ser automático;
Os produtos devem ser cadastrados, desde que não exista ainda o produto na base de dados;
Qual usuário pode consultar produtos cadastrados na base;
O usuário editar os dados de um produto cadastrado.

Controle de Venda
Data da venda deve ser automática;
Código Produto é o código do produto da tabela cadastro de produtos;
Valor da venda é o total da venda;
QTDE comprada é o total de produtos adquiridos.


Tela Gerencial - ADM
Consulta de Produtos
 - O administrador deve ter uma tela para ver de forma consolidada, os produtos cadastrados na base e a quantidade disponível;
 - Quando houver menos de 10 produtos no estoque, deve ter alguma espécie de notificação.

Consulta de Vendas
 - Deve ser possível verificar a quantidade vendida no dia e mês. Deve ser possível, verificar também o TOP dez de produtos mais vendidos no dia e no mês.
