<?php function selisih($a, $b) {
    if ($a>=$b) {
        return $a-$b;
    } else {
        return $b-$a;
    }
}

echo selisih (14,12);