<?php
$preco = $_POST['valor'];

if ($preco < 20) {
    print 'O preço é R$ ' . $preco * 1.4 . ".";
} else {
    print 'O preco é R$ ' . $preco * 1.3 . ".";
}
?>