<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'gmsi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eT?uZmUu,p,=U4S%hbTNL<]RmhW7)vw(p}~gnzkgHA~~^|<JKa-Sz0}T<~_9M+jj');
define('SECURE_AUTH_KEY',  'riB*0ZURusw2$TV_v6f(|0.|];+]9 }MI+<!uJh1QU6_qt|d-,5N;cHY{sg)th}1');
define('LOGGED_IN_KEY',    '^Nx_+u)PkMYNpf:$r10!Z)B_^<k|+8{/-Hq]N>?TK?2,k1;<-WB,|Eq8p8p|7N~&');
define('NONCE_KEY',        '-oc$wnP|-y>X+7NG}LS1E&GPH<!I!,4_!HkS(jm-~U:aC >M+(N):$w5SjCUy{X?');
define('AUTH_SALT',        'Lgm~Q@BU&S^`d-Ef=##UQgV:[g^zkT0Mn-vDpKhKPwxjk,hU.Nk|$;K{@s%#_vtb');
define('SECURE_AUTH_SALT', 'r;CzkgksBR_ MGZ6O>?88J7.f?60W.>tEp>7L&Y{w)9]J3?g@ffYvJG<j|+lj HD');
define('LOGGED_IN_SALT',   '~]bws.1UJ)n8jkd_=Tizg6i)yQC$t[,*.[BVgOT7a0|&hN8~!!QQ|m*sRsC>_-$^');
define('NONCE_SALT',       ',,E5.jH8nzH{hC`jNl7[f5_~{/Nqf@+SL5Tf:_l9Sti)||ni?tvz{EP4%PV1zK.m');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmbb_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

