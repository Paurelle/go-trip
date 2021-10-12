<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '}8/tlD{7,j~k7*({96v0:`9,+/cM:w}-64Kk@A)am!a3{3!io*:0R;3(UU2|=(Od' );
define( 'SECURE_AUTH_KEY',  ',&//n7rjXo4`>n06MfYW~LOH.YM_Y&>#w`S8n`vAymPRb`x!YH#WkcV!(netWyh@' );
define( 'LOGGED_IN_KEY',    '7b/z@q6kCk!ImblpAo~=JSFiRyqGLj5PqR(ThA&cz=drWPP~qF*rv+xAL|A{,/=l' );
define( 'NONCE_KEY',        'f@`SU5$ ,,+XKy#U5B9O6/(zf<suGOWV& 8{ef6x`{yQ.NS @nMioHN}@zFon&BT' );
define( 'AUTH_SALT',        'z.aRlb+j4vE]?V*Kc]gFk8C=Ce^n1-zD`*/7bN]jQ_9dB@/+4a?FQCH=@dT#ADNd' );
define( 'SECURE_AUTH_SALT', '?p7/R{O$yY(dMqVly,~KB]YG8xCOuvT*>L(-c/@&`; Q- t5&V|m2Kn3GOJ56(nj' );
define( 'LOGGED_IN_SALT',   'l5{p#uiZblE!%~(F|5Ju-/{r01BJ:qW$n?8I@WY/QUpK1?&(~_P_J/LW!n%-pNPj' );
define( 'NONCE_SALT',       '!teb-uHTJeheBrKrMczy:u,U{zavM}pyC>ZG<Mu%}R~0+n2QRX5Bd$e6mEj_w9QR' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
