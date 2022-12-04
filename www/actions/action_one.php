<?php
/*
Les fichiers d'actions seront appelés sans passer par l'index (on pourrait aussi le faire mais dans un second temps).
Donc chaque fichier action doit aussi inclure init.php pour demarrer le systeme de session et se connecter a la $db
*/
require_once __DIR__ . '/../../php/init.php';

/*
Les fichiers d'actions seront utilisés pour receptionner des requetes venant de formulaires et de liens ou boutons
qui auront un effet sur nos données (CREATE(INSERT), UPDATE, DELETE)

En general on reserve la methode POST pour INSERT et UPDATE
Et on utilise GET pour DELETE
*/

/*
Il est important de toujours verifier les données que l'on recoit avant d'acceder a la BDD.
isset et !empty() seront vos meilleurs amis dans ces fichiers d'action.
Ensuite il vous faudra verifier la natures des données reçues avec les fonctions ctype_
Securiser certaines entrées utilisateur avec htmlspecialchars
*/

/*
Pour ce qui est des requetes SQL,
il vous sera interdit de concat les données dans les chaines de caracteres representants vos requetes SQL.
Obliger d'utiliser le systeme de PDO (avec les ? ou les variables nommées) avec ou sans bindParam
*/