<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/ex_arrey.css" />
        <title>Session</title>
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
                
                <img class = "imagem" src="./images/session_login1.jpg" alt="session">
                <h3>Esse código PHP verifica se o usuário está logado antes de permitir o acesso ao conteúdo da página. O session_start() inicia uma sessão, habilitando o uso de variáveis de sessão. Em seguida, o if(isset($_SESSION["login"]) && $_SESSION["login"] == "s") verifica se a variável de sessão $_SESSION["login"] existe e tem o valor "s" (indicando que o usuário está logado). </h3>

                <img class = "imagem" src="./images/session_login2.jpg" alt="função">
                <h3>Se a condição for verdadeira, o conteúdo é exibido; caso contrário, o usuário é redirecionado para a página de login (header("Location: login.php");) e o script é encerrado com exit().</h3>
            
                <img class = "imagem" src="./images/session.jpg" alt="função">
                <h3>Esse código adiciona uma verificação e exibição de mensagens de erro para o usuario caso não esteja logado.</h3>
                <br>
                <h3>Este trecho verifica se a variável de sessão $_SESSION["erro"] existe e se não está vazia. A variável "erro" pode ser usada para armazenar mensagens de erro, como avisos sobre falhas de login</h3>
                <br>
                <h3>echo $_SESSION["erro"];:Exibe o conteúdo da mensagem de erro armazenada em $_SESSION["erro"].
                unset($_SESSION["erro"]);:

                Após exibir a mensagem, o código remove a variável $_SESSION["erro"] usando unset(). Isso garante que a mensagem de erro não seja exibida novamente se o usuário recarregar a página.</h3>

                <center><a class="botao" href="equipe.php">Equipe</a></center>

            </div>
        </main>
    </body>

</html>