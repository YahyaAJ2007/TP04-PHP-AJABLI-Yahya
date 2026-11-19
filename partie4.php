<!-- Partie 4 -->
<?php
class Personne{
    public string $nom;
    public string $prenom;
    private string $dateNaissance;
    private string $villeNaissance;
    private string $cin;
    public function __construct(string $nom = "",string $prenom = "",string $dateNaissance = "",string $villeNaissance = "",string $cin = ""){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
        echo "Création " . __CLASS__ . PHP_EOL;
    }
    private function getAge() : int {
        $aujourdhui = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        return $dateNaissance->diff($aujourdhui)->y;
    }
    public function __toString() : string
    {
        return "$this->prenom $this->nom (".$this->getAge() ."ans)";   
    }
    public function __destruct(){
        echo "Détruire " . __CLASS__ ;
    }
}
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->nom . PHP_EOL;echo "<br>";
echo $p."<br>";