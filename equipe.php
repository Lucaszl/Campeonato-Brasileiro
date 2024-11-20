<?php
 session_start();
 
if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){  
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Equipe</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/equip.css" />
    </head>

    <body>
        <header class="navbar">
            <div>
            <a href="index.php">  <img src="./images/logo.png" alt="Logo">
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="classificacao.php">Serie A</a>
                <a href="artilheiros.php">Artilheiros</a>
                <a href="contato.php">Contato</a>
                <a href="equipe.php">Equipe</a>
            </nav>
        </header>

        <h1>EQUIPE</h1>

        <main>
            <section class="cards">
                <div class="card">
                    <h2>Felipe <br> Sandes</h2>
                    <h5>RGM: 38287692</h5>

                    <h5>Funções</h5>
                    <ul>
                        <li>Desenvolvimento da Tela 'Serie A'</li>
                    </ul>
                    <a href="classificacao.php">Serie A</a>
                    <br>
                    <br>
                    <a id="a" href="array.php">Array</a>
                </div>

                <div class="card">
                    <h2>Leonardo<br> Rodrigues</h2>
                    <h5>RGM: 37220012</h5>

                    <h5>Funções</h5>
                    <ul>
                    <li>Desenvolvimento da Tela 'Equipe'</li>
                    </ul>
                    <a href="equipe.php">Equipe</a>
                </div>

                <div class="card">
                    <h2>Natan <br> Lima</h2>
                    <h5>RGM: 37258761</h5>

                    <h5>Funções</h5>
                    <ul>
                        <li>Desenvolvimento da Tela 'Contato'</li>
                    </ul>
                    <a href="contato.php">Contato</a>
                </div>
                <div class="card">
                    <h2>Lucas <br> Pereira </h2>
                    <h5>RGM: 37203444</h5>

                    <h5>Funções</h5>
                    <ul>
                        <li>Desenvolvimento da Tela 'Home'</li>
                    </ul>
                    <a href="index.php">Home</a>
                    <br><br>
                    <a id="a2" href="session.php">Session</a>
                </div>
            </section>
        </main>
        
        <footer>
            <p>&copy; 2024 Campeonato Brasileiro</p>
        </footer>
    </body>

</html>
<?php
    }else{
        header("Location: login.php");
    }
?>