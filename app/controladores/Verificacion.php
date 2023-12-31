<?php

class Verificacion extends Controlador
{
    public $verificacionModelo;

    public function __construct()
    {
        $this->verificacionModelo  = $this->modelo('modelVerificacion');
    }

    public function index()
    {
        //obtener los certificados
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviar'])) {

            $datos = [
                'code' => $_POST['code'],
            ];
            if (isset($_POST['code'])) {
                
                $this->vista('verificacion', $datos = [
                    'dataCertificacion' => $this->verificacionModelo->search_certificaciones($datos)
                ]);
                //print_r($datos);
                exit();
            } else {
                die('Algo salio mal');
            }

        } else {
            $this->vista('verificacion');
        }
    }
}
