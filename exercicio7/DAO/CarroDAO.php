<?php

require_once '../Factory/ConnectionFactory.php';
require_once '../model/CarroModel.php';

class CarroDAO{ 

    private $modelo;
    private $ano;
    private $quilometragem;
    private $conn;

    public function __construct($modelo = '', $ano = '', $quilometragem = '') {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
        $this->conn = (new ConnectionFactory())->getConnection();
    }
    
    
    
    public function readCarro() {
        $sql = "SELECT * FROM carro";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $data;
    }


    public function cadCarro($obj) {
        $sql = "INSERT INTO carro (modelo,ano,quilometragem)  VALUES (?,? ,? )";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sid", $obj->modelo, $obj->ano, $obj->quilometragem);
        $stmt->execute();
        $stmt->close();
        
    }

    
    public function updateCarro(){
        
    }

    public function deleteCarro(){

    }


    
}


$obj = new CarroDAO();




?>
