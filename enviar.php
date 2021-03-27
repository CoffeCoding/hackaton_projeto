<?php
 $nome_maquina = $_POST['maquina'];
 $linha = $_POST['linha'];
 $prioridade = $_POST['prioridade'];
 $data = $_POST["data"];
 $horas = $_POST["horas"];
 $descricao = $_POST["desc"];
 $nome_operador = $_POST["operador"];

 $arquivo = 'arquivos/etiqueta.txt';
 $conteudo =
"
<table>
<h3>Etiqueta</h3>" ."\n" . "
<tr>
    <td>Nome Da Maquina: </td> 
    <td>$nome_maquina</td>
</tr>
<tr>
    <td>Linha: </td>
    <td>$linha </td>
</tr>
    <td>Prioridade:</td> 
    <td>$prioridade</td>
</tr>
<tr>
    <td>Data: </td>
    <td>$data</td>
</tr>
<tr>
    <td>Horas: </td>
    <td>$horas</td>
</tr>
<tr>
    <td>Descricao: </td>
    <td>$descricao </td>
</tr>
    <td>Nome Do Operador: </td>
    <td>$nome_operador</td>
<tr>
</table>" . "\n" . "\n";

 if (!file_exists($arquivo)) {
     $fp = fopen($arquivo, 'w');
 } else {
     $fp = fopen($arquivo, 'a+', 0);
 }
 fwrite($fp, $conteudo);
 fclose($fp);

 $arquivo2 = "arquivos/nomedasmaquinas.txt";
 if (!file_exists($arquivo)) {
    $fp2 = fopen($arquivo2, 'w');
} else {
    $fp2 = fopen($arquivo2, 'a+', 0);
}

 fwrite($fp2, $nome_maquina. ".");
 fclose($fp2);
?>