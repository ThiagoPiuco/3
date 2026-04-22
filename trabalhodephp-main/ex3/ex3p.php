<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

<div class="container">

    <h1>Resultado</h1>

    <div class="resultado">
        <?php
            $texto = $_POST['texto'];
            $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
            $textoAjustado = str_replace($vogais, "?", $texto);

            echo "<strong>O texto inserido é:</strong><br>";
            echo $textoAjustado;
        ?>
    </div>

    <a href="index.html">
        <button>Voltar</button>
    </a>

</div>

</body>
</html>