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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost/phpmyadmin/');

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
define('AUTH_KEY',         '4|GkGu,&ZctS@Hd>wCwn(Z9*qYkr]BQ5oP*a)Jt?.^8=NP=Id;(G+O+F@h4<h}zF');
define('SECURE_AUTH_KEY',  'IcU,Z{lI+!]dr5`<,PoLN_&{a=Udu]eo/cW{d6IyBQxahQ1w-,b42[1hcw {{qm<');
define('LOGGED_IN_KEY',    'QUhKwA`c_5E,c,6>37WOq)|I?CAX8j6*ZV9(vbtPu9<6O`NR+xn;1Uou09sG<Y_a');
define('NONCE_KEY',        'aGq.vT^&{H;<( $oKEra^x7#[hpQUE,{ip5~0=.]r^4mKt]{0/@,mo^mB*%.UcRy');
define('AUTH_SALT',        '}LMX>Y+uwf<ydow/`Z72&`eA_%>w59V(le@m6*x&gCJ(XW*6{1Vcc-u,%nBc(azT');
define('SECURE_AUTH_SALT', '-D]TD`0lcm|Hw:m-55M<A95F{H7nbx:XV1 hZUza?VYoLdV WBy>6X#X?&t8NW,p');
define('LOGGED_IN_SALT',   ',@wSh~x-K;)]XgHO?J^+U>cy|^^w_Au4qtF(aVIjWXhPeU6$)J-58~JOZVeC?j:I');
define('NONCE_SALT',       ' )gI&HQb[qrZt#[J 2jmNBR1,J;ob^-3|GK6eG/#.N6Tow~]kx-+fwtE[Hz).fky');
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