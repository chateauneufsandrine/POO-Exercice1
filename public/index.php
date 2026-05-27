<?php
require_once "../src/Entities/Formule1.php";
// Exercice 1
// Dans un fichier PHP, créez une classe Formule1 avec une propriété privée speed qui est à 0 par défaut.
// Dans cette classe Formule1, créer une méthode drive() qui affiche "Vroom vroom à x km/h", x étant la valeur de la propriété speed.
// Créer une variable myFormule1 qui contient une nouvelle instance de la classe Formule1.
// Utiliser la méthode drive().

// Créer une méthode shiftGear() qui ajoute un nombre à l'attribut vitesse.

// Enchaîner les méthodes drive(), shiftGear() et encore drive(). Cette dernière fonction doit afficher un nombre supérieur pour montrer
//  le passage de vitesse.


$voiture = new Formule1(1000, 5);

var_dump($voiture);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $voiture->drive() ?></p>
    <?php  $voiture->shiftGear(50) ?>
    <p><?= $voiture->drive()  ?></p>
</body>

</html>