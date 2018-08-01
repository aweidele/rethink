<?php
  $column1 = $row["column_content"];
?>

            <div class="content_col"> 
              <?php foreach($column1 as $col) {
                include("block_".$col["acf_fc_layout"].".php");
              } ?>
            </div>
