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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lgpdfacil' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'PelsX@B9H[[u6l-cgRp^5w,sigr=h9]j3Vgxh1x.(BD9Zzlsd!7fQmR9mlx,T9{+' );
define( 'SECURE_AUTH_KEY',  '2M-.H(YXLK<Vc8 !#t._ev=CMFCWH<j%8$T9>IUeq4vhQJ}cNn[HYpG})$g6kkVU' );
define( 'LOGGED_IN_KEY',    '[x2QF%,Mo.8HvlrKc~$8wh=?d//|#~ RH-7P;U<pf77M3P,Ga|41]/vcU{C 1y2@' );
define( 'NONCE_KEY',        '#+Jr`E?CJNHF[=@G+d{0/t/l$<~T@bdb;sQ/BUQH?&Md20m(.]a TiP1(]*WiRT(' );
define( 'AUTH_SALT',        'I>K)&Q{q!Uh4q`YS7ZR~l0{V*TV)3QXKg::7i&~M{GA*a#J_oJC{-XuZ0Q859EO9' );
define( 'SECURE_AUTH_SALT', '9#xV&QS^j[pR6$k?t}5};>nj8gB5n/./:]7e yBiBp,c(/5/.@z/p&,0ae[qeFvA' );
define( 'LOGGED_IN_SALT',   'T7drqcK7TY7.+(= b<zk_}(NK~4]v#[!mcVdr4nVqO ^==bd!f>`hj_?t$JVHx%w' );
define( 'NONCE_SALT',       'fM4Dm6@)N,j$(=e5PWd?JRn&_*:|wS%]`N](ss(V*:nV, L2ON6eBIgX> We2RB_' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
