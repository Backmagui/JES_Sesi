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
        <button class="menu" onclick="Menu()"><img src="../../images/menu.png" alt="" width="40px"></button>
        <ul class="vertical-menu" id="menuvert">
            <li><a href="">Cadastrar Time</a></li>
            <li><a href="">Cadastrar Jogador</a></li>
            <li><a href="">Cadastrar Jogo</a></li>
            <li><a href="../../Login/Pagina_contador/contador.php">Contador</a></li>
            <li><a href="../../index.php" id="logout"><img src="../../images/login.png" alt="" width="20px">Sair</a></li>
        </ul>
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><img src="../../images/timbre_sesi_senai.png" alt="" width="300px"></div>
    </header>
    <main>
        <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>          
        </div>
        <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="../../images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
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