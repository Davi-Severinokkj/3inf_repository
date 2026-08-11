create table Veiculos(
	veiculoID int auto_increment primary key not null,
    placa varchar(7) unique,
	marca varchar(20) not null,
    modelo varchar(20),
    ano int,
    categoriaID int,
    foreign key (categoriaID) references Categoria(categoriaID),
    situacao varchar(15)
);