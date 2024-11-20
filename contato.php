<?php
 session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){ 

?>
<?php

$clubes = array(
    "Nenhum",
    "Athletico",
    "Atlético-GO",
    "Atlético-MG",
    "Bahia",
    "Botafogo",
    "Corinthians",
    "Criciúma",
    "Cruzeiro",
    "Cuiabá",
    "Flamengo",
    "Fluminense",
    "Fortaleza",
    "Grêmio",
    "Internacional",
    "Juventude",
    "Palmeiras",
    "Red Bull Bragantino",
    "São Paulo",
    "Vasco",
    "Vitória"
);
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/contato.css" />
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

        <main class="main">
            <div class="quadro">

                <div class="formatado">
                    <h1>Contato</h1>

                    <form action="backend-contato.php" method="POST">
                        <label class="label" for="nome">Nome</label>
                        <input class="input" type="text" id="nome" name="nome" maxlength="100"
                            placeholder=" Digite seu nome: " />
                        <br />
                        
                        <label class="label" for="email">Email</label>
                        <input class="input" type="text" id="email" name="email" min="0" max="100"
                            placeholder=" Digite seu email: " required />
                        <br />
                        
                        <label class="label" for="tel">Telefone</label>
                        <input class="input" type="text" id="tel" name="telefone" placeholder=" Digite seu telefone: " required />

                        <br />
                        

                        <label class="label">Sexo</label>
                        <div class="radio">
                            <input type="radio" id="f" name="sexo" value="Feminino" required><label for="f">Feminino</label >
                            <input type="radio" id="m" name="sexo" value="Masculino" required><label for="m">Masculino</label >
                            <input type="radio" id="o" name="sexo" value="Outro(s)" required><label for="m">Outro(s)</label >
                        </div>

                        <br />
                        

                        <label class="label">Clube</label>
                        <select class="input" name="clube" id="clubes" required >

                            <?php
                        for ($i = 0; $i < sizeof($clubes); $i++) {

                            $clube = $clubes[$i];

                            echo "<option value='$clube'>$clube</option>";
                        }

                        ?>
                        </select>
                        <br />
                        

                        <input class="botao" type="submit" value="Enviar" />

                    </form>
                </div>
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