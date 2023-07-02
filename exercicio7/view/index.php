
<!DOCTYPE html>
<html>
<head>
    <title>Estacionamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgba(0, 86, 179, 0.8);
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input name="modelo" placeholder="modelo" required/>
        <input name="ano" placeholder="ano" required/>
        <input name="quilometragem" placeholder="quilometragem" required/>
        <button type="submit">Enviar</button>
    </form>
    <h3>Carros </h3>
    <pre>

    <?php require_once '../Controller/CarroController.php'; ?>


    </pre>
</body>
</html>
