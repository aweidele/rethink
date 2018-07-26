<?php
  get_header();
  $page_for_posts = get_option( 'page_for_posts' );
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="content_medium">
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $featured_image = get_field("featured_image");
?>
        <article class="project_single">
          <div class="project_featured_image">
            <figure>
              <img src="<?=$featured_image["sizes"]["blog-image"]?>">
            </figure>
          </div>
          <div class="project_content">
            <div class="project_content_main">
              <header>
                <h1><a href="<?=get_permalink()?>"><?php the_title(); ?></a></h1>
                <div class="project_subheading"><?= get_field("sub_heading")?></div>
              </header>
              <main>
                <?php the_content(); ?>
              </main>
            </div>
            <aside>
              Hello.
            </aside>
          </div>
        </article>
<?php endwhile; endif; ?>
    </div>
  </div>
</main>
<?php
  get_footer();

/*
https://wordpress.stackexchange.com/questions/231693/how-to-change-the-markup-wordpress-inserts-for-post-images
*/
