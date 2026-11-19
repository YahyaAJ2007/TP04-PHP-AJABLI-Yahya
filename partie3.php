<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";
    public function __set(string $name, mixed $value): void {
        if(strlen($value) < 2 || trim($value) === ""){
            throw new InvalidArgumentException("Nom invalide !!");
        }
        $this->$name = $value;
    }

    public function __get(string $name): mixed {
        // TODO : retourner la valeur si la propriété existe, sinon null
        if(property_exists($this,$name)){
            return $this->$name;
        }else{
            return null;
        }
    }

    public function __isset(string $name): bool {
        return property_exists($this,$name);
    }

    public function __unset(string $name): void {
        $this->$name = "";
    }
}
$p = new Personne();
$p->nom = "Hachimi";             // → __set
echo $p->nom . PHP_EOL;         // → __get
var_dump(isset($p->nom));       // → __isset
unset($p->nom);                 // → __unset
var_dump(isset($p->nom));
$p->telephone = "0600000000";