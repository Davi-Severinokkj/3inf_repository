create table Endereco(
	enderecoID int primary key not null,
    cep varchar(9) not null,
    logradouro varchar(100) not null,
    numero varchar(15) not null,
    complemento varchar(100),
    bairro varchar(100),
    cidade varchar(50),
    UF varchar(2)	
);