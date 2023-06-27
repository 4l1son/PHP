<?php
require_once '../DAO/userDAO.PHP';

class UserController {
    public function cadUser() {
        // Verificar se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obter os dados do formulário
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            // Criar uma instância da classe UserDAO
            $userDAO = new UserDAO($nome, $email, $senha);

            // Salvar o usuário no banco de dados
            $userDAO->save();

            // Redirecionar ou exibir uma mensagem de sucesso
            // ...
        }
    }

    public function readUser() {
        $userDAO = new UserDAO();
        $users = $userDAO->read();
        return $users;
    }

    public function updateUser($id) {
        // Obtenha os dados do formulário de atualização (nome, email, senha) e faça as validações necessárias

    }

    public function deleteUser($id) {
        // Criar uma instância da classe UserDAO
        $userDAO = new UserDAO();

        // Obter a lista de usuários antes de excluir o usuário
        $users = $this->readUser();

        // Remover a linha com o ID do usuário excluído do array de usuários
        foreach ($users as $key => $user) {
            if ($user['id'] == $id) {
                unset($users[$key]);
                break;
            }
        }

        // Deletar o usuário do banco de dados
        $userDAO->delete($id);

        // Redirecionar ou exibir uma mensagem de sucesso
        // ...
    }

}

// Exemplo de uso do controlador
$userController = new UserController();

// Verificar se a requisição de exclusão foi enviada
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $id = $_POST['delete_user'];
    $userController->deleteUser($id);
    // Redirecionar ou exibir uma mensagem de sucesso
    // ...
}

// Verificar se a requisição de atualização foi enviada
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $userController->updateUser($id);
    // Redirecionar ou exibir uma mensagem de sucesso
    // ...
}

$userController->cadUser();
$userController->readUser();
?>
