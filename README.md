# TD - POO


## Description

TD sur la programmation orientée objet en PHP -> manipuler les concepts de la POO

========================

## Get Started :

1. Clone the repo from Github.
2. Run `composer install`.
3. Run the internal PHP webserver with `php -S localhost:8000 -t public/`.
4. If you use (MAMP, WAMP, XAMP...) run it in public folder.

========================

## Structure :

Créez une classe abstraite "AbstactUser" avec les propriétés suivantes : nom, prénom et date de naissance (format: 1990-01-01). 
Implémenter une méthode constructeur qui prend en paramètres les valeurs initiales de ces propriétés.
Implémenter également une méthode abstraite findLogin().


Créer une interface "AuthenticateInterface" avec une méthode getIdentification() qui retourne l'identifiant du user sous forme d'une chaîne de caractères et une méthode getPassword() qui retourne le mot de passe du user sous forme d'une chaîne de caractères.


Dans un repertoire Users créez deux classes : "Student" et "Professor". (qui héritent de "AbstactUser" et qui implémente "AuthenticateInterface")
La classe Student aura une propriété supplémentaire "numéro étudiant" 
La classe Professor aura une propriété supplémentaire "spécialité". 
Initialise également une constante qui identifie le type de d'utilisateur (Etudiant/Professeur).

Ajouter des méthodes de getter et de setter pour chaque propriété de chaque classe. 

Pour les étudiants, l'identifiant sera leur nom et prénom concaténé (sans espace et en minuscule) et le mot de passe sera leur numéro étudiant. 
Pour les professeurs, l'identifiant sera leur nom et prénom (séparés d'un tiret et en majuscule) et leur mot de passe leur spécialité.

La méthode findLogin() retournera une chaine de charactère:
- Pour l'étudiant: 'Pour se connecter, l'étudiant doit utiliser son nom et prénom (en minuscule, sans espace) pour Id: [SON IDENTIFIANT] et son numéro étudiant pour mot de passe: [SON MOT DE PASSE].'
- Pour le professeur : 'Pour se connecter, le professeur doit utiliser son nom et prénom (en majuscule, séparé d'un "-") pour Id: [SON IDENTIFIANT] et sa spécialité pour mot de passe: [SON MOT DE PASSE].'

Pour la classe Student : ajouter une méthode formatAge() privée qui formate la date de naissance en un entier qui correspond à l'année (1990-01-01 -> 1990) et qui clacule l'age de l'étudiant.
Appeler cette méthode dans une méthode publique getAge() qui retoune l'age. (ex: '25ans')


Créer une classe "Connection" et implémenter une méthode static login() qui prendra en paramètre l' "id", le "mot de passe" et le "user" ($user représente la classe Student ou Professor), elle retournera si l'utilisateur est connecté ou non. ('Vous êtes connecté' ou 'Votre id ou mot de passe n'est pas correcte')


========================

## Application :

Instancier un étudiant et un professeur.

- Afficher la phrase: 
    Pour l'étudiant : 'Je suis un (type de user) qui se nomme (nom) (prénom) et j'ai (age).'
    Pour le professeur : 'Je suis un (type de user) de (spécialité) qui se nomme (nom) (prénom).'

- Appeler la methode login pour chacun des users et afficher :
    un retour non valide de leur connexion.
    un message leur indiquant les bons identifiants (findLogin).
    un retour valide de la connexion.