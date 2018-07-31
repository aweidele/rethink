<?php
  $column1 = $row["column_1_content_column_content"];
  $column2 = $row["column_2_content_column_content"];
?>

            <h2>Two Column</h2>
            <div class="content_col">
              <h3>Column 1</h3>
              <?php foreach($column1 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
            <div class="content_col">
              <h3>Column 2</h3>
              <?php foreach($column2 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
