<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Cadastro - MYSQLI</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "060291";
        $dbname = "pwii";
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
        $sql = "INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Eduarda', '10', '10', '9', '10');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Paulo', '10', '9', '8', '9');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Igo', '10', '8', '10', '10');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Guilherm', '10', '9', '8', '7');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Henrique', '9', '9', '8', '7');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Nilson', '10', '9', '10', '9');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Ana', '9', '9', '8', '8');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Amanda', '8', '9', '9', '8');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Carlos', '6', '6', '5', '6');
        INSERT INTO `pwii`.`alunoconcluinte` (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) VALUES ('Pedro', '8', '8', '8', '7');";
        if ($conexao->multi_query($sql) === TRUE) {
            echo 'Dados preenchidos
';
        } else {
            echo '
<a href="index.php"><h1 class="w3-button w3-teal">ERRO! </h1>
</a>
';
        }
        $conexao->close();
        ?>
    </div>
</body>

</html>