<?php require_once( '../application/config.inc.php' ); ?>
<?php require_once( FMC_LIB_PATH . '/header.inc.php' ); ?>

        <div id="general">
            <div id="encabezado">
                <h1>FileManager Cabal</h1>
                <span>El manejador de archivos de PHPCabal</span>
            </div>

            <div id="navegacion">
<?php require_once( FMC_LIB_PATH . '/nav.inc.php' ); ?>
            </div>

            <div id="login">
<?php require_once( FMC_FORM_PATH . '/login.frm.php' ); ?>
            </div>

            <div id="contenido">
                <p>
                    Hola, mundo!
                </p>
            </div>

<?php require_once( FMC_LIB_PATH . '/footer.inc.php' ); ?>
