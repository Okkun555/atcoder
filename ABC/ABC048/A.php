<?php
$array = explode(' ', trim(fgets(STDIN)));
foreach ($array as $string) {
  echo $string[0];
}
