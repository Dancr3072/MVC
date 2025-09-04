<?php

require_once 'carro.php';

$carroEspecial1 = new Carro("Amarrillo","Audi","tt",800,800,4);
$carroEspecial2 = new Carro("Rojo","Ferrari","340",500,500,2);
$carroEspecial3 = new Carro("Negro","Mercedes","C200",600,600,4);
$carroEspecial4 = new Carro("Gris","renault","logan",300,300,4);

var_dump($carroEspecial1);
var_dump($carroEspecial2);
var_dump($carroEspecial3);
var_dump($carroEspecial4);

