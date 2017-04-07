<?php
  $penger = array("3400", "3900", "2190", "4900");
  echo  $penger[0];
  for ($i=1; $i < count($penger); $i++) {
    echo "+". $penger[$i];
  }
  echo "=" . array_sum($penger);
  
 ?>
