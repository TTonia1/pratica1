<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    $name = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];
    $sql = "INSERT INTO cliente (nome, email, telefone) Values ('$nome' , '$email' , '$telefone')";
    if($conn -> query($sql) === true){
        echo"Novo registro adiocionado";
    }else{
        echo"Erro". $slq ."<br>".$conn -> error;
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <p>Cadastro de clientes</p>
        <form>
            <label for="name">Nome<input type="text" name="nome"></label>
            <label for="email">email<input type="email" name="email"></label>
            <label for="telefone">telefone<input type="text" name="telefone"></label>
            <input type="submit" value="Eviar">
        </form>
    </div>
    <div>
        <a href="chamados.php"><button>Gerenciamento de chamados</button></a>
    </div>
</body>
</html>
