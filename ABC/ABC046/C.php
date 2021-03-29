<?php
$n = (int)trim(fgets(STDIN));

list($tc, $ac) = array_map('intval', explode(' ', trim(fgets(STDIN))));
for ($i = 1; $i < $n; $i++) {
  list($t, $a) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $m1 = intdiv($tc + $t - 1, $t);
  $m2 = intdiv($ac + $a - 1, $a);
  $tc = $t * max($m1, $m2);
  $ac = $a * max($m1, $m2);
}

echo $tc + $ac;
