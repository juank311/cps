<?php

class Welcomes extends Controlador
{
    public $welcomeModelo;

    public function __construct()
    {
        $this->welcomeModelo  = $this->modelo('Welcome');
    } 

    public function index()
    {
        $this->vista('Welcome');
        
    }  
}
