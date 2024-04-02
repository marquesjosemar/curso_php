<?php

    if(isset($_FILES)) {
        print_r($_FILES);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem" id="">
            <input type="submit" value="enviar">
        </div>
    </form>
</body>
</html>
