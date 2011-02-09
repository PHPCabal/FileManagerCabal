<?php $timer_start = microtime( true ); ?>
<?php require_once( '../application/config.inc.php' ); ?>
<?php require_once( FMC_LIB_PATH . '/header.inc.php' ); ?>

        <div id="general">
            <div id="encabezado">
                <h1>FileManager Cabal</h1>
                <span>El manejador de archivos de PHPCabal</span>
            </div>

            <div id="navegacion">
<?php require_once( FMC_LIB_PATH . DIRECTORY_SEPARATOR . 'nav.inc.php' ); ?>
            </div>

            <div id="login">
<?php require_once( FMC_LIB_PATH . DIRECTORY_SEPARATOR . 'login.inc.php' ); ?>
            </div>

            <div id="contenido">
                <p>
                    Hola, mundo!
                </p>

                <div id="archivos">
                    <?php require_once( FMC_LIB_PATH . DIRECTORY_SEPARATOR . 'listing.inc.php' ); ?>
                </div>

            </div>

            <div id="mensajes">
<?php 

# definir mensajes
$mensajes = ( empty( $mensajes ) ) ? NULL :  imprimirErrores( $mensajes ); 

# imprimir mensajes
echo $mensajes;

?>
            </div>

<?php require_once( FMC_LIB_PATH . '/footer.inc.php' ); ?>
