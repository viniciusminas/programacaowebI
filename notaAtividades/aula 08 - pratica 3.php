<?php

$salario1 = 1000;
$salario2 = 2000;

$salario1 = $salario1;

$salario2 += 1;

$salario1 *= 1.1;

echo "Valor SALARIO: $salario1 valor Salario2 = $salario2\n";

if ($salario1 > $salario2) {
    echo "O valor do salario 1 é maior do que o salario 2";
} else {
    if ($salario2 > $salario1) {
        echo "O valor do salario 2 é maior do que o salário 1";
    } else {
        echo "Os valores são iguais";
    }
}

?>