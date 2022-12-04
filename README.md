# Starter Project PHP

# Dossiers www et php

Le dossier `www` sera le dossier servi par votre serveur web (Apache 2) avec MAMP, XAMPP ou WAMP

Le dossier `php` sera le dossier contenant le core de votre site internet, se seront des fichiers innaccessibles depuis internet.
Ils seront uniquement accessibles via d'autres fichiers (via des `include` ou `require`) ceux se trouvant dans `www`.

## www/actions

Contiendra dans un premier temps, tous les fichiers qui recevront des formulaires ou qui devront uniquement faire quelque chose avec une donnée, ils n'afficheront rien ! et redirigeront toujours vers une page après avoir terminé.

## php/sql

Contiendra des fichiers, qui contiendront des fonctions inclusent dans d'autres fichiers. Uniquement des fonctions, ces fichiers ne doivent rien faire d'autres.

Ces fonctions contiendront des requetes SQL et les executeront.

## php/utils

Contiendra quelques utilitaires, des fonctions qui sont susceptibles d'etre utilisées dans vos pages et actions

## php/views

Contiendra 2 dossiers

### php/views/pages

Qui seront a chaque fois le coeur de vos pages, c'est `www/index.php` qui s'en servira pour afficher le contenu adéquat a l'utilisateur.

### php/views/partials

Qui contiendra des morceaux de pages, réutilisés sur vos pages.
Par exemple:
- `menu.php` - contiendra le menu (horizontal ou vertical) en fonction du design de vos pages
- `header.php` - contiendra le début de votre document HTML, avec la balise `<head>`
- `footer.php` - contiendra la balise fermante `</html>` et probablement votre beau footer et les balises de scripts s'il y en a.

Vous serez ainsi sur d'avoir une seule source valable pour ces éléments, on ne veut les voir nul part ailleurs !
