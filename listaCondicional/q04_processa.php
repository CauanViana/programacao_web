<?php
$codigo = $_POST['codigo'];

if($codigo > 0 && $codigo < 11){
    print "Categoria Alimentação.";
} elseif ($codigo > 10 && $codigo < 21){
    print "Categoria Limpeza.";
} elseif ($codigo > 20 && $codigo < 31){
    print "Categoria Eletrônicos.";
} else {
    print "Códgo inexistente.";
}
?>