<?php get_header(); ?>

    <div class="news">
      <div class="news_title">
        <h2 class="news_title_ja">新着情報</h2>
        <p class="news_title_en">news</p>
      </div>
      <div class="news_list">

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $the_query = new WP_Query( array(
      'post_status' => 'publish',
      'post_type' => 'post', //ページの種類（例、page、post、カスタム投稿タイプ）
      'paged' => $paged,
      'posts_per_page' => 3, // 表示件数
      'orderby'     => 'date',
      'order' => 'DESC'
  ) );
  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
?>

        <div class="item">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <p class="item_genre"><?php the_category(',') ?></p>
          <p class="item_day"><?php the_time('Y.m.d') ?></p>
          <a href="<?php the_permalink(); ?>" class="item_title"><?php the_title(); ?></a>
        </div>

        <?php
            endwhile;
        else:
            echo '<div><p>ありません。</p></div>';
        endif;
        ?>

      </div>
    </div>

<?php wp_pagenavi(array('query' => $the_query)); ?>

  <?php get_footer(); ?>
