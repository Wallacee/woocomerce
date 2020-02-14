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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress-example-db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'sb#cBDy#udY[`oUTjLDz[yt`?a_Mla1`S:dh1rna@EXq3.(SsT$|3W`uc(qp@0zf' );
define( 'SECURE_AUTH_KEY',  'W 56Owagkh[21=G_F.|VF|8qkx/Qky>H0K!t?nzKgryw{b}x_=3pBKkKA>(+7)Dl' );
define( 'LOGGED_IN_KEY',    '<yRk%dexV`#O9)J2>B,j9wuwhqhJy:Y,?38I4%)s->6# {<;~oj(kZqC=%2%L}X+' );
define( 'NONCE_KEY',        '_qi_^dbfbT[wQ*DK(8Sbahxugq9{yN.j_aP6DD0$L3d*Qtsi8J/w/J4$bJ9W>?fe' );
define( 'AUTH_SALT',        '?RpgFXGUE|3Iv#dB0|R%O2n{J`1_Kq5LZK%iS$c~5%;YQ+uwroI|o=X1XpY<YaKJ' );
define( 'SECURE_AUTH_SALT', 'q.gW-H(is%7L!#g1TeeGTz*v.]uY~kh/z8`Jsb;{3?hOI-W+gCp`AE~bD6:t`e{j' );
define( 'LOGGED_IN_SALT',   ',wYC4?e28`rZZ<,6d[+,i2/1Y&2(hhr%F=*`|KYn5e|#dAV1)T!Usd,*aB6hIl2A' );
define( 'NONCE_SALT',       'Xn$BZ,W52= [LtvC@gHk=DO5RNU>6O<1{m5:)BCfD{Eto/e]m$1VN1FAca9q&o&O' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
