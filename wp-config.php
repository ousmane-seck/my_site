<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ma_base_de_donnée' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3eE~85f#zL,5Ycz) `b)v3<fS9*37.NPI3(@GwoM:Nb#YqV(NUZR`}TTlqf#qeR.' );
define( 'SECURE_AUTH_KEY',  '7_qr?rCcu>U!CWO:M2>bGp $>K$>T*u0HUsmElXYuuj x]4bwaQT~y9_ns=,|r4i' );
define( 'LOGGED_IN_KEY',    'qlMgA#w?v7*9I}h@FCS2wq4n,hVxK+h,$%Bc!Ik3fL)y+9(PpL!4Y^j(t-K] e+C' );
define( 'NONCE_KEY',        ')% p1m2g91ov?vjIdkZ`~TO_y&:J7PTISQkt@AKKZnir3B.?.gaAH{/1zSJLn}6H' );
define( 'AUTH_SALT',        'O_BW& $+~<dJ2i&.w. aUr]gFqdqZ4K^Y{+P;*,kn&gL!`JnzqrV4x<zG>VAv-9.' );
define( 'SECURE_AUTH_SALT', 'Kh&OhH6F>o-ON}}|{tbCGYy zxzU:Ls=MC<z;(c~B}J,gi?+!b[1(Y_s,i7X}gm[' );
define( 'LOGGED_IN_SALT',   'WD**zoLkHQh;xT?*UW;D.xBfq*o|*Q[Ko97-gB&/%vu3rAuE[vbHS5]Q k5=1h)X' );
define( 'NONCE_SALT',       'c2A4;BQ_0g{oi=/jDs0PsrK)Q8?lr$5E[ltA!N_<]l&-O]MtujfNji;WC;m3J^F-' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
