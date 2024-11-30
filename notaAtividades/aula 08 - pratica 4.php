<?php

$salario1 = 1000;
$salario2 = 2000;

$salario1 = $salario1;

$salario2 += 1;

$salario1 *= 1.1;

echo "Valor SALARIO: $salario1 valor Salario2 = $salario2\n";

for ($i = 0; $i <= 100; $i++) {
    $salario1 += 1; 

    if ($i == 49) {
        echo "A iteração chegou a 50. Interrompendo o loop.\n";
        break;
    }
}

if ($salario1 < $salario2) {
    echo "O valor de SALARIO1 é menor que SALARIO2. Valor SALARIO1: $salario1\n";
}

?>
