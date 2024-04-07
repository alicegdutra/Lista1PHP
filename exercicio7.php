<?php
    $valor = $_POST['valor'];

    if ($valorA == $valorB) {
        echo "Números iguais: $valorA";
    } elseif ($valorA > $valorB) {
        echo "$valorB $valorA";
    } else {
        echo "$valorA $valorB";
    }
?>
