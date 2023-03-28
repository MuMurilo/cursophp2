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
<h1>Olha O resultado do desafio abaixo <i class="fa fa-down-long "></i> </h1>
<h2>
<?php 
$num = $_POST['numero'];
echo "O número digitado foi: $num <br>";
echo "Seu antecessor é: ". $num-1;
echo"<br>";
echo "Seu sucessor é: ". $num+1;
echo"<br>";
?>
</h2>
</body>
<p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
<script src="https://kit.fontawesome.com/ef4189ae1e.js" crossorigin="anonymous"></script>
</html>