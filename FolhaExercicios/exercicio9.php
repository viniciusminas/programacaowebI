<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento de Moto</title>
</head>
<body>
    <h1>Financiamento de Moto</h1>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $capitalInicial = $_POST['valor_moto'];

        $parcelas = [24, 36, 48, 60];
        $taxas = [0.02, 0.023, 0.026, 0.029];

        function calcularMontante($capitalInicial, $taxa, $tempo){
            return $capitalInicial * pow((1 + $taxa), $tempo);
        }

        echo"<h2>Opções de parcelamento:</h2>";
        foreach ($parcelas as $index => $tempo){
            $montante = calcularMontante($capitalInicial, $taxas[$index], $tempo);
            $valorParcela = $montante / $tempo;
            echo "<p>Para $tempo vezes, com juros de " . ($taxas[$index] * 100) . "%: ";
            echo "Montante total: R$ " . number_format($montante, 2) . ", Valor de cada parcela: R$ " . number_format($valorParcela, 2) . "</p>";
        }

    }
    
    ?>


    <!-- Formulário para entrada do valor da moto -->
    <form action="" method="POST">
        <label for="valor_moto">Valor da Moto (R$):</label>
        <input type="number" name="valor_moto" id="valor_moto" step="0.01" required><br><br>

        <input type="submit" value="Calcular">
    </form>


</body>

</html>