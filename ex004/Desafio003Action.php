<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 001 action</title>
</head>
<body>
<h1>O Seu dinheiro em Dolares é: <i class="fa fa-down-long "></i></h1>
<h2>
<?php 

$num = $_POST['numero'];
$dol = $num/4.94;
$dol = number_format($dol, 2, ',', ' ');
echo "O número digitado foi: $num <br>";
echo 'Seu valor em Reais é: <i class="fa-solid fa-brazilian-real-sign"></i>'. $num;
echo"<br>";
echo 'Seu valor em Dolar é: <i class="fa-solid fa-dollar-sign"></i>'. $dol;
echo"<br>";

?>
</h2>
</body>
<p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
<script src="https://kit.fontawesome.com/ef4189ae1e.js" crossorigin="anonymous"></script>
</html>