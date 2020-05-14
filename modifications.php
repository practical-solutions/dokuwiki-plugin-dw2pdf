<?php
/* ---------------------------------------------------------------------

Gero Gothe, Version 1.1 / 10.07.2019

Änderungen:
-----------
- Umbenennen dieser Datei in modifications.php


Versionen
---------
1.0 - Funktion zur Seitennummerierung 

------------------------------------------------------------------------ */


/* 
Funktion zur Kapitellnummerierung

Parameter:
----------
$content: HTML mit Überschriften, generiert von dw2pdf
$start: Nummer des Hauptkapitels, mit der die Zählung beginnen soll
$begin_level: Zeigt Kapitelnummern nur einschließlich bis zu dieser Ebene an


Ergebnis:
---------
Liefert eine Array mit der alten und neuen Überschrift, damit diese mittels str_replace ausgetauscht werden können.

Funktionsweise:
---------------
Einbindung in der action.php von DokuWiki vor Übergabe der Seiten an mPDF.
*/
function number_headings( $content, $start=0, $begin_level = 1 ) {
    
    # Erkennung der Überschriften mittels RegEx (Konstruiert mit https://regex101.com/)
    preg_match_all( '/\<h([1-6])\>(\<bookmark.*\>\<a.*\>)(.*)\<\/a\><\/h[1-6]>/i', $content, $kapitel);

    $awn = array(); # Container für die Rückgabe
    
    $counter = array($start,0,0,0,0); # Kapitelzähler
    
    if( !empty( $kapitel[1] ) && !empty( $kapitel[2] ) ){

        $alt          = $kapitel[0]; # Ursprünglicher Tag - zum späteren Ersetzen
        $levels       = $kapitel[1]; # Überschrifteneben
        $tags         = $kapitel[2]; # Vor der eigentlichen Überschrift vorangehender Tag
        $ueberschrift = $kapitel[3]; # Eigentliche Überschrift
                
        foreach ($tags as $i => $tag) {
			
			$level = intval($levels[$i]);
			
			if ($level >= $begin_level) {
			
				$l = $level; # Merken der ürsprünglichen Ebene
			
				$counter[$level-1]++;
				
				# Entfernung von Kapitellnummern, die oberhalb von $begin_level liegen
				for ($c=0;$c<count($counter);$c++) {if ($c+1<$begin_level) unset ($counter[$c]);}
				
				# Entfernung von Kapitellnummern, die unterhalb der aktuellen Ebene liegen
				while ($level<5) {
					$level++;
					unset($counter[$level-1]);
				}
				
				$chapter = implode('.',$counter);
				$new = "<h$l>$tag$chapter. ".$ueberschrift[$i]."</a></h$l>";
				
			} else {$new = $alt[$i];}
			
			
            $awn[] = array( 'old'=> $alt[$i], 'new' => $new );
        }
    }

    return $awn;
}

?>
