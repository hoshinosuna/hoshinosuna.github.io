<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'hoshinosuna_wp3' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'hoshinosuna_wp3' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '4fdsp19swj' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql10011.xserver.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&fVTJ`1n7 s)/*x;QdUwQ/Fzc@bW:3#i7HfZ.8D]h)YYmv<,{%uO|ZWsck^|faB/' );
define( 'SECURE_AUTH_KEY',  'oX>G!<yZ%b(/Fp]M!I&@Cr3,@$Fv1dsGf0ztT#(z$oa1_mek@j=7&b4I;U-sUM)H' );
define( 'LOGGED_IN_KEY',    'ODE$/OiNZO:s_!_#${$k~a/iZxTU|HlGN2}3wwrb7oC6(-F&~U?4cZYu^m0r0 B`' );
define( 'NONCE_KEY',        ']zl`@c}P;H~{52@}:pC;s/V521!{#.<cu{AOT>G4cKi7/ejBrDA4BXUT_ZTYKAYW' );
define( 'AUTH_SALT',        'Z]Et~JD9Tb#||_c9NZTcFnZcEFU;p.8R4xzfb1g`O9j;$WvNk-1?r|!rFT|w`55(' );
define( 'SECURE_AUTH_SALT', ').N8FG3Pqx5dj}>h?(rYE3o9vo~$%%o$nf=>c]Adw]!B|J)W52Wf5gZ09Ee1O#[k' );
define( 'LOGGED_IN_SALT',   'zG}w2:*SAHr:|;~_%kT$i=J&j.^Giy.]^)0|8=FcQO|p9qgH]HMpV@4P+E3/)78k' );
define( 'NONCE_SALT',       '=n)96u.Awz+LkB >>kE<$V$H./X>Rl5[NRfRc50lj/St@7-p%_<[?O8WWSF?rAO}' );
define( 'WP_CACHE_KEY_SALT', 'cmaV6+rb?r[j5Ma^BaZNnVe4[~Go@EO^?n4Kl%^wa?f{N)gx(zGzWIrmX#/vpkXp' );
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */

//if ( ! defined('WP-DEBUG') ) {
//    define('WP_DEBUG', true); // デバッグモードを有効化    
//}
//
//// ログファイルに保存する場合は、以下を書き足します。
//if ( WP_DEBUG ) {
//    // debug.log ファイルに記録
//    define( 'WP_DEBUG_LOG', true );
//    // ブラウザ上に表示しない
//    define( 'WP_DEBUG_DISPLAY', false );
//    // ブラウザ上に表示しない
//    @ini_set( 'display_errors',0 );
//}

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
