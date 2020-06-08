# dw2pdf - Modifizierte Fassung

Individuelle Fassung des dw2pdf-Plugins, welches mit dem orginal abgeglichen wird.

Aktuell mit folgenden Zusatzfunktionen:

* Coverseiten werden automatisch eingefügt (wenn eine Seite "cover" heißt, wird sie automatisch als Deckblatt verwendet)
* Nummerierte Kapitelüberschriften
* Option, um generierte PDF direkt als E-Mail zu verschicken: ``<pdfmail [E-Mail-Adresse] [Bezeichnung]>``
* GET-Parameter ``exludestart=<yes>`` eingefügt: Startseiten werden bei Zusammenstellungen nicht miteinbezogen
* Bei Zusammenstellungen: Es werden NUR freigegebene Dokumente verwendet!

## Veränderungen

### Hinzugefügte Dateien

* ``modifications.php``
* ``syntax/maillink.php``
* ``README.md``

### Veränderte Dateien

Folgende Dateien ersetzen die Orginale:
* ``plugin.info.text``
* ``action.php``

## Geplant

* E-Mail-Funktion wieder entfernen -> Entwicklung eines alternativen Plugins
* Wechselwirkung mit dem Approve-Plugin: Nur freigegebene Seiten in Sammlungen einbinden!
* Coverseiten automatisch einbinden, wenn eine Seite ``cover`` heißt

