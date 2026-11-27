<h1>Classe Animal</h1>
<?php
class Animal {
    public function manger(): void {
        echo "Je mange : " . PHP_EOL;
    }
}

class Chien extends Animal {
    public function aboyer(): void {
        echo "Wouf !" . PHP_EOL;
    }
}

class Chat extends Animal {
    public function miauler(){
        echo "Miaou !" . PHP_EOL;
    }
}
echo "<h5>Chien :</h5>";
$c = new Chien();
$c->manger();  
$c->aboyer();
echo "<h5>Chat :</h5>";
$cat = new Chat();
$cat->manger();
$cat->miauler();
// $c->miauler();
echo "<h1>Class Personne</h1>";
class Personne {
    public function __construct(protected string $nom) {}

    public function presentation(): string {
        return "Je suis " . $this->nom;
    }
}

class Etudiant extends Personne {
    public function __construct(string $nom, private string $filiere) {
        // parent::__construct($nom);   // appelle le constructeur du parent
    }

    public function presentation(): string {
        return parent::presentation() . ", étudiant en " . $this->filiere;
    }
}

$e = new Etudiant("Ahmed", "Informatique");
echo $e->presentation() . PHP_EOL;

echo "<h1>Classe Base</h1>";
class Base {
    final public function afficher(): void {
        echo "Méthode finale" . PHP_EOL;
    }
}

final class Outil {
    public const VERSION = "1.0";
}

class Produit {
    public function __construct(public readonly string $reference) {}
}
class Fille extends Base{
    public function affiche(): void{
        $this->afficher();
    }
}
class SousOutil extends Outil {

}
$p = new Produit("REF-001");
echo $p->reference . PHP_EOL;