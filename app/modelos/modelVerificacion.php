<?php

class modelVerificacion
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function search_certificaciones($datos)
    {
        $this->db->query("SELECT * FROM certificaciones WHERE code = :code");
        $this->db->bind(':code', $datos['code']);
        if ($datos = $this->db->registros()) {
            return $datos;
        }else {
            $datos = 1;
            return $datos;
        }
    }
}
