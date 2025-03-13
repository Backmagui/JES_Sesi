<?php
// Inicializar os nomes dos times
$nome_time1 = isset($_POST['nome_time1']) ? htmlspecialchars($_POST['nome_time1']) : "Time 1";
$nome_time2 = isset($_POST['nome_time2']) ? htmlspecialchars($_POST['nome_time2']) : "Time 2";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Placar</title>
    <link rel="stylesheet" href="aovivo.css">
</head>
<body>
    <div class="container">
        <h1>Placar</h1>

        <!-- Exibição do Placar -->
        <div class="scoreboard">
            <div class="team">
                <h2><?php echo $nome_time1; ?></h2>
                <div class="score">
                    <h1>0</h1>
                </div>
            </div>
            <div class="team">
                <h2><?php echo $nome_time2; ?></h2>
                <div class="score">
                    <h1>0</h1>
                </div>
            </div>
        </div>

        <!-- Formulário para Alterar os Nomes -->
        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="nome_time1">Nome do Time 1:</label>
                <input type="text" id="nome_time1" name="nome_time1" value="<?php echo $nome_time1; ?>">
            </div>
            <div class="form-group">
                <label for="nome_time2">Nome do Time 2:</label>
                <input type="text" id="nome_time2" name="nome_time2" value="<?php echo $nome_time2; ?>">
            </div>
            <button type="submit">Atualizar Nomes</button>
        </form>
    </div>
</body>
</html>