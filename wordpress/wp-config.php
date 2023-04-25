<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2-saraagnestrand' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L9 %SMbQs<VZ%zs5 A1uXL#z>;` 7`X61k@rHb2)M>sYrz~dn9~QL2&K/eKf}AR4' );
define( 'SECURE_AUTH_KEY',  'S!gWLKB:0t$L<K=Q@f3Et3IzInrD,9.PlmXy&$`y8f%Obcm*j?olF;=A$il4YL:2' );
define( 'LOGGED_IN_KEY',    ':#,@aiScBZ}Dg]/M=UkW6=V7T(uHunll.?qR0JaS6t:q~HYUIVYO^s$(1P`HU20{' );
define( 'NONCE_KEY',        '#GAEunYn#L4^}M=!8NTs^_U{^y_Pu6V&@8ul88~>kCJ*Fr!qZJx`]}5fqZrjU?}1' );
define( 'AUTH_SALT',        ',-D!}%=xKtnKvSGS_jOqhZ*#W?AVgmPZ$eDl-=>:n~<!.ps2ED}XP8`_UsqR9CgP' );
define( 'SECURE_AUTH_SALT', '!HCcE:+6q}RVtxyP9H,}n(D|7S4qQjeN/3,NB,WrrFr*`~$Cr=1r;XReLWFm)qVb' );
define( 'LOGGED_IN_SALT',   'WRw;e>Wp=M^[~BWB6![y-0|6>TCwAoLWIn^]0/0l6_!6x)8v<AGKd6j6W+$ UD,:' );
define( 'NONCE_SALT',       'TE`+ yz6ip?pJGb?/r@t5MK6_e72^7$2}CyylR>`*lS<Seo:oTdLdX2B2qnGxs:d' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', true);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');