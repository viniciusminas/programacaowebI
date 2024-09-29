<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de um triângulo retângulo</title>
</head>

<body>
    <form method="POST">
    <label for="base">Insira a base(valor em número) do triângulo retângulo:</label>
    <input type="number" name="base" id="base" required>
    <label for="altura">Insira a altura(valor em número) do triângulo retângulo:</label>
    <input type="number" name="altura" id="altura" required>

    <input type="submit" value="Calcular">

    </form>

    <?php
    
    $base = 0;
    $altura = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $base = $_POST['base'];
        $altura = $_POST['altura'];

        $area = ($base * $altura) / 2;

        echo"Valor da área do triângulo retângulo é igual a $area";
    }

    ?>

</body>

</html>
