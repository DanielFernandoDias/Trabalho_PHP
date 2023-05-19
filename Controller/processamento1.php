<?php
// Verifica se os dados foram enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Inclui a classe Cadastro
    require_once '../Model/Cadastro.php';

    // Cria uma nova instância da classe Cadastro
    $cadastro = new Cadastro($_POST['cpf'],$_POST['senha']);

    // Define os valores dos atributos com base nos dados enviados pelo formulário
    $cadastro->set_name($_POST['Nome']);
    $cadastro->set_cpf($_POST['cpf']);
    $cadastro->set_num_card($_POST['cartao']);
    $cadastro->set_password($_POST['senha']);
    $cadastro->set_phone_num($_POST['telefone']);
    $cadastro->set_email($_POST['email']);

    $params = http_build_query([
        'nome' => $cadastro->get_name(),
        'cpf' => $cadastro->get_cpf(),
        'cartao' => $cadastro->get_num_card(),
        'senha' => $cadastro->get_password(),
        'telefone' => $cadastro->get_phone_num(),
        'email' => $cadastro->get_email()
    ]);
    
    // Redireciona o usuário para outra página
    header('Location: ../View/login-cadastro/acesso.php?'. $params);
    exit();
} else {
    // Se os dados não foram enviados via POST, redirecione o usuário para o formulário de cadastro
    header('Location: formulario_cadastro.php');
    exit();
}
?>
