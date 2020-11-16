# dw2pdf - Modifizierte Fassung

Individuelle Fassung des dw2pdf-Plugins, welches mit dem orginal abgeglichen wird.

Aktuell mit folgenden Zusatzfunktionen:

* Coverseiten werden automatisch eingefügt (wenn eine Seite "cover" heißt, wird sie automatisch als Deckblatt verwendet)
* Nummerierte Kapitelüberschriften
* GET-Parameter ``exludestart=<yes>`` eingefügt: Startseiten werden bei Zusammenstellungen nicht miteinbezogen
* Bei Zusammenstellungen: Es werden NUR freigegebene Dokumente verwendet!
  * Erkennung von Approve- und ApprovePlus-Plugin

## Veränderungen

### Hinzugefügte Dateien

* ``modifications.php``
* ``README.md``

### Veränderte Dateien

Folgende Dateien sind modifiziert:
* ``plugin.info.text``
* ``action.php``

## Kompatibilität

Getestet mit
* DokuWiki/**Hogfather**
* PHP **7.3**
* Approve-Plugin Version **2020-07-18**
* Approve-Plus-Plugin Version **2020-09-16**

Aktuelle gemerged mit dem Orginal dw2pdf/**2020-05-11**