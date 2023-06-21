<?php

use PHPMailer\PHPMailer\PHPMailer;

class Diplomados extends Controlador
{
   /*  public $diplomadosModelo;

    public function __construct()
    {
        $this->diplomadosModelo  = $this->modelo('modelDiplomados');
    }  */

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
            $oMail->Host="smtp.gmail.com";
            $oMail->Port=587;
            $oMail->SMTPSecure="tls";
            $oMail->SMTPAuth=true;
            $oMail->Username="corposabana.edu@gmail.com";
            $oMail->Password="iczgopepnkqlemak";
            $oMail->setFrom("corposabana.edu@gmail.com", "Corporacion Pedagogica de la Sabana");
            $oMail->addAddress("corposabana.edu@gmail.com");
            $oMail->Subject="Solictud de informacion ". $numeroAleatorio;
            $oMail->msgHTML($contenido);

                if (!$oMail->send()) {
                    echo $oMail->ErrorInfo;
                }
        }
       $this->vista('diplomados/pedagogia_infantil'); 
    }  

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
            $oMail->Host="smtp.gmail.com";
            $oMail->Port=587;
            $oMail->SMTPSecure="tls";
            $oMail->SMTPAuth=true;
            $oMail->Username="corposabana.edu@gmail.com";
            $oMail->Password="iczgopepnkqlemak";
            $oMail->setFrom("corposabana.edu@gmail.com", "Corporacion Pedagogica de la Sabana");
            $oMail->addAddress("corposabana.edu@gmail.com");
            $oMail->Subject="Solictud de informacion ". $numeroAleatorio;
            $oMail->msgHTML($contenido);

                if (!$oMail->send()) {
                    echo $oMail->ErrorInfo;
                }
        }
       $this->vista('diplomados/psicopedagogia_infantil'); 
    }  

}

