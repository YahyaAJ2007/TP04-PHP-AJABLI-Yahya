<!-- Partie 2 -->
<?php
class Voiture {

    public function __construct(Public string $couleur = "Blanche",Public int $vitesse = 0) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

// $v1 = new Voiture();echo "<br>";            // valeurs par défaut
// echo "<hr>";
// $v2 = new Voiture("Rouge", 50);echo "<br>";     // valeurs personnalisées
// echo "<hr>";
// $v1->afficher();echo "<br>";
// $v2->afficher();echo "<br>";
// $v3 = new Voiture("Noire");echo "<br>";  
// echo "<hr>";
// $v3->afficher();echo "<br>";
// $v4 = new Voiture(120);
// $v4->afficher();echo "<br>";
$maVoiture = new Voiture("Blanche");echo "<br>";
$a = new Voiture("Rouge");echo "<br>";
$b = new Voiture("Jaune");echo "<br>";
// unset($maVoiture);    // appelle __destruct()
echo "Fin du script." . PHP_EOL;
?>