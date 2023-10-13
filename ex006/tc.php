<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>C° para F°</h1>

    <?php
    $tc = $_GET["tc"];
    $n1 = 9;
    $n2 = 5;
    $n3 = 32;

    $Resultado = ($tc * $n1 / $n2) + $n3;

    echo "O resultado é " . $Resultado;
?>

</body>
</html>