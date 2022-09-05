<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', "bd_delibreak3" );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', "root" );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "" );

/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9XB>TWUbxa{tFrxUj1yiie4&<ncyWm}yn yRlGFe?DUx~!>?``T/[CDEHQYwr9Gg' );
define( 'SECURE_AUTH_KEY',  'Unk7guw{/!l3Ve,^Z*A=JkOa@JvFt%3|GbMU&:aJ`g4F4PoLUy+Ui^m z3v<n5;-' );
define( 'LOGGED_IN_KEY',    'ZNag%-*msU5JW)5u*skgzsh1w51JV.i/G^]n~/3VnDHV@%=,Qn@yob&)27B^m|Eu' );
define( 'NONCE_KEY',        'sP2% GB,!Z&]^<[,E{Un[y)DkVsIg$S|NEKWWHM*av$6Ph74^eypGr1CqlSn.1a8' );
define( 'AUTH_SALT',        '#_agX+]Xe6=xe<-(7#`+t@U6BW?>]BA,/xvEV*1BW-`IUi8-Ewbut3e-f4%]*JMy' );
define( 'SECURE_AUTH_SALT', '>r%[K4e.R cQD(~S9yBS6X{C[:D-H?qI^yL.Sc,wJZduDyN ;ML&iApSz&+W39cK' );
define( 'LOGGED_IN_SALT',   '+<__k%>g)><3:E}I|&;9p*g;mBmVq~JK&v])]_^qzB&r#!t:M>=i>I?Pz,RWU.BI' );
define( 'NONCE_SALT',       '=B.Vz-DdH.^!K</pMyGc+-7xi0w1u<7r~tPb)51kZFGjdIs|g.vL 3DD(p82&EOX' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
define( 'WP_SITEURL', 'http://localhost/DeliBreak/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
