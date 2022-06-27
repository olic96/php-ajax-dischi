<?php
    require __DIR__ . '/server/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="container">
                <img src="./img/spotify-logo.png">
            </div>
        </header>
    </div>
    <div class="dischi-container container">
        <?php foreach ($dischi as $disco) { ?>
            <div class="disco">
                <img src="<?= $disco["poster"] ?>">
                <h3><?= $disco["title"] ?></h3>
                <span class="author"><?= $disco["author"] ?></span>
                <span class="year"><?= $disco["year"] ?></span>
            </div>
        <?php } ?>
    </div>
</body>
</html>