<?php

// incluir funciones
require_once( FMC_LIB_PATH . DIRECTORY_SEPARATOR . 'main.inc.php');

$mensaje = array();

// iniciar sesión TODO: mover a un archivo de bootstrap
session_start();
 
if ( isset( $_POST['enviar'] ) && $_POST['enviar'] === 'Enviar' ) {

    // validar si nombre es string (alfanumérica)
    $usuario_saneado = filter_var( $_POST['usuario'], FILTER_SANITIZE_STRING );
         
    if ( !filter_var( $usuario_saneado, FILTER_VALIDATE_REGEXP, array( "options" => array( "regexp" => "#^([a-zA-Z0-9ñÑáéíóúÁÉÍÓÚüÜ]+$.*)#" ) ) ) ) {
        // mensaje
        $mensajes['error'][] = 'Tu usuario contiene caracteres no admitidos.';

        # return false;
    }
    
    // validar si contraseña es string (alfanumérica)
    $password_saneada = filter_var( $_POST['password'], FILTER_SANITIZE_STRING );
         
    if ( strlen( $password_saneada ) < 6 ) {
        // mensaje
        $mensajes['error'][] = 'Tu password no cumple con los requerimientos.';

        # return false;
    }

    // verificar si el usuario existe
    if ( verificarPassword( $usuario_saneado, $password_saneada ) ) {
        // poner información útil del usuario en la sesión
        $_SESSION['usuario'] = $usuario_saneado;
        $_SESSION['autenticado'] = true;
        
        // mensaje
        $mensajes['éxito'][] = "Bienvenido, {$usuario_saneado}.";

        # return true;
    } else {
        $mensajes['error'][] = 'No coincide la combinación de usuario y password. Inténtalo de nuevo.';

        # return false;
    }
} elseif ( isset( $_POST['logout'] ) && $_POST['logout'] === 'Logout' ) {
    // mensaje
    $mensajes['éxito'][] = "Tu sesión ha terminado, {$_SESSION['usuario']}. ¡Que tengas buen día!";
    
    unset( $_SESSION['autenticado'] );
    unset( $_SESSION['usuario'] );

    # return true;
}

if ( !empty( $_SESSION['usuario'] ) && $_SESSION['autenticado'] == true ) {
    require_once( FMC_FORM_PATH . DIRECTORY_SEPARATOR . 'logout.frm.php' );
} else {
    require_once( FMC_FORM_PATH . DIRECTORY_SEPARATOR . 'login.frm.php' );
}
