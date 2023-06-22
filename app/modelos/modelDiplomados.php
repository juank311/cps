<?php

class modelDiplomados
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }


    public function add_certificado($datos)
    {

        #Inserta los nuevos registros a la base de datos 

        if ($datos['name'] && $datos['lastname'] && $datos['date'] && $datos['status'] && $datos['code']) {
            $this->db->query('INSERT INTO certificaciones (name, lastname, date, status, code) 
            VALUES (:name, :lastname, :date, :status, :code)');
            //vinculacion de datos
            $this->db->bind('name', $datos['name']);
            $this->db->bind('lastname', $datos['lastname']);
            $this->db->bind('date', $datos['date']);
            $this->db->bind('status', $datos['status']);
            $this->db->bind('code', $datos['code']);
            #ejecutar la consulta 

        } else {
            die('Algo salio mal en el modelo');
        }
        #ejecutar la consulta 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrarCertificaciones()
    {

        $this->db->query("SELECT * FROM certificaciones");

        $datos = $this->db->registros();

        return $datos;
    }

    public function borrarCertificacion($datos)
    {
        $this->db->query("DELETE FROM certificaciones WHERE id = :id");
        $this->db->bind(':id', $datos['id']);

        #ejecutar la consulta 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        };

    }
}
