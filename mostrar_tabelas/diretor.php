<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diretor - Dados</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="../snippets/text.css">
<style>
	table{
		margin-bottom: 50px;
	}

	.linhas .columna{
		font-weight:bold;
	}

	fieldset{
		margin: 20px;
	}
</style>
</head>

<?php 
include('../mostrar_etiquetas.php');
?>
<body>
	<div class="limiter">
		<div class="container-table100" style="flex-direction: column; margin-bottom: 15px">
		<a href="../index.html"><img src="../snippets/adodas.png"></a>
		<h1 class="titulo-principal" style="font-size: 30px">Aqui estão seus gráficos, Sr(a). Diretor(a)</h1>
			<div style="display:flex; column-count: 2;">
            	<fieldset>
            		<img src="../graficos/grafico_bars.php">
            	</fieldset>
				<fieldset>
            		<img src="../graficos/grafico_pizza.php">
            	</fieldset>
			<div class="flex">
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="../snippets/text.js"></script>
</body>
</html>