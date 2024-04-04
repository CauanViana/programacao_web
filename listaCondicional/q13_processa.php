<?php
$valor = $_POST['valor'];

if ($valor > 99) {
    print "O valor do produto é " . ($valor * 0.95) .".";
} else {
    print "O valor do produto é " . $valor . ".";
}
?>