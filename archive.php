<?php get_header(); ?>

    <div class="pageList">
      <div class="pageList_title">
        <h2 class="pageList_title_ja">新着情報</h2>
        <p class="pageList_title_en">pageList</p>
      </div>
      <div class="pageList_list">

        <?php
        if (have_posts()):
          while(have_posts()) : the_post();
        ?>
        <div class="item">
          <img src="img/eye.jpg" alt="アイキャッチ画像" class="item_img">
          <p class="item_genre">ジャンル</p>
          <p class="item_day">2021/01/01</p>
          <p class="item_title">ここにタイトルが入ります．</p>
        </div>
        <?php
          endwhile;
        endif
        ?>

      </div>
      <div class="p">More</div>
    </div>

    <!-- ABOUT ME -->
    <div class="about">
      <a href="#"><img src="img/bg_about.jpg" alt="about me"></a>
      <h2 class="about_text">ABOUT ME</h2>
    </div>
  <?php get_footer(); ?>
