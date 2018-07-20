<?php
  /* Template Name: Projects */
  get_header();
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="projects">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <!-- <article class="news_post">
          <header>
            <h1><a href="<?=get_permalink()?>"><?php the_title(); ?></a></h1>
            <p class="news_date"><?php the_date("Y.m.d"); ?></p>
          </header>
          <main>
            <?php the_content(); ?>
          </main>
        </article> -->
<?php endwhile; endif; ?>
    </div>
  </div>
</main>
<?php
  get_footer();

/*
https://wordpress.stackexchange.com/questions/231693/how-to-change-the-markup-wordpress-inserts-for-post-images
*/
