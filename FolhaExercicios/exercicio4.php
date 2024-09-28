<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de um retangulo</title>
</head>

<body>
    <form method="POST">
        <label for="ladoA">Insira o lado A desse retângulo (em metros):</label>
        <input type="number" name="ladoA" id="ladoA" required>
        <label for="ladoB">Insira o lado B desse retângulo (em metros):</label>
        <input type="number" name="ladoB" id="ladoB" required>
        
        <input type="submit" value="Calcular">
    </form>
    <?php
    $ladoA = 0;
    $ladoB = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ladoA = $_POST['ladoA'];
    $ladoB = $_POST['ladoB'];

    $area = ($ladoA * $ladoB);

    if ($area > 10){
        echo"<h1>A área do retângulo de lados $ladoA metros e $ladoB metros é $area metros quadrados.</h1>";
    }
    else {
        echo"<h3>A área do retângulo de lados $ladoA metros e $ladoB metros é $area metros quadrados.</h3>";
    }
}
    ?>

</body>

</html>