<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstname = "Martin";
        $avatar = "martin-kokes.jpg";
    ?>
    <h1>Výpis profilu</h1>
    <img src="<?php echo $avatar;?>" alt="Avatar uživatele">
    <ul>
        <li>Jméno: <?php echo $firstname; ?></li>
        <li>Další položky k výpisu</li>

    </ul>
</body>
</html>