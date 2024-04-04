<?php
$n = $_POST['numero'];

if($n % 2 == 0){
    print $n . " é par";    
} else {
    print $n . " é impar";
}
?>