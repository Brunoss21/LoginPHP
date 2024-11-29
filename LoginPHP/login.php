<?php
session_start(); // Inicia a sessão

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    echo "<script>alert('Por favor, preencha todos os campos!');</script>";
    echo "<script>location.href='index.php';</script>";
    exit;
}

include('config.php'); 

$usuario = $conn->real_escape_string($_POST["usuario"]); // Protege contra SQL Injection
$senha = $_POST["senha"]; 


$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'";
$res = $conn->query($sql) or die($conn->error);

$qtd = $res->num_rows;
if ($qtd > 0) {
    $row = $res->fetch_object(); 

    // Verifica se a senha fornecida corresponde à senha criptografada
    if (password_verify($senha, $row->senha)) {

        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;

        header("Location: dashboard.php");
        exit;
    } else {

        echo "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
        echo "<script>location.href='index.php';</script>";
        exit;
    }
} else {

    echo "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
    echo "<script>location.href='index.php';</script>";
    exit;
}
?>
