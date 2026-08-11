use recantoDoCafé;

CREATE TABLE Vendas(
    id_venda INT PRIMARY KEY AUTO_INCREMENT,
    id_produtos INT NOT NULL,
    Quantidade INT NOT NULL,
    Forma_de_Pagamento ENUM('PIX', 'BOLETO', 'Cartao_Credito', 'Cartao_Debito'),
    FOREIGN KEY (id_produtos) REFERENCES Produtos(id_produtos)
);