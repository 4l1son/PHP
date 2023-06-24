<?php 
require_once '../DAO/userDAO.php';

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
        
    
    
}

// Exemplo de uso do controller
$userController = new UserController();
$userController->cadUser();
$userController->readUser();
?>
