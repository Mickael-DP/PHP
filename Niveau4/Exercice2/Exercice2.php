<?php
class ville
{
	private $nom;
	private $departement;

	// c'est comme ça qu'on déclare le constructeur de la classe

	public function __construct($nom,$departement) 
	{
		$this->nom=$nom;
		$this->departement=$departement;
	}

	public function getinfo()
	{
		return "<p> La ville de $this->nom est dans le département: $this->departement";
	}
}

//Création d'objets
$ville1 = new ville("Nantes","Loire Atlantique");
$ville2 = new ville("Lyon", "Rhône");


echo $ville1->getinfo();
echo $ville2->getinfo();
?>
	
<!-- Le résultat affiché est :
La ville de Nantes est dans le département : Loire Atlantique
La ville de Lyon est dans le département : Rhône


Vous constaterez que l’utilisation d’un constructeur facilite la création d’objets et l’affectation de ses propriétés. -->