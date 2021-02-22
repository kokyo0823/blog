<?php
	// ヘッダー、フッターのカスタムメニュー化
	register_nav_menus(
		array(
			'place_global' => 'グローバル',
			'place_footer' => 'フッターナビ',
		)
		);

	// アーカイブページ
	function post_has_archive( $args, $post_type ) {
			if ( 'post' == $post_type ) {
					$args['rewrite'] = true;
					$args['has_archive'] = 'blog';
					$args['label'] = 'ブログ';

			}
			return $args;
	}
	add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

	?>
