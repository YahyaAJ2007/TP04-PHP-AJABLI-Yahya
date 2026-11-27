<h1>Partie 5 : </h1>
<?php
class Utilisateur{
    public string $nom;
    public int $age;
    private string $motDePasse;
    public function __construct(string $nom,int $age,string $motDePasse) {
        $this->nom = $nom;
        $this->age = $age;
        $this->motDePasse = $motDePasse;
    } 
    // public function __serialize(): array
    // {
    //     return[
    //         'nom' => $this->nom,
    //         'age' => $this->age
    //     ]; 
    // }
    public function __unserialize(array $data): void
    {
        $this->nom = $data['nom'];
        $this->age = $data['age'];
        $this->motDePasse = "";
    }
    public function getmotDePasse(){
        return $this->motDePasse;
    }
}
$u = new Utilisateur("Alice", 25, "secret123");
$serialize = serialize($u);
echo "Serialize : $serialize" . PHP_EOL ."<br>";
$restaure = unserialize($serialize);
var_dump($restaure);echo "<br>";
var_dump($restaure->getmotDePasse());
?>