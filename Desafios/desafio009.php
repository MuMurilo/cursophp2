<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 009</title>
</head>

<body>
    <?php
    $nota1 = $_POST['v1'] ?? 0;
    $peso1 = $_POST['p1'] ?? 1;
    $nota2 = $_POST['v2'] ?? 0;
    $peso2 = $_POST['p2'] ?? 1;
    ?>

    <main>
        <h1>Cálculo de Médias</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">1° Nota</label>
            <input type="number" name="v1" id="v1" value="<?= $nota1 ?>">
            <label for="v2">Peso da 1° Nota</label>
            <input type="number" name="p1" id="p1" value="<?= $peso1 ?>">
            <label for="v1">2° Nota</label>
            <input type="number" name="v2" id="v2" value="<?= $nota2 ?>">
            <label for="v2">Peso da 2° Nota</label>
            <input type="number" name="p2" id="p2" value="<?= $peso2 ?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h1>Cálculo de Médias </h1>
        <?php
$mediaS= ($nota1+$nota2)/2;
$mediaP = (($nota1*$peso1)+($nota2*$peso2))/($peso1+$peso2);
// $resto = $dividendo - ($resultint*$divisor);
        echo "<p>Analisando os valores $nota1 e $nota2 </p> <ul>
       <li>A Média Aritimética Simple é: $mediaS</li>
       <li>A Média Aritimética Ponderada com os pesos $peso1 e $peso2 é: $mediaP</li>
       </ul>
        "
        ?>
    </section>

</body>

</html>