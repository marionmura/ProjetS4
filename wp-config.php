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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H7c]jbDn2IgRvE`=*:u#T] AmYOWBR8x@L%DL?u<tje*1r+~rGqApFi/nx7|1,()' );
define( 'SECURE_AUTH_KEY',  '{l|_]*,1BWPSl^zsQoJW5zs130;&G$;yOigE bT|~%aB;uCS}SDv(4q[eBR(wLI;' );
define( 'LOGGED_IN_KEY',    'l~]Kh9YR.Gwxj&a+!QX@{i7 K4+M.#xz%ko8*(6B5eAJ:v,$:g/=d5C5~wX<B8WZ' );
define( 'NONCE_KEY',        'SXQtS&t-E-9g1]}<kn^n09[83,{)OB5y+9AxC0)weDm&Bk`I>}X$o9N^01.`IhY5' );
define( 'AUTH_SALT',        '6zXU1a3|5st|n<eFc;uwi$hdfF`V%%E]%Ic#_g4`WfqeSp3Mpf,>+gBPNjVxPGRN' );
define( 'SECURE_AUTH_SALT', '^>lm#n0Gu=/9ErA$?vT*G<u33pyTLFEz9f23blo.T/dr51j}%2l_!|x&9K7k_=zY' );
define( 'LOGGED_IN_SALT',   '$KXNPb>, tDws!EmT `krGmMf%-D. j8MphKycK%7w%ggf|+NS5FeP^1mO?Q0O?C' );
define( 'NONCE_SALT',       ']FKBW)?z3M(?&]MTNL9na{@T%B@fo03>-:e;{-$X.?Vtz>A.3z`_(!yV9wG$<lZ5' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
