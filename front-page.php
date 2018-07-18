<?php
  get_header();
?>
<main class="content_main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="frontpage_content">
    <div class="frontpage_inner">
<?php the_content(); ?>
    </div>
  </div>
<?php endwhile; endif; ?>
</main>
<?php
  get_footer();
