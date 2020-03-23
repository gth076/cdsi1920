<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>coronavirus Formulaire d'inscription</h1>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if( ! empty($_POST['nom']) && ! empty($_POST['prenom']) ){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                echo "Votre nom : ".$nom."<br>";
                echo "Votre prénom : ".$prenom."<br>";
            }
            else{
                $erreur = "Vous devez entrer le nom et le prénom<br>";
            }
        }
    ?>

    <form method="POST" action="">
        <?php
            if( isset($erreur)){
                echo $erreur;
            }
        ?>
            <label for="nom">Nom : </label>
            <input type="text" placeholder="Entrez votre nom" name="nom"><br>
            <label for="prenom">Prénom : </label>
            <input type="text" placeholder="Entrez votre prénom" name="prenom"><br>
            <input type="submit" value="Envoyer">


    </form>

    
</body>
</html>
