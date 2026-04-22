<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">

    <h1>Resultado da Tabuada</h1>

    <div class="resultado">
        <?php
            $numeroRecebido = $_POST['numero'];

            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numeroRecebido * $i;
                echo "<div class='linha'>$numeroRecebido x $i = $resultado</div>";
            }
        ?>
    </div>

    <a href="index.html">
        <button>Voltar</button>
    </a>

</div>

</body>
</html>