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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wp_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
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
define( 'AUTH_KEY',         'D&M!b=0,4yZ$gMc+~fK yaZ]`oC=b?>o8kd7hl=w7mNZrkY$AT:cvzy3eF00&MTZ' );
define( 'SECURE_AUTH_KEY',  'u#p[`k+{kWhk#M!XfA|k]=2L3Wl2M10>+@v+ydxnzIE4{f_3om0[9r#wojN&2jKB' );
define( 'LOGGED_IN_KEY',    'EHA<R72d?,2fInRO<hx9sb*1^(_dO}GryJ-0-8SxbDPCG4<,WN3imGIDO#4LMqXE' );
define( 'NONCE_KEY',        'p~=HrQZSwV1BK#/N..otF ^jqK`Bp=Q]UzB*PelNg]SGY+bWHLcwqIV/9VGB8!WG' );
define( 'AUTH_SALT',        'WiENdSLPGd-ht YB:{YpW[q,C~%#t*7?9:E[Wlu<st].xI]5!1=5q[!*H}H..rHx' );
define( 'SECURE_AUTH_SALT', '{j!lFzc$nI8JDT5Iv#9k{>WKf|s-X@S,s18~X`zmOF?4k)(toDs_CG|L&pV(MhSN' );
define( 'LOGGED_IN_SALT',   '%U8<pUHFb@j_gBL*v%Z$N0ae2JMQ,V2(H:dt>P,fO#{mw#[hrlq8w[:8(ehe4#l5' );
define( 'NONCE_SALT',       '%-BxR LwEw-+G7EmWVM6k}wuX8HhAEamVB:s41IsgKKFY8u&<bs.<93$2T.n&V,w' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
