<?php
$investimento = $_POST['investimento'];

if($investimento > 10000){
    print "Investimento Alto!";    
} else {
    print "Investimento Baixo";
}
?>