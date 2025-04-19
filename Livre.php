<?php 
class Livre{


	private string $_titre;
	private int $_nbPage;
	private int $_annee;
	private int $_prix;
	private array $_auteur;

	private static array $_bibliotheque = [];

	public function __construct(string $titre, string $nom, string $prenom, int $nbPage, int $annee, int $prix){
		$this->_titre = $titre;
		$this->_auteur = [
			"nom" => $nom,
			"prenom" => $prenom
		];
		$this->_nbPage = $nbPage;
		$this->_annee = $annee;
		$this->_prix = $prix;
		self::$_bibliotheque[] = $this;
	}

	public function __toString(): string{
		return $this->_titre . " (" . $this->_annee . ") : " . $this->_nbPage . " pages / " . $this->_prix . "€" ;
	}
	public static function afficherBibliographie(array $auteur){
		echo "<h2>Livres de " . $auteur["prenom"] . " " . $auteur["nom"] . "</h2><br><br><div class='biblio'>";
		foreach(self::$_bibliotheque as $livre){
			if($livre->_auteur["nom"] === $auteur["nom"] && $livre->_auteur["prenom"] === $auteur["prenom"]){
				echo $livre . "<br>";
			}
		}
		echo "</div>";
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
	public function getPrix(): int {
		return $this->_prix;
	}
	public function getAuteur(): array {
		return $this->_auteur;
	}
	public function getNomAuteur(): string {
		return $this->_auteur["nom"];
	}
	public function getPrenomAuteur(): string {
		return $this->_auteur["prenom"];
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
	public function setAuteur(array $auteur): void {
		$this->_auteur = $auteur;
	}
	public function setNomAuteur(string $nom): void {
		$this->_auteur["nom"] = $nom;
	}
	public function setPrenomAuteur(string $prenom): void {
		$this->_auteur["prenom"] = $prenom;
	}
	
}
?>