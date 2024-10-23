<?php
session_start(); // Inicia a sessão, caso não tenha sido iniciada

// Verifica se o array $_SESSION e a chave 'perfil' estão definidos
if (isset($_SESSION['perfil'])):
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        
        <!-- CSS inline -->
        <style>
            /* Definições gerais */
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2; /* Cor de fundo cinza claro */
                color: #333;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 1000px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
                color: #0056b3; /* Azul escuro */
                margin-bottom: 30px;
            }

            /* Tabela estilizada */
            .styled-table {
                width: 100%;
                border-collapse: collapse;
                font-size: 1em;
                text-align: left;
                margin-bottom: 20px;
            }

            .styled-table thead tr {
                background-color: #0056b3; /* Azul escuro */
                color: #ffffff;
                text-align: left;
                font-weight: bold;
            }

            .styled-table th, 
            .styled-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #ddd;
            }

            .styled-table tbody tr {
                background-color: #f9f9f9; /* Cinza claro */
                transition: background-color 0.3s ease;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #e6e6e6; /* Cinza mais claro para linhas pares */
            }

            .styled-table tbody tr:hover {
                background-color: #d0e7ff; /* Azul claro ao passar o mouse */
            }

            /* Botões */
            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin-right: 10px;
                background-color: #0056b3; /* Azul escuro */
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }

            .btn:hover {
                background-color: #003d80; /* Azul mais escuro */
            }

            /* Botão de excluir (vermelho) */
            .btn-delete {
                background-color: #d9534f; /* Vermelho */
            }

            .btn-delete:hover {
                background-color: #c9302c; /* Vermelho mais escuro */
            }

            /* Responsividade */
            @media (max-width: 768px) {
                .container {
                    padding: 10px;
                }

                .styled-table th, .styled-table td {
                    padding: 8px 10px;
                }

                .btn {
                    padding: 8px 15px;
                }
            }
        </style>
    </head>

    <body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <!-- Permitir que admin e gestor editem -->
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                    <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn">Editar</a>
                                <?php endif; ?>

                                <!-- Permitir que apenas admin exclua -->
                                <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                    <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>

<?php else: ?>
    <!-- Se $_SESSION['perfil'] não estiver definido, exibe uma mensagem -->
    <p>Erro: Você não tem permissão para visualizar esta página.</p>
<?php endif; ?>
