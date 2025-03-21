<?php
require_once("pontos.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pontuacao.css">
    <title>Pontos</title>
</head>

<body>
    <header>
        <button class="menu" onclick="Menu()"><img src="./img_cont/menu.png" alt="" width="40px"></button>
        <ul class="vertical-menu" id="menuvert">
            <li><a href="">Cadastrar Time</a></li>
            <li><a href="">Cadastrar Jogador</a></li>
            <li><a href="">Cadastrar Jogo</a></li>
            <li><a href="../../index.php" id="logout"><img src="./img_cont/login.png" alt="" width="20px">Sair</a></li>
        </ul>
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><img src="./img_cont/timbre_sesi_senai.png" alt="" width="300px"></div>
    </header>
    <main>
        <div class="contador">
            <div class="time">
                <div class="placar"><h1><?php echo $_SESSION['pontos1']; ?></h1></div>
                    <div class="add-ponto">
                        <a href="?action=adicionar1"><h1 id="ponto">&#43</h1></a>
                        <a href="?action=diminuir1"><h1 id="ponto">&#8722</h1></a>
                    </div>
                <div class="nome">Time</div>
            </div>
            <h1 id="x">X</h1>
            <div class="time">
                <div class="placar"><h1><?php echo $_SESSION['pontos2']; ?></h1></div>
                    <div class="add-ponto">
                        <a href="?action=adicionar2"><h1 id="ponto">&#43</h1></a>
                        <a href="?action=diminuir2"><h1 id="ponto">&#8722</h1></a>
                    </div>                                           
                <div class="nome">Time</div>
            </div>
        </div>
        <div class="botoes">
            <a href="../Pagina_inicializador/inicializador.php">
            <button>Voltar</button></a>
            <a href="../Pagina_inicializador/inicializador.php">
            <button>Concluir</button></a>
        </div>
    </main>
</body>
<script>

    function Menu() {
    
        var menu = document.getElementById("menuvert");

        if (menu.style.display === "none") {
            menu.style.display="block";
        }

        else{
            menu.style.display="none";
        }
    }

</script>
<script>
    // Atualiza os pontos dinamicamente no HTML
    document.getElementById('pontos').textContent = <?= $pontosAtuais ?>;
</script>

</html>