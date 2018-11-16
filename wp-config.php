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
define('DB_NAME', 'Wordpress_itss');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vf(n_cWFbWXODM<D/N._=a@q*>T~J(bt:WmSN&d{zWdfT*)XKB:P?ZJ2Z6;o=;_V');
define('SECURE_AUTH_KEY',  '>5e-*I ovkBBCW]?o=l7Mn2LOczYcHbk+ez!%hJ~cb%re]$~hfDm!4W:[s!g|2[s');
define('LOGGED_IN_KEY',    '?]Z?;IIE/AEbWca5.Wnxm;|Pk-L(w]?-Wpv`f6u3)tVKprDV=6rPE%P{09`,b3~b');
define('NONCE_KEY',        '31=C$Sq#@UC-Q<$p8/0WE6f[x-=qB_bW58HyxL[hm3L%d`iKirfTWyoV}f6|<@e+');
define('AUTH_SALT',        'SM]7r7>K5z<ZM44=B3+j8ne^o5#>&J42~W^w.:r;DY1Jz<s[o]yg|(LbJW4D-Tg?');
define('SECURE_AUTH_SALT', '@bG,?=2n6[:4>@G6z]pG8w2N!0bqU_yg^fpN.;|$V[pkO<RX:N*}p^#t:c]4i>ua');
define('LOGGED_IN_SALT',   'B.Gaz:@,@{r6snDL$@LS8b-=Td!MFq+v,.e6Dh(hPq0w~s!P0V^U&DK]$49;ZXU+');
define('NONCE_SALT',       'j^6Vj~|0{PP:bIWF>=08f5W8R~_T3i? M6ZzkWd9IX{ O`YZL!=|@71n4U2*|guS');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
