<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Container principal */
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Cabeçalho */
        h1 {
            color: #1e90ff;
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Botões */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #1e90ff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #1c86e0;
        }

        /* Área de mensagem */
        p {
            color: #666;
            margin: 10px 0;
        }
    </style>
</head>
 
<body class="<?= $_SESSION['perfil']?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']?></h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']?>.</p>
        <?php if($_SESSION['perfil'] == 'admin'):?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
 <?php elseif($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
 <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>