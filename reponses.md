**0.3** `$v1` et `$v2`ne partagent pas la même valeur car ils sont deux objets distincts créés à partir de la même classe Voiture, et Chaque objet possède ses propres attributs.

### Expérimentation
Fatal error: Uncaught Error: Cannot access private property Personne::$cin in C:\xampp\htdocs\TP04-PHP-AJABLI-Yahya\partie1.php:54 Stack trace: #0 {main} thrown in C:\xampp\htdocs\TP04-PHP-AJABLI-Yahya\partie1.php on line 54. `Impossible d'accéder à une propriété privée`.

### Questions
**1.1** Ligne provoque erreur : `echo $p->cin;` `echo $p->dateNaissance;` car les deux attributs sont privés, et aussi `echo $p->getAge();` Car c'est une méthode privée, `private` contre les accès directs depuis l'extérieur de la classe.

**1.2** Les dangereux de laisser `cin` en `public` : Rupture de l’encapsulation, La protection sur l'identifiant ne subsiste pas.

**1.3** `getAge()` est utile, car elle peut être appelée à l'intérieur d'une méthode publique de la même classe, même si elle est déclarée private.

**1.4** Le comportement depuis l'extérieur ne change pas, car les propriétés `private` et `protected` ne sont pas accessibles directement depuis l'extérieur de la classe.

Avantage `promotion de propriétés` simplifie le constructeur,

**2.2.a** Aprés l'exécution du programme, il affiche une ERREUR `Cannot redeclare Personne::__construct() in C:\xampp\htdocs\TP04-PHP-AJABLI-Yahya\partie1.php` car en peut pas avoir deux constructeurs dans la même classe.

**2.3.a** L'ordre d'affichage est l'ordre de l'appel des méthode.
**2.3.b** il devient `Voiture Blanche créée. il change d'ordre.
                      Fin du script.
                      Voiture Blanche détruite.`
**2.3.c** Tous les objets crées sont détruite en même temps : `Voiture Jaune détruite. Voiture Rouge détruite. Voiture Blanche détruite.` la destruction de l'objet est reportée jusqu'à la fin du script.
**2.4.c** Voiture Blanche créée.
          Voiture Rouge créée.
          Voiture Jaune créée.
Fin du script. Voiture Jaune détruite. Voiture Rouge détruite. Voiture Blanche détruite.
les objets est detruit dans le même temps directement à la fin du script.

<!-- partie 3 -->
**3.1** Résultat : 
Hachimi
bool(true)
bool(true)
Propriété telephone inexistante
**3.2**
- Sans __set : PHP génère une erreur (Error), car nom est private et inaccessible depuis l'extérieur.
- Avec __set : PHP appelle automatiquement __set("nom", "X"), qui permet de contrôler l'affectation.
**3.3** `__set` autorise toutes les modifications sans contrôle, il faut fait la validation pour éviter casser l'encapsulation.

**4.1** Parce que getAge() est appelée depuis __toString(), qui appartient à la même class Personne.

**4.2** il affiche erreur : `__toString(): Return type must be string when declared` , car la methode magique `__toString()` est toujours de type de retour string.

**4.3** getName() retourne uniquement le nom d'un objet, tandis que __toString() retourne une représentation textuelle complète de l'objet.