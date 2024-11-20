<?php
session_start();
session_unset(); // Limpa todas as variáveis de sessão
session_destroy(); // Destrói a sessão
?>
<?php
header("Location: login.php");
exit();
?>
