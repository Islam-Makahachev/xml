<?php
$chaine = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<voiture>
    <modele>twingo</modele>
    <marque>Renault</marque>
</voiture>
XML;

$xml = new SimpleXMLElement($chaine);
var_dump($xml);

echo $xml->modele, PHP_EOL;
echo $xml->marque, PHP_EOL;

$xml->addChild('moteur','essence');
echo $xml->moteur,PHP_EOL;

echo $xml->count(),PHP_EOL;


foreach ($xml->children() as $child){
    echo $child,PHP_EOL;
}

echo $xml->children()[0],PHP_EOL;
echo $xml->children()[1],PHP_EOL;
echo $xml->children()[2],PHP_EOL;

echo $xml->asXML();
?>