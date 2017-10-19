<?php

class Clio {
  protected $portes;
  protected $couleur;
  protected $prix;

  // SETTERS
public function setPortes($portes){
  $this->portes=$portes;
}

public function setCouleur($couleur){
  $this->couleur=$couleur;
}

public function setPrix($prix){
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


}
 ?>
