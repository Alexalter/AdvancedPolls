<?php 
/**
 * Advanced Polls module for Zikula
 *
 * @author Mark West <mark@markwest.me.uk>
 * @translation: Carsten Volmer (DEU)  
 * @copyright (C) 2002-2010 by Mark West
 * @link http://code.zikula.org/advancedpolls
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_3rdParty_Modules
 * @subpackage Advanced_Polls
 */

define('_ADVANCEDPOLLSCANCELDELETE', 'L�schen abbrechen');
define('_ADVANCEDPOLLSCONFIRMDELETE', 'L�schen der Umfrage best�tigen');
if (!defined('_ADVANCEDPOLLSCREATEFAILED')) {
    define('_ADVANCEDPOLLSCREATEFAILED', 'Erstellung fehlgeschlagen');
}
if (!defined('_ADVANCEDPOLLSDELETEFAILED')) {
    define('_ADVANCEDPOLLSDELETEFAILED', 'L�schen fehlgeschlagen');
}
if (!defined('_ADVANCEDPOLLSUPDATEFAILED')) {
    define('_ADVANCEDPOLLSUPDATEFAILED', 'Aktualisierung fehlgeschlagen');
}
define('_ADVANCEDPOLLSDELETE', 'Umfrage l�schen');
define('_ADVANCEDPOLLSEDIT', 'Umfrage bearbeiten');
define('_ADVANCEDPOLLSEDITCONFIG', 'Umfragekonfiguration bearbeiten');
define('_ADVANCEDPOLLSNEW', 'Umfrage anlegen');
define('_ADVANCEDPOLLSADMIN', 'Advanced Polls Administration');
define('_ADVANCEDPOLLSADD', 'Umfrage anlegen');
define('_ADVANCEDPOLLSCREATED', 'Umfrage angelegt');
define('_ADVANCEDPOLLSDELETED', 'Umfrage gel�scht');
define('_ADVANCEDPOLLSDISPLAYBOLD', 'Eintr�ge fettgedruckt anzeigen');
define('_ADVANCEDPOLLSNAME', 'Name der Umfrage');
define('_ADVANCEDPOLLSNOSUCHITEM', 'kein Eintrag vorhanden');
define('_ADVANCEDPOLLSNUMBER', 'Umfrage-ID');
define('_ADVANCEDPOLLSOPTIONS', 'Optionen');
define('_ADVANCEDPOLLSUPDATE', 'Umfrage aktualisieren');
define('_ADVANCEDPOLLSUPDATED', 'Umfrage aktualisiert');
define('_ADVANCEDPOLLSVIEW', 'Umfragen anzeigen');
define('_ADVANCEDPOLLSITEMSPERPAGE', 'Anzahl der Eintr�ge pro Seite');
define('_ADVANCEDPOLLSDATETIMESTART', 'Beginn der Umfrage (Datum/Zeit)');
define('_ADVANCEDPOLLSDATETIMECLOSE', 'Ende der Umfrage (Datum/Zeit)');
define('_ADVANCEDPOLLSNEXT', 'N�chste');
define('_ADVANCEDPOLLSRECURRING','Wiederholende Umfrage?');
define('_ADVANCEDPOLLSRECURRINGOFFSET','Anzahl der Stunden nachdem die Umfrage wiederholt werden soll');
if (!defined('_LANGUAGE')) {
    define('_LANGUAGE', 'Umfrage ist verf�gbar in folgenden Sprachen');
}
define('_ADVANCEDPOLLSVARIABLEERROR', 'Variable-Fehler ');
define('_ADVANCEDPOLLSAUTHTYPE', 'Autorisierungsmethode');
define('_ADVANCEDPOLLSMULTIPLESELECT', 'Auswahlmethode');
define('_ADVANCEDPOLLSMULTIPLESELECTCOUNT', 'Anzahl der erlaubten M�glichkeiten');
define('_ADVANCEDPOLLSMULTIPLESELECTCOUNTUNLIMITED', '(-1 f�r unbegrenzte Auswahl)');
define('_ADVANCEDPOLLSTIEBREAK', 'Tiebreak-Methode');
define('_ADVANCEDPOLLSRECURRINGINTERVAL', 'Anzahl der Tage nachdem die Umfrage wiederholt werden soll');
define('_ADVANCEDPOLLSONLYMULTIPLESELECT', 'Folgende Optionen sind nur relevant, wenn eine Mehrfachauswahl m�glich ist.');
define('_ADVANCEDPOLLSONLYRECURRING', 'Folgende Optionen sind nur relevant, wenn es sich um eine wiederholende Umfrage handelt.');
define('_ADVANCEDPOLLSRESETVOTES', 'Zur�cksetzen');
define('_ADVANCEDPOLLSADMINSTATS', 'Statistik');
define('_ADVANCEDPOLLSVOTEID', 'Vote-ID');
define('_ADVANCEDPOLLSVOTEIP', 'IP-Addresse');
define('_ADVANCEDPOLLSVOTETIME', 'Zeitpunkt');
define('_ADVANCEDPOLLSVOTEUID', 'Benutzername');
define('_ADVANCEDPOLLSVOTERANK', 'Stimmen');
define('_ADVANCEDPOLLSVOTEOPTIONID', 'Optionen');
define('_ADVANCEDPOLLSADMINVOTINGSTATISTICS', 'Stimmenstatistik');
define('_ADVANCEDPOLLSADMINVOTINGSTATISTICSTABLE', 'Stimmenhistorie');
define('_ADVANCEDPOLLSRESETVOTESCONFIRM', 'Stimmeabgaben zur�cksetzen'); 
define('_ADVANCEDPOLLSCONFIRMVOTESRESET', 'Zur�cksetzen der Stimmabgaben best�tigen'); 
define('_ADVANCEDPOLLSCANCELVOTESREST', 'Zur�cksetzen abbrechen');
define('_ADVANCEDPOLLSVOTESRESET', 'Stimmabgaben zur�cksetzen');
define('_ADVANCEDPOLLSADMINDATEFORMAT', 'Datumsformat im der Adminansicht');
define('_ADVANCEDPOLLSUSERDATEFORMAT', 'Datumsformat in der Benutzeransicht');
define('_ADVANCEDPOLLSUSEREVERSEDNS', 'DNS-Aufl�sung der IP-Adressen benutzen');
define('_ADVANCEDPOLLSSCALINGFACTOR', 'Skalierungsfaktor f�r Ergebnisbalken'); 
define('_ADVANCEDPOLLSDUPLICATE', 'Duplizieren'); 
define('_ADVANCEDPOLLSCONFIRMDUPLICATE', 'Duplizieren der Umfrage best�tigen');
define('_ADVANCEDPOLLSCANCELDUPLICATE', 'Duplizieren abbrechen');
//define('_ADVANCEDPOLLSDUPLICATE', 'Duplicate Poll');
define('_ADVANCEDPOLLSSORTVOTESBY', 'Sortiere Stimmen nach');
define('_ADVANCEDPOLLSSORTVOTESORDER', 'Stimmen absteigend');
define('_ADVANCEDPOLLSSORTVOTES', 'Stimmen sortieren');
define('_ADVANCEDPOLLSSORTASCENDING', 'Aufsteigend');
define('_ADVANCEDPOLLSSORTDESCENDING', 'Absteigend');
define('_ADVANCEDPOLLSOPTION', 'Stimmenoptionen');
define('_ADVANCEDPOLLSNOAUTH', 'Zugriff auf das Advanced-Polls-Module nicht berechtigt.');
define('_ADVANCEDPOLLSDUPLICATED', 'Stimme dupliziert');
define('_ADVANCEDPOLLSFREE', 'Frei');
define('_ADVANCEDPOLLSUSERID', 'Benutzer-ID');
define('_ADVANCEDPOLLSCOOKIE', 'Cookie');
define('_ADVANCEDPOLLSIPADDRESS', 'IP-Addresse');
define('_ADVANCEDPOLLSNONE', 'Keine');
define('_ADVANCEDPOLLSVOTETIMECOUNTBACK', 'Zeit r�ckw�rtsz�hlen');
define('_ADVANCEDPOLLSALPHABETICAL', 'Alphabetisch');
define('_ADVANCEDPOLLSSINGLE', 'Einfach');
define('_ADVANCEDPOLLSMULTIPLE', 'Mehrfach');
define('_ADVANCEDPOLLSRANKED', 'Bewertet');
define('_ADVANCEDPOLLSADMINITEMSPERPAGE', 'Eintr�ge pro Seite in der Adminansicht');
define('_ADVANCEDPOLLSUSERITEMSPERPAGE', 'Eintr�ge pro Seite in der Useransicht');
define('_ADVANCEDPOLLSDEFAULTCOLOUR', 'Standardfarbe');
define('_ADVANCEDPOLLSDEFAULTOPTIONCOUNT', 'Standardanzahl der Umfrageoptionen');
define('_ADVANCEDPOLLSOPTIONCOUNT', 'Anzahl der Optionen in dieser Umfrage');
define('_ADVANCEDPOLLNOSUCHITEM', 'Keine Umfrage vorhanden');
define('_ADVANCEDPOLLSVOTECOUNT', 'Stimme z�hlen');
define('_ADVANCEDPOLLSDESCRIPTION', 'Beschreibung');
define('_ADVANCEDPOLLSNOCLOSE', 'Kein Enddatum');
define('_ADVANCEDPOLLSBASICINFO', 'Grundlegende Informationen');
define('_ADVANCEDPOLLSTIMING', 'Zeitsteuerung');
define('_ADVANCEDPOLLSREGULATIONS', 'Stimmenvorschriften');

