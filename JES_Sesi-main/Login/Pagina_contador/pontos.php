<?php
// Inicializa os placares com valores padrão
session_start();
if (!isset($_SESSION['pontos1'])) {
    $_SESSION['pontos1'] = 0;
}
if (!isset($_SESSION['pontos2'])) {
    $_SESSION['pontos2'] = 0;
}

// Processa as ações de incremento e decremento
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'adicionar1') {
        $_SESSION['pontos1']++;
    }
    if ($_GET['action'] == 'diminuir1') {
        $_SESSION['pontos1']--;
    }
    if ($_GET['action'] == 'adicionar2') {
        $_SESSION['pontos2']++;
    }
    if ($_GET['action'] == 'diminuir2') {
        $_SESSION['pontos2']--;
    }
}
?>


