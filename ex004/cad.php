<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do Formulario</h1>
    </header>

   <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            $endereçco = $_GET["endereco"];
            echo "<p>É uma prazer, <strong>$nome $sobrenome</strong>! <p>"
        ?>
        <p><a href="javascript:history.go(0-1)">Voltar a pagina anterio</a></p>
   </main>
</body>
</html>