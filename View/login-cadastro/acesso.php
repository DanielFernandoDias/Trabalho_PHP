<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo <?php echo $_GET['nome'] ?></title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div class="body-intro">
        <img src="../img/PE_Logo.png" alt="">
    </div>
    <div class="body-conteudo">
        <div class="conteudo-info">
        <?php
        $nome = $_GET['nome'];
        $cpf = $_GET['cpf'];
        $cartao = $_GET['cartao'];
        $senha = $_GET['senha'];
        $telefone = $_GET['telefone'];
        $email = $_GET['email'];

        // Exibe os dados de cadastro
        echo '<p><strong>Nome:</strong> ' . $nome . '</p>';
        echo '<p><strong>CPF:</strong> ' . $cpf . '</p>';
        echo '<p><strong>Número do Cartão:</strong> ' . $cartao . '</p>';
        echo '<p><strong>Senha:</strong> ' . $senha . '</p>';
        echo '<p><strong>Telefone:</strong> ' . $telefone . '</p>';
        echo '<p><strong>Email:</strong> ' . $email . '</p>';

        ?>
        </div>
        <div class="conteudo"></div>
    </div>
    <footer>
        <span>
            A empresa Passagens Express tem como objetivo principal automatizar o
            processo de vendas de passagens, proporcionando mais eficiência, rapidez e
            comodidade aos usuários.
        </span>

        <span>
            Todos os direitos reservados ©
        </span>
    </footer>
</body>

</html>

    