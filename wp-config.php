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
define( 'DB_NAME', 'chaletsetcaviar' );

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
define( 'AUTH_KEY',         'v[,AZ3#(U5v<Q($A4`[mP3K63aQUV0HI(gcr4upJtpFG=6 r_=4N}4H1}Aw:c Zf' );
define( 'SECURE_AUTH_KEY',  'DFPC/r9)`,bdh1O9Usj5jayBN}VK![zC~JXQbhp.QE&EuEs$bD#8q9TRgM#-UOrL' );
define( 'LOGGED_IN_KEY',    'n.>kDpzvFw]i9/> 6=8HH|ea3bL]K ]27X./zMEFEp&KS=zXp(+S)p8!|a#DPV1$' );
define( 'NONCE_KEY',        'rG**D0xXOoTF#y4@#yzhP&uC(yiko1.vz9?^MfFn&Chn0XlROB(8MvSuNGlDwXeN' );
define( 'AUTH_SALT',        '=qo@S2sb8ZCxwtyWMT<Q-19H^t(*%O[WsKnipEyi0wA?:$4^s>CEJL95]N?SyP>i' );
define( 'SECURE_AUTH_SALT', 'AMyF7uc{5SdCYgY1OK&*dS2YxX2)lp[V6H,SA#,lFO{oEXO=Ex~HXDLjo8^En;vh' );
define( 'LOGGED_IN_SALT',   '&-a[yu[Or*>Y0k9HN;KJ6D<2,_Ga-ZtEDfQ7/3ud=#!`GD,u=1jAim!XBH1$RzUI' );
define( 'NONCE_SALT',       'Dk?Z<LJJ@C`B+9BL#B~=p6-z=tJ6B{;XQ?TP[9Ew6i{=?1yl^qdf6Sf7_Husui#q' );
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
