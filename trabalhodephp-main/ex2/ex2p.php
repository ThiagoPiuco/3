<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">

    <h1>Resultado da Média</h1>

    <div class="resultado">
        <?php
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];

            $media = ($numero1 + $numero2 + $numero3) / 3;

            if($media >= 6 && $media <= 10){
                echo "<span class='aprovado'>O aluno está aprovado.</span><br>";
            } else {
                echo "<span class='reprovado'>O aluno está reprovado.</span><br>";
            }

            echo "A média final é: <strong>" . number_format($media, 2) . "</strong>";
        ?>
    </div>

    <a href="index.html">
        <button>Voltar</button>
    </a>

</div>

</body>
</html>
