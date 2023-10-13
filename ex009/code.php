<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Gerador de Números</h1>
    <p>Este programa  gera números de 0 a 9999</p>
    <div class="number-container">
        <?php 
            $numeroAleatorio = mt_rand(0, 9999);
            echo $numeroAleatorio;
        ?>
    </div>
    <a class="generate-link" href="http://localhost/CursoPHP/ex009/code.php">Gerar Novo Número</a>
</body>
</html>
