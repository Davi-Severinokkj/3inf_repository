DROP DATABASE IF EXISTS LOCADORA;
CREATE DATABASE LOCADORA;
USE LOCADORA;

-- =====================================
-- TABELA ENDERECO
-- =====================================
CREATE TABLE Endereco(
    enderecoID INT AUTO_INCREMENT PRIMARY KEY,
    cep VARCHAR(9) NOT NULL,
    logradouro VARCHAR(100) NOT NULL,
    numero VARCHAR(15) NOT NULL,
    complemento VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(50),
    UF VARCHAR(2)
);

-- =====================================
-- TABELA CLIENTES
-- =====================================
CREATE TABLE Clientes(
    clienteID INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(15) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100),
    enderecoID INT,
    FOREIGN KEY (enderecoID) REFERENCES Endereco(enderecoID)
);

-- =====================================
-- TABELA FUNCIONARIOS
-- =====================================
CREATE TABLE Funcionarios(
    funcionarioID INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cargo VARCHAR(30) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100)
);

-- =====================================
-- TABELA CATEGORIA
-- =====================================
CREATE TABLE Categoria(
    categoriaID INT AUTO_INCREMENT PRIMARY KEY,
    categoria VARCHAR(20),
    valorDiaria DECIMAL(10,2) NOT NULL
);

-- =====================================
-- TABELA VEICULOS
-- =====================================
CREATE TABLE Veiculos(
    veiculoID INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(30) NOT NULL,
    modelo VARCHAR(40),
    placa VARCHAR(10) UNIQUE,
    ano INT,
    categoriaID INT,
    situacao VARCHAR(20),
    FOREIGN KEY (categoriaID) REFERENCES Categoria(categoriaID)
);

-- =====================================
-- TABELA LOCACOES
-- =====================================
CREATE TABLE Locacoes(
    locacaoID INT AUTO_INCREMENT PRIMARY KEY,
    clienteID INT,
    veiculoID INT,
    funcionarioID INT,
    dataLocacao DATE,
    dataDevolucaoPrevista DATE,
    dataDevolucaoReal DATE,
    valorTotal DECIMAL(10,2),
    FOREIGN KEY (clienteID) REFERENCES Clientes(clienteID),
    FOREIGN KEY (veiculoID) REFERENCES Veiculos(veiculoID),
    FOREIGN KEY (funcionarioID) REFERENCES Funcionarios(funcionarioID)
);

-- =====================================
-- TABELA PAGAMENTOS
-- =====================================
CREATE TABLE Pagamentos(
    pagamentoID INT AUTO_INCREMENT PRIMARY KEY,
    locacaoID INT,
    dataPagamento DATE,
    valorPago DECIMAL(10,2),
    metodo VARCHAR(20),
    FOREIGN KEY (locacaoID) REFERENCES Locacoes(locacaoID)
);

-- =====================================
-- INSERT ENDERECO
-- =====================================
INSERT INTO Endereco
(cep, logradouro, numero, complemento, bairro, cidade, UF)
VALUES
('03150-000', 'Rua A', '100', NULL, 'Santana', 'São Paulo', 'SP'),
('21000-100', 'Av. B', '200', 'Casa A', 'Realejo', 'Rio de Janeiro', 'RJ'),
('31500-000', 'Rua C', '300', NULL, NULL, 'Belo Horizonte', 'MG'),
('41234-001', 'Rua D', 'S/N', 'Sítio Alegre', 'Zona Rural', 'Curitiba', 'PR'),
('51000-000', 'Av. E', '500', 'Fundos', 'Centro', 'Porto Alegre', 'RS'),
('04201-001', 'Rua das Flores', '123', NULL, 'Centro', 'São Paulo', 'SP'),
('21002-500', 'Avenida Atlântica', '890', 'Loja 3', 'Copacabana', 'Rio de Janeiro', 'RJ'),
('01995-654', 'Rua das Palmeiras', '210', NULL, 'Jardim Paulista', 'Campinas', 'SP'),
('21400-000', 'Avenida Beira Mar', '90', 'Loja 1', 'Viradouro', 'Rio de Janeiro', 'RJ'),
('58400-100', 'Rua das Palmares', '210', 'Sobreloja', 'Jardim Canadá', 'Campina Grande', 'PB');

-- =====================================
-- INSERT CLIENTES
-- =====================================
INSERT INTO Clientes
(nome, cpf, telefone, email, enderecoID)
VALUES
('João Silva', '12345678901', '11987654321', 'joao@email.com', 1),
('Maria Souza', '23456789012', '11965432109', 'maria@email.com', 2),
('Carlos Pereira', '34567890123', '21988887777', 'carlos@email.com', 3),
('Ana Oliveira', '45678901234', '31977776666', 'ana@email.com', 4),
('Fernanda Lima', '56789012345', '41999998888', 'fernanda@email.com', 5),
('Carla Mendes', '22233344455', '11988765432', 'carla@email.com', 6),
('Lucas Pereira', '33344455566', '21976543210', 'lucas@email.com', 7),
('Fernanda Oliveira', '44455566677', '41987659876', 'fernanda2@email.com', 8),
('Roberto Silva', '55566677788', '31989891234', 'roberto@email.com', 9),
('Ana Costa', '66677788899', '19984442233', 'anacosta@email.com', 10);

-- =====================================
-- INSERT CATEGORIA
-- =====================================
INSERT INTO Categoria(categoria, valorDiaria)
VALUES
('Econômico', 120.00),
('SUV', 220.00),
('Luxo', 400.00),
('Utilitário', 180.00),
('Sedan', 150.00),
('Hatch', 120.00),
('Pick-up', 220.00),
('Elétrico', 300.00),
('Minivan', 180.00),
('Conversível', 350.00);

-- =====================================
-- INSERT FUNCIONARIOS
-- =====================================
INSERT INTO Funcionarios(nome, cargo, telefone, email)
VALUES
('Paulo Mendes', 'Atendente', '11955554444', 'paulo@locadora.com'),
('Juliana Rocha', 'Gerente', '21944443333', 'juliana@locadora.com'),
('Roberto Alves', 'Mecânico', '31933332222', 'roberto@locadora.com'),
('Patrícia Gomes', 'Atendente', '11977771122', 'patricia@locadora.com'),
('João Batista', 'Gerente', '21988883344', 'joao@locadora.com'),
('Sofia Martins', 'Mecânico', '31966665566', 'sofia@locadora.com'),
('Bruno Ferreira', 'Atendente', '41955557788', 'bruno@locadora.com');

-- =====================================
-- INSERT VEICULOS
-- =====================================
INSERT INTO Veiculos
(marca, modelo, placa, ano, categoriaID, situacao)
VALUES
('Chevrolet', 'Onix', 'ABC1D23', 2021, 6, 'Disponivel'),
('Toyota', 'Hilux', 'XYZ9E88', 2020, 7, 'Disponivel'),
('Tesla', 'Model 3', 'TES1A23', 2022, 8, 'Disponivel'),
('Toyota', 'Corolla', 'KLM5F67', 2022, 5, 'Disponivel'),
('Jeep', 'Compass', 'JHK8P90', 2021, 2, 'Disponivel'),
('Honda', 'Civic', 'GHJ3L45', 2023, 5, 'Disponivel'),
('Fiat', 'Strada', 'AAA9Z99', 2021, 7, 'Disponivel'),
('Fiat', 'Argo', 'ABC1234', 2020, 1, 'Disponivel'),
('Chevrolet', 'Onix', 'DEF5678', 2021, 1, 'Disponivel'),
('Toyota', 'Hilux', 'GHI9012', 2022, 7, 'Disponivel'),
('Honda', 'HR-V', 'JKL3456', 2021, 2, 'Alugado'),
('BMW', '320i', 'MNO7890', 2022, 3, 'Disponivel'),
('Jeep', 'Compass', 'PQR2345', 2021, 2, 'Disponivel');

-- =====================================
-- INSERT LOCACOES
-- =====================================
INSERT INTO Locacoes
(clienteID, veiculoID, funcionarioID, dataLocacao, dataDevolucaoPrevista, dataDevolucaoReal, valorTotal)
VALUES
(1, 8, 1, '2025-08-01', '2025-08-05', '2025-08-05', 480.00),
(2, 11, 1, '2025-08-02', '2025-08-06', NULL, 880.00),
(3, 2, 2, '2025-08-03', '2025-08-07', '2025-08-08', 900.00),
(4, 12, 2, '2025-08-04', '2025-08-06', '2025-08-06', 800.00),
(6, 9, 2, '2025-01-15', '2025-01-20', '2025-01-20', 500.00),
(7, 10, 5, '2025-02-01', '2025-02-10', '2025-02-10', 1500.00),
(8, 3, 6, '2025-02-05', '2025-02-07', '2025-02-07', 800.00),
(9, 4, 1, '2025-03-01', '2025-03-05', '2025-03-05', 700.00),
(6, 5, 4, '2025-03-10', '2025-03-15', '2025-03-15', 1200.00);

-- =====================================
-- INSERT PAGAMENTOS
-- =====================================
INSERT INTO Pagamentos
(locacaoID, dataPagamento, valorPago, metodo)
VALUES
(1, '2025-08-05', 480.00, 'Cartao'),
(2, '2025-08-02', 880.00, 'PIX'),
(3, '2025-08-08', 900.00, 'Dinheiro'),
(4, '2025-08-06', 800.00, 'Cartao'),
(5, '2025-01-15', 500.00, 'Cartao'),
(6, '2025-02-01', 1500.00, 'Boleto'),
(7, '2025-02-05', 800.00, 'PIX'),
(8, '2025-03-01', 700.00, 'Cartao'),
(9, '2025-03-10', 1200.00, 'PIX');