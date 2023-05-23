<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 006</title>
</head>

<body>
    <?php
    $dividendo = $_POST['v1'] ?? 0;
    $divisor = $_POST['v2'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?= $dividendo ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">

        </form>
    </main>
    <section>
        <h1>Estrutura da Divisão </h1>
        <?php
$result= $dividendo/$divisor;
$resultint = (int)$result;
$resto = $dividendo - ($resultint*$divisor);
        echo "<ul>
       <li>Este é o dividendo: $dividendo</li>
       <li>Este é o divisor: $divisor</li>
       <li>Este é o resultado: $resultint</li>
       <li> Esta é a sobra: $resto</li>
       </ul>
        "
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultint?></td>
            </tr>
        </table>
    </section>

</body>

</html>