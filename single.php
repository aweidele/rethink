<?php
  get_header();
?>
<main class="content_main">
  <div class="content_wrapper">
    <div class="content_medium">
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $content = get_field("content");
?>
        <article class="news_post">
          <div class="block_text">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
            <section class="page_blocks">
            <?php
              foreach($content as $row) {
            ?>
              <div class="content_row <?=$row["acf_fc_layout"]?>">
                <?php include("callouts/col_".$row["acf_fc_layout"].".php"); ?>
              </div>
            <?php } ?>
          </section>
        </article>
<?php endwhile; endif; ?>
    </div>
  </div>
</main>
<?php
  get_footer();
