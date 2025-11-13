<?php

// ============================================================================
// WordPress wp-config.php Sicherheitseinstellungen
// ============================================================================
// Diese Konstanten erweitern die Sicherheit deiner WordPress-Installation.
// Füge sie in deine wp-config.php ein, OBERHALB der Zeile:
// /* That's all, stop editing! Happy publishing. */
//
// WICHTIG: Erstelle vorher ein Backup deiner wp-config.php!
// ============================================================================


// ============================================================================
// PRIORISIERUNG DER EINSTELLUNGEN
// ============================================================================
// 🔥 MUSS HABEN: Einstellung 1 (kritische Sicherheit)
// ⚡ SOLLTE HABEN: Einstellungen 2 und 3 (erhöhter Schutz)
// 💡 OPTIONAL: Zusätzliche Empfehlungen am Ende
// ============================================================================


// ============================================================================
// 1. Datei-Editor deaktivieren 🔥 MUSS HABEN (KRITISCH!)
// ============================================================================
// Der integrierte Theme- und Plugin-Editor im WordPress-Backend erlaubt es,
// PHP-Dateien direkt über die Weboberfläche zu bearbeiten. Das ist extrem
// gefährlich, wenn:
// - Ein Angreifer Zugang zum Admin-Bereich erhält
// - Mehrere Administratoren arbeiten (Fehlerrisiko)
// - Schwache Passwörter verwendet werden
//
// Mit dieser Einstellung wird der Editor komplett deaktiviert.
//
//
// Auswirkung: Die Menüpunkte "Design → Theme-Editor" und
// "Plugins → Plugin-Editor" verschwinden aus dem Admin-Bereich.
//
// ⚠️ WICHTIG: Danach können Änderungen nur noch via FTP/SSH vorgenommen werden!
// ============================================================================
define( 'DISALLOW_FILE_EDIT', true );


// ============================================================================
// 2. SSL für Admin-Bereich erzwingen ⚡ SOLLTE HABEN
// ============================================================================
// Erzwingt eine verschlüsselte HTTPS-Verbindung für alle Admin-Seiten und
// Login-Vorgänge. Dadurch werden Passwörter und Session-Cookies geschützt.
//
//
// VORAUSSETZUNG: Ein gültiges SSL-Zertifikat muss installiert sein!
// (z.B. Let's Encrypt - meist kostenlos beim Hoster verfügbar)
//
// ⚠️ ACHTUNG: Funktioniert nur, wenn deine Website bereits HTTPS unterstützt!
// Vor der Aktivierung testen: Rufe https://deine-domain.de/wp-admin/ auf.
// Wenn das funktioniert, kann diese Einstellung aktiviert werden.
//
// Fehlerbehebung bei Problemen:
// - "Too many redirects": SSL möglicherweise nicht korrekt konfiguriert
// - Lösung: Einstellung wieder entfernen und Hosting-Support kontaktieren
// ============================================================================
define( 'FORCE_SSL_ADMIN', true );


// ============================================================================
// 3. Automatische Minor Updates WordPress Core ⚡ SOLLTE HABEN
// ============================================================================
// WordPress kann automatisch Sicherheitsupdates (Minor Updates) installieren,
// z.B. von Version 6.4.1 auf 6.4.2. Diese Updates beheben meist kritische
// Sicherheitslücken und sollten zeitnah eingespielt werden.
//
//
// Optionen für WP_AUTO_UPDATE_CORE:
// - true         = Alle Updates (Major + Minor) automatisch
// - false        = Keine automatischen Updates
// - 'minor'      = Nur Sicherheitsupdates (EMPFOHLEN!)
//
// EMPFEHLUNG: 'minor' verwenden für automatische Sicherheit ohne Überraschungen
//
// Hinweis: Major Updates (z.B. 6.4 → 6.5) sollten manuell durchgeführt werden,
// da sie grössere Änderungen enthalten können, die getestet werden sollten.
// ============================================================================
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


// ============================================================================
// NACH DEM EINFÜGEN TESTEN!
// ============================================================================
// ✓ Website lädt noch normal?
// ✓ Admin-Bereich erreichbar? (https://deine-domain.de/wp-admin/)
// ✓ Login funktioniert?
// ✓ Theme-/Plugin-Editor ist verschwunden? (Design → Theme-Editor sollte weg sein)
// ✓ Bei FORCE_SSL_ADMIN: Keine Redirect-Schleife?
//
// Falls Probleme auftreten:
// 1. wp-config.php via FTP öffnen
// 2. Problematische Zeile mit // auskommentieren oder löschen
// 3. Datei speichern und erneut testen
// ============================================================================


// ============================================================================
// ZUSÄTZLICHE EMPFEHLUNGEN 💡 OPTIONAL
// ============================================================================
// Hier sind weitere Sicherheitseinstellungen für fortgeschrittene Nutzer:


// ----------------------------------------------------------------------------
// 4. Installations-/Update-Funktionen deaktivieren (für gehärtete Systeme)
// ----------------------------------------------------------------------------
// Verhindert Installation und Update von Themes/Plugins über das Backend.
// Nützlich für Produktivumgebungen, wo alle Änderungen via Deployment erfolgen.
//
// ⚠️ ACHTUNG: Sehr restriktiv! Nur für fortgeschrittene Nutzer.
// ----------------------------------------------------------------------------
// define( 'DISALLOW_FILE_MODS', true );


// ----------------------------------------------------------------------------
// 5. Fehler-Anzeige deaktivieren (Produktivumgebung)
// ----------------------------------------------------------------------------
// Verhindert, dass PHP-Fehler auf der Website angezeigt werden.
// Wichtig für Live-Sites, da Fehler Informationen über die Installation
// preisgeben können.
// ----------------------------------------------------------------------------
// define( 'WP_DEBUG', false );
// define( 'WP_DEBUG_DISPLAY', false );
// @ini_set( 'display_errors', 0 );


// ----------------------------------------------------------------------------
// 6. Debug-Log aktivieren (für Entwicklung/Fehlersuche)
// ----------------------------------------------------------------------------
// Schreibt Fehler in eine Log-Datei statt sie anzuzeigen.
// Nützlich zur Fehlersuche ohne Sicherheitsrisiko.
// Log-Datei: /wp-content/debug.log
// ----------------------------------------------------------------------------
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', false );
// @ini_set( 'display_errors', 0 );


// ----------------------------------------------------------------------------
// 7. Revisionen begrenzen (spart Speicherplatz)
// ----------------------------------------------------------------------------
// WordPress speichert standardmässig unbegrenzt viele Revisionen.
// Diese Einstellung begrenzt sie auf eine sinnvolle Anzahl.
// ----------------------------------------------------------------------------
// define( 'WP_POST_REVISIONS', 5 );


// ----------------------------------------------------------------------------
// 8. Datenbank-Reparatur-Modus (nur bei Bedarf aktivieren!)
// ----------------------------------------------------------------------------
// Ermöglicht Datenbank-Reparatur über: /wp-admin/maint/repair.php
// ⚠️ WICHTIG: Nach Verwendung wieder DEAKTIVIEREN!
// ----------------------------------------------------------------------------
// define( 'WP_ALLOW_REPAIR', true );


// ----------------------------------------------------------------------------
// 9. Alternative Authentication Salts (Security Keys)
// ----------------------------------------------------------------------------
// Falls du deine Security Keys ändern möchtest (z.B. nach Sicherheitsvorfall),
// generiere neue unter: https://api.wordpress.org/secret-key/1.1/salt/
//
// Die Keys findest du bereits in deiner wp-config.php (ca. Zeile 50-60).
// Beim Ändern werden alle Nutzer automatisch ausgeloggt.
// ----------------------------------------------------------------------------


// ----------------------------------------------------------------------------
// 10. Memory Limit erhöhen (bei Speicherproblemen)
// ----------------------------------------------------------------------------
// Erhöht den verfügbaren Arbeitsspeicher für WordPress.
// Nützlich bei grossen Websites oder speicherintensiven Plugins.
// ----------------------------------------------------------------------------
// define( 'WP_MEMORY_LIMIT', '256M' );
// define( 'WP_MAX_MEMORY_LIMIT', '512M' ); // Für Admin-Bereich


// ============================================================================
// WICHTIGE HINWEISE ZUR PLATZIERUNG
// ============================================================================
// 1. Alle define()-Zeilen müssen VOR dieser Zeile stehen:
//    /* That's all, stop editing! Happy publishing. */
//
// 2. Platzierung in wp-config.php (empfohlene Reihenfolge):
//    - Datenbank-Einstellungen (bereits vorhanden)
//    - Security Keys / Salts (bereits vorhanden)
//    - DEINE NEUEN SICHERHEITSEINSTELLUNGEN (hier einfügen!)
//    - $table_prefix = 'wp_'; (bereits vorhanden)
//    - /* That's all, stop editing! Happy publishing. */
//
// 3. Erstelle IMMER ein Backup vor Änderungen!
// ============================================================================


// ============================================================================
// WEITERFÜHRENDE SICHERHEITSMASSNAHMEN
// ============================================================================
// ✓ Starke Passwörter verwenden (min. 16 Zeichen, Zufallsgenerator)
// ✓ Zwei-Faktor-Authentifizierung (2FA) aktivieren
// ✓ Regelmässige Backups automatisieren
// ✓ Plugins und Themes aktuell halten
// ✓ Ungenutzte Plugins/Themes deinstallieren (nicht nur deaktivieren!)
// ✓ WA-Firewall-Plugin installieren (z.B. Ninja Firewall)
// ✓ Login-Versuche begrenzen (via Plugin)
// ✓ Admin-Username nicht "admin" verwenden
// ============================================================================