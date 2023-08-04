<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma EAD - Login</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login.css" />
</head>
<body>
    <div class="overflow"></div>
    <div class="container">
        <form method="POST">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="E-mail" /><br /><br />

            <input type="password" name="senha" placeholder="Senha" /><br /><br />

            <input type="submit" value="Entrar" />
        </form>
    </div>
    
</body>
</html>
