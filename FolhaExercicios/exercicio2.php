<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 - Testar Numero Divisivel</title>
</head>
<body>
    <h1>Divisivel ou não</h1>

    <form action="" method="POST">
        <label for="valor">Número</label>
        <input type="number" id="valor" name="valor">

        <input type="submit" value="Verificar">
    </form>
    <?php
    //verificação de valores enviados
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $n1 = $_POST['valor'];

        if ($n1 % 2 == 0){
            echo"Valor divisível por 2";
        }
        else{
            echo"O valor não é divisível por 2";
        }
        
    }
    
    ?>    

</body>

</html>