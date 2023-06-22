<?php

use PHPMailer\PHPMailer\PHPMailer;

class Diplomados extends Controlador
{
    public $modelDiplomados;

    public function __construct()
    {
        $this->modelDiplomados  = $this->modelo('modelDiplomados');
    }

    public function pedagogia_infantil()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {

            $nombre = $_POST['name'];
            $correo = $_POST['email'];
            $celular = $_POST['tel'];
            $mensaje = $_POST['msj'];
            $numeroAleatorio = rand(1, 100);

            $destinatario = 'corposabana.edu@gmail.com';

            $asunto = 'Nueva Solicitud de Contacto';
            $contenido = "Nombre: $nombre\nCelular: $celular\nCorreo: $correo\nMensaje: $mensaje";

            $oMail = new PHPMailer();
            $oMail->isSMTP();
            $oMail->Host = "smtp.gmail.com";
            $oMail->Port = 587;
            $oMail->SMTPSecure = "tls";
            $oMail->SMTPAuth = true;
            $oMail->Username = "corposabana.edu@gmail.com";
            $oMail->Password = "iczgopepnkqlemak";
            $oMail->setFrom("corposabana.edu@gmail.com", "Corporacion Pedagogica de la Sabana");
            $oMail->addAddress("corposabana.edu@gmail.com");
            $oMail->Subject = "Solictud de informacion " . $numeroAleatorio;
            $oMail->msgHTML($contenido);

            if (!$oMail->send()) {
                echo $oMail->ErrorInfo;
            }
        }
        $this->vista('diplomados/pedagogia_infantil');
    }
    //Enviar solicitud de informacion por correo electronico
    public function psicopedagogia_infantil()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {

            $nombre = $_POST['name'];
            $correo = $_POST['email'];
            $celular = $_POST['tel'];
            $mensaje = $_POST['msj'];
            $numeroAleatorio = rand(1, 100);

            $destinatario = 'corposabana.edu@gmail.com';

            $asunto = 'Nueva Solicitud de Contacto';
            $contenido = "Nombre: $nombre\nCelular: $celular\nCorreo: $correo\nMensaje: $mensaje";

            $oMail = new PHPMailer();
            $oMail->isSMTP();
            $oMail->Host = "smtp.gmail.com";
            $oMail->Port = 587;
            $oMail->SMTPSecure = "tls";
            $oMail->SMTPAuth = true;
            $oMail->Username = "corposabana.edu@gmail.com";
            $oMail->Password = "iczgopepnkqlemak";
            $oMail->setFrom("corposabana.edu@gmail.com", "Corporacion Pedagogica de la Sabana");
            $oMail->addAddress("corposabana.edu@gmail.com");
            $oMail->Subject = "Solictud de informacion " . $numeroAleatorio;
            $oMail->msgHTML($contenido);

            if (!$oMail->send()) {
                echo $oMail->ErrorInfo;
            }
        }
        $this->vista('diplomados/psicopedagogia_infantil');
    }
    //Registra los nuevos certificados

    public function cc34943890()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar_registro'])) {
            $datos =
                [
                    'name' => trim($_POST['name']),
                    'lastname' => trim($_POST['lastname']),
                    'date' => trim($_POST['date']),
                    'code' => trim($_POST['code']),
                    'status' => trim($_POST['status'])
                ];
            if ($this->modelDiplomados->add_certificado($datos)) {

                header('Location: ' . RUTA_URL . '/diplomados/cc34943890');
                exit();
            } else {
                die('Algo salio mal');
            }
        } else {


            $this->vista('diplomados/cc34943890', $datos = [
                "mostrarCertificaciones" => $this->modelDiplomados->mostrarCertificaciones()
            ]);
            //print_r($datos);
        }
    }
    //BORRAR LOS CERTIFICADOS 
    public function borrar($id)
    {

        if (isset($id)) {
            $datos = ['id' => $id];
            if ($this->modelDiplomados->borrarCertificacion($datos)) {
                
                header('Location: ' . RUTA_URL . '/diplomados/cc34943890');
                
                exit();
            }
            
        }
    }
}
