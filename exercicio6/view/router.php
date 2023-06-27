<?php
// Obtém a rota da URL
$route = $_GET['route'];

// Roteamento
switch ($route) {
    case 'home':
        // Página inicial
       include 'home.php';
        break;
    case 'profile':
        // Página de perfil
        include 'profile.php';
        break;
    case 'contact':
        include 'contact.php';;
        break;
    default:
        // Rota não encontrada
        echo "<h1>Rota não encontrada</h1>";
        break;
}
?>
