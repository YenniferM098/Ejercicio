<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1'] : "requerido";
    $valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2'] : "requerido";
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : "requerido";

    if ($valor1 === "requerido" || $valor2 === "requerido" || $operacion === "requerido") {
        echo "Algunos campos son requeridos, verifique su formulario";
        exit;
    }

    switch ($operacion) {
        case 'Suma':
            $resultado = sumar($valor1, $valor2);
            break;
        case 'Resta':
            $resultado = restar($valor1, $valor2);
            break;
        case 'Multiplicacion':
            $resultado = multiplicar($valor1, $valor2);
            break;
        case 'Division':
            $resultado = dividir($valor1, $valor2);
            break;
        default:
            $resultado = "Introduzca una opción valida";
            break;
    }

    echo "Resultado: " . $resultado;
}

function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "No se puede dividir entre cero, introduzca un valor";
    }
    return $a / $b;
}
?>

