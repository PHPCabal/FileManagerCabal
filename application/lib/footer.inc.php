            <div id="pie">
                <p>
                    <span><a href="<?php echo FMC_URL; ?>/README.rst">acerca</a></span>
                    <span>|</span>
                    <span><a href="http://groups.google.com/group/PHPCabal">PHPCabal</a></span>
                    <span>|</span>
                    <span><a href="http://en.wikipedia.org/wiki/2010"><?php echo date( 'Y' ); ?></a></span>
                    <span>|</span>
                    <span><a href="http://www.gnu.org/licenses/gpl.html">GPLv3</a></span>

                    <span>|</span>
                    <span>timer: <?php printf( "%0.4f", microtime( true ) - $timer_start ); ?></span>
                </p>
            </div>
        </div>
    </body>
</html>
