<?php
require_once '../Factory/ConnectionFactory.php';
require_once '../DAO/UserDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criar uma instância do UserDAO
    $userDAO = new UserDAO($nome, $email, $senha);

    // Salvar o usuário no banco de dados
    $userDAO->save();

    // Exibir mensagem de sucesso
    echo "<script>";
    echo "alert('Usuário cadastrado com sucesso!');";
    echo "window.location.href = 'router.php?route=home';";
    echo "</script>";
    exit;
}
?>

<h1>Página de cadastro de usuário</h1>
<p>Cadastre um usuário usando o formulário abaixo.</p>
<form action="" method="post" id="user-form">
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="button" class="btn btn-secondary" onclick="history.back()">Voltar</button>
</form>
