<?php
$ano = $_POST['ano'];

if($ano % 4 == 0){
    if($ano % 100 != 0){
        print $ano . " não é bissexto.";
    } else {
        if ($ano % 400 == 0){
            print $ano . " é bissexto.";
        } else {
            print $ano . " não é bissexto.";
        }
    }
} else {
    print $ano . " não é bissexto.";
}
?>