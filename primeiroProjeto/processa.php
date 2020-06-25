<?php 

// SERVER

session_start();

include_once("conecta.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome,<br>";
// echo "Email: $email<br>";


$result_usuario = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
$result = mysqli_query($connexao, $result_usuario);

echo "$result";

if(mysqli_insert_id($connexao)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso!</p>";
   // header("Location: sucesso.php");
   header("Location: index.php");
}
else {
      $_SESSION['msg'] = "<p style='color:red;'>Ocorreu um erro</p>";
    //header("Location: erro.php");
       header("Location: index.php");
}