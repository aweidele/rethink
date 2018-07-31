<?php
  $column1 = $row["column_content"];
?>

            <h2>One Column</h2>
            <div class="content_col full">
              <h3>Column 1</h3>
              <?php foreach($column1 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
