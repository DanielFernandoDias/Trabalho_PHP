<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login-cadastro.css">
    <title>Passagens express - Cadastro</title>
</head>

<body>
    <div class="body-intro">
        <img src="../img/PE_Logo.png" alt="">
    </div>
    <div class="body-conteudo">
        <form class="form-cadastro" action="../../Controller/processamento1.php" method="post">
            <div>
                <label for="Nome">Nome Completo</label>
                <input type="text" name="Nome" id="Nome" required>
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" required>
            </div>
            <div>
                <label for="telefone">telefone</label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>
            <div>
                <label for="">email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="">CPF</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>
            <div>
                <label for="cartao">Número cartão</label>
                <input type="text" name="cartao" id="cartao" required>
                <a href="./login.php">Já é cliente?</a>
            </div>

            <button type="submit">Cadastrar</button>

        </form>
    </div>

    <footer>
        <span>
            A empresa Passagens Express tem como objetivo principal automatizar o
            processo de vendas de passagens, proporcionando mais eficiência, rapidez e
            comodidade aos usuários
        </span>

        <span>
            Todos os direitos reservados ©
        </span>
    </footer>
</body>

</html>