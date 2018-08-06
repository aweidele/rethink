<?php
  $size = $row["acf_fc_layout"] == "one_column_row" ? "blog-image" : "column-image";
  $options = [
    "loop" => true,
    "margin" => 20,
    "responsive" => [
        0 => [
          "items" => 1
        ],
        768 => [
          "items" => $col["carousel_options"]["items"]
        ]
    ]
  ];

  $options["dots"] = $col["carousel_options"]["dots"] ? true : false;
  $options["nav"] = $col["carousel_options"]["nav"] ? true : false;
?>

              <div class="block_carousel">
                <div class="carousel owl-carousel owl-theme" data-options='<?=json_encode($options)?>'>
                  <?php foreach($col["carousel"] as $slide) { ?>
                    <figure class="carousel_figure">
                      <img src="<?=$slide["sizes"][$size]?>">
                    </figure>
                  <?php } ?>
                </div>
              </div>
