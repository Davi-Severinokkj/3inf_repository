create table Clientes(
	clienteID int primary key not null,
    nome varchar(100) not null,
    cpf varchar(15) not null,
    telefone varchar(15) not null,
    email varchar(100),
    foreign key (enderecoID) references Endereco(enderecoID)
);