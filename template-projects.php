<?php
  /* Template Name: Projects */
  get_header();
  $args = [
    "post_type" => "projects",
    "orderby" => "menu_order"
  ];
  $projects_query = new WP_Query($args);
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="project_listing">
<?php
    if($projects_query -> have_posts()) : while($projects_query -> have_posts()) : $projects_query -> the_post();
      $featured_image = get_field("featured_image");
      $sub_heading = get_field("sub_heading");
?>
      <article class="project">
        <a href="<?=get_permalink()?>">
          <div class="project-title">
            <h2><?php the_title(); ?></h2>
            <?php if($sub_heading) { ?>
            <p><?=$sub_heading?></p>
            <?php } ?>
          </div>
          <figure><img src="<?=$featured_image["sizes"]["project-listing"]?>"></figure>
        </a>
      </article>

<?php
  endwhile; endif;
  wp_reset_query();
?>
    </div>
  </div>
</main>
<?php
  get_footer();

/*
https://wordpress.stackexchange.com/questions/231693/how-to-change-the-markup-wordpress-inserts-for-post-images
*/
