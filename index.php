<?php
  get_header();
  $page_for_posts = get_option( 'page_for_posts' );
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="content_medium">
        <div class="news_title">News</div>
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $excerpt = get_field("excerpt");
?>
        <article class="news_post">
          <header>
            <h1><a href="<?=get_permalink()?>"><?php the_title(); ?></a></h1>
            <p class="news_date"><?php the_date("Y.m.d"); ?></p>
          </header>
          <main>
            <?php
            if($excerpt) {
              echo wpautop($excerpt);
              echo "\n".'<p><a href="'.get_permalink().'" class="readmore">Read More</a></p>'."\n";
            } else {
              the_content();
            }
            ?>
          </main>
        </article>
<?php endwhile; endif; ?>
        <div class="news_pagination">
          <?php the_posts_pagination([
            "prev_text" => "<span>Previous</span>",
            "next_text" => "<span>Next</span>"
          ]); ?>
        </div>
    </div>
  </div>
</main>
<?php
  get_footer();

/*
https://wordpress.stackexchange.com/questions/231693/how-to-change-the-markup-wordpress-inserts-for-post-images
https://themify.me/docs/custom-excerpt
*/
