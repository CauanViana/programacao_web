<?php
$n = $_POST['numero'];

if($n == 0){
    print $n . " é neutro.";    
} elseif ($n > 0) { 
    print $n . " é positvo.";
} else {
    print $n . " é negativo";
}
?>