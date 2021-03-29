<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gerente - Dados</title>
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

<style>
	table{
		margin-bottom: 50px;
	}
</style>
</head>

<?php 
include('../mostrar_etiquetas.php')
?>
<body>
	<div class="limiter">
		<div class="container-table100" style="flex-direction: column; margin-bottom: 15px">
		<img src="../snippets/adodas.png">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="columna">Data/Hora</th>
								<th class="columnb">Nome do Operador</th>
								<th class="columnc">Nome da Maquina</th>
								<th class="columnd">Linha</th>
								<th class="columne">Prioridade</th>
								<th class="columnf">Descrição</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$arquivo = file("../arquivos/etiqueta.txt"); 
							foreach ($arquivo as $imprime) {print_r($imprime);} ?>
						</tbody>
					</table>
					
					<table>
							<thead>
								<tr class="table100-head">
									<th>Nome da Maquina</th>
									<th>Qtnd. falhas</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($combinacao_lista){ 
								foreach ($combinacao_lista as $key => $value) {
    						echo " <tr> <td> $key </td> <td> $value </td> </tr>";
							} }?>
					</table>
				</div>
			</div>
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

</body>
</html>