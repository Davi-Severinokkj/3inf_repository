create table Produtos(
	id_produtos int primary key auto_increment,
    nome varchar(50),
    
    id_categoria INT,
	foreign key (id_categoria) references Categoria(id_categoria),
    
    preço varchar(10)
);