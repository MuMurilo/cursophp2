<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio002</title>
</head>
<body> <h1>
    <?php 

$min = 0;
$max = 100;

$res = random_int( $min, $max);

echo "O resultado aleatório é: $res"
    
    ?>
    </h1>
    <input type="button" value="Botão de Atualizar" onClick="window.location.reload()"> 
</body>
</html>