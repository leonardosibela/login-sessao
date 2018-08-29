<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header("location: login.php?erro=autenticacao");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <?php
        echo "Seja bem vindo " . $_SESSION['login'];
    ?>

    <form action="logout.php" method="POST">
        <input type="submit" value="SAIR">
    </form>

</body>
</html>