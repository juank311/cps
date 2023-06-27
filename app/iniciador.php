<?php
require_once('config/configurar.php');
require_once(RUTA_APP.'/librerias/mail/Exception.php');
require_once(RUTA_APP.'/librerias/mail/PHPMailer.php');
require_once(RUTA_APP.'/librerias/mail/SMTP.php');
//autoload 

use RUTA_APP\librerias\PHPMailer;
use RUTA_APP\librerias\Exception;
use RUTA_APP\librerias\SMTP;

spl_autoload_register(function($nombreClase){
    require_once('librerias/'.$nombreClase.'.php');
});
?>