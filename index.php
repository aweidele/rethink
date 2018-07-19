<?php
  get_header();
  $page_for_posts = get_option( 'page_for_posts' );
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="content_medium">
        News.
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article class="news_post">
          <header>
            <h1><?php the_title(); ?></h1>
          </header>
          <main>
            <?php the_content(); ?>
          </main>
        </article>
<?php endwhile; endif; ?>
    </div>
  </div>
</main>
<?php
  get_footer();
