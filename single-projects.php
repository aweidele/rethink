<?php
  get_header();
  $page_for_posts = get_option( 'page_for_posts' );
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="content_medium">
      <a href="<?=get_permalink(11)?>" class="project_close"><span>Back To Projects</span></a>
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $featured_image = get_field("featured_image");
    $content = get_field("content");
?>
        <article class="project_single">
        <?php
          foreach($content as $row) {
        ?>
          <div class="content_row <?=$row["acf_fc_layout"]?>">
            <?php include("callouts/col_".$row["acf_fc_layout"].".php"); ?>
          </div>
        <?php } ?>
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
