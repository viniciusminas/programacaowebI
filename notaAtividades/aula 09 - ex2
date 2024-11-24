<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore Diretórios</title>
    <style>
        ul {
            list-style-type: none;
        }
        li {
            margin-left: 20px;
        }
    </style>
</head>
<body>

<h1>Estrutura de Pastas</h1>

<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

function exibirArvore($pastas) {
    echo "<ul>"; 
    foreach ($pastas as $pasta => $conteudo) {
        
        if (is_array($conteudo)) {
         
            echo "<li>$pasta</li>";
            exibirArvore($conteudo); 
        } else {

            echo "<li>$conteudo</li>";
        }
    }
    echo "</ul>"; 
}

exibirArvore($pastas);
?>

</body>
</html>