<?php include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM TBL_tarefas WHERE Tar_codigo = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa excluída com sucesso!";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>
