<?php
/*
Le fichier index.php va gerer toutes nos pages, on va donc y faire un Routeur de requete.
le nom de la page doit etre envoyer en parametre d'url (recuperable avec $_GET) 
on va inclure le fichier php correspondant a la page demandée.

Ce qui est sympa avec cette technique c'est qu'on doit inclure une seule fois notre fichier init.php (ici) et non sur toutes les pages.
*/
require_once __DIR__ . '/../php/init.php';
// maintenant notre systeme de session est start et nous sommes connecté a la DB (utiliisez la variable $db) !