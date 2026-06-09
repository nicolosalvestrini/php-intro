<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, World!</h1>

    <?php
    var_dump($_GET);
    ?>

    <form action="saluto.php" method="get">
        <label for="nominativo">Nome:</label>
        <input type="text" id="nominativo" name="nominativo">
        <button type="submit">Saluta</button>
    </form>
</body>
</html>