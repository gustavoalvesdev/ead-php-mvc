<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma EAD - Home</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>
<body>
    
    <div class="topo">
        
        <a href="<?= BASE_URL ?>login/logout">
            <div>
                Sair
            </div>
        </a>

        <div class="topousuario"><?= $templateData['info']->getNome(); ?></div>
        
    </div>
    <!-- topo -->