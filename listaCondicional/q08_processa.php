<?php
$valor = $_POST['valor'];

if($valor >= 0){
    print $valor;    
} else {
    print $valor * -1;
}
?>