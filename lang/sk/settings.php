<?php

/**
 * Slovak language for the "swiftmail" DokuWiki plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Martin Hanula <mh.ikar@gmail.com>
 */
$lang['smtp_host']             = 'Meno/adresa SMTP servera pre odosielanie pošty';
$lang['smtp_port']             = 'Číslo portu, na ktorom počúva SMTP server. Väčšinou 25, resp. 465 pre SSL.';
$lang['smtp_ssl']              = 'Typ šifrovania, ktorý sa používa pri komunikácii s SMTP serverom';
$lang['smtp_ssl_o_8']          = 'žiadne';
$lang['smtp_ssl_o_4']          = 'SSL';
$lang['smtp_ssl_o_2']          = 'TLS';
$lang['auth_user']             = 'Ak SMTP server vyžaduje autentifikáciu, použiť nasledovné meno používateľa';
$lang['auth_pass']             = 'Ak SMTP server vyžaduje autentifikáciu, použiť nasledovné heslo používateľa';
$lang['pop3_host']             = 'Ak SMTP server používa POP-before-SMTP na autentifikáciu, použiť horeuvedené meno/heslo a nasledovný POP3 server na autetifikáciu. Ak SMTP server používa bežnejší SMTP AUTH, nechať pole prázdne!';
$lang['localdomain']           = 'Meno použité v HELO fáze SMTP. Malo by to byť FQDN webservera, na ktorom beží DokuWiki. Pre autodetekciu nechať pole prázdne.';
$lang['debug']                 = 'Zobraziť celý chybový log keď odosielanie zlyhá? <b>Deaktivovať, ak všetko funguje!</b>';
