<?php
$arquivo = file("../arquivos/etiqueta.txt");


$arquivo = '../arquivos/etiqueta.txt';

$nomedasmaquinas = '../arquivos/nomedasmaquinas.txt';

$linha_arquivo = "../arquivos/linha.txt";


$data_arquivo = "../arquivos/data.txt";
$handle = fopen( $arquivo, 'r' );

$handle2 = fopen( $nomedasmaquinas, 'r' );

$handle3 = fopen( $linha_arquivo, 'r' );

$handle4 = fopen( $data_arquivo, 'r' );

$ler = fread( $handle, filesize($arquivo) );
$ler2 = fread( $handle2, filesize($nomedasmaquinas) );
$ler3 = fread( $handle3, filesize($linha_arquivo) );
$ler4 = fread( $handle4, filesize($data_arquivo) );

$procurar = $ler; //Esta vindo de um arquivo que contem as informacoes das maquinas, como um texto longo (EX: Nome da maquina: Cavadeira Linha: 1 Gravidade: Media etc...)
$nome_das_maquinas_str = $ler2; //Esta vindo de um arquivo, e as palavras estão separadas por /
$linhas_str = $ler3;

$array = explode('.', "$nome_das_maquinas_str"); //Separo as palavras por / e gravo no array
$array_das_linhas = explode('.', "$linhas_str");
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

$qnt_1 = 0;
$qnt_2= 0;
$qnt_3= 0;
$qnt_4= 0;
$qnt_5= 0;
$qnt_6= 0;
foreach ($array_das_linhas as $quantidade) {
    switch ($quantidade) {
        case 1:
            $qnt_1 += 1;
            break;
        case 2:
            $qnt_2 += 1;
            break;
        case 3:
            $qnt_3 += 1;
            break;
        case 4:
            $qnt_4 += 1;
            break;
        case 5:
            $qnt_5 += 1;
            break;
        case 6:
            $qnt_6 += 1;
            break;
    }
}

$total = $qnt_1 + $qnt_2 + $qnt_3 + $qnt_4 + $qnt_5 + $qnt_6;

// Fecha o arquivo
fclose($handle);
fclose($handle2);
fclose($handle3);
?>