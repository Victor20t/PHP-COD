<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numero1 = $_GET["numero1"] ;
        $numero2 = $_GET["numero2"] ;
        $numero3 = $_GET["numero3"] ;
        
        $Divisor = 3; 

        $resultado = ($numero1 + $numero2 + $numero3) / $Divisor;
        
        echo "O resultado de Media aritimetica é " . $resultado
        

    ?>
</body>
</html>