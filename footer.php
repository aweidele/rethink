<?php
if(is_home()) {
  $postID = get_option( 'page_for_posts' );
} else {
  $postID = $post->ID;
}
$background_image = get_field("background_image",$postID);
if($background_image) { ?>
  <div class="background_image" style="background-image: url(<?=$background_image["url"]?>)"></div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
