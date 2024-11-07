<?php include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM TBL_tarefas WHERE Tar_codigo = $id");

    if ($result->num_rows > 0) {
        $tarefa = $result->fetch_assoc();
    } else {
        echo "Tarefa não encontrada.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $setor = $_POST['setor'];
    $prioridade = $_POST['prioridade'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "UPDATE TBL_tarefas SET Tar_setor='$setor', Tar_prioridade='$prioridade', Tar_descrição='$descricao', Tar_status='$status' WHERE Tar_codigo=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<form method="post" action="">
    Setor: <input type="text" name="setor" value="<?php echo $tarefa['Tar_setor']; ?>" required><br>
    Prioridade: <input type="text" name="prioridade" value="<?php echo $tarefa['Tar_prioridade']; ?>" required><br>
    Descrição: <input type="text" name="descricao" value="<?php echo $tarefa['Tar_descrição']; ?>" required><br>
    Status: <input type="text" name="status" value="<?php echo $tarefa['Tar_status']; ?>" required><br>
    <button type="submit">Atualizar</button>
</form>
