<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

<div class="container">

    <h1>Resultado</h1>

    <div class="resultado">
        <?php
            $primeiraString = $_POST['string1'];
            $segundaString = $_POST['string2'];

            $caracteresParaRemover = str_split($primeiraString);
            $segundaStringAjustada = str_replace($caracteresParaRemover, '', $segundaString);

            echo "<strong>Resultado da string ajustada:</strong><br>";
            echo $segundaStringAjustada;
        ?>
    </div>

    <a href="index.html">
        <button>Voltar</button>
    </a>

</div>

</body>
</html>