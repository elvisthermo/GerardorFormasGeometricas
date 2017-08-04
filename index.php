<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>teste</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php 
	require_once"Dados.php";

?>
<div class="top">
	<form action="index.php" method="POST">
		<span>Entre com a Quantidade de objetos</span>
		<label>
		<input name="quantidade" type="number" min="0" max="100">
		<input type="submit" name="submit" value="ok" />
		</label>

	</form>
	<small alling="center">f5 para Atualizar.</small>
</div>
<div class="grafico">
	
	

<?php 


    if (isset($_POST['submit'])) {
    $quantidade = $_POST['quantidade'];
    
    //criar os objetos dependendo da quantidade
	for ($i=0; $i<$quantidade; $i++) { 
		$Obj = array();
		$Obj[$i] = new Dados;

		/*
		passagem dos valores da classe para o css e html
		<div class="???" style="border-bottom-color: ???; top:0; position: relative; bottom:??? ; left:???; "></div>
		recebe os valores ??? dos atributos do objeto-

		*/
		$imprime="<p class=".$Obj[$i]->getForma()." ";
		$imprime.= "style=\"border-bottom-color:".$Obj[$i]->getCores().";";
		$imprime.= "position:relative; ";
		$imprime.= "top:0; botton:".$Obj[$i]->getPosicaoy().";";
		$imprime.= "left:".$Obj[$i]->getPosicaox().";\"></p>";
 		
 		echo $imprime;
		


	}
    }

 ?>

</div>
	
</body>
</html>