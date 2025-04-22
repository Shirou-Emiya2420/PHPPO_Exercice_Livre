<?php
require_once "Livre.php";
class Auteur{
    private string $_nom;
    private string $_prenom;
    private DateTime $_age;
    private array $_livre;

    

    public function getNom(): string {
        return $this->_nom;
    }
    public function getPrenom(): string {
        return $this->_prenom;
    }
    public function getLivre(): array {
        return $this->_livre;
    }    

    public function setNom(string $nom): void {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom): void {
        $this->_prenom = $prenom;
    }
    public function setLivre(array $livres): void {
        $this->_livre = $livres;
    }
}
?>

<!-- définition encapsulation classe objet  -->