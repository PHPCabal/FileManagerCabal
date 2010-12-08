<?php 
    // leer archivo XML y ponerlo en una variable
    $xmlFile = FMC_APP_PATH . DIRECTORY_SEPARATOR . 'nav.xml';
    $fp = fopen( $xmlFile, 'r' );
    $navXML = fread( $fp, filesize($xmlFile) );
    fclose( $fp );

    // procesar el XML
    $xml = new SimpleXMLElement($navXML);
    $links = '';

    foreach ($xml->link as $link) {
        $links .= "<li><a href='" . FMC_URL . "{$link->url}' title='{$link->title}'>{$link->label}</a></li>\n";
    }
?>
                <ul id="nav">
<?php echo $links; ?>
                </ul>
