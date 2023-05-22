<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 008</title>
</head>

<body>
    <?php
    $num = $_POST['v1'] ?? 0;
    // $minimo = 1380.00 ?? 1380; item do desafio 007
    ?>

    <main>
        <h1>Informe um Número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?= $num ?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>
    <section>
        <h1>Resultado Final </h1>
        <?php
$raizqua=$num**(1/2);
$raizcub = $num**(1/3);
// $resto = $salario - ($resultint*$minimo); do desafio 007
// var_dump($resto); do desafio 007
echo "<ul>
<li>A Raiz Quadrada do Número " . number_format($num, 3,",",".")." é: ". number_format($raizqua, 3,",","."). "</li>
<li>E a raíz Cubica é: " . number_format($raizcub, 3,",",".").  "</li>
</ul>
 "

        ?>
    </section>

</body>

</html>