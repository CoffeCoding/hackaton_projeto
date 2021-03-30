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

	.linhas .columna{
		font-weight:bold;
	}
	/* Sortable tables */
	table.sortable thead {
   		background-color:#eee;
    	color:#666666;
    	font-weight: bold;
    	cursor: default;
	}
</style>

<link rel="stylesheet" href="../snippets/text.css">
<script src="js/sorttable.js"></script>
</head>

<?php 
include('../mostrar_etiquetas.php')
?>
<body>
	<script src="http://s.codigofonte.com.br/wp-content/js/codigofonte-bar.js"></script>
	<div class="limiter">
		<div class="container-table100" style="flex-direction: column; margin-bottom: 15px">
		<a href="../index.html"><img src="../snippets/adodas.png"></a>
		<h1 class="titulo-principal" style="font-size:30px;">Aqui estão seus principais dados, Gerente</h1>
			<div class="wrap-table100">
				<div class="table100">
					<table class="sortable">
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
									<th>Qntd. falhas</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if($combinacao_lista){ 
								foreach ($combinacao_lista as $key => $value) {
    						echo " <tr> <td> $key </td> <td> $value </td> </tr>";
							} }?>
					</table>

					<table class="linhas sortable">
						<thead>
							<tr class="table100-head">
								<th class="columna"></th>
								<th class="columnb">Qntd. falhas</th>
								<th class="columnc">% de falhas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="columna">Linha 1</td>
								<td class="columnb"><?php echo $qnt_1; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_1*100)/$total,2, '.', ''); ?> %</td>
							</tr>
							<tr>
								<td class="columna">Linha 2</td>
								<td class="columnb"><?php echo $qnt_2; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_2*100)/$total,2, '.', '');?> %</td>
							</tr>
							<tr>
								<td class="columna">Linha 3</td>
								<td class="columnb"><?php echo $qnt_3; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_3*100)/$total,2, '.', '');?> %</td>
							</tr>
							<tr>
								<td class="columna">Linha 4</td>
								<td class="columnb"><?php echo $qnt_4; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_4*100)/$total,2, '.', '');?> %</td>
							</tr>
							<tr>
								<td class="columna">Linha 5</td>
								<td class="columnb"><?php echo $qnt_5; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_5*100)/$total,2, '.', '');?> %</td>
							</tr>
							<tr>
								<td class="columna">Linha 6</td>
								<td class="columnb"><?php echo $qnt_6; ?>
								<td class="columnc"><?php echo number_format(floor($qnt_6*100)/$total,2, '.', '');?> %</td>
							</tr>
						</tbody>
					</table>

					<table>
						<thead>
							<tr class="table100-head">
								<th class="columna">Data</td>
								<th class="columnb">Qntd. Falhas/dia</td>
							</tr>
							<tbody>
								<?php foreach ($data_e_quantidade as $key => $value) {
									echo "<tr> <td class='columna'> $key </td> <td> $value </td> </tr>";
								}
								?>
							</tbody>
							<thead>
							<tr class="table100-head">
								<th>Média de falhas/dia</th>
								<th><?php echo $total_mes / 30; ?></th>
							</tr>
							</thead>
							<thead>
								<tr class="table100-head">
									<th>Desvio Padrão:</th>
									<th><span style="color:red;"><?php echo $desvio_padrao ?></span></th>
								</tr>
							</thead>
						</thead>
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
	<script src="../snippets/text.js"></script>

</body>
</html>