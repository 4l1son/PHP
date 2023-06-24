<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Cotação</title>

</head>
<body>
    <header>
<h4>Cotação</h4>
</header>
<main id="content">
    <h5>Dados da API -  bcb</h5>    
<?php

$inicio = date("m-d-Y", strtotime("-46 days"));
$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=50&$skip=0&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
$dados = json_decode(@file_get_contents($url), true);

if ($dados && isset($dados["value"])) {
    $cotacoes = $dados["value"];
    $numCotacoes = count($cotacoes);

    for ($i = 1; $i < $numCotacoes; $i++) {
        $dataCotacao = substr($cotacoes[$i]["dataHoraCotacao"], 0, 10);
        $cotacao = $cotacoes[$i]["cotacaoCompra"];
        echo "A cotação em $dataCotacao foi $cotacao <br>";
    }
} else {
    echo "Não foram encontrados dados para o período especificado.";
}

?>

    </main>
</body>
</html>