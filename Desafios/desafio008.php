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
    $minimo = 1380.00 ?? 1380;
    ?>

    <main>
        <h1>Informe um Número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?= $num ?>">
<p>Considerando o salário mínimo de:<?= $minimo ?> </p>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h1>Resultado Final </h1>
        <?php
$result=$salario/$minimo;
$resultint = (int)$result;
$resto = $salario - ($resultint*$minimo);
var_dump($resto);
echo "<ul>
<li>Seu salário é: $salario</li>
<li>Que conresponde a: $resultint salários mínimos + R$ $resto.</li>
</ul>
 "

        ?>
    </section>

</body>

</html>