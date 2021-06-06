<?php
$array = array_map('intval', explode(' ', trim(fgets(STDIN))));
sort($array);

echo $array[2] === $array[0] + $array[1] ? 'Yes' : 'No';
