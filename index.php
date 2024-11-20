<?php
 session_start();
 
if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){  
    
?>

   
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="style/home.css">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <title>Campeonato Brasileiro</title>

    </head>

    <body>
        <header class="navbar">
            <div>
            <a href="index.php"> <img src="./images/logo.png" alt="Logo">
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="classificacao.php">Serie A</a>
                <a href="artilheiros.php">Artilheiros</a>
                <a href="contato.php">Contato</a>
                <a href="equipe.php">Equipe</a>
                <a href="backend_destroy.php">Sair</a>
            </nav> 
        </header>
        <main class="main">
            
            <section class="intro">
                <h1>Confira as<br>Classificações do <br>Campeonato Brasileiro</h1>
                <img src="./images/logo2.png" alt="logo do campeonato">
            </section>
            <section class="cards">
                <div class="card">
                    <p>Campeonato Brasileiro</p>
                    <h2>Série A 2024</h2>
                    <a href="classificacao.php">Classificação</a>
                </div>
                <div class="card">
                    <p>Campeonato Brasileiro</p>
                    <h2>Artilheiros</h2>
                    <a href="artilheiros.php">Conferir</a>
                </div>
                <div class="card">
                    <p>Campeonato Brasileiro</p>
                    <h2>Nossa Equipe</h2>
                    <a href="equipe.php">Conferir</a>
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
        header("Location: login.php"); // Redireciona para login.php se não estiver logado
        exit();
    }
?>