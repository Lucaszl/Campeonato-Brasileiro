<?php
// Nenhuma mensagem de erro será exibida na tela, independentemente da gravidade do erro.
error_reporting(0); 

session_start();



       
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/login.css" />
    </head>

<body>
    <div>
    <?php
    
    //Verifica se login existe uma variavel $_session[login] e se o valor dela é igual a "s" 
    if(isset($_SESSION["login"]) && $_SESSION["login"] == "s"){ 
        
        echo "<a class='back' href='backend_destroy.php'>Sair</a>";
        echo "<h3 style='text-align: center;'><----- Retorna para login novamente....</h3>"; 
        
    ?>
    
    <?php
    }else{
        //Verifica se a variável de sessão "erro" existe e se não está vazia.

        if (isset($_SESSION["erro"]) && $_SESSION["erro"] != "") {
            echo "<div style='background-color:red;
                        color: white; 
                        padding: 10px; 
                        border: 1px solid #a94442;
                        border-radius: 5px;
                        margin: 10px 0;
                        text-align: center;'>";
            // Imprima ERRO.
            echo $_SESSION["erro"];
            unset($_SESSION["erro"]); // limpa a mensagem de erro após exibir.
            echo "</div>";
            
        }
    
        
    
    ?>
    <header class="navbar">
        <div>
            <img src="./images/logo.png" alt="Logo">
        </div>
        <nav >
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
                <h1>Login</h1>

                <form action="backend_login.php" method="POST">
                    <label class="label" for="nome">Nome: </label>
                    <input class="input" type="text" id="nome" name="nome" maxlength="100" placeholder=" Digite seu nome: "  required />
                    <br />
                    <br />
                    <label class="label" for="email">Email:</label>
                    <input class="input" type="text" id="email" name="email" min="0" max="100" placeholder=" Digite seu email: " required />
                    <br />
                    <br />
                    <label class="label" for="senha">Senha: </label>
                    <input class="input" type="password" id="senha" name="senha" placeholder=" Digite sua senha: " required />

                    <br />
                    
                    
                  

                    <input class="botao" type="submit" value="Enviar" />

                </form>
            </div>
    </main>
    <?php } ?>
    <footer>
        <p>&copy; 2024 Campeonato Brasileiro</p>
    </footer>

</body>

</html>