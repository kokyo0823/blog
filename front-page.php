<?php get_header(); ?>
    <!-- ABOUT ME -->
    <div class="background" style="background-color: #f3f3f3">
    <div class="about">
      <a href="<?php echo get_template_directory_uri(); ?>/about/"><img src="<?php echo get_template_directory_uri(); ?>/img/about.jpeg" alt="about me"></a>
      <h2 class="about_text" style="font-weight: bold">ABOUT ME</h2>
    </div>

    <!-- 新着情報 -->
    <div class="news">
      <div class="news_title">
        <h2 class="news_title_ja">新着記事</h2>
        <p class="news_title_en">new</p>
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
          <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
						<img class="item_img" src="<?php echo get_template_directory_uri(); ?>/img/bg_about.jpg" alt="デフォルト画像">
					<?php endif ; ?>
          </a>
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
      <a class="p" href="<?php the_permalink(); ?>/blog/">More</a>
    </div>

    <!-- 人気の記事 -->
    <!-- <div class="popular">
      <div class="popular_title">
        <h2 class="popular_title_ja">人気記事</h2>
        <p class="popular_title_en">POPULAR</p>
      </div>
      <div class="popular_list">
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/eye.jpg" alt="アイキャッチ画像" class="item_img">
          <p class="item_genre">ジャンル</p>
          <p class="item_day">2021/01/01</p>
          <p class="item_title">ここにタイトルが入ります．</p>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/eye.jpg" alt="アイキャッチ画像" class="item_img">
          <p class="item_genre">ジャンル</p>
          <p class="item_day">2021/01/01</p>
          <p class="item_title">ここにタイトルが入ります．</p>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/eye.jpg" alt="アイキャッチ画像" class="item_img">
          <p class="item_genre">ジャンル</p>
          <p class="item_day">2021/01/01</p>
          <p class="item_title">ここにタイトルが入ります．</p>
        </div>
      </div>
      <div class="p">More</div>
    </div> -->

    <!-- カテゴリー一覧 -->
    <div class="category">
      <div class="category_title">
        <h2 class="category_title_ja">カテゴリー一覧</h2>
        <p class="category_title_en">CATEGORY</p>
      </div>
      <div class="category_list">
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cate.jpg" alt="アイキャッチ画像" class="item_img">
          <div class="item_genre">
            <p class="item_genre_ja">日常の不思議</p>
            <p class="item_genre_en">STRANGE</p>
          </div>
        </div>
        <a class="item" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cate.jpg" alt="アイキャッチ画像" class="item_img">
          <div class="item_genre">
            <p class="item_genre_ja">日常のコラム</p>
            <p class="item_genre_en">COLUMUN</p>
          </div>
        </a>
      </div>
    </div>
    </div>
  <?php get_footer(); ?>
