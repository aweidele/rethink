<?php
  /* Template Name: Projects */
  get_header();
  $args = [
    "post_type" => "projects"
  ];
  $projects_query = new WP_Query($args);
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="project_listing">
<?php
    if($projects_query -> have_posts()) : while($projects_query -> have_posts()) : $projects_query -> the_post();
      $featured_image = get_field("featured_image");
?>
      <article class="project">
        <a href="<?=get_permalink()?>">
          <figure><img src="<?=$featured_image["sizes"]["project-listing"]?>"></figure>
          <h2><?php the_title(); ?></h2>
        </a>
      </article>

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
