<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <div class="single">
    <h1 class="single_title"><?php the_title(); ?></h1>
    <div class="single_topArea">
      <div class="up">
        <p class="up_day"><?php the_time('Y-m-d'); ?></p>
        <div class="up_icons">
          <p>アイコン</p>
          <p>あいこん</p>
        </div>
      </div>
      <div class="breadcrumb">
        <p>ホーム＞シングルページ＞ここ</p>
      </div>
    </div>

    <div class="thumbnail" >
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="single_content">
      <?php the_content(); ?>
    </div>
  </div>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
