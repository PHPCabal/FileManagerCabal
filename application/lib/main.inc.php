<?php

function verificarPassword( $usuario, $password ) {
    // verificar si no están vacíos
    if ( NULL !== $usuario && NULL !== $password ) {
	    // Sanidad
#	    mysql_real_escape_string( $usuario );
#	    mysql_real_escape_string( $password );

        // buscar usuario y su password de la DB 
        $query = "SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = md5('$password');";

	    // realizar la query
	    $resultado = ejecutarQuery( $query );
	    
	    // regresa true si existe y false si no
	    if ( $resultado ) {
	        return true;
	    } else {
	        return false;
	    }
    }
}

function ejecutarQuery( $query ) {
    
    // iniciar conexión
    $link = mysqli_init();

    // verificar conexión y configurar los parámetros
    if ( !$link ) {
        die( 'La inicialización ha fallado' );
    } elseif ( !mysqli_options( $link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0' ) ) {
        die( 'Fallo de configuración' );
    } elseif ( !mysqli_options( $link, MYSQLI_OPT_CONNECT_TIMEOUT, 5 ) ) {
        die( 'Fallo de configuración' );
    }
    
    // llevar acabo conexión
    if ( !mysqli_real_connect( $link, FMC_DB_HOST, FMC_DB_USER, FMC_DB_PASSWORD, FMC_DB_DATABASE ) ) {   
	    die( 'Error de conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error() );
    }
    
    // asegurar el character set
    if ( !mysqli_set_charset( $link,  FMC_DB_CHARSET ) ) {
        die( 'No se pudo configurar el character set de la conexión a: ' . FMC_DB_CHARSET . mysqli_connect_errno() . ') ' . mysqli_connect_error() );
    }
    
    // llevar acabo query
    if ( $resultado = mysqli_query( $link, $query ) ) {
        while ( $registro = mysqli_fetch_assoc( $resultado ) ) {
	        $datos[] = $registro;
	    }
    } else {
        die( 'La query falló' );
    }

    // limpiar el resultado
    mysqli_free_result( $resultado );

    // regresar los datos
    if ( !empty( $datos ) ) {
        # code...
        return $datos;
    } else {
        return false;
    }
}

?>
