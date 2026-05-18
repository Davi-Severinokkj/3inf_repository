use recantoDoCafé;

create table Cadastro(
	id_cadastro int primary key auto_increment,
    nome varchar(100),
    email varchar(100),
    senha varchar(100),
    logradouro varchar(100)
);