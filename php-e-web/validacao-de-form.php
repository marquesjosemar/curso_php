<?php

    $validacoes = [];

    if(count($_POST) > 0 ) {
        if (($_POST['nome']) === "") {
            $validacoes = "Por favor, preencha o nome de usuario";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php if(count($validacoes)): ?>
            <ul>
                <?php foreach($validacoes as $validacao): ?>
                    <li> <?= $validacao ?></li>
                <?php endforeach; ?>
            </ul>
        <form action="validacao-de-form.php" method="post">
            <input type="text" name="nome" placeholder="digite seu nome">
            <input type="text" name="email" placeholder="digite seu email">
            <input type="password" name="senha" placeholder="digite sua senha">
            <input type="password" name="confirmacao" placeholder="confirme sua senha">

            <input type="submit" value="enviar">
        </form>
    </body>

</html>
<?php endif; ?>