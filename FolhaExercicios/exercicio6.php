<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo - Supermercado</title>
</head>
<body>
    <form method="POST">
        <label for="maca">Maçã (KG):</label>
        <input type="number" name="maca" id="maca" required step="0.01">

        <label for="melancia">Melancia (KG):</label>
        <input type="number" name="melancia" id="melancia" required step="0.01">

        <label for="laranja">Laranja (KG):</label>
        <input type="number" name="laranja" id="laranja" required step="0.01">

        <label for="repolho">Repolho (KG):</label>
        <input type="number" name="repolho" id="repolho" required step="0.01">

        <label for="cenoura">Cenoura (KG):</label>
        <input type="number" name="cenoura" id="cenoura" required step="0.01">
        
        <label for="batatinha">Batatinha (KG):</label>
        <input type="number" name="batatinha" id="batatinha" required step="0.01">

        <input type="submit" value="Calcular">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function calcularTotal($quantidades, $precos) {
            $total = 0;
            foreach ($quantidades as $produto => $quantidade) {
                $total += $quantidade * $precos[$produto];
            }
            return $total;
        }

        $precos = [
            'maca' => 5.00,
            'melancia' => 3.00,
            'laranja' => 4.00,
            'repolho' => 2.50,
            'cenoura' => 2.00,
            'batatinha' => 3.50
        ];

        $quantidades = [
            'maca' => $_POST['maca'],
            'melancia' => $_POST['melancia'],
            'laranja' => $_POST['laranja'],
            'repolho' => $_POST['repolho'],
            'cenoura' => $_POST['cenoura'],
            'batatinha' => $_POST['batatinha']
        ];

        $totalGasto = calcularTotal($quantidades, $precos);

        $dinheiroDisponivel = 50.00;

        if ($totalGasto > $dinheiroDisponivel) {
            $excedente = $totalGasto - $dinheiroDisponivel;
            echo "<p style='color: red;'>O valor gasto foi R$ " . number_format($totalGasto, 2) . ". Você excedeu o valor disponível em R$ " . number_format($excedente, 2) . ".</p>";
        } elseif ($totalGasto < $dinheiroDisponivel) {
            $restante = $dinheiroDisponivel - $totalGasto;
            echo "<p style='color: blue;'>O valor gasto foi R$ " . number_format($totalGasto, 2) . ". Você ainda tem R$ " . number_format($restante, 2) . " disponíveis.</p>";
        } else {
            echo "<p style='color: green;'>Você gastou exatamente R$ 50,00. O saldo foi esgotado.</p>";
        }
    }
    ?>

</body>
</html>
