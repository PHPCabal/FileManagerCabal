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

if ( !empty($files) ) {
    foreach ( $files as $file ) {
        echo <<<EOF

<div class="archivo">
    <span class="archivo">{$file}</span>
    <span class="descargar">descargar</span>
    <span class="borrar">borrar</span>
</div>

EOF;
    }
} else {
    echo <<<EOF
<div class="archivo">
    <span class="archivo">Por lo pronto, no hay archivos.</span>
</div>
EOF;
}
