<?php
  $column1 = $row["column_1_content_column_content"];
  $column2 = $row["column_2_content_column_content"];
?>

            <div class="content_col">
              <?php foreach($column1 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
            <div class="content_col">
              <?php foreach($column2 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
