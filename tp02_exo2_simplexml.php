<?php
$chaine = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<lesVoiture>
<voiture>
    <modele>twingo</modele>
    <marque>Renault</marque>
    <moteur>Essence</moteur>
    <annee>2016</annee>
    <kms>25000</kms>
</voiture>
<voiture>
    <modele>C1</modele>
    <marque>Citroen</marque>
    <moteur>Diesel</moteur>
    <annee>2014</annee>
    <kms>110000</kms>
</voiture>
</lesVoiture>
XML;

$xml = new SimpleXMLElement($chaine);
var_dump($xml);

echo $xml->count(),PHP_EOL;


foreach ($xml->children() as $child){
    echo $child->modele,' ';
    echo $child->annee,' ';
    echo $child->moteur,' ';
    echo $child->kms,PHP_EOL;
}

echo $xml->asXML();
?>