<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>

    <?php 
        if (isset($_GET["erro"])) {
            $tipoDoErro = $_GET["erro"];
            
            if ($tipoDoErro == "login") {
                echo "Login ou senha inválidos. Tente novamente";
            } else if ($tipoDoErro == "autenticacao") {
                echo "Você precisa logar para acessar a home!";
            }

        }
    ?>

    <form action="logar.php" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id=""><br><br>
        
        <label for="senha">Senha</label>
        <input type="password" name="senha" id=""><br><br>

        <input type="submit" value="LOGAR">
    </form>
</body>
</html>