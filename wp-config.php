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
define( 'DB_NAME', 'calabasse_db' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_9:rR4cP.zPWF!T0yh$S) *!u,OeQ;l35GU!#uz~b/8f{nq{`o=u~|7{k;t*OZx&' );
define( 'SECURE_AUTH_KEY',  'P9o)6NnL<<:A=sflz?m7-177b10jAt9Tn4yT2,Lm[HtR6Wc+qc6=.E:RXR{5}E$N' );
define( 'LOGGED_IN_KEY',    'O~2VR(mdwv%#q.Ho~*tLL,Uvx<fJ9!SR8tmJ(?@a(pL}==(Em07binH7(fbbKk-c' );
define( 'NONCE_KEY',        '<sJwX7O^K1kZUF214xXnt]jjQ;<&l<pED}+.8?1OOU,?$/;+`7v4ka_Tnf(![JXc' );
define( 'AUTH_SALT',        'DlLz%w+ays^YJ9Ge-p{HbrEiU#Xb,Y$S9X)XDRQ9%x<`75sAWg~4`~FA.dk5VZ:o' );
define( 'SECURE_AUTH_SALT', 'Kn|0v2 >IZdP;Rtn|l {f$ak:=w~]tZ>3(8>3K=wc.R2voX>OQbm@bN(BuAii?aA' );
define( 'LOGGED_IN_SALT',   'H^NQ7O 8F0:H3c5?YQyl*rXT=bG&4kdCm!vW|aWO PDhHfB2tC!U/`fj):}=iTF`' );
define( 'NONCE_SALT',       'ntNftA[/H+PB%sgX:%*c]4{{o+7fyF0emkRW _2H5icS@3!6qCP;n22-hEV~I0kf' );
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
