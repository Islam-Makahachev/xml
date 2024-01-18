<?php
$lesVoituresXML= simplexml_load_string('<lesVoitures/>');
$uneVoitureXML=$lesVoituresXML->addChild('voiture');
$uneVoitureXML->addChild('nom','Twingo');
$uneVoitureXML->addChild('marque','Renault');
$uneVoitureXML=$lesVoituresXML->addChild('voiture');
$uneVoitureXML->addChild('nom','r34 GTR');
$uneVoitureXML->addChild('marque','Nissan');
var_dump($lesVoituresXML->asXML()); 
?>