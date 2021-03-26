<?php
$data = file_get_contents("arquivos/etiqueta.txt");

//no seu caso ficaria assim:
//Como o @gmsantos escreveu na resposta dele

$data = file_get_contents($_FILES['arquivo']['tmp_name']);
echo $data.

?>