<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Mensagem</title>
</head>

<body>
    <div class="w3-container w3-teal">
<?php 
$tot = (float) $_POST['txtValorCompra'];
// var_dump($tot);

?>

        <h1>
            <?php
            echo "Promoção Do mês de Aniversário ! <br>" . $_POST['txtNome'] . " ! <br>";
            echo "Valor total da Compra sem desconto: R$ " . $_POST['txtValorCompra'] . "<br>";
            ?>
            <?php
            if ($_POST['cmbPag'] == "cartaoCredito") {
                echo 'A opção "Cartão de Crédito" não lhe proporciona desconto no pagamento!' ."<br> Valor Final: R$".$tot;
            }elseif ($_POST['cmbPag'] == "boleto"){
                $valorBoleto = $tot-($tot*0.08);
                echo 'Você possui desconto de 8% por pagar via "Boleto".' ."<br> Valor Final: R$".number_format($valorBoleto, 2, ',', '.')."<br> Você economizou: R$".($tot*0.08);
            }else {
                $valorDeposito = $tot-($tot*0.1);
                echo 'Você possui desconto de 10% por pagar via "Depósito".' ."<br> Valor Final: R$".number_format($valorDeposito, 2, ',', '.')."<br> Você economizou: R$".number_format($tot*0.1, 2, ',', '.');

            }
            ?>
        </h1>
    </div>
</body>

</html>