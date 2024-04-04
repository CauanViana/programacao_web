<?php
$arquivo = fopen("livros.txt", "r");
print "<table>";
while (!feof($arquivo)) {
    $linhas = fgets($arquivo);
    $partes = explode("@#@", $linhas);
    print "<tr>";
    foreach ($partes as $parte) {
        print "<td>$parte</td>";
    }
    print "</tr>";
}
print"</table>";
fclose($arquivo);
?>