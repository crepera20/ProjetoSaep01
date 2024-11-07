<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Tarefas</title>
</head>
<body>
    <h2>Gerenciar Tarefas</h2>

    <!-- Listar Tarefas -->
    <h3>Lista de Tarefas</h3>
    <?php
    $result = $conn->query("SELECT * FROM TBL_tarefas");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["Tar_codigo"] . " - Setor: " . $row["Tar_setor"] . " - Descrição: " . $row["Tar_descrição"];
            echo " [<a href='editar_tarefa.php?id=" . $row["Tar_codigo"] . "'>Editar</a>]";
            echo " [<a href='excluir_tarefa.php?id=" . $row["Tar_codigo"] . "'>Excluir</a>]<br>";
        }
    } else {
        echo "Nenhuma tarefa encontrada.";
    }
    ?>
</body>
</html>
