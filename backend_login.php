<?php 
    session_start();
?>
<?php
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    if ($nome === "Adm" && $email === "adm@gmail.com" &&   $senha === "adm11" ) {
      
        $_SESSION["login"] = "s"; //true 
        $_SESSION["nome"] = $nome;
        $_SESSION["erro"] = "";
       
        header( "Location: index.php");
        exit();
      
    } else {

        $_SESSION["erro"]  = "Nome, email ou senha incorretos.";
        header("Location: login.php"); // Redireciona de volta ao login
        exit();
    }
?>
