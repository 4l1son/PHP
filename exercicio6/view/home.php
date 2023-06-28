<style>
    .actions {
        display: flex;
        gap: 5px;
    }
    button {
        border: 5px;
        color: aqua;
        background-color: whitesmoke;
    }
    button:hover {
        color: black;
    }
</style>

<h1>Página inicial</h1>
<p>Bem-vindo à página inicial do projeto.</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once '../Controller/userController.php';
        $userController = new UserController();
        $users = $userController->readUser();



        // Exibir dados na tabela HTML
        if (!empty($users)) {
            $count = 1;
            foreach ($users as $user) {
                $id = $user['id'];

                // Verificar se a linha possui valores preenchidos
                if (!empty($user['Nome']) || !empty($user['Email']) || !empty($user['Senha'])) {
                    echo "<tr id='user_row_$id'>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . (!empty($user['Nome']) ? $user['Nome'] : '') . "</td>";
                    echo "<td>" . (!empty($user['Email']) ? $user['Email'] : '') . "</td>";
                    echo "<td>" . (!empty($user['Senha']) ? $user['Senha'] : '') . "</td>";
                    echo "<td>";
                    echo "<div class='actions'>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='update_user' value='" . $id . "'>";
                    echo "<button type='submit'>Atualizar</button>";
                    echo "</form>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='delete_user' value='" . $id . "'>";
                    echo "<button type='submit'>Deletar</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                    $count++;
                }
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
        }

        // Verificar se a requisição de exclusão foi enviada
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
            $id = $_POST['delete_user'];
            // Remover a linha da tabela HTML correspondente ao usuário excluído
            echo "<script>";
            echo "var row = document.getElementById('user_row_$id');";
            echo "row.parentNode.removeChild(row);";
            echo "</script>";
            $userController->deleteUser($id);
            // Redirecionar ou exibir uma mensagem de sucesso
            // ...
        }
        ?>
    </tbody>
</table>
