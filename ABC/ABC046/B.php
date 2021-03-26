<?php
  list($n,$k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $new_k = $k - 1;
  $new_n = $n - 1;
  $num = $new_k ** $new_n;
  
  echo $num * $k;