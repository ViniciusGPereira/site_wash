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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~x2Uv W)l/rS:l2cXKt:HNA;v|]1p}^y(a>~4M_z.{Vpe7a9eLw4fhBx9<m%7raP' );
define( 'SECURE_AUTH_KEY',  'CLNZTHe>IB]B82BO}UeWosA:f(JE(Flx~[c]s3,n@JU^w %S~Eb=ct7*BP!Bbis$' );
define( 'LOGGED_IN_KEY',    '!T^/fQESkbuR|T0c(g,G%r!SPE~;3?gMs<OZ)NijQM8L;aG]>`wz:b^c^ERkjudv' );
define( 'NONCE_KEY',        'Oc))||s5K9$,}!}Bg^(MLcq?y9[NtIaKh~E:T;;4ZG?1Lz?_Tt5AMl.{/+Sfr3Q6' );
define( 'AUTH_SALT',        '7u`ur4LLJ#T?jIrGdW)m-|Pc, h^]~8 ^%X]eeHJ:nzf:%mX<YC*vh3dh7Puxr#H' );
define( 'SECURE_AUTH_SALT', 'EP.^{ss2rG#JwS(4G6m}2<dN~!jIX}hWhcIIKOw,&ujXmF,Q?H3l>(zQz=Z:j|wL' );
define( 'LOGGED_IN_SALT',   'p}r4xd+`U0x@FXxMqtMnwd;Wp^C%:EW^n_N(llE[x59uhwMB8{#lE~/YDB=$3mQ@' );
define( 'NONCE_SALT',       's,7 XuUS/@Y~rHq$Qon=~Y_416_DWgW#gkA}0%z(Azs4d`,Uh9LK_V.NLDN<rj50' );

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
