<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

<?php
    $primeiraString = strtolower($_POST['string1']);
    $segundaString = strtolower($_POST['string2']);
    
    $segundaInvertida = strrev($segundaString);
    if($primeiraString === $segundaInvertida){
        echo "As palavras são palíndromos.<br>";
        echo "A segunda palavra invertida é: " . $segundaInvertida;
    }
    else{
        echo "As palavras não são palíndromos.<br>";
        echo "A segunda palavra invertida é: " . $segundaInvertida;
    }
?>


<br>
<a href="ex5h.html">
    <button>Voltar</button>
</a>

</div>

</body>
</html>
