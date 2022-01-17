<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo 158</title>
</head>
<body>

<form action="/script.php" method="post">
    <div>
        <label for="x">x</label>
        <input id="x" type="number" name="x">
    </div>
    <div>
        <label for="y">y</label>
        <input id="y" type="number" name="y">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>

</body>
</html>