create table Locacoes(
	locacaoID int auto_increment primary key not null,
    clienteID int,
    foreign key (clienteID) references Clientes(clienteID),
	veiculoID int,
    foreign key (veiculoID) references Veiculos(veiculoID),
    funcionarioID int,
    foreign key (funcionarioID) references Funcionarios(funcionarioID),
    dataLocacao date,
    dataDevolucaoPrevista date,
    dataDevolucaoReal date,
    valorTotal decimal (10,2)
);