<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="./style/ex_array.css" />
        <title>Array</title>
    </head>

    <body>
      <?php require('./partials/nav.php');?>

        <main>
            <div class="content">
                
                <img class = "imagem" src="./images/arrey.png" alt="arrey">
                <h3>O array $clubes no  código armazena informações sobre clubes de futebol, especificamente seus nomes e seus respectivos pontos no campeonato. Cada elemento do array é uma string no formato "NomeDoClube:Pontos" </h3>

                <img class = "imagem"src="./images/funcao_arrey.png" alt="função">
                <h3>Divisão dos Dados: Utiliza a função explode para separar o nome do clube e os pontos, que estão unidos pelo caractere. O código também determina a posição do clube (baseado no índice do array) e aplica uma classe CSS ($zona) para formatar visualmente a linha da tabela conforme a posição.</h3>
            

                <center><a class="botao" href="equipe.php">Equipe</a></center>

            </div>
        </main>

    </body>

</html>