# dw2pdf - Modifizierte Fassung

Individuelle Fassung des dw2pdf-Plugins, welches mit dem orginal abgeglichen wird.

Aktuell mit folgenden Zusatzfunktionen:

* Coverseiten können im Admin-Bereich hinzugefügt werden
* Nummerierte Kapitelüberschriften
* Option, um generierte PDF direkt als E-Mail zu verschicken: ``<pdfmail [E-Mail-Adresse] [Bezeichnung]>``
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
* ``conf/default.php``
* ``conf/metadata.php``
* ``lang/de/settings.php``

## Geplant

* E-Mail-Funktion wieder entfernen -> Entwicklung eines alternativen Plugins
* Coverseiten automatisch einbinden, wenn eine Seite ``cover`` heißt