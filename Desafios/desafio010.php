<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 010</title>
</head>

<body>
    <?php
    $nascimento = $_POST['v1'] ?? 1991;
    $ano = $_POST['v2'] ?? date("Y");
    ?>

    <main>
        <h1>calculando a sua Idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Em que Ano você nasceu</label>
            <input type="number" name="v1" id="v1" value="<?= $nascimento ?>">
            <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <strong> <?=date("Y")?></strong>) </label>
            <input type="number" name="v2" id="v2" value="<?= $ano ?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h1>Estrutura da Divisão </h1>
        <?php
$idade= $ano-$nascimento;
// $resultint = (int)$result;
// $resto = $dividendo - ($resultint*$divisor);
        echo "<ul>
       <li>Você Nasceu em : $nascimento</li>
       <li>E em $ano vai ter $idade</li>
       </ul>
        "
        ?>
    </section>

</body>

</html>