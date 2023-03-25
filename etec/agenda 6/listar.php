<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Listagem de Amigos - MYSQLI</title>
</head>



<body>
    <a href="index.html" class="w3-display-topleft">
        <i class="fas fa-solid fa-arrow-left w3-teal w3-button w3-xxlarge"></i>
    </a>
    <br><br><br><br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "060291";
    $dbname = "pwii";
    $conexao = new mysqli($servername, $username, $password, $dbname);
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    echo '
<div class="w3-paddingw3-content w3-half w3-displaytopmiddle w3-margin">
<h1 class="w3-center w3-teal w3-round-large w3-
margin">Listagem de Amigos</h1>
<table class="w3-table-all w3-centered">
<thead>
<tr class="w3-center w3-teal">

<th>Nome</th>
<th>Apelido</th>
<th>Email</th>
<th>Excluir</th>
<th>Atualizar</th>
</tr>
<thead>
';
    $sql = "SELECT * FROM amigo";
    $resultado = $conexao->query($sql);
    if ($resultado != null)
        foreach ($resultado as $linha) {
            echo '<tr>';
            // echo '<td>' . $linha['idamigo'] . '</td>';
            echo '<td>' . $linha['nome'] . '</td>';
            echo '<td>' . $linha['apelido'] . '</td>';
            echo '<td>' . $linha['email'] . '</td>';
            echo '<td><a href="excluir.php?id=' . $linha['idamigo'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] . '&email=' . $linha['email'] . '"><i class="fa fa-user-times w3-large w3-text-teal"></i> </a></td></td>';
            echo '<td><a href="atualizar.php?id=' . $linha['idamigo'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] . '&email=' . $linha['email'] .'"><i class="fa fa-user-edit w3-large w3-text-teal"></i> </a></td></td>';
            echo '</tr>';
        }
    echo '
</table>
</div>';
    $conexao->close();
    ?>
    </div>
</body>

</html>

