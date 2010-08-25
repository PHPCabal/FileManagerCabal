<?php

$mensaje = '';

if ( isset($_POST['enviar']) && $_POST['enviar'] === 'Enviar') {

    // validar si nombre es string
    if ( is_numeric($_POST['nombre'])) {
        $mensaje = "Oh, tu teniendou nombre de número, tonto!!!";
    }
}

require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/formas/usuario_nuevo.frm.php' );

echo $mensaje;
?>
