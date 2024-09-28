
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Area de um quadrado</title>
</head>
<body>
    <h1>Area de um quadrado</h1>    

    <!-- Formulário para entrada de dados -->
    <form method="POST">
        <label for="lado">Insira o comprimento do lado(em metros):</label>
        <input type="number" name="lado" id="lado" required>
        <input type="submit" value="Calcular">
    </form>

    <?php

    $lado = 0;
    $area = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    $lado = $_POST['lado'];
    $area = ($lado * $lado);

    echo"A área do quadrado de lado ". $lado. "metros é ".$area." metros quadrados";

    ?>

</body>

</html>