<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <?php
             $Valor1 = $_GET["Valor1"];
            $Valor2 = $_GET["Valor2"];
            $Divisor = 100;

            $Resultado = ($Valor1 * $Valor2 ) / $Divisor ;
            
            echo "O Valor do desconto é de " . $Resultado;
        ?>
    </section>
</body>
</html>