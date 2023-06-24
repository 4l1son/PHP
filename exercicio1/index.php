<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado do processamento</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["profissao"])) {
            $profissao = $_POST["profissao"];
            $area = $_POST["area"];
            echo "Profissão: " . "<h3>$profissao</h3>" . " ";
            echo "Area: " . "<h3> $area</h3>";
        } else {
            echo "O campo 'Profissão' e 'Area' não foi preenchido.";
        }
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar para pagina anterior</a>
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        a {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        h2 {
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin: 0;
        }
        
        p {
            margin: 20px;
        }
    </style>
</html>
