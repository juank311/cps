<?php

class Diplomados extends Controlador
{
   /*  public $diplomadosModelo;

    public function __construct()
    {
        $this->diplomadosModelo  = $this->modelo('modelDiplomados');
    }  */

    public function primera_infancia()
    {
        $this->vista('diplomados/primera_infancia');
        
    }  
}

