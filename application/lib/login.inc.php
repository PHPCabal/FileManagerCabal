<?php

// incluir funciones
require_once( FMC_LIB_PATH . '/main.inc.php');

$mensaje = '';

if ( isset( $_POST['enviar'] ) && $_POST['enviar'] === 'Enviar' ) {

    // validar si nombre es string (alfanumérica)
    $usuario_saneado = filter_var( $_POST['usuario'], FILTER_SANITIZE_STRING );
         
    if ( filter_var( $usuario_saneado, FILTER_VALIDATE_REGEXP, array( "options" => array( "regexp" => "#^([a-zA-Z0-9ñÑáéíóúÁÉÍÓÚüÜ]+$.*)#" ) ) ) ) {
        
    } else {
        $mensaje = 'Tu usuario contiene caracteres no admitidos. Corrige e intenta de nuevo.';
    }
    
    // validar si contraseña es string (alfanumérica)
    $password_saneada = filter_var( $_POST['password'], FILTER_SANITIZE_STRING );
         
    if ( filter_var( $password_saneada, FILTER_VALIDATE_REGEXP, array( "options" => array( "regexp" => "#^([a-zA-Z0-9]+$.*)#" ) ) ) ) {
        
    } else {
        $mensaje = 'Tu password contiene caracteres no admitidos. Corrige e intenta de nuevo.';
    }

    // verificar si el usuario existe
    if ( verificarPassword( $usuario_saneado, $password_saneada ) ) {
        $mensaje = 'Si existes';
        
        // iniciar sesión
        session_start();
        
        // poner información útil del usuario en la sesión
        $_SESSION['usuario'] = $usuario_saneado;
        $_SESSION['autenticado'] = true;
    } else {
        $mensaje = 'No existes';
    }
}

require_once( FMC_FORM_PATH . '/login.frm.php' );

echo $mensaje;
?>
