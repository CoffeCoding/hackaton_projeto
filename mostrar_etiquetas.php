<?php
$arquivo = file("../arquivos/etiqueta.txt");


$arquivo = '../arquivos/etiqueta.txt';

$nomedasmaquinas = '../arquivos/nomedasmaquinas.txt';

$linha_arquivo = "../arquivos/linha.txt";

$handle = fopen( $arquivo, 'r' );

$handle2 = fopen( $nomedasmaquinas, 'r' );

$handle3 = fopen( $nomedasmaquinas, 'r' );

$ler = fread( $handle, filesize($arquivo) );
$ler2 = fread( $handle2, filesize($nomedasmaquinas) );

$procurar = $ler; //Esta vindo de um arquivo que contem as informacoes das maquinas, como um texto longo (EX: Nome da maquina: Cavadeira Linha: 1 Gravidade: Media etc...)
$nome_das_maquinas_str = $ler2; //Esta vindo de um arquivo, e as palavras estão separadas por /

$array = explode('.', "$nome_das_maquinas_str"); //Separo as palavras por / e gravo no array
$array_nomes = array_values(array_unique($array));
$array_count = array_count_values($array);

//Cria em arrays organizados.
$i = 0;
for($i = 0; $i <= count($array_count) - 2; $i++){
    $falhas[$i] = $array_count[$array_nomes[$i]];
    $nome_da_maquina[$i] = $array_nomes[$i];
}


$combinacao_lista = array_combine($nome_da_maquina, $falhas);
arsort($combinacao_lista);

// Fecha o arquivo
fclose($handle);
fclose($handle2);
fclose($handle3);
?>