CREATE DATABASE sales_system;
USE sales_system;

CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE ,
    preco DECIMAL(10,2) NOT NULL
);

CREATE TABLE fornecedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL UNIQUE 
);

CREATE TABLE produto_fornecedor (
    id_produto INT,
    id_fornecedor INT,
    PRIMARY KEY (id_produto, id_fornecedor),
    FOREIGN KEY (id_produto) REFERENCES produto(id),
    FOREIGN KEY (id_fornecedor) REFERENCES fornecedor(id)
);

CREATE TABLE venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    id_produto INT,
    preco_produto DECIMAL(10,2),
    data_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    endereco varchar(255) not null,
    FOREIGN KEY (id_produto) REFERENCES produto(id)
);

INSERT into produto (nome, preco) values 
('Notebook', 1200.99),
('Lápis de cor', 15.99),
('Sabonete', 1.50),
('Sabão em pó', 5.00),
('Sabonete Líquido', 15.50);

INSERT into fornecedor (nome) values
('Acer'), ('Faber Castel'), ('Dove'), ('Natura');

insert into produto_fornecedor (id_produto, id_fornecedor) values (1, 1), (2, 2), (3, 3), (3, 4), (4, 4), (5, 4);