<?php

//
// Cambie bajo su propio riesgo
//

// PATH

// path de la aplicación
define( 'FMC_APP_PATH', realpath( __DIR__ . '/..' ) );

// path de url

// definir url parcial
$url = substr( realpath( FMC_APP_PATH . '/../public' ), strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) );

// evitar el //
if ( '/' == $url ) {
    $url = NULL;
}

// definir la constante
define( 'FMC_URL', $url );

// path de la librería
define( 'FMC_LIB_PATH', FMC_APP_PATH . '/lib');

// path de las formas
define( 'FMC_FORM_PATH', FMC_APP_PATH . '/formas');

// Sessiones
session_save_path( FMC_APP_PATH . '/sessions' );
session_cache_expire( 86400 / 4 );

?>
