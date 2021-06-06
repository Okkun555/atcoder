<?php
list($width, $height, $count) = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = 0; $i < $count; $i++) {
  list($x, $y, $a) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  switch ($a) {
    case 1:
      $width -= $x;
      break;
    case 2:
      $width = $x;
      break;
    case 3:
      $height -= $y;
      break;
    case 4:
      $height = $y;
      break;
  }
}

echo $height * $width;
