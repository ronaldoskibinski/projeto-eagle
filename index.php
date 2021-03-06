<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['user']);
    unset($_SESSION['email']);
    unset($_SESSION['total']);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Farmacia Terezinha</title>

        <link rel="stylesheet" href="src/include/css/css.css" />

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />   
             
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <script src="src/include/js/auth.js"></script>
        <script src="src/include/js/signup.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>

        <div data-role="page"> 
            <div data-role="header" class="header">
                    <td width="50"><img src="src/imgs/icons/logo-eagle.png" width="40"></td>
            </div>            

            <div class="content" data-role="content">

                <div class="card">
                    <div><img id="imgCard" src="src/imgs/icons/logofarmacia.png"></div>                    
                    <div><h4> Bem Vindo(a) à Farmacia </h4></div>
                </div>

                <h3>Por Favor</h3>
                <h5>Insira seu Email e Senha para Acessar:</h5>

                <div id="mDiv">
                    <div data-role="fieldcontain" class="ui-hide-label">
                        <label for="username">Usuario:</label>
                        <input type="text" name="username" id="username" value="" placeholder="Usuario"/>
                    </div>
                    <div data-role="fieldcontain" class="ui-hide-label">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" value="" placeholder="Senha"/>
                    </div>

                    <div class="buttonsDiv">
                        <button class="blueBtn" data-inline="true" onclick="auth()">Logar</button>
                        <a href="src/components/signup.php" class="link"><button class="btn" data-icon="star" data-iconpos="left" data-inline="true">Criar Conta</button></a>
                    </div>                   
                </div>

                <h3>Alguma Duvida?</h3>
                <h5>Entre em contato conosco:</h5>

                <div>
                    <div>
                        <img class="cardImg" src="src/imgs/imgs/email.jpeg">
                        <img class="cardImg" src="src/imgs/imgs/whats.jpeg">
                    </div>
                </div>

            </div>          

            <div data-role="footer" class="ui-bar">
                <a href="#" data-icon="arrow-u">Subir</a>
            </div>           

        </div>         
        
        <!-- Modal Structure -->

        <div id="backMsg"></div>

        <div id="congratsMessage">
            <div>
                <h2>Credenciais não Encontradas </h2>
                <p>Por favor, revise as informações de login.</p>
            </div>
            <div >
                <a onclick="disarm()">Ok</a>
            </div>
        </div>


    </body>
</html>