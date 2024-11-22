<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="inicializador.css">
    <title>Document</title>
</head>
<body>
    <header>
        <button class="menu" onclick="Menu()"><img src="./img_inic/menu.png" alt="" width="40px"></button>
        <ul class="vertical-menu" id="menuvert">
            <li><a href="">Cadastrar Time</a></li>
            <li><a href="">Cadastrar Jogador</a></li>
            <li><a href="">Cadastrar Jogo</a></li>
            <li><a href="">Contador</a></li>
            <li><a href="" id="logout"><img src="./img_inic/login.png" alt="" width="20px">Sair</a></li>
        </ul>
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><img src="./img_inic/timbre_sesi_senai.png" alt="" width="300px"></div>
    </header>
    <main>
        <div class="card-game">
            <div class="card-time">
                <h1 id="hoje">HOJE</h1>
                <p>14:00</p>
            </div>
            <div class="card-score">
                <div class="card-squad">
                    <img src="./img_inic/emblema.png" alt="" width="30px">
                    <h2>Nome</h2>
                </div>
                <h1>X</h1>
                <div class="card-squad">
                    <img src="./img_inic/emblema.png" alt="" width="30px">
                    <h2>Nome</h2>
                </div>
            </div>
            <button class="iniciar">Iniciar</button>
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

</html>