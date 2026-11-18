<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <style>
            body{
                font-family: Arial;
                background: #b6b6b6;
                padding: 20px;
            }
            form{
                background-color:white;
                padding:20px;
                border-radius: 20px;
            }
            .grupo-input{
                margin-bottom: 15px;
            }
            .grupo-input label{
                display: block;
                margin-bottom: 5px;
            }
            .grupo-input label{
                width: 100%;
                padding: 10px;
                border-radius: 5px;
            }
            .botao{
                background-color: #19e10ba7;
                color: white;
                padding: 10px, 15px;
                border-radius:5px;
                cursor: pointer;
            }
            .botao:hover{
                background-color: #074403a7;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            th,td{
                border: 2px, solid, #ddd;
                padding: 10px;
                text-align:left;
            }
            th{
                background-color:green;
                color: white;
            }
            tr:nth-child(even){
                background-color: #6b7b66
            }
        </style>
    </head>
    <body>
        <ul>
            <li><a href="insert.php">CREATE</a></li>
            <li><a href="select.php">READ</a></li>
            <li><a href="update.php">UPDATE</a></li>
            <li><a href="delete.php">DELETE</a></li>
        </ul>
        <h1>Adicionar Aluno</h1>
        <form action="#" method="post">
            <div class="grupo-input">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="grupo-input">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" required>
            </div>

                <label for="login">Login:</label>
                <input type="text" name="login" required>
            </div>
            <div class="grupo-input">
                <label for="senha">Senha:</label>
                <input type="number" name="senha" required>
            </div>
            <button type="submit" class="botao">Adicionar</button>
        </form>
    </body>
</html>
<?php
include 'conexao.php';
if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $senha=$_POST['senha'];

    $sql= "INSERT into cadastro(nome, email, login, senha) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nome, $idade);
    $stmt->execute();
    $stmt->close();
}
$conn->close();
?>
