# PHP Image Generator

## Beschreibung

Dieses PHP-Skript erzeugt Bilder mit dem Text, den du ihm gibst. Es speichert diese Bilder im Ordner "bilder". Wenn ein Bild bereits existiert und nicht älter als 7 Tage ist, verwendet das Skript das vorhandene Bild. Ansonsten erstellt es ein neues.

## Funktionen

- Erstellt Bilder mit deinem Text.
- Speichert die Bilder im "bilder"-Ordner.
- Überprüft, ob ein Bild schon existiert und erstellt nur bei Bedarf ein neues.

## Voraussetzungen

Du brauchst Folgendes, um das Skript zu nutzen:

- PHP 7.x oder höher.
- GD-Bibliothek für PHP, um Bilder zu bearbeiten und zu erstellen. Falls GD noch nicht installiert ist, kannst du es mit `apt-get install php-gd` (Debian/Ubuntu) oder `yum install php-gd` (RedHat/CentOS) installieren.

## Installation

1. Klone das Repository in dein Webserver-Verzeichnis.
2. Stelle sicher, dass der Ordner "bilder" existiert und die Berechtigungen 777 hat.
3. Rufe das Skript über eine URL auf, zum Beispiel: `http://deinedomain.com/script.php?text=DeinText&filename=DeinDateiname`.

## Dateiberechtigungen

Der "bilder"-Ordner muss Schreibberechtigungen haben, damit das Skript die Bilder speichern kann. Setze die Berechtigungen mit folgendem Befehl:

chmod 777 bilder

## Nutzung

Um ein Bild zu generieren, gib das Skript mit den entsprechenden GET-Parametern ein. Zum Beispiel:

http://domainorip/unterschrift.php?text=Vorname%20Nachname&filenamevornamw_nachname

## Lizenz

[MIT Lizenz](LICENSE)
