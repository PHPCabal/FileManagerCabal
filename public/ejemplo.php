<?php
$links = <<<XML
<?xml version='1.0' standalone='yes'?>
<links>
    <link>
        <nombre>link 1</nombre>
        <url>http://google.com/</url>
        <titulo>Buscador chafón</titulo>
    </link>
    <link>
        <nombre>link 2</nombre>
        <url>http://yahoo.com/</url>
        <titulo>Buscador más chafón</titulo>
    </link>
    <link>
        <nombre>link 3</nombre>
        <url>http://cabal.mx/</url>
        <titulo>A.C. de piratones</titulo>
    </link>
    <link>
        <nombre>link 4</nombre>
        <url>http://linux.com/</url>
        <titulo>Software gratis</titulo>
    </link>
</links>
XML;

$xml = new SimpleXMLElement($links);

foreach( $xml->link as $val => $obj) {
   echo "<a href='$obj->url' title='$obj->titulo'>$obj->nombre</a><br />";
};
