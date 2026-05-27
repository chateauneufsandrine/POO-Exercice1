<?php

// Exercice 1
// Dans un fichier PHP, créez une classe Formule1 avec une propriété privée speed 
// qui est à 0 par défaut.
// Dans cette classe Formule1, créer une méthode drive() qui affiche "Vroom vroom à x km/h", 
// x étant la valeur de la propriété speed.

// Créer une variable myFormule1 qui contient une nouvelle instance de la classe Formule1.
// Utiliser la méthode drive().

// Créer une méthode shiftGear() qui ajoute un nombre à l'attribut vitesse.

// Enchaîner les méthodes drive(), shiftGear() et encore drive(). Cette dernière fonction 
// doit afficher un nombre supérieur pour montrer le passage de vitesse.



class Formule1
{
    private int $speed ;
    private int $odometer;
    // kilometrage total

    public function __construct(int $odometer,int $speed = 0)
    {
        $this->speed = $speed;
        $this->odometer = $odometer;
    }

    // public function __construct(
    //     private int $speed = 0
    // )
    // {
        
    // }

    public function drive(): string
    {
        return "Vroom vroom à $this->speed km/h avec un kilométrage total de $this->odometer km";
    }
     public function shiftGear(int $nombre): int
    {
       $this->speed += $nombre;
        return  $this->speed;
    }
    // ajoute un nombre et retourne la nouvelle vitesse
}
?>