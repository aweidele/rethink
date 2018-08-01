<?php
  $size = $row["acf_fc_layout"] == "one_column_row" ? "blog-image" : "column-image";
?>
              <div class="block_image">
                <figure class="block_image_figure">
                  <img src="<?=$col["image"]["sizes"][$size];?>" alt="<?=$col["image"]["alt"]?>">
                  <?php if($col["image"]["caption"]) { ?>
                  <figcaption><?=$col["image"]["caption"]?></figcaption>
                  <?php } ?>
                </figure>
              </div>
