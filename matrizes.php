<?php

// Armazenas uma lista de filmes
$filmes = [];


// Armazenas UM filme
$filme = [
	'titulo' => 'Vingadores: Guerra Infinita',
	'ano' => 2018,
	'genero' => 'Ação',
	'nota' => 9.8,
	'atores' => [
		'Robert Downey Jr',
		'Bennedict Cumberbach',
		'Scarlett Johanson',
		'Tom Holland'
	]
];

// Adicionando o filme dos Vingadores na lista de filmes
$filmes[] = $filme;

$filme = [
	'titulo' => 'Toy Story',
	'ano' => 1995,
	'genero' => 'Animação',
	'nota' => 10,
	'atores' => [
		'Tom Hanks',
		'Tim Allen',
		'Patrick Warburton'
	]

];

$filmes[] = $filme;


$filme = [
	'titulo' => 'As Patricinhas de Beverly Hills',
	'ano' => 1995,
	'genero' => 'Comédia',
	'nota' => 8.5,
	'atores' => [
		'Alicia Silverstone',
		'Stacy Dash',
		'Brittany Murphy'
	]
];

$filmes[] = $filme;

// Percorrendo a lista de filmes
// Imprimam um nome de filme por linha, usando for

for($i = 0; $i < count($filmes); $i++){
	echo "<b>" . $filmes[$i]['titulo'] . "</b><br>";
	for($j = 0; $j < count($filmes[$i]['atores']); $j++){
		echo $filmes[$i]['atores'][$j] . "<br>";
	}

	echo "<br>";

}

// echo $filme['atores'][0]; // Nome do 1º ator
?>