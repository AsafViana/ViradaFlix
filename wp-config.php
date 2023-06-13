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
define( 'DB_NAME', 'viradaflix' );

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
define( 'AUTH_KEY',         'a?ou4fbv$?Sx[S]xZTm@5c5C7Z0aX#qGgU87jse@Q#O=aGPn=!&EUJOIFB.Yz;|v' );
define( 'SECURE_AUTH_KEY',  '#^?7f#:gS{6R`a[6P6`XuT^qQt@z:qBgGIygmv3x6 ^O:xG}T.a@[Zl`AOi$:9`Q' );
define( 'LOGGED_IN_KEY',    '0+S>m7@43O:qWj)q,`7k8h+R957V]jn2c`5Jbesv2Q39FV6S81G3A%IWTM]^3`|x' );
define( 'NONCE_KEY',        'Pu%l /xvy~e]F9//SC_uxA}N>N-t>j2&se}CJv{;FTVmnt)!^evq[H$i]dJ|OJ-X' );
define( 'AUTH_SALT',        'UUY&4M>j:27;r]}{=~r]<+TSvg<7R$Ajh)u;pD,yNaQ(9t_Deom:25>7**B4V[,Z' );
define( 'SECURE_AUTH_SALT', '7_df7|D^]b~Jf%>4j2wsu7;Zyiv8`X?i^?I6`z0gPn!1a`EYi}Cm-w|%y)!eaar:' );
define( 'LOGGED_IN_SALT',   'f0TVB`{g#3lEn%8o-3~(5x)*&aE_!~~{1SC!>B2G2l=B{jcgm- s<9ScXv#mLH/j' );
define( 'NONCE_SALT',       '6jL1Xz5O_EpMmK)M/1Ad}Yg}8-nX^;vbEj>pZWVLR!+YOQ)@UnuQAaoriX+tj8j0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'vf_';

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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
