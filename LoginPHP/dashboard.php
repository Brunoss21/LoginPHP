<?php
session_start();
include('config.php');

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if (!isset($_SESSION["usuario"])) {
    echo "<script>location.href='index.php';</script>";
    exit;
}


$sql = "SELECT id, usuario, nome, tipo FROM usuarios";
$res = $conn->query($sql);

if (!$res) {
    die("Erro na consulta SQL: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-ligth bg-ligth">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Sistema Bruns</a>
            <?php
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center">Bem-vindo, <?php echo $_SESSION["nome"]; ?></h1>
        <h2 class="mt-4">Usuários cadastrados</h2>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["usuario"]; ?></td>
                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["tipo"]; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
