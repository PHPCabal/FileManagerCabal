<?php

echo '<p>Hola, soy el listing. Ahí les voy:</p>';

if ($handle = opendir( FMC_FILES_PATH ) ) {
    while ( false !== ( $file = readdir( $handle ) ) ) {
        if ( $file[0] != '.' ) {
            $files[] = $file;
        }
    }
    closedir($handle);
}

print_r( $files );
