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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nazotoki' );

/** データベースのユーザー名 */
define( 'DB_USER', 'nazotoki' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'GJ5gZEwlRd' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~{|WKHR=7+PRHKqYo.P1qnWs82C!.7{@gsApb$ cO$~cDgK94FQsKz=5_9/8WP,n' );
define( 'SECURE_AUTH_KEY',  'lN:5]fj^W.h;4JS.pL-,P2&xYG`nHq*V7/2:1cXCzz2~}WRwaF:IpFg/o@hma>Y=' );
define( 'LOGGED_IN_KEY',    '|B+L7>NvXH2-`/b]MW|V1@-+Yww?WxHVHD+HmDuXps60Pb~{Wxc>8#)?O]z{n#{M' );
define( 'NONCE_KEY',        'bRXSO,9CdUrjWp-hogw5h)B/gJN0(:xV`%&ABaqO.2a4.)dG}_Ki=rV43,q{k4l&' );
define( 'AUTH_SALT',        'MP}z4R^`IUmd: aK`5Wr&1 mGW~GzZx3j7H[`b469xtNfwfwQ titd61F <7;).]' );
define( 'SECURE_AUTH_SALT', 'bLso{n6?Y`o<$XQ^pC3TR=KvNk7BncT47TT|0,@cx3`QmDYG*e?TW^+G,|]$h-r/' );
define( 'LOGGED_IN_SALT',   'kN&}b>9-:0>ODa4w?c;b*]NpiDk3[v7EsL6/|<)p#S{2Q#[W4SmZlA.)<Db8-YGG' );
define( 'NONCE_SALT',       '8{rdRoSi3X_L~DC{9!9(Meojio14nr4v||B/}zNej%_DT7I3RcbO(L$esMhN~@^]' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
