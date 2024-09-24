<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'yudaiyam_temp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'yudaiyam');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'yuudai0727');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql57.yudaiyam.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+2%$){Z>u[Y8R(#1x*mcYwwlXrHt_@{B^}HJebzCar_-UZ}cTEd*w2VXyqGL*_I)');
define('SECURE_AUTH_KEY',  'r<k&A)8Y`j#~LV?f)g}?n%p!i4Kl0)h5r73%{x4CQ+8~>$oBkc_{] DxKt(z6c8>');
define('LOGGED_IN_KEY',    '~]j{m!kCk;*t8P#+^TWNgfIP <w{E`yy^tCG3&;q~hPLHsJDRyBKPoeD$5mFfKV[');
define('NONCE_KEY',        'B)]}=~{{_t>&E 3s2>#CNXdB=xamd$k]}.dp6>)~M/^bqcU;5:am{lT=9yJim)UT');
define('AUTH_SALT',        ')zQj`&wn<&}NiF_i}XfLNd6f-P$;wM^7-`k_xX1u~-Y3 )>JUUF,+(>7c[JtCFq-');
define('SECURE_AUTH_SALT', '51*Bt[G]ySTj(^t)4+V@*!DQKVnVLB;Ji~%q]o42apHd9#5WiU7Y/aPCR4l!O[Vz');
define('LOGGED_IN_SALT',   'Ltv[:cEdh_&+FK;]w-[iE(<w&]Y3WQTa_iB+xwP-no]^Xt9s1d{+0 >]4C/#Uu@V');
define('NONCE_SALT',       'tYV/`?`jb5)YPB5S?RSA@2Cv[B %nD>/xN*am^Te7|)YX[cUOg&{rZLKE0S_p9]&');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp445536';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
