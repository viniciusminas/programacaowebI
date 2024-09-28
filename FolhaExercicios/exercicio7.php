<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Juros</title>
</head>
<body>
    <h1>Cálculo de Juros no Financiamento</h1>

    <?php
    $valorAVista = 22500.00;
    $valorParcela = 489.65;
    $numParcelas = 60;

    $totalFinanciado = $valorParcela * $numParcelas;

    $valorJuros = $totalFinanciado - $valorAVista;

    echo "<p>O valor à vista do carro é: R$ " . number_format($valorAVista, 2, ',', '.') . "</p>";
    echo "<p>O total pago no financiamento (60 parcelas de R$ " . number_format($valorParcela, 2, ',', '.') . ") será: R$ " . number_format($totalFinanciado, 2, ',', '.') . "</p>";
    echo "<p>O valor pago apenas em juros será: R$ " . number_format($valorJuros, 2, ',', '.') . "</p>";
    ?>

</body>
</html>
