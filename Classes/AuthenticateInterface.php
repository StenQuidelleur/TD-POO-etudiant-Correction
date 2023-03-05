<?php

namespace Classes;

interface AuthenticateInterface 
{
    /**
     * @return string
     */
    public function getIdentification(): string;
    
    /**
     * @return string
     */
    public function getPassword(): string;
}