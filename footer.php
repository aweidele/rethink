<?php
if(is_home() || get_post_type() == "post" || get_post_type() == "projects") {
  $postID = get_option( 'page_for_posts' );
} else {
  $postID = $post->ID;
}
$background_image = get_field("background_image",$postID);
if($background_image) {
  $backgrounds = [
    'full' => $background_image["url"],
    'mobile' => $background_image["sizes"]["background-mobile"]
  ];
?>
  <div class="background_image" style="background-image: url(<?=$background_image["url"]?>)" data-background='<?=json_encode($backgrounds,JSON_HEX_QUOT)?>'></div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
