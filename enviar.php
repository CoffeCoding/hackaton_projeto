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
<tr>
    <td class='columna'>$data $horas</td>
    <td class='columnb'>$nome_operador</td>
    <td class='columnc'>$nome_maquina</td>
    <td class='columnd'>$linha</td>
    <td class='columne'>$prioridade</td>
    <td class='columnf'>$descricao</td>
</tr>";

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

 $arquivo3 = "arquivos/linha.txt";

 if (!file_exists($arquivo3)) {
    $fp3 = fopen($arquivo3, 'w');
} else {
    $fp3 = fopen($arquivo3, 'a+', 0);
}

fwrite($fp3, $linha . ".");
fclose($fp3);

$arquivo4 = "arquivos/data.txt";

if (!file_exists($arquivo4)) {
    $fp4 = fopen($arquivo4, 'w');
} else {
    $fp4 = fopen($arquivo4, 'a+', 0);
}

fwrite($fp4, $data . "#");
fclose($fp4);

echo"<script language='javascript' type='text/javascript'>
          alert('Etiqueta criada com sucesso!');window.location
          .href='index.html'</script>";
?>