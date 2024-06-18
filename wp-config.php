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
define( 'DB_NAME', 'nation_sounds' );

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
define( 'AUTH_KEY',         'bO(^2pQl4^3/G+%y{P YNKdn]T!Z$AWDjVL&:@4qIJKS!lvxZkMKI#@X>b;!RLz ' );
define( 'SECURE_AUTH_KEY',  '$KW_JOxK=674u{8~d|a~Th*_.Z*g841xG UoePnyq8a>FayEJ5&^l4@mfmtYIvc9' );
define( 'LOGGED_IN_KEY',    'y&!,SjusZkGdF9hMP4<Ip@_AD~QNCA ;kM/<x}Z<rmd^8@O@XnNap0/``[HqT?j*' );
define( 'NONCE_KEY',        'm38%QYoD/vX~7;S4q=dlOyqAfH%L^nP(vumaM:5y(li(doXQl,)>eOv:}YSD!~rE' );
define( 'AUTH_SALT',        '4L:H&vj%Ul(kaN%[R2b230v5{}*z]1#A{M}`cAG2>WF=5abV4/n${]8QU36{@xu#' );
define( 'SECURE_AUTH_SALT', 'J{BR~VMW1JV6&hr+J=kAYomeW vh[./2fUVr#o!+(26PF*9XCMR9-6>iSwR~V^M2' );
define( 'LOGGED_IN_SALT',   '4;*61^%w(ri8Dc]EjJpD4-@Coo)-O>Hqh@flb~dsb}6|wEHe>R</JvM}uxD{k!/q' );
define( 'NONCE_SALT',       '$+gm?z8Lybrc9[JC]T&|suFFfm$ndCre)<v[7U[,+%ZX<ThaZC8<#?I>if:,(TS}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ns_';

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
