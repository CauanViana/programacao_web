<?php
$n1 = $_POST['numero'];
$n2 = $_POST['numero2'];
$n3 = $_POST['numero3'];

if ($n1 >= $n2 && $n2 >= $n3) {
    print "Está na ordem decrescente.";
} elseif ($n3 >= $n2 && $n2 >= $n1){
    print "Está na ordem crescente.";
} else {
    print "Está fora de ordem.";
}
?>