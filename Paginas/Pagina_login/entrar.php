<html>
  <head>
    <meta charset="utf-8" />
    <title>JESS - SESI</title>
    <link rel="stylesheet" type="text/css" href="entrar.css">

    </style>
  </head>

  <body>
    <header>
        <img src="./"g alt="" width="200px">
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><a href="../../index.php"><img src="../../images/login.png" alt="" width="40px"></div></a>
    </header>
    <main>
      <div class="container">
          <div class="form">
              <div class="text-login">
              L o g i n
              </div>
              <div class="linha">
              </div>
              <br>
              <div class="form-butom">
                <form action="valida_login.php" method="post">
                  <div class=" ">
                    <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                  </div>
                  <?php if (isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

                  <div class="text-danger">
                    Usuário ou senha invalido(s)!
                  </div>
                  
                  <?php } ?>

                  <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2'){
                  ?>

                  <div class="text-danger">
                    Faça o login primeiro!!!
                  </div>
      
                  <?php } ?>
                  <br>
                  <br>
                  <div class="botoes">
                      <button class="botao" type="submit">Voltar</button>
                      <button class="botao" type="submit">Entrar</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
    </main>
  </body>
</html>