<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Game</title>
</head>
<body>
    <header>
        <h3>Advinhe o número!</h3>
        <p>Informe um número:</p>
    </header>
    <form action="index.php" method="post">
        <input type="number" name="numero" />
        <input type="button" value="Enviar" />
    </form>
    <main>
        <?php 
           
           if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if (isset($_POST["numero"])) {
                $numero = $_POST["numero"];
                echo "<p>Número impresso: " . $numero . "</p>";

                $numero1 = rand(1, 3);

                if ($numero == $numero1) {
                    echo "<p>Parabéns, você acertou!</p>";
                } else {
                    echo "<p>Você errou! O número aleatório era: " . $numero1 . "</p>";
                }
            } else {
                echo "<p>Por favor, digite um número.</p>";
            }
        }
        
        ?>
    </main>
</body>
</html>
