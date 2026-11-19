<!-- Partie 1 -->
<?php
class Personne{
    public string $nom;
    public string $prenom;
    private string $dateNaissance;
    private string $villeNaissance;
    protected string $cin;
    // public function __construct(
    //     string $nom,
    //     string $prenom,
    //     string $dateNaissance,
    //     string $villeNaissance,
    //     string $cin
    // ) {
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    //     $this->dateNaissance = $dateNaissance;
    //     $this->villeNaissance = $villeNaissance;
    //     $this->cin = $cin;
    // }
    public function __construct(string $nom = "",string $prenom = "",string $dateNaissance = "",string $villeNaissance = "",string $cin = ""){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
        echo "Création " . __CLASS__ . PHP_EOL;
    }
    public function getName() : string {
        return "Nom et Prenom : $this->prenom $this->nom" . PHP_EOL;
    }
    private function getAge(){
        $aujourdhui = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        return $dateNaissance->diff($aujourdhui)->y;
    }
    public function Age() : string {
        return "Age  : ". $this->getAge() . "ans";
    }
    public function __destruct(){
        echo "Détruire " . __CLASS__ ;
    }
}
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->getName() . PHP_EOL;echo "<br>"; // à vous de prédire le résultat
echo $p->nom . PHP_EOL;echo "<br>";
echo $p->Age() . PHP_EOL;echo "<br>";
// echo $p->cin;
// echo $p->dateNaissance;
// echo $p->getAge();
?>