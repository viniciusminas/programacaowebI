<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo das Parcelas - Juros Simples</title>
</head>
<body>
    <h1>Calcular Valor das Parcelas com Juros Simples</h1>

    <?php
    $valorAVista = 8654.00;

    $juros24 = 0.015; 
    $juros36 = 0.020; 
    $juros48 = 0.025; 
    $juros60 = 0.030; 

    $parcelas24 = 24;
    $parcelas36 = 36;
    $parcelas48 = 48;
    $parcelas60 = 60;

    function calcularParcela($valor, $juros, $numParcelas) {
        $montante = $valor * (1 + ($juros * $numParcelas)); // M = P * (1 + (i * n))
        return $montante / $numParcelas; // Valor da parcela
    }

    $parcela24 = calcularParcela($valorAVista, $juros24, $parcelas24);
    $parcela36 = calcularParcela($valorAVista, $juros36, $parcelas36);
    $parcela48 = calcularParcela($valorAVista, $juros48, $parcelas48);
    $parcela60 = calcularParcela($valorAVista, $juros60, $parcelas60);

    // Exibindo os resultados
    echo "<p>Valor à vista da moto: R$ " . number_format($valorAVista, 2, ',', '.') . "</p>";
    echo "<p>Valor da parcela em 24 vezes (1,5% ao mês): R$ " . number_format($parcela24, 2, ',', '.') . "</p>";
    echo "<p>Valor da parcela em 36 vezes (2,0% ao mês): R$ " . number_format($parcela36, 2, ',', '.') . "</p>";
    echo "<p>Valor da parcela em 48 vezes (2,5% ao mês): R$ " . number_format($parcela48, 2, ',', '.') . "</p>";
    echo "<p>Valor da parcela em 60 vezes (3,0% ao mês): R$ " . number_format($parcela60, 2, ',', '.') . "</p>";
    ?>

</body>
</html>
