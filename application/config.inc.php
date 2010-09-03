<?php

//
// Configuración general
//

// PATH

// path de la aplicación
define( 'FMC_APP_PATH', __DIR__);

// path de url

// definir url parcial
$url = substr( realpath( __DIR__ . '/../public' ), strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) );

if ( '/' == $url ) {
    $url = NULL;
}

define( 'FMC_URL', $url );

require_once( FMC_APP_PATH . '/lib/config_system.inc.php' );

?>
