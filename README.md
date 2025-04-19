# 📘 Projet PHP - Gestion de Bibliothèque

Ce projet met en œuvre la programmation orientée objet en PHP autour d’une classe `Livre`. Il permet de créer des objets représentant des livres, les stocker automatiquement, et d’afficher les ouvrages d’un auteur donné.

---

## ✨ Fonctionnalités

- Classe `Livre` avec :
  - Titre, nombre de pages, année, prix, auteur (nom/prénom)
  - Méthode magique `__toString()` pour l’affichage formaté
  - Propriété statique pour stocker tous les livres créés
- Méthode `affBiblio()` :
  - Affiche les livres d’un auteur donné
  - Recherche basée sur un tableau `["nom" => ..., "prenom" => ...]`

---

## 🖼️ Exemple d’utilisation

```php
$l1 = new Livre("Ca", "King", "Stephen", 1138, 1986, 20);
$l2 = new Livre("Simetierre", "King", "Stephen", 374, 1983, 15);

Livre::affBiblio(["nom" => "King", "prenom" => "Stephen"]);
```

---

## 🎨 Style CSS

Un fichier `style.css` est fourni pour une présentation simple et claire de la bibliographie.

---

## 📂 Structure

```
.
├── index.php
├── Livre.php
└── style.css
```

---

## ✅ Objectifs pédagogiques

- Comprendre les bases de la POO en PHP
- Utiliser des propriétés et méthodes statiques
- Travailler avec des objets et tableaux associatifs
- Relier PHP et HTML avec un peu de style CSS