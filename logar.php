<?php

session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($login == "leonardo" && $senha == 123) {
    $_SESSION["login"] = $login;
    header("location: home.php");
    die();
} else {
    header("location: login.php?erro=login");
    die();
}