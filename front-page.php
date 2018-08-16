<?php
  get_header();
  $fields = get_fields();
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
    <?php if($content) { ?>
    <a href="#page_blocks" class="frontpage_scroll">Scroll Down</a>
    <?php } ?>
  </div>
  <?php
    if($fields["homepage_sections"]) { ?>
  <div id="page_blocks">

    <?php foreach($fields["homepage_sections"] as $section) { ?>
    <section class="frontpage_section bg_<?=$section["background_background_color"]?>">
      <div class="frontpage_section_inner">
        <?=wpautop($section["content"])?>
      </div>
    </section>
    <?php } ?>

  </div>
  <?php } ?>
<pre style="background: #FFF"><?php print_r($fields); ?></pre>
<?php
  endwhile; endif;
?>
</main>
<?php
  get_footer();
