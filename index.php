<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/header.inc.php' ); ?>

        <div id="general">
            <div id="encabezado">
                <h1>FileManager Cabal</h1>
                <span>El manejador de archivos de PHPCabal</span>
            </div>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/nav.inc.php' ); ?>

            <div id="contenido">
                <p>
                    Hola, mundo!
                </p>
            </div>

            <div id="pie">
                <p>
                    <span><a href="/acerca.php">acerca</a></span>
                    <span>|</span>
                    <span><a href="http://groups.google.com/group/PHPCabal">PHPCabal</a></span>
                    <span>|</span>
                    <span><a href="http://en.wikipedia.org/wiki/2010"><?php echo date( 'Y' ); ?></a></span>
                    <span>|</span>
                    <span><a href="http://www.gnu.org/licenses/gpl.html">GPLv3</a></span>
                </p>
            </div>
        </div>

<?php require_once( $_SERVER['DOCUMENT_ROOT'] . '/lib/footer.inc.php' ); ?>
