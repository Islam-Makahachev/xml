<?php
$chaine = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<films>
 <film>
 <titre>Alien</titre>
 <sortie>1979</sortie>
 <acteur>
    <nom>Alien</nom>
    <nom>Sigourney Weaver</nom>
 </acteur>
 </film>
 <film>
 <titre>Vertigo</titre>
 <sortie>1958</sortie>
 <acteur>
    <nom>Alfred Hitchcock</nom>
 </acteur>
 </film>
</films>
XML; 
$xml = new SimpleXMLElement($chaine);
foreach ($xml->film as $unFilm) {
 echo $unFilm->titre,PHP_EOL;
 echo $unFilm->sortie,PHP_EOL;
 foreach ($unFilm->acteur as $unActeur) {
 echo ' ', $unActeur->nom,PHP_EOL;
 }
}
?>