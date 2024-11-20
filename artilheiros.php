<?php
session_start();
 
if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){ 

?>
<?php
$artilheiros = array(
    "Pedro;Flamengo;11",
    "Estêvão;Palmeiras;10",
    "Flaco López;Palmeiras;9",
    "Vegetti;Vasco da Gama;8",
    "Hulk;Atlético-MG;7",
    "Lucero;Fortaleza;6",
);
?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/artilheiros.css" />
        <title>Artilheiros</title>
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

        <div class="content">
            <h1>Artilheiros</h1>

            <div class="artilheiros">
                <!-- foreach-->
                <?php

                for ($i = 0; $i < count($artilheiros); $i++) {

                    $posicao = $i + 1;
                    $jogador = explode(";", $artilheiros[$i])[0];
                    $clube = explode(";", $artilheiros[$i])[1];
                    $gols = explode(";", $artilheiros[$i])[2];

                    echo "
                    <div class='card-jogador'>
                
                    <h2>$posicao | $jogador</h2>
                    <p>$clube</p>
                    <h1>$gols Gols</h1>
                    
                    
                    </div>
                    ";
                }

                ?>

            </div>
        </div>

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