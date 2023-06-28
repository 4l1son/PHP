<?php
require_once '../Factory/ConnectionFactory.php';

class UserDAO {
    private $nome;
    private $email;
    private $senha;
    private $conn;

    public function __construct($nome = '', $email = '', $senha = '') {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->conn = (new ConnectionFactory())->getConnection();
    }

    public function save() {
        $sql = "INSERT INTO user (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->nome, $this->email, $this->senha);
        $stmt->execute();
        $stmt->close();
    }

    public function read() {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        $users = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }

    public function update($id, $nome, $email, $senha) {
        $sql = "UPDATE user SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $nome, $email, $senha, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function delete($id) {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
?>
