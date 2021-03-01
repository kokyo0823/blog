<?php get_header(); ?>

    <div class="news">
      <div class="news_title">
        <h2 class="news_title_ja">新着情報</h2>
        <p class="news_title_en">news</p>
      </div>
      <div class="news_list">

<!-- 新着記事表示 -->
<?php
$args = array(
'posts_per_page' => 14, // 表示件数の指定
);
$posts = get_posts( $args );
foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
?>

<!-- imgTextBox -->
      <div class="item hv">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <p class="item_genre"><?php the_category(',') ?></p>
        <p class="item_day"><?php the_time('Y.m.d') ?></p>
        <a href="<?php the_permalink(); ?>" class="item_title"><?php the_title(); ?></a>
      </div>
<!-- imgTextBox -->

<?php
endforeach; // ループの終了
wp_reset_postdata(); // 直前のクエリを復元する
?>
<!-- 新着記事表示 -->

    </div>


<?php get_footer(); ?>
