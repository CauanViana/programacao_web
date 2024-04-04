<?php
$dia = $_POST['dia'];

switch ($dia){

    case 2: 
    case 3: 
    case 4:
    case 5: 
    case 6: 
        print "É dia útil";
        break;
    case 1:
    case 7:
        print "É final de semana";
        break;
    default:
        print "Dia inválido!";
}
?>