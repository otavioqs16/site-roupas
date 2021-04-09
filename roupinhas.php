<?php
/* Fazer 2 links, Calças e Blusas
index.php?secao=Roupinhas&cat=Calças
index.php?secao=Roupinhas&cat=Blu

De acordo com a escolha, exibir "Calças para bebês" ou "Blusas para bebês"
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Roupinhas</h1>
	<div>
		<?php
		echo '<a href="index.php?secao=' . $secao . '&genero=Masculino">Masculino</a>';
		?>
	</div>
	<div>
		<?php
		echo '<a href="index.php?secao=' . $secao . '&genero=Feminino">Feminino</a>';
		?>
	</div>

<div id="bercario">
	<?php
	$roupasKids = [];

	$roupaKid = [
		'nome' => 'Body',
		'preco' => 32.90,
		'sexo' => 'm',
		'img' => 'bodyMasc.jpg'
	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Body',
		'preco' => 29.90,
		'sexo' => 'f',
		'img' => 'bodyFem.jpg'
	
	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Blusa',
		'preco' => 16.90,
		'sexo' => 'm',
		'img' => 'camisetaMasc.jpg'
	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Blusa',
		'preco' => 21.90,
		'sexo' => 'f',
		'img' => 'blusaFem.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Casaco',
		'preco' => 54.90,
		'sexo' => 'm',
		'img' => 'casacoMasc.jpg'


	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Casaco',
		'preco' => 52.90,
		'sexo' => 'f',
		'img' => 'casacoFem.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Macacão',
		'preco' => 24.90,
		'sexo' => 'm',
		'img' => 'macacaoMasc.jpg' 

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Macaquinho',
		'preco' => 39.90,
		'sexo' => 'f',
		'img' => 'macacaoFem.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Bermuda',
		'preco' => 29.90,
		'sexo' => 'm',
		'img' => 'bermudaMasc.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Short',
		'preco' => 29.90,
		'sexo' => 'f',
		'img' => 'shortFem.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Conjunto',
		'preco' => 31.90,
		'sexo' => 'm',
		'img' => 'conjuntoMasc.jpg'

	];

	$roupasKids[] = $roupaKid;

	$roupaKid = [
		'nome' => 'Jardineira',
		'preco' => 59.90,
		'sexo' => 'f',
		'img' => 'jardineiraFem.jpg'

	];

	$roupasKids[] = $roupaKid;





	if(isset($_GET['genero'])){
		$genero = $_GET['genero'];
	

		if($genero == "Masculino"){

			for($i = 0; $i < count($roupasKids); $i++){
				if($roupasKids[$i]['sexo'] == 'm'){
					?>
					<div class="roupinhas">
					<?php
					echo "<br>";
					echo "<img src= ' " . $roupasKids[$i]['img'] . "'>" . "<br>";
					echo "Tipo: " . $roupasKids[$i]['nome'] . "<br>";
					echo "Preço: " . $roupasKids[$i]['preco'] . "<br>";
					?>
					</div>
					<?php
				}
			}
		}

		if($genero == "Feminino"){

			for($i = 0; $i < count($roupasKids); $i++){
				if($roupasKids[$i]['sexo'] == 'f'){
					?>
					<div class="roupinhas">
					<?php	
					echo "<br>";
					echo "<img src= ' " . $roupasKids[$i]['img'] . "'>" . "<br>";
					echo "Tipo: " . $roupasKids[$i]['nome'] . "<br>";
					echo "Preço: " . $roupasKids[$i]['preco'] . "<br>";
					?>
					</div>
					<?php
				}
			}
		}	

	}else{

		for($i = 0; $i < count($roupasKids); $i++){
			?>
			<div class="roupinhas">
			<?php
			echo "<br>";
			echo "<img src= ' " . $roupasKids[$i]['img'] . "'>" . "<br>";
			echo "Tipo: " . $roupasKids[$i]['nome'] . "<br>";
			echo "Preço: " . $roupasKids[$i]['preco'] . "<br>";
			?>
			</div>
			<?php
		}
	}

	?>

</div>
</body>
</html>