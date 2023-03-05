<?php

namespace Classes;

use Classes\Users\Student;
use Classes\Users\Professor;

class Connection
{
    /**
     * @param string $id
     * @param string $password
     * @param Student|Professor $user
     * 
     * @return string
     */
    public static function login(string $id, string $password, Student|Professor $user): string
    {
        return $id === $user->getIdentification() && $password === $user->getPassword() ? 'Vous êtes connecté' : 'Votre id ou mot de passe n\'est pas correcte';
    }
}