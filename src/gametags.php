<?php
foreach ($gameTags as $gt)
  echo('<label><input type="checkbox" class="gametag" name="gametag[]" value="'.$gt['id'].'">'.$gt['tags'].'</label><br/>');
?>
