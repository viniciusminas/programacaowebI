/*Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho*/
<!DOCTYPE html>
<html lang = "PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 - Somar Valores</title>
    <style>
        .azul {color:blue;}
        .verde {color: green;}
        .vermelho{color:red;}
    </style>
</head>
<body>
    <h1>Somando Valores</h1>

    <!--Formulário - Input de Dados -->
    <form action="" method="post">
        <label for="valor1">Valor 1</label>
        <input type="number" id="valor1" name="valor1">

        <label for="valor2">Valor 2</label>
        <input type="number" id="valor2" name="valor2">

        <label for="valor3">Valor 3</label>
        <input type="number" id="valor3" name="valor3">

        <input type="submit" value="Calcular">
    </form>

<?php
    //verificar os valores enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['valor1'];
    $n2 = $_POST['valor2'];
    $n3 = $_POST['valor3'];
    
    $soma = $n1 + $n2 + $n3;

    if($n1 > 10){
        echo"<p class = 'azul'>A soma é: $soma</p>";
    }
    elseif ($n2 < $n3){
        echo"<p class = 'verde'>A soma é: $soma </p>";
    }
    elseif ($n3 < $n1 && $n3 < $n2){
        echo"<p class = 'vermelho'>A soma é: $soma</p>";
    }
    else{
        echo"A soma é $soma";
    }
}
?>
</body>
</html>