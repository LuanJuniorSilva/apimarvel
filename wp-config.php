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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'api_marvel');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ')Q^[/_NKoyPQ~fzo|_WIeC/*dkDam5zD-,bTY;B0+E7./%lo)<}=<R$0>/,]J^Gz');
define('SECURE_AUTH_KEY',  '.sOX]WBg@<P|f 5xL8C_28O}@*pbu2W6A3iv?*:H(d;:m7]@x&bso*Itk!(+D8hF');
define('LOGGED_IN_KEY',    ':a1<NiZG,ID4oUXRjcqRTQ:7H7X^~md:>4R+TgMDhv;d6kiUB*8c/#y?^h D}2D|');
define('NONCE_KEY',        'xQ?-X,RY`E$Y^: gy|l{[HU*7bknX=}]mUsV7jdCpy.]%Ptu9gHGj=7f4+K1/NFr');
define('AUTH_SALT',        ';N)kU*d`}1*J@{jrh4D6J|gd:d#!%y(n0&WqkSj4![i+6sy;_7mJ(11-fW)]d dr');
define('SECURE_AUTH_SALT', ':2uFKRHc62HP-I5UYM^{)5lB-&GInQiLOL~[y~VY8HW]nd&qJHDhWORvVw{-_hjX');
define('LOGGED_IN_SALT',   'p (v*u;u5mL%1jv,f3u[o/V8 Vx;^CQ+$IE4DXu=UD /0QQjukW5>=Vqx{<IQt7r');
define('NONCE_SALT',       'Y+]wBVrG-&AK+#AM~{<1L?+2NB}?yT6ka 3WafQ6Zl/f*,]&x6I&WQ<b_KhlOMGf');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
