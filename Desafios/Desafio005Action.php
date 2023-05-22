<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Analisando seu número Real <i class="fa fa-down-long "></i></h1>
    <?php 
    $num = $_POST['numero'] ?? 0;
    $int = (int)$num;
    $fra =$num-$int;
echo "<p>O número digitado foi: <strong>" .number_format($num, 3, ",","."). "</strong>.</p>";
echo "<ul><li> Parte inteira:<strong> ".number_format($int, 0, ",","."). "</strong></li><li>  Parte Fracionada: <strong>".number_format($fra, 3, ",",".").  "</strong></li></ul>";

    ?>
</body>
<p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
<script src="https://kit.fontawesome.com/ef4189ae1e.js" crossorigin="anonymous"></script>
</html>