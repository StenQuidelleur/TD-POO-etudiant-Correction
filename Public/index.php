<?php

use Classes\Users\Student;
use Classes\Users\Professor;
use Classes\Connection;

require_once __DIR__ . '/../vendor/autoload.php';

/* Instancier un étudiant et un professeur. */
$etudiant = new Student("Dupont", "Jean", "1990-01-01", "123456");
$professeur = new Professor("Martin", "Luc", "1980-01-01", "Mathématiques");

/*
    Afficher la phrase: 
    Pour l'étudiant : 'Je suis un (type de user) qui se nomme (nom) (prénom) et j'ai (age).'
    Pour le professeur : 'Je suis un (type de user) de (spécialité) qui se nomme (nom) (prénom).'
*/
echo 'Je suis un ' . Student::TYPE_OF_USER . ' qui se nomme ' . $etudiant->getNom() . ' ' . $etudiant->getPrenom() . ' et j\'ai ' . $etudiant->getAge() . '. <br>';
echo 'Je suis un ' . Professor::TYPE_OF_USER . ' de ' . $professeur->getSpecialite() . ' qui se nomme ' . $professeur->getNom() . ' ' . $professeur->getPrenom() . '. <br>';

echo '<br>';

/*
    Appeler la methode login pour chacun des users et afficher :
    un retour non valide de leur connexion.
    un message leur indiquant les bons identifiants (findLogin).
    un retour valide de la connexion.
*/
echo Connection::login('DupontJean', '123456', $etudiant) . '<br>';
echo $etudiant->findLogin() . '<br>';
echo Connection::login('dupontjean', '123456', $etudiant) . '<br>';

echo '<br>';

echo Connection::login('MartinLucie', 'Mathématiques', $professeur) . '<br>';;
echo $professeur->findLogin() . '<br>';
echo Connection::login('Martin-Lucie', 'Mathématiques', $professeur);