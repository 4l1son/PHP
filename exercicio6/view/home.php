<style>
    .actions {
        display: flex;
        gap: 5px;
      }
      button{
        border: 5px;
        color: aqua;
        background-color:whitesmoke;
        
   
      }
      button:hover{
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
        $obj = new UserController();
        $users = $obj->readUser();

        // Exibir dados na tabela HTML
        if (!empty($users)) {
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . (!empty($user['Nome']) ? $user['Nome'] : '') . "</td>";
                echo "<td>" . (!empty($user['Email']) ? $user['Email'] : '') . "</td>";
                echo "<td>" . (!empty($user['Senha']) ? $user['Senha'] : '') . "</td>";
                echo "<td>";
                echo "<div class='actions'>";
                echo "<button>Atualizar</button>";
                echo "<button>Deletar</button>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum usuário encontrado</td></tr>";
        }
        ?>
    </tbody>
</table>
