<?php

//
// Cambie bajo su propio riesgo
//

// PATH

// path de la aplicación
define( 'FMC_APP_PATH', realpath( __DIR__ . DIRECTORY_SEPARATOR . '..' ) );

// path de url

// definir url parcial
$url = substr( realpath( FMC_APP_PATH . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'public' ), strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) );

// evitar el //
if ( '/' == $url ) {
    $url = NULL;
}

// definir la constante
define( 'FMC_URL', $url );

// path de la librería
define( 'FMC_LIB_PATH', FMC_APP_PATH . DIRECTORY_SEPARATOR . 'lib' );

// path de las formas
define( 'FMC_FORM_PATH', FMC_APP_PATH . DIRECTORY_SEPARATOR . 'formas' );

// path de los archivos 
define( 'FMC_FILES_PATH', FMC_APP_PATH . DIRECTORY_SEPARATOR . 'files' );

// Sessiones
session_save_path( FMC_APP_PATH . DIRECTORY_SEPARATOR . 'sessions' );
session_cache_expire( 86400 / 4 );
