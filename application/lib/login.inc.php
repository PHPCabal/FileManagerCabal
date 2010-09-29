<?php

$mensaje = '';

if ( isset($_POST['enviar']) && $_POST['enviar'] === 'Enviar') {

    // validar si nombre es string
    $usuario_saneado = filter_var( $_POST['usuario'], FILTER_SANITIZE_STRING );
    if( filter_var( $usuario_saneado, FILTER_VALIDATE_REGEXP, array( "options" => array( "regexp" => "#^([a-zA-Z0-9]+$.*)#" ) ) ) ) {
        $mensaje = 'Simón; todo jaló a la perfect: ' . $usuario_saneado;
    } else {
        $mensaje = 'Estás jodido...' . $usuario_saneado;
    }
}

require_once( FMC_FORM_PATH . '/login.frm.php' );

echo $mensaje;
?>
