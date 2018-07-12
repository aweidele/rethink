<?php
$background_image = get_field("background_image",$post->ID);
if($background_image) { ?>
  <div class="background_image" style="background-image: url(<?=$background_image["url"]?>)"></div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
