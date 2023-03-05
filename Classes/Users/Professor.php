<?php 

namespace Classes\Users;

use Classes\AbstractUser;
use Classes\AuthenticateInterface;

class Professor extends AbstractUser implements AuthenticateInterface
{
    const TYPE_OF_USER = 'Professeur';
    
    /**
     * @var string
     */
    protected string $specialite;

    /**
     * @param string $nom
     * @param string $prenom
     * @param string $dateNaissance
     * @param string $specialite
     */
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $specialite) {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->specialite = $specialite;
    }

    /**
     * @return string
     */
    public function getSpecialite(): string
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     * 
     * @return void
     */
    public function setSpecialite(string $specialite): void
    {
        $this->specialite = $specialite;
    }

    /**
     * @return string
     */
    public function findLogin(): string 
    {
        return 'Pour se connecter, le professeur doit utiliser son nom et prénom (en majuscule, séparé d\'un "-") pour Id: ' . $this->getIdentification() . ' et sa spécialité pour mot de passe: ' . $this->getPassword();
    }

    /**
     * @return string
     */
    public function getIdentification(): string
    {
        return strtoupper($this->nom . '-' . $this->prenom);
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->specialite;
    }
}