<?php
    require __DIR__ . '/server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($dischi as $disco) { ?>
        <img src="<?= $disco["poster"] ?>">
        <h2><?= $disco["title"] ?></h2>
        <h3><?= $disco["author"] ?></h3>
        <span><?= $disco["genre"] ?></span>
        <small><?= $disco["year"] ?></small>
        <hr>
    <?php } ?>
</body>
</html>