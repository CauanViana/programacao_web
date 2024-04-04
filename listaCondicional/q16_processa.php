<?php
$salario = $_POST['valor'];
$tempoDeServico = $_POST['meses'];

if ($tempoDeServico > 60) {
    print 'O salário é R$ ' . $salario . ".";
} else {
    print 'O preco é R$ ' . $preco * 1.3 . ".";
}
?>