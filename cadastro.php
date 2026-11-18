<?php

include "conexao.php";

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadastro (nome, email, login, senha)
    VALUES ('$nome', '$email', '$login', '$senha')";

    if($conn->query($sql)){

        echo "Cadastro realizado com sucesso!";

    }
    else{

        echo "Erro ao cadastrar!";

    }

}

?>

<h2>Cadastro</h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="login" placeholder="Login" required>
    <input type="password" name="senha" placeholder="Senha" required>

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>