<?php

    $valor = $_POST['valor'];
    $valor2 = $_POST['valor2']; //cria uma variável e recebe ela da página anterior
    $soma = $valor + $valor2;
    if($valor != $valor2)
        echo $soma;
    elseif($valor == $valor2){
        $soma = $soma * 3;
        echo "Triplo da soma: $soma";
    }
?>
        
