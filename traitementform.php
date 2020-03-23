<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo "Votre nom : ".$nom."<br>";
        echo "Votre prénom : ".$prenom."<br>";
    ?>
</body>
</html>