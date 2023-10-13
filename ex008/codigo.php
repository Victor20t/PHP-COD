<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <head>
        <h1>Resultado Final</h1>
    </head>

    <main>
    <?php
    $numero = $_GET["numero"];
    $numero1 = 1;
    $resultado = $numero + $numero1;
    $resultado1 = $numero - $numero1;
    echo "O número escolhido foi $numero<br>";
    echo "O seu antecessor é $resultado1<br>";
    echo "O seu sucessor é $resultado<br>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
</main>

</body>
</html>