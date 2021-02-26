<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <div class="single">
    <h1 class="single_title"><?php the_title(); ?></h1>

    <div class="thumbnail" >
      <?php the_post_thumbnail(); ?>
    </div>

    <div class="single_content">
      <?php the_content(); ?>
    </div>
  </div>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
