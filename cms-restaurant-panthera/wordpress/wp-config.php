<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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
define( 'DB_NAME', 'team-pantera' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'team-pantera' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '4imFB.MedEkv' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '188.166.24.55/' );
define('FS_METHOD','direct');
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
define( 'AUTH_KEY',         '5y:4B<qk]]kq+@+JuN{~l`SitzW9q6o631#L>^(oA[,h.+nN{?$S3nZ3s/e|s@Fw' );
define( 'SECURE_AUTH_KEY',  'j;0MNeb/xmJ} I(xeVpVRe?:o-I~V^J58RuDnD`j%dTUlt)Z)O C5,&-~ihE4>y$' );
define( 'LOGGED_IN_KEY',    'eA$HlxO{TFk!re9AJYSBvT:HS#=NL3mv`,cB;&qiQsSz>e,MiehNC=S 7d@)X!l$' );
define( 'NONCE_KEY',        '6CX;._`0A>;4Q!azhFzv`;DE8K_z^%k}u/N*TsJF6nP]+WZ0{]fH6,4aJKlRq4A,' );
define( 'AUTH_SALT',        'qSYKW#Kp|fW 16#SjA3ZSVY1*/#EP7TFI@j!V33&BmAX/kl)7B%[a~LU3`msv0P%' );
define( 'SECURE_AUTH_SALT', 'x(hixk=xh-qX?TD]%k4#tTkV cd&c#s>_9/ufjw22,B}kbVb3Qste/M~1OxvgX&Y' );
define( 'LOGGED_IN_SALT',   'em?j!-(o$Nzo6H$eS1$3F{a An*sFJ!kD6sd9}s=ny5p[0@$7|h4ZfPTKjYkWju{' );
define( 'NONCE_SALT',       'fC((x4QGL5NMl9te_vz10kVJ}yP(<3:m[>vukr@@Yl1YaOM=G2gkXyFq#.&|`^_C' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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