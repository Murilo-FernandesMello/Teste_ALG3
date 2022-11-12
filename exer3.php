<?php


function Contador(){
    $palavra = $_POST['p'];
    $total = strlen($palavra);
    echo "Número de Letras: $total <br>";
    for ( $i = 1; $i < $total +1; $i ++){
        echo "$i <br>";
    }
}

echo Contador();
?>