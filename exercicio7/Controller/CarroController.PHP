<pre>



<?php 

require '../DAO/CarroDAO.php';
$modelo =  $_POST['modelo']?? '';
$ano =  $_POST['ano']?? '';
$quilometragem =  $_POST['quilometragem']?? '';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    
    $obj = new CarroModel($modelo,$ano,$quilometragem);

    $cadastro = new CarroDAO();
    $cadastro->cadCarro($obj);
    var_dump($cadastro->readCarro());
    
}
?>
</pre>