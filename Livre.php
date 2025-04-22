<?php 
require_once "Auteur.php";
class Livre{


	private string $_titre;
	private int $_nbPage;
	private int $_annee;
	private float $_prix;
	private Auteur $_auteur;


	public function __construct(string $titre, Auteur $auteur, int $nbPage, int $annee, float $prix){
		$this->_titre = $titre;
		$this->_auteur = $auteur;
		$this->_nbPage = $nbPage;
		$this->_annee = $annee;
		$this->_prix = $prix;
		$auteur->ajouterLivre($this);
	}

	public function __toString(): string{
		return $this->_titre . " (" . $this->_annee . ") : " . $this->_nbPage . " pages / " . $this->_prix . "€" ;
	}


	public function getTitre(): string {
		return $this->_titre;
	}
	public function getNbPage(): int {
		return $this->_nbPage;
	}
	public function getAnnee(): int {
		return $this->_annee;
	}
	public function getPrix(): float {
		return $this->_prix;
	}

	
	public function setTitre(string $titre): void {
		$this->_titre = $titre;
	}
	public function setNbPage(int $nbPage): void {
		$this->_nbPage = $nbPage;
	}
	public function setAnnee(int $annee): void {
		$this->_annee = $annee;
	}
	public function setPrix(int $prix): void {
		$this->_prix = $prix;
	}
	
}
?>