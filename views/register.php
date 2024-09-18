<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
    <div>
 
        <h2> Cadastro de Usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
 
            <label for="nome">Email</label>
            <input type="email" name="email" id="email" required>
 
            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" required>
 
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admion</option>
                <option value="gestor">Gestr</option>
                <option value="colaborador">Colaborador</option>
            </select>
 
            <button type="submit">Cadastrar</button>
 
        </form>
 
        <a href="">Voltar ao Login</a>
    </div>
</body>
</html>