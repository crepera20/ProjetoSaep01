<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Tarefas</title>
</head>
<body>
    <h2>Cadastro de Tarefas</h2>
    <form method="post" action="">
        Setor: <input type="text" name="setor" required><br>
        Prioridade: <input type="text" name="prioridade" required><br>
        Descrição: <input type="text" name="descricao" required><br>
        Status: <input type="text" name="status" required><br>
        Código do Usuário: <input type="number" name="codigo_usuario" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $setor = $_POST['setor'];
        $prioridade = $_POST['prioridade'];
        $descricao = $_POST['descricao'];
        $status = $_POST['status'];
        $codigo_usuario = $_POST['codigo_usuario'];

        $sql = "INSERT INTO TBL_tarefas (Tar_setor, Tar_prioridade, Tar_descrição, Tar_status, Codigo_usuario) VALUES ('$setor', '$prioridade', '$descricao', '$status', '$codigo_usuario')";

        if ($conn->query($sql) === TRUE) {
            echo "Tarefa cadastrada com sucesso!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
</body>
</html>
