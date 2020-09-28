<?php
class ville
{
	public $nom;
	public $departement;

	public function getinfo()
	{
		return "<p> La ville est $this->nom est dans le departement: $this->departement </p>"; // réfléchir à ce que cette méthode doit renvoyer
	}
}

//Création d'objets

// on créé une première ville
$ville1 = new ville(); // on appelle le constructeur de classe
$ville1->nom="Nantes"; // on lui donne son nom
$ville1->departement="Loire Atlantique";

$ville2 = new ville();
$ville2->nom="Lyon";
$ville2->departement="Rhône";
echo $ville1->getinfo();
echo $ville2->getinfo();
?>



<!-- Le résultat affiché attendu est :
La ville de Nantes est dans le département : Loire Atlantique
La ville de Lyon est dans le département : Rhône -->
