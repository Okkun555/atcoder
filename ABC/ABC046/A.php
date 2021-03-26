<?php
$input = array_map('intval', explode(' ', trim(fgets(STDIN))));
$check_array = array_count_values($input);

echo count($check_array);