<?php
require_once("./login/Pagina_contador/pontos.php");
require_once("teste.php")
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>JES-2024 | Interclasse do SESI de Cerquilho</title>
</head>

<body>
    <header>
        <img src="./images/timbre_sesi_senai.png" alt="" width="200px">
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><a href="./Login/Pagina_login/entrar.php"><img src="./images/login.png" alt="" width="50px"></a></div>
    </header>
    <main>
        <section class="main-score">
            <div class="score">
                <div class="top-score">
                    <h1 class="modalidade-esporte">Esporte-Fem/Masc</h1>
                    <h2 class="ao-vivo">Ao vivo</h2>
                </div>
                <div class="bottom-score">
                    <div class="squad-score">
                        <img src="./images/emblema.png" alt="" width="90px;">
                        <p id="name"><?php echo $nome_time1; ?></p>
                    </div>
                    <h1 class="placar" id="time1"><?php echo $_SESSION['pontos1']; ?></h1>
                    <h1 class="x">X</h1>
                    <h1 class="placar" id="time1"><?php echo $_SESSION['pontos2']; ?></h1>
                    <div class="squad-score">
                        <img src="./images/emblema.png" alt="" width="90px">
                        <p id="name"><?php echo $nome_time2; ?></p>
                    </div>

                </div>

            </div>
            <div class="timeline">
                <div class="timeline-card">
                    <div class="timeline-date">
                        <H1>HOJE</H1>
                        <p>14:00</p>
                    </div>
                    <div class="timeline-score">
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto">2</h1>
                        </div>
                        <h1>X</h1>
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto">0</h1>
                        </div>
                    </div>
                    <div class="timeline-modalidade">
                        <p>Esporte-Fem/Masc</p>
                    </div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-date">
                        <H1>HOJE</H1>
                        <p>14:00</p>
                    </div>
                    <div class="timeline-score">
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto"></h1>
                        </div>
                        <h1>X</h1>
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto"></h1>
                        </div>
                    </div>
                    <div class="timeline-modalidade">
                        <p>Esporte-Fem/Masc</p>
                    </div>
                </div>
                <div class="timeline-card">
                    <div class="timeline-date">
                        <H1>HOJE</H1>
                        <p>14:00</p>
                    </div>
                    <div class="timeline-score">
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto"></h1>
                        </div>
                        <h1>X</h1>
                        <div class="timeline-squad">
                            <img src="./images/emblema.png" alt="" width="50px">
                            <h1 id="ponto"></h1>
                        </div>
                    </div>
                    <div class="timeline-modalidade">
                        <p>Esporte-Fem/Masc</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="player-score">
            <div class="live-player">
                <div class="personal-stats">
                    <img src="./images/user.png" alt="" width="50px">
                    <div class="goal">
                        <h1>GOLLLL</h1>
                        <p>nome</p>
                    </div>
                </div>
                <div class="personal-stats">
                    <img src="./images/user.png" alt="" width="50px">
                    <div class="goal">
                        <h1>GOLLLL</h1>
                        <p>nome</p>
                    </div>
                </div>
                <div class="personal-stats">
                    <img src="./images/user.png" alt="" width="50px">
                    <div class="goal">
                        <h1>GOLLLL</h1>
                        <p>nome</p>
                    </div>
                </div>
                <div class="personal-stats">
                    <img src="./images/user.png" alt="" width="50px">
                    <div class="goal">
                        <h1>GOLLLL</h1>
                        <p>nome</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>