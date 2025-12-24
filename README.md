# TP Symfony - formulaires

## Description
Le but de ce projet Symfony est implémenté une page produit avec un formulaire d'ajout au panier, utilisant les Form Types de Symfony et l'intégration de Bootstrap 5.3.

## Fonctionnalités
- Page produit avec affichage des détails (nom, prix, description, caractéristiques)
- Formulaire Symfony pour sélectionner la quantité et la couleur
- Messages de confirmation
- Interface responsive avec Bootstrap 5.3

## Les commandes utilisée
-l'entité produit: 
*php bin/console make:entity Product (avec les champs : name;price;description;brand;color;connectivity;batteryLife;imageUrl)
-formulaire CartType :
*php bin/console make:form CartType
-controller ProductController
*php bin/console make:controller ProductController
-les migrations
php bin/console make:migration
php bin/console doctrine:migrations:migrate -n
-voir les routes
php bin/console debug:router
-Vider le cache
php bin/console cache:clear

[BAKHTI Ouissal]

TP réalisé dans le cadre du cours Symfony


