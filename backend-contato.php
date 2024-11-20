<?php

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['sexo'];
   $clube =  $_POST['clube'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/backend-contato.css" />
        <title>Document</title>
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

        <main>
            <div class="content">
                <h1>Olá seja bem-vindo(a) <?php  echo $nome; ?></h1>
                <h3> O clube do seu coração é <?php echo $clube; ?> </h3>
                <p> Enviaremos mais informações atraves do email informado <?php echo $email; ?></p>

                <a class="botao" href="index.php">Home</a>

            </div>
        </main>

    </body>

</html>