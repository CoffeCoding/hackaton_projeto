<?php
include_once "../phplot-6.2.0/phplot.php";
include("../mostrar_etiquetas.php");

$data = array(array('Linha 1', $qnt_1), 
    array('Linha 2',$qnt_2), 
    array('Linha 3',$qnt_3),
    array('Linha 4',$qnt_4),
    array('Linha 5',$qnt_5),
    array('Linha 6',$qnt_6));
$plot = new PHPlot(500, 350);
$plot->SetTitle('% de Erros por Linha');
$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($data);
foreach ($data as $row) $plot->SetLegend($row[0]); // Copy labels to legend
$plot->DrawGraph();
?>