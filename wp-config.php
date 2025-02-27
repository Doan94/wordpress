<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'vpdoan' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm43jJzn*%2(>4H;s)fL:YZ=p2V`LvD}<4{?~5rcDWc=Nv0EsTbRx{X|+Wc<f.e7%' );
define( 'SECURE_AUTH_KEY',  'GT9zMthQZ0NQ}W+E@$+#6X|{p^TYZiGf!G{He+_BgrW613#>S2r#A7?=CZ U+q*9' );
define( 'LOGGED_IN_KEY',    'K;0?F5J:41.}fGSE!,#0^4^psAyVXT =0}TQ59T]jh|,,H=d~6F$ O$Uy$ZIX rM' );
define( 'NONCE_KEY',        'a+;6Y6HZa^1otU~*G,$K-59O8H,#})NM`&8l3sl=rC+wEVp;zq*QhWE>>Ms5VK<=' );
define( 'AUTH_SALT',        'Fve(Gx=vtfW/7lPa|HXhHL)bW1+[xdB@,g7c0%HB*jrt9x~R.ig&d-c7(Yq+%}?O' );
define( 'SECURE_AUTH_SALT', '}[dk;]x&mf(0]er=5(a~JaU8y5|A6jJzz~0S@Fmlcni~ZYl@TVmu&H84X&ZZV}1C' );
define( 'LOGGED_IN_SALT',   'YL4WZUg/3^ag`]7!>04%6/fp|>14pMB1mCcTifY5o5fBjgommQzk`3GvLH(GVel=' );
define( 'NONCE_SALT',       '=N&NZhCIWn^Y;OKVl>$_E.cg$m{!~na&7GR<,wkb,TMI*} WmUW27d.W]bnNgF8}' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
