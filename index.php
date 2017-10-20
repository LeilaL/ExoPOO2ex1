<?php

class Clio {
  protected $portes;
  protected $couleur;
  protected $prix;


  public function __construct($portes,$couleur,$prix){
 $this->setPortes($portes);
 $this->setCouleur($couleur);
 $this->setPrix($prix);
  }

  // SETTERS
public function setPortes(int $portes){
  $this->portes=$portes;
}

public function setCouleur($couleur){
  $this->couleur=$couleur;
}

public function setPrix(int $prix){
  $this->prix=$prix;
}

  // GETTERS
  public function getPortes(){
    return $this->portes;
  }

public function getCouleur(){
return $this->couleur;
}

public function getPrix(){
return $this->prix;
}

public function getClio(){
  echo $this->portes. " " .$this->couleur. " " .$this->prix. "<br>";
}

}

$voiture1 =  new Clio(5, "grise", 3000);
$voiture2 = new Clio(3, "noir", 1700);
$voiture3 = new Clio(5, "doré", 2400);

$voiture1->getClio();
$voiture2->getClio();
$voiture3->getClio();
 ?>
