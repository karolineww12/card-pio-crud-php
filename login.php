<?php

if (isset($_POST["email"]) && isset($_POST["password"])) {
    require("./data/conexao.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

   if ($usuario && $password == $usuario["senha"]) {
        header("Location: /admin.php");
   }else{
        header("Location: /login.php?error=1");
   }

   var_dump($usuario);

   exit();

}

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Epic Food</title>
</head>
<body>

<nav>
    <h1>Epic Food</h1>
</nav>


<main>
    <h1>Área de Login:</h1>

    <form method="POST">
        <div class="input-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
        </div>
        <div class="input-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Senha" required>
        </div>
        <input type="submit" value="Entrar" name="Entrar" class="btn">
    
        <span class= "error">
            <?php
            if(isset($_GET["error"])){
                echo "E-mail ou senha inválidos";
            }
            ?>
        </span>

        
    </form>
</main>

</body>
</html>