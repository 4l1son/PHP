<?php 
class ConnectionFactory {
    private $conn;

    public function __construct() {
        // Configurar a conexão
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "estacionamento";

        // Criar a conexão
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar a conexão
        if ($this->conn->connect_error) {
            die("Falha na conexão: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

$obj = new ConnectionFactory();

?>
