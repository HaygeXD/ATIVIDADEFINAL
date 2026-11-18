
<?php

include "conexao.php";

if(isset($_POST['login'])){

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro
    WHERE login = '$login'
    AND senha = '$senha'";

    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){

    header("Location: insert.php");
    exit();

    }
    else{

        echo "Login ou senha incorretos!";

    }

}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>



<h2>Login</h2>

<form action="#" method="post">

    <label>Login:</label>
    <br>
    <input type="text" name="login" required>
    <br>

    <label>Senha:</label>
    <br>
    <input type="password" name="senha" required>
    <br><br>

    <input type="submit" name="entrar" value="Entrar">

</form>
</body>
</html>
