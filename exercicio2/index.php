<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h3>Resultado processado</h3>
    <main>
        <?php 
        $numero = $_POST["numero"];
        echo "Numero enviado: " . $numero;
        echo "<br>";
        echo "Numero sucessor: " . ($numero + 1);
        echo "<br>";        
        echo "Numero antecessor: " . ($numero - 1);
?>
    </main>
</body>
</html>