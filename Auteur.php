<?php
require_once "Livre.php";
class Auteur{
    private string $_nom;
    private string $_prenom;
    private DateTime $_age;
    private array $_livres;

    public function __construct(string $nom, string $prenom, DateTime $age){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
    }

    public function affAge(): void{
        $today = new DateTime();
        echo "L'auteur à aujourd'hui " . $this->_age->diff($today)->y . " ans.<br>" . "<br><br>";
    }
    public function ajouterLivre(Livre $livre): void{
        $this->_livres[] = $livre;
    }
    public function __toString(): string{
		$str = "Livre de " . $this->_prenom . " " . $this->_nom . "<br>";
        foreach($this->_livres as $livre){
            $str .= $livre->getTitre() . " (" . $livre->getAnnee() .") : " . $livre->getNbPage() . " pages / " . $livre->getPrix()  . "€<br>";
        }
        return $str . "<br><br>";
	}

    public function getNom(): string {
        return $this->_nom;
    }
    public function getPrenom(): string {
        return $this->_prenom;
    }
    public function getLivre(): array {
        return $this->_livres;
    }    

    public function setNom(string $nom): void {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom): void {
        $this->_prenom = $prenom;
    }
    public function setLivre(array $livres): void {
        $this->_livres = $livres;
    }
}
?>

<!-- définition 
 encapsulation : regroupage des donnés et méthodes au seins d'une même unité
 classe : 
 objet  : conteneur 
 
-->