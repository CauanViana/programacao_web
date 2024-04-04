<?php
$peso = $_POST['peso'];
$frete = $_POST['frete'];

if ($peso > 10) {
    print 'O frete é R$ ' . $frete * 1.2 . ".";
} else {
    print 'O frete é R$ ' . $frete . ".";
}
?>