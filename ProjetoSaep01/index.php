<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela Principal</title>
    <style>
        /* Estilos para o corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container principal */
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Título */
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Parágrafo de descrição */
        p {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
        }

        /* Estilos dos botões */
        .button {
            display: inline-block;
            width: 80%; /* Ajuste para a largura desejada */
            padding: 15px;
            margin: 10px 0;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Sistema de Gerenciamento</h1>
        <p>Escolha uma das opções abaixo para navegar:</p>

        <!-- Botões de Navegação Centralizados -->
        <a href="cadastro_usuarios.php" class="button">Cadastro de Usuários</a>
        <a href="cadastro_tarefas.php" class="button">Cadastro de Tarefas</a>
        <a href="gerenciar_tarefas.php" class="button">Gerenciar Tarefas</a>
    </div>
</body>
</html>
