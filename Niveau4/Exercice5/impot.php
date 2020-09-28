<?php

class impot {

    public $nom;
    public $revenu;

    public function __construct ($nom, $revenu){
        $this->nom = $nom;
        $this->revenu = $revenu;

    }

    public function calculImpot() {

        if($this->revenu <= 15000){
            $impot = ($this->revenu*15)/100;
        }else {
            $impot = ($this->revenu*20)/100;
        }

        return $impot;
    }

    public function afficheImpot(){
        echo "<p> Monsieur $this->nom, votre impôt est de " . $this->calculImpot() . " euros </p>";
    }

    
}
    

?>