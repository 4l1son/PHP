<?php 

class CarroModel{

    public $modelo;
    public $ano;
    public $quilometragem;


    public function __construct($modelo,$ano,$quilometragem) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
    }


    public function getModelo(){
        return  $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getAno(){
        return  $this->ano;
    }
    
    public function setAno($ano){
        $this->ano = $ano;
    }
  
    public function getQuilometragem(){
        return  $this->ano;
    }
    
    public function setQuilometragem($quilometragem){
        $this->quilometragem = $quilometragem;
    }
  




}



?>