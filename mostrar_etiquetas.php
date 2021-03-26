<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        table{
            border: 1px solid black;
        }
    </style>
    
</head>
<body>
<?php
$arquivo = file("arquivos/etiqueta.txt");

foreach ($arquivo as $imprime) {
    print_r($imprime);
}

$arquivo = 'arquivos/etiqueta.txt';

$nomedasmaquinas = 'arquivos/nomedasmaquinas.txt';

$handle = fopen( $arquivo, 'r' );

$handle2 = fopen( $nomedasmaquinas, 'r' );

$ler = fread( $handle, filesize($arquivo) );
$ler2 = fread( $handle2, filesize($nomedasmaquinas) );

$procurar = $ler; //Esta vindo de um arquivo que contem as informacoes das maquinas, como um texto longo (EX: Nome da maquina: Cavadeira Linha: 1 Gravidade: Media etc...)
$nome_das_maquinas_str = $ler2; //Esta vindo de um arquivo, e as palavras estão separadas por /

$array = explode('/', $nome_das_maquinas_str); //Separo as palavras por / e gravo no array

$array_2(
    '$maquina' => '$quantidade_que_aparece';
)

foreach($array as $maquina){
    $quantidade_que_aparece = substr_count($procurar, $maquina); //Conto quantas vezes os valores que estavam no $array aparecem.
    $nomes_vetor[$maquina] = $quantidade_que_aparece; //Gravo a quantidade em um vetor
}

//Ordena decrescentemente
arsort($nomes_vetor);

//Exibe
print_r(array_keys($nomes_vetor));


// Fecha o arquivo
fclose($handle);
fclose($handle2);
?>
</body>
</html>