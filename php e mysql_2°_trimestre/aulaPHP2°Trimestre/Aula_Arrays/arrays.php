<?php
echo "Meu array <br>";
$meuArray = array('Volvo' , 15 , ['maçãs', 'bananas']);
var_dump($meuArray);
echo "<br> <br>";

echo "Meu segundo array. <br>";
$meuSegundoArray = ['Volvo' , 15 , ['maçãs', 'bananas']];
var_dump($meuSegundoArray);
echo "<br><br>";


echo "Nomes <br>";
$names = [
    "Jhon",
    "Jane",
    "Mary",
    "All are Doe"
];

var_dump($names);
echo "<br> <br>";
echo "Array vazia <br>";
$cities = [];
$cities[0] = "Londres";
$cities[1] = "London";
$cities[2] = "Washington";
var_dump($cities);
echo "<br> <br>";

echo "Carros <br>";
$cars = [];
$cars[0] = "Brasília";
$cars[1] = "Puma";
$cars[2] = "Veraneio";
var_dump($cars);
echo "<br> <br>";

echo "Meu Carro <br>";
$myCar = [];

$myCar["marca"] = "Volkswagen";
$myCar["modelo"] = "Variant";
$myCar["ano"] = 1970;

var_dump($myCar);