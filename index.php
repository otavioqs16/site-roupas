<?php

// Criar uma variável
// $nomeDaVariavel = valor;
$nomeDoSite = "PHP com HTML";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nomeDoSite; ?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body>

	<div id="topo">
		TOPO
	</div>

	<div id="menu">
		<?php

			// QUERY STRING
			// index.php?var1=Valor1&var2=Valor2

			// Declarando um vetor
			$menu = ["Home", "Roupinhas", "Sapatinhos", "Berços"];
			
			// count($menu) retorna a quantidade de itens do vetor $menu
			for($i  = 0; $i < count($menu); $i++){
				echo '<a href="index.php?secao=' . $menu[$i] .'">' . $menu[$i] . '</a>';

			}
		?>

		
	</div>

	<div id="conteudo">
		<?php
		// Verificar se uma variável existe na barra de endereços
		// if(isset($_GET["variavel"])){}

		// Pegar uma variável que vem pela barra de endereços
		// $variavel = $_GET["variavel"];
		
		
		if(isset($_GET["secao"])){
			$secao = $_GET["secao"];

			echo "Seção: " . $secao;
			echo "<br><br>";
		}else{
			echo "Nenhuma seção informada!<br><br>";
		}

		if(isset($_GET["secao"])){ // Informou a seção
			$secao = $_GET['secao'];
			
			if($secao == "Roupinhas"){
				include("roupinhas.php");
			}

			else if($secao == "Sapatinhos"){
				include("sapatinhos.php");
			}

			else if($secao == "Berços"){
				include("bercos.php");
			}else{ // Home ou uma seção que não exista
				include("principal.php");
			}

		}else{ // Não informou a seção
			include("principal.php");
		}
		?>
	</div>

</body>
</html>