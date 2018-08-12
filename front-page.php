<?php
  get_header();
?>
<main class="content_main">
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $content = get_field("content");
?>
  <div class="frontpage_wrapper">
    <div class="frontpage_inner">
      <div class="frontpage_content">
  <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php if($content) { ?>
  <div class="content_wrapper">
    <div class="content_medium">
      <section class="page_blocks">
        <?php
          foreach($content as $row) {
        ?>

          <div class="content_row <?=$row["acf_fc_layout"]?>">
            <?php include("callouts/col_".$row["acf_fc_layout"].".php"); ?>
          </div>

        <?php } ?>
      </section>
    </div>
  </div>
<?php
  }
  endwhile; endif;
?>
</main>
<?php
  get_footer();
