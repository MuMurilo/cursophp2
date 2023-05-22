<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 011</title>
</head>

<body>
    <?php
    $produto = $_POST['v1'] ?? 0;
    $reajuste = $_POST['v2'];
    ?>

    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">valor do Produto em R$ :</label>
            <input type="number" name="v1" id="v1" step="0.01" value="<?= $produto ?>">
            <label for="v2"> Qual será o percentual de reajuste <strong> (<?= $reajuste ?>%)</strong></label>
            <input type="range" name="v2" id="v2" value="<?= $reajuste ?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h1>Resultado do reajuste</h1>
        <?php
$result= ($produto*($reajuste/100));
$final = $produto+$result;
// $resultint = (int)$result;
// $resto = $dividendo - ($resultint*$divisor);
        echo "<ul>
       <li>O reajuste de". number_format($reajuste, "2",",",".")."% equivale a : R$". number_format($result, "2",",",".")."</li>
       <li>O Valor final do produto é de : R$". number_format($final, "2",",",".")."</li>
       </ul>
        "
        ?>
    </section>

</body>

</html>