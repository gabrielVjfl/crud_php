<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    <br>

    <?php
   if(isset($_SESSION['msg'])) {
       echo $_SESSION['msg'];
       unset ($_SESSION['msg']); // vai destruir a variavel global
   }

    ?>
    <form method="POST" action="processa.php">

        <label>Nome Completo : </label><input type="text" placeholder="Digite o seu nome" name="nome">
        <br>
        <br>
        <label>Email : </label><input type="email" placeholder="Digite o seu email" name="email">
<br>
<br>
        <button type="submit">ENVIAR</button>

        </form>
</body>
</html>
