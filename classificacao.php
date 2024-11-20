<?php
 session_start();
    
if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){ 

?>
<?php

$clubes = array(
    "Botafogo:60",
    "Palmeiras:57",
    "Fortaleza:55",
    "Flamengo:51",
    "São Paulo:47",
    "Internacional:46",
    "Bahia:45",
    "Cruzeiro:43",
    "Atlético-MG:40",
    "Vasco:37",
    "Grêmio:35",
    "Criciúma:35",
    "Red Bull Bragantino:34",
    "Juventude:34",
    "Athletico:31",
    "Fluminense:30",
    "Vitória:29",
    "Corinthians:26",
    "Cuiabá:24",
    "Atlético-GO:21"
);


?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Classificação</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/classificacao.css" />
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
            <h1>Série A - 2024</h1>

            <table class="tabela">
                <thead>
                    <tr>
                        <th>POSIÇÃO</th>
                        <th>CLUBE</th>
                        <th>PONTOS</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    for ($i = 0; $i < sizeof($clubes); $i++) {

                        $posicao = $i + 1;
                        $time = explode(":", $clubes[$i])[0];
                        $pontos = explode(":", $clubes[$i])[1];
                        $zona = "";

                        if ($i < 6) {
                            $zona = "zona-verde";
                        } elseif ($i < 12) {
                            $zona = "zona-azul";
                        } else if ($i < 16) {
                            $zona = "zona-cinza";
                        } else {
                            $zona = "zona-vermelha";
                        }

                        echo "<tr>
                            <td class='$zona'>$posicao º</td>
                            <td>$time</td>
                            <td>$pontos</td>
                            </tr>";
                    }

                    ?>
                </tbody>
            </table>
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