<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <style>
        /* Corpo da página */
        body.edit-body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Cinza claro */
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container principal */
        .edit-container {
            background-color: #ffffff;
            border: 1px solid #d3d3d3;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Cabeçalho */
        .edit-container h2 {
            margin-top: 0;
            color: #007BFF; /* Azul */
        }

        /* Estilos do formulário */
        .edit-form {
            display: flex;
            flex-direction: column;
        }

        .edit-form label {
            margin-top: 10px;
            font-weight: bold;
        }

        .edit-form input,
        .edit-form select {
            margin-top: 5px;
            padding: 8px;
            border: 1px solid #d3d3d3;
            border-radius: 4px;
        }

        /* Botão de salvar */
        .btn {
            background-color: #007BFF; /* Azul */
            color: #ffffff;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3; /* Azul mais escuro */
        }

        /* Link de voltar */
        .back-link {
            display: inline-block;
            margin-top: 15px;
            color: #FF0000; /* Vermelho */
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id'] ?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user['nome'] ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
                <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
            </select>

            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>

</html>
