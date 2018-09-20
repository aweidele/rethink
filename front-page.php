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
    <?php if($fields["homepage_sections"]) { ?>
    <a href="#page_blocks" class="frontpage_scroll">
      <svg id="arrow_down" data-name="arrow_down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68.36 37.18"><path d="M34.18,37.18a3,3,0,0,1-2.12-.88L.88,5.12A3,3,0,0,1,5.12.88L34.18,29.94,63.24.88a3,3,0,0,1,4.24,4.24L36.3,36.3A3,3,0,0,1,34.18,37.18Z"/></svg>
      <span>Scroll Down</span>
    </a>
    <?php } ?>
  </div>
  <?php
    if($fields["homepage_sections"]) { ?>
  <div id="page_blocks">

    <?php foreach($fields["homepage_sections"] as $section) { ?>
    <section class="frontpage_section bg_<?=$section["background_background_color"]?>">
      <div class="frontpage_section_inner">
        <?php if($section["acf_fc_layout"] == "two-column_content_block") { ?>
        <div class="frontpage_section_inner_col">
          <?=wpautop($section["left_column"])?>
        </div>
        <div class="frontpage_section_inner_col">
          <?=wpautop($section["right_column"])?>
        </div>
        <?php } else { ?>
        <div class="frontpage_section_inner_col">
        <?=wpautop($section["content"])?>
        </div>
        <?php } ?>
      </div>
    </section>
    <?php } ?>

  </div>
  <?php } ?>
<?php
  endwhile; endif;
?>
</main>
<?php
  get_footer();
