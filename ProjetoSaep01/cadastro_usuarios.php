<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastro de Usuários</h2>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO TBL_usuarios (Usu_nome, Usu_email) VALUES ('$nome', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
</body>
</html>
